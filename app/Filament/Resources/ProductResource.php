<?php
// app/Filament/Resources/ProductResource.php
namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Товары';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('unique_identifier')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('photo')
                    ->nullable(),
                Forms\Components\Textarea::make('description')
                    ->nullable(),
                Forms\Components\Repeater::make('attribute_product')
                    ->label('Атрибуты')
                    ->schema([
                        Forms\Components\Select::make('attribute_id')
                            ->label('Выберите атрибут')
                            ->options(Attribute::all()->pluck('name', 'id'))
                            ->reactive()
                            ->afterStateUpdated(function (callable $set) {
                                $set('attribute_value_id', null);
                            }),

                        Forms\Components\Select::make('attribute_value_id')
                            ->label('Выберите значение')
                            ->options(function (callable $get) {
                                $attributeId = $get('attribute_id');
                                return AttributeValue::where('attribute_id', $attributeId)->pluck('value', 'id');
                            })
                            ->required(),
                    ])
                    ->columns(2)
                    ->createItemButtonLabel('Добавить атрибут')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('unique_identifier'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\ImageColumn::make('photo'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function create(CreateProduct $request)
    {
        DB::beginTransaction();

        try {
            Log::info('Создание продукта', $request->all());

            $product = Product::create($request->validated());

            // Логируем атрибуты
            $attributes = $request->input('attribute_product');
            Log::info('Атрибуты из запроса', $attributes);

            // Проверяем, есть ли атрибуты в запросе
            if ($request->has('attribute_product')) {
                foreach ($attributes as $attribute) {
                    // Убедитесь, что атрибут имеет значение
                    if (isset($attribute['attribute_value_id']) && $attribute['attribute_value_id'] !== null) {
                        Log::info('Добавление атрибута', ['product_id' => $product->id, 'attribute_value_id' => $attribute['attribute_value_id']]);
                        // Создаем запись в таблице attribute_product
                        $product->attributeProducts()->create([
                            'attribute_id' => $attribute['attribute_id'],
                            'attribute_value_id' => $attribute['attribute_value_id'],
                        ]);
                    } else {
                        Log::warning('Пропущен атрибут', $attribute);
                    }
                }
            }

            DB::commit();

            return redirect()->route('filament.resources.products.index')->with('success', 'Продукт успешно создан');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Ошибка при создании продукта', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Ошибка при создании продукта: ' . $e->getMessage());
        }
    }

    
}
