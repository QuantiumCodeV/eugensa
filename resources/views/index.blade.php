<html lang="en">

<head>
  <style type="text/css" id="pseudoClass">
    .top-header:before {
      display: block;
      right: 77.5px;
    }

    .top-header:after {
      display: block;
      width: 91.5px;
    }
  </style>
</head>

<body id="page-418" class="rwd_design">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link
    rel="icon"
    href="https://www.schrack.com/_assets/e3d6a9be731934855a3322e244edc0c7/Images/favicon.ico"
    type="image/vnd.microsoft.icon" />
  <title>Tarptautinis</title>
  <link
    rel="stylesheet"
    href="{{ asset('assets/646ec0f14c64c7b595ba1a151229bdb2.css') }}"
    media="all" />
  <link
    rel="stylesheet"
    href="{{ asset('assets/4f524e92_allPacked.css') }}"
    media="all" />

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <style type="text/css" id="pseudoClass">
    .top-header:before {
      display: block;
      right: 77.5px;
    }

    .top-header:after {
      display: block;
      width: 91.5px;
    }
  </style>

  <header>

    <div class="container">
      <div class="row">
        <div
          class="col-xs-6 col-sm-6 col-md-5 padR0 header_menu_logo_container_left">
          <div id="mega-menu-border-top print-hide" style="height: 3px"></div>
          <div
            id="mega-menu-border-left print-hide"
            style="width: 1px; height: 28px; float: left; margin-right: 10px"></div>
          <div class="menuBar">
            <button type="button">
              <span class="sr-only">Perjungti navigaciją</span>
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div id="megaMenuCaptionTxt" class="paddingL7 blueTxt">Meniu</div>
          </div>
          <div class="logoCont logo_cont_typo" style="display: block">
            <a href="#" title="Grįžti į pagrindinį puslapį"><img
                src="{{ asset('assets/image.png') }}"
                width="160"
                height="35"
                alt="EugenSA Technik GmbH, Viena"
                class="loading"
                data-was-processed="true" /></a>
          </div>
        </div>
        <div
          class="col-xs-6 col-sm-6 col-md-7 header_menu_links_container_right print-hide">

          <div
            id="siteMessageWarning"
            class="alert alert-danger"
            style="
                display: none;
                position: absolute;
                margin-top: 40px;
                margin-left: -164px;
                z-index: 9999;
              "></div>
        </div>
      </div>
    </div>
  </header>

  <div class="top-navigation-container">
    <div class="top-navigation-wrapper">
      <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/megamenu.phtml (start) -->
      <div class="navbar navbar-megamenu" role="navigation">
        <!-- Mega Menu Container (start) -->
        <div class="mainNav bottom-header" id="mainNav">
          <div id="navigationEnvelope" class="navigation_envelope">
            <div id="closeMobileMainLayer" class="closeMobileMainLayer">
              ×
            </div>
            <img
              id="imageMobileMainLayer"
              class="imageMobileMainLayer"
              src="./index_files/schrack-logo(1).png" />
            <div
              id="top_nav_products"
              class="top_navigation_first top_navigation_main top_navigation_main_20"
              data-target="layer_1">
              <div
                class="backfiller_left"
                style="background: #d2d2d2"></div>
              <nav class="top_navigation_item top_navigation_item_first">
                <span class="top_navigation_item_text">Parduotuvė</span>
              </nav>
            </div>




            <div
              id="top_nav_1_typo"
              class="top_navigation_main top_navigation_main_20 typo_top_nav"
              data-target="layer_2">
              <nav
                class="top_navigation_item top_navigation_item_alternate typo_type">
                <span class="top_navigation_item_text">Žinios</span>
              </nav>
            </div>
            <div
              id="top_nav_2_typo"
              class="top_navigation_main top_navigation_main_20 typo_top_nav"
              data-target="layer_3">
              <nav
                class="top_navigation_item top_navigation_item_alternate typo_type">
                <span class="top_navigation_item_text">Įrankiai</span>
              </nav>
            </div>
            <a
              href="#"
              >
                <div
                  id="sales_button"
                  class="top_navigation_main top_navigation_main_20 typo_top_nav"
                >
                  <nav
                    class="top_navigation_item top_navigation_item_alternate typo_type"
                  >
                    <span class="top_navigation_item_text" style="color: red"
                      >IŠPARDAVIMAS %</span
                    >
                  </nav>
                </div></a
              >
              <div
                id="quick_add_button_menu"
                class="top_navigation_main top_navigation_main_20"
                data-toggle="modal"
                data-target="#quickaddpopup"
              >
                <div
                  class="backfiller_right"
                  style="background: #d2d2d2"
                ></div>
                <nav
                  class="top_navigation_item top_navigation_item_alternate top_navigation_item_quickadd"
                  style="background: #d2d2d2"
                >
                  <span class="top_navigation_item_text">Greitas pridėjimas</span>
                </nav>
              </div>
            </div>
            <!-- Content fetched by AJAX (header.phtml -> MenuController.php) -->
          </div>
          <!-- Mega Menu Container (end) -->
        </div>
        <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/megamenu.phtml (end) -->
      </div>
    </div>
  
    <div class="container">
      <div class="searchContiner clearfix hide-for-print">
        
        <div class="tx-solr-searchbox">
          <form
            class="search-wrapper clearfix"
            id="search_mini_form"
            action="{{ route('search.results') }}"
            method="get"
          >
            <div class="input-group">
              <span
                id="id-scan-button"
                style="display: none"
                class="input-group-addon"
                onclick="openPopupAndScan('scanpopup_scandit',scanResultHandler)"
                ><span class="glyphicon glyphicon-barcode"></span
              ></span>
              <div
                class="input-group-btn hidden-lg hidden-md hidden-xs hidden-sm"
              >
                <button
                  type="button"
                  id="allSrchCat"
                  class="btn btn-secondary dropdown-toggle hidden-lg hidden-md hidden-xs hidden-sm"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Visos kategorijos
                </button>
                <ul class="dropdown-menu" id="searchDropdownBox" name="cat">
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Visos kategorijos"
                    catid=""
                  >
                    Visos
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Korpusai ir skirstymo skydai"
                    catid="4853939"
                  >
                    Korpusai ir skirstymo skydai
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Skirstymo skydo įranga (MCB, RCCB, SPD, MCCB, Gnybtai, Saugiklių medžiaga)"
                    catid="4854509"
                  >
                    Skirstymo skydo įranga (MCB, RCCB, SPD, MCCB, Gnybtai, Saugiklių medžiaga)
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Valdymo technologija"
                    catid="4855089"
                  >
                    Valdymo technologija
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Pastatų technologija, KNX ir vidaus ryšio sistemos"
                    catid="4855595"
                  >
                    Pastatų technologija, KNX ir vidaus ryšio sistemos
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Avarinis apšvietimas, UPS, CO ir reaktyviosios galios kompensavimas"
                    catid="4855931"
                  >
                    Avarinis apšvietimas, UPS, CO ir reaktyviosios galios kompensavimas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Tinklo technologija ir serverių patalpos įranga"
                    catid="4856042"
                  >
                    Tinklo technologija ir serverių patalpos įranga
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Montavimas ir tvirtinimas"
                    catid="4856815"
                  >
                    Montavimas ir tvirtinimas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Kabeliai ir laidai"
                    catid="4856964"
                  >
                    Kabeliai ir laidai
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Apšvietimo technologija"
                    catid="5365724"
                  >
                    Apšvietimo technologija
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Fotovoltinės sistemos ir saugojimas"
                    catid="4860149"
                  >
                    Fotovoltinės sistemos ir saugojimas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Elektromobilumas"
                    catid="4860181"
                  >
                    Elektromobilumas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Katalogai"
                    catid="4860184"
                  >
                    Katalogai
                  </li>
                </ul>
              </div>
              <input
                id="search"
                type="text"
                name="q"
                value=""
                class="form-control"
                autocomplete="off"
                placeholder="Ieškoti: Visos kategorijos"
              />
              <div id="empty_searchbar_sign" style="display: none">✖</div>
              <div id="empty_searchbar_sign" style="display: none">✖</div>
              <input type="hidden" name="cat" id="selSrchHidden" value="" />
              <span id="srchiconclickshop" class="input-group-addon"
                ><span class="glyphicon glyphicon-search"></span
              ></span>
              
              <div
                id="search_autocomplete"
                class="search-autocomplete searchAutocompleteBx"
                style="display: none"
              ></div>
              <script type="text/javascript">
    var searchInput = document.getElementById('search');
    var searchButton = document.getElementById('srchiconclickshop');

    searchInput.addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            searchButton.click();
        }
    });

    searchButton.addEventListener('click', function() {
        window.location.href = "{{ route('search.results') }}?q=" + encodeURIComponent(searchInput.value);
    });
</script>
            </div>
          </form>
        </div>
        <button
          id="quick_add_button"
          type="button"
          class="btn btn-quickAdd"
          data-toggle="modal"
          data-target="#quickaddpopup"
        >
          Greitas pridėjimas +
        </button>
      </div>

      

    </div>
    <!-- Search Box End -->
    
    <!--Main Contant Start-->
    <div class="container frontpage_rwd">
      <div id="content"></div>
      <!--Main Banner Start-->

      <div class="slideshow-wrapper hide-for-print">
        <div class="sliderBigImage">
          <div class="bx-wrapper" style="max-width: 100%">
            <div
              class="bx-viewport"
              aria-live="polite"
              style="
                width: 100%;
                overflow: hidden;
                position: relative;
                height: 278px;
              "
            >
              <ul class="bxslider help" style="width: auto; position: relative">
                
             
                <li
                  data-track="button"
                  aria-hidden="false"
                  style="
                    float: none;
                    list-style: none;
                    position: absolute;
                    width: 1230px;
                    z-index: 50;
                    display: list-item;
                  "
                >
                  <a
                    href="#"
                    target="_blank"
                    data-type="file"
                  >
                    <img
                      data-caption=""
                      data-promotion_name="Main_Teaser_Power_Distribution_2.jpg"
                      data-promotion_id="Power Distribution Catalogue"
                      data-creative_name="Big Banner Startseiten Karrusell"
                      data-creative_slot="4"
                      width="1230"
                      height="278"
                      alt="More Information"
                      src="{{ asset('assets/slide1.jpg') }}"
                      data-was-processed="true"
                    />
                    
                  </a>
                </li>

              </ul>
            </div>
       
          </div>
        </div>
      </div>

      <!--Main Banner End-->

      <!--New Launches section Start-->
      <!--TYPO3SEARCH_begin-->
      <section class="inner">
        <!--<h2>New Launches</h2>-->

        <div
          id="c217078"
          class="frame frame-default frame-type-list frame-layout-0"
        >
          <header>
            <div>
              <div>
                <h2 class="headline b1">
                  Perkamiausios prekės
                  <a
                    class="anchor-link"
                    href="#"
                    aria-label="Perkamiausių prekių nuoroda"
                  ></a>
                </h2>
              </div>
            </div>
          </header>

          <div class="tx_solr">
            <section class="inner solrSlider" id="solr-slider-529" style="">
              <div class="bx-wrapper" style="max-width: 1050px">
                <div
                  class="bx-viewport"
                  aria-live="polite"
                  style="
                    width: 100%;
                    overflow: hidden;
                    position: relative;
                    height: 360px;
                  "
                >
                  <ul
                    class="productSlider solrProdCont"
                    id="solr-slider-list-529"
                    style="width: 21215%; position: relative; left: 0px"
                  >
                    @foreach ($products as $product)
                    <li
                      class="slide product-details productSliderList"
                      aria-hidden="false"
                      style="
                        float: left;
                        list-style: none;
                        position: relative;
                        width: 210px;
                      "
                    >
                      <div class="imgBox other-actions product_BC034403--">
                        <div>{{ $product->unique_identifier }}</div>
                        <div class="wishListDropdown lgtGray">
                          <div
                            class="glyphicon glyphicon-pushpin pin-icon"
                            data-toggle="dropdown"
                          ></div>
                          
                        </div>
                        <div class="img-container"></div>
                        <a
                          class="previewImageHover"
                          data-preview-path="{{$product->photo }}"
                          title="Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V"
                          ><img
                            class="lazy productImage loaded"
                            src="{{$product->photo }}"
                            alt="Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V"
                            title="Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V"
                            data-was-processed="true"
                        /></a>
                      </div>
                      <div class="productName">
                        <a
                          >{{ $product->name }}</a
                        >
                      </div>
                      <div class="price price_BC034403--">
                        EUR
                        <span class="general_current_price">{{ $product->price }}</span>/1
                        pc
                      </div>
                      <div
                        style="display: hidden"
                        id="BC034403--"
                        data-tracking-enabled="enabled"
                        data-name="Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V"
                        data-category="87-02-01_03-03"
                        data-price=""
                        data-currencycode=""
                      ></div>
                      <div class="slider-cart" style="">
                        <div>
                          <input
                            type="number"
                            maxlength="12"
                            class="qty-BC034403--"
                            onkeydown="if (event.which === 13){orderItem('BC034403--',  'productSlider.solrProdCont', '', 'Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V', '87-02-01_03-03')}"
                          />
                        </div>
                        <div>
                          <button
                            class="addToCartButton"
                            onclick="orderItem('BC034403--',  'productSlider.solrProdCont', '', 'Residual current circuit breaker 40A, 4-p, 30mA, type A,G,V', '87-02-01_03-03')"
                          >
                            <img
                              class="addToCartImage loading"
                              src="{{ asset('assets/cartIconWht.png') }}"
                              data-was-processed="true"
                            />
                          </button>
                        </div>
                      </div>
                      <div
                        id="engeryLabelSet"
                        class="energyLabelSet"
                        style="
                          display: none;
                          order: 8;
                          justify-content: center;
                          margin-top: 5px;
                        "
                      >
                        <div
                          id="energyLable"
                          class="info-icon energyLabel"
                          data-toggle="modal"
                          data-target="#myModal_BC034403--"
                          style="
                            width: 43px;
                            border: solid 0px green;
                            display: flex;
                          "
                        >
                          <svg
                            viewBox="0 0 290 150"
                            style="width: 100%; height: auto"
                          >
                            <polygon
                              points="0,0 0,150 220,150 290,75 220,0"
                              style="
                                stroke-width: 1;
                                stroke: rgb(0, 0, 0);
                                fill: undefined;
                              "
                            ></polygon>
                            <rect
                              width="50"
                              height="148"
                              x="1"
                              y="1"
                              style="
                                fill: rgb(255, 255, 255);
                                stroke-width: 1;
                                stroke: rgb(0, 0, 0);
                              "
                            ></rect>
                            <text
                              x="9"
                              y="40"
                              style="
                                fill: black;
                                font-size: 35pt;
                                font-family: Arial;
                                font-weight: bold;
                              "
                            >
                              A
                            </text>
                            <polyline
                              points="26,50 40,75 30,68 30,95 23,95 23,68 13,75 26,50"
                              style="
                                fill: black;
                                stroke: black;
                                stroke-width: 1;
                              "
                            ></polyline>
                            <text
                              x="7"
                              y="142"
                              style="
                                fill: black;
                                font-size: 35pt;
                                font-family: Arial;
                                font-weight: bold;
                              "
                            >
                              G
                            </text>
                            <text
                              x="90"
                              y="120"
                              style="
                                fill: black;
                                font-size: 90pt;
                                font-family: Arial;
                                fill: rgb(255, 255, 255);
                                stroke-width: 1;
                                stroke: rgb(30, 30, 30);
                              "
                            >
                              neapibrėžta
                            </text>
                          </svg>
                        </div>
                        
                        
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="bx-controls bx-has-controls-direction">
                  <div class="bx-controls-direction">
                    <a class="bx-prev disabled" href="#"
                      >Ankstesnis</a
                    ><a class="bx-next" href="#">Kitas</a>
                  </div>
                </div>
              </div>
             
            </section>
          </div>
        </div>

        <div
          id="c217080"
          class="frame frame-default frame-type-text frame-layout-0"
        >
          <p class="bodytext">&nbsp;</p>
          <p class="bodytext">&nbsp;</p>
        </div>

        <div
          id="c217081"
          class="frame frame-default frame-type-text frame-layout-0"
        >
          <p class="bodytext">&nbsp;</p>
          <p class="bodytext">&nbsp;</p>
        </div>

        <div
          id="c217079"
          class="frame frame-default frame-type-list frame-layout-0"
        >
          <header>
            <div>
              <div>
                <h2 class="headline b1">
                  Mūsų akcentai
                  <a
                    class="anchor-link"
                    href="#"
                    aria-label="Nuoroda į Mūsų akcentus"
                  ></a>
                </h2>
              </div>
            </div>
          </header>

          <div class="tx_solr">
            <section class="inner solrSlider" id="solr-slider-245" style="">
              <div class="bx-wrapper" style="max-width: 1050px">
                <div
                  class="bx-viewport"
                  aria-live="polite"
                  style="
                    width: 100%;
                    overflow: hidden;
                    position: relative;
                    height: 360px;
                  "
                >
                  <ul
                    class="productSlider solrProdCont"
                    id="solr-slider-list-245"
                    style="width: 21215%; position: relative; left: 0px"
                  >
                    @foreach ($products as $product)
                    <li
                      class="slide product-details productSliderList"
                      aria-hidden="false"
                      style="
                        float: left;
                        list-style: none;
                        position: relative;
                        width: 210px;
                      "
                    >
                      <div class="imgBox other-actions product_EMCIONP2CE">
                        <div>{{ $product->unique_identifier }}</div>
                        <div class="wishListDropdown lgtGray">
                          <div
                            class="glyphicon glyphicon-pushpin pin-icon"
                            data-toggle="dropdown"
                          ></div>
                          
                        </div>
                        <div class="img-container"></div>
                        <a
                          class="previewImageHover"
                          title="i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP"
                          ><img
                            class="lazy productImage loaded"
                            src="{{$product->photo }}"
                            alt="i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP"
                            title="i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP"
                            data-was-processed="true"
                        /></a>
                      </div>
                      <div class="productName">
                        <a
                          >{{ $product->name }}</a
                        >
                      </div>
                      <div class="price price_EMCIONP2CE">
                        EUR
                        <span class="general_current_price">{{ $product->price }}</span>/1
                        vnt
                      </div>
                      <div
                        style="display: hidden"
                        id="EMCIONP2CE"
                        data-tracking-enabled="enabled"
                        data-name="i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP"
                        data-category="33-01_33-01-05-03"
                        data-price=""
                        data-currencycode=""
                      ></div>
                      <div class="slider-cart" style="">
                        <div>
                          <input
                            type="number"
                            maxlength="12"
                            class="qty-EMCIONP2CE"
                            onkeydown="if (event.which === 13){orderItem('EMCIONP2CE',  'productSlider.solrProdCont', '', 'i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP', '33-01_33-01-05-03')}"
                          />
                        </div>
                        <div>
                          <button
                            class="addToCartButton"
                            onclick="orderItem('EMCIONP2CE',  'productSlider.solrProdCont', '', 'i-CHARGE CION Pro 22kW Type2 Cable, Ethernet, OCPP', '33-01_33-01-05-03')"
                          >
                            <img
                              class="addToCartImage"
                              src="{{ asset('assets/cartIconWht.png') }}"
                            />
                          </button>
                        </div>
                      </div>
                      
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="bx-controls bx-has-controls-direction">
                  <div class="bx-controls-direction">
                    <a class="bx-prev disabled" 
                      >Ankstesnis</a
                    ><a class="bx-next" >Kitas</a>
                  </div>
                </div>
              </div>
            
            </section>
          </div>
        </div>

        <div
          id="c217085"
          class="frame frame-default frame-type-text frame-layout-0"
        >
          <p class="bodytext">&nbsp;</p>
          <p class="bodytext">&nbsp;</p>
        </div>

        <div id="c65319" class="">
          <div class="row servicesHPageCont marginT30">
            <div class="col-xs-6 col-sm-3">
              <div class="original-size" data-track="button">
                <a
                  href="#"
                  target="_blank"
                  data-type="file"
                >
                  <figure>
                    <img
                      class="image-original-size img-responsive loaded"
                      width="724"
                      height="750"
                      alt=""
                      src="{{asset('assets/catalogues.jpg')}}"
                      data-was-processed="true"
                    />
                  </figure>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="original-size" data-track="button">
                <a href="#" data-type="file">
                  <figure>
                    <img
                      class="image-original-size img-responsive loaded"
                      width="724"
                      height="750"
                      alt=""
                      src="{{asset('assets/digital tools.jpg')}}"
                      data-was-processed="true"
                    />
                  </figure>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div id="c65366" class="">
                <a href="#">
                  <img
                    class="img-responsive loaded"
                    width="725"
                    height="750"
                    src="{{asset('assets/service.jpg')}}"
                  />
                </a>

                <div class="actionTxt"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="original-size" data-track="button">
                <a href="#" data-type="file">
                  <figure>
                    <img
                      class="image-original-size img-responsive loaded"
                      width="724"
                      height="750"
                      alt=""
                     src="{{asset('assets/know-how.jpg')}}"
                      data-was-processed="true"
                    />
                  </figure>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div
          id="c217082"
          class="frame frame-default frame-type-text frame-layout-0"
        >
          <p class="bodytext">&nbsp;</p>
          <p class="bodytext">&nbsp;</p>
        </div>

       
      </section>
      <!--New Launches section End-->

     
      
    </div>
    <!--Main Contant End-->

    <footer class="hide-for-print">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-6 col1">
            <h2 class="hidden-xs headline b1">EugenSA Technik</h2>
            <nav>
              <ul>
                <li>
                  <a href="#" title="Įmonė"
                    >Įmonė</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    title="EugenSA Technik grupė"
                    >EugenSA Technik grupė</a
                  >
                </li>
                <li>
                  <a href="#" title="Kontaktai"
                    >Kontaktai</a
                  >
                </li>
                <li>
                  <a href="#" title="Visame pasaulyje"
                    >Visame pasaulyje</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    title="Bendrosios sąlygos"
                    >Bendrosios sąlygos</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    title="Duomenų apsauga"
                    >Duomenų apsauga</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    title="Bendrosios naudojimo sąlygos"
                    >Bendrosios naudojimo sąlygos</a
                  >
                </li>
                <li>
                  <a href="#" title="Redakcija"
                    >Redakcija</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    onclick="UC_UI.showSecondLayer(); return false;"
                    role="button"
                    >Slapukų nustatymai</a
                  >
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-4 col-sm-4 hidden-xs col2">
            <div
              id="c30133"
              class="frame frame-default frame-type-text frame-layout-0"
            >
              <header>
                <div>
                  <div>
                    <h2 class="headline b1">
                      Jūsų privalumai
                      <a
                        class="anchor-link"
                        href="#"
                        aria-label="Inkaras Jūsų privalumams"
                      ></a>
                    </h2>
                  </div>
                </div>
              </header>

              <ul class="rte-ul">
                <li>Išsami konsultavimo paslauga</li>
                <li>Greitas pristatymas</li>
                <li>Saugus mokėjimas</li>
                <li>Asmens duomenų apsauga</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 col3">
            <div
              id="c30138"
              class="frame frame-default frame-type-text frame-layout-0"
            >
              <header>
                <div>
                  <div>
                    <h2 class="headline b1">
                      Gaukite EugenSA naujienlaiškį dabar!
                      <a
                        class="anchor-link"
                        href="#"
                        aria-label="Inkaras Gaukite EugenSA naujienlaiškį dabar!"
                      ></a>
                    </h2>
                  </div>
                </div>
              </header>

              <p class="bodytext">
                Būkite informuoti - užsiprenumeruokite mūsų naujienlaiškį dabar ir niekada nepraleiskite mūsų naujausių nuolaidų ir akcijų
              </p>
              <p class="bodytext">
                <a
                  href="#"
                  class="button-small"
                  title="Tiesiog užsiregistruokite čia ir gaukite visą aktualią informaciją iš SCHRACK Technik"
                  data-type="file"
                  >UŽSIPRENUMERUOKITE ČIA<br
                /></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


  
    <style>
      html,
      body {
        max-width: 100% !important;
        overflow-x: hidden !important;
      }
      #product_longtext {
        margin-left: -232px;
        color: black;
        font-weight: bold;
      }
      .product_longtext_normalscale {
        margin-left: 0 !important;
      }
      #quickaddpopup {
        min-width: 300px;
      }
      #quickadd_sku {
        font-size: 16px !important;
      }
      #quickadd-sku-div {
        width: 47% !important;
      }
      #quickadd-qty-div {
        width: 47% !important;
      }
      #quickadd_qty {
        font-size: 16px !important;
      }
      #sku_found_okay {
        float: left;
        width: 3%;
        font-size: 1.1em;
        color: black;
        padding-top: 9px;
        margin-left: -8px;
        display: none;
      }
      #ean_equivalent {
        height: 20px;
        min-height: 20px;
        float: left;
        margin-left: 18px;
        margin-top: -4px;
        margin-bottom: 10px;
      }
      #wait_loader {
        position: absolute;
        width: 48px;
        height: 22px;
        z-index: 2;
        margin-top: -1px;
      }
      .checkout_show_act_as_a_customer_email_field {
        display: none;
        width: auto;
        z-index: 111;
      }
      #showActAsACustomerEmailField {
        height: 32px;
        margin-top: -13px;
        margin-bottom: 17px !important;
      }
      .quickadd-autocomplete {
        border: none;
      }
      #showActAsACustomerEmail {
        color: #e32c2c !important;
        font-weight: bold !important;
        padding: 5px !important;
        cursor: default !important;
      }
      .logout_act_as_customer {
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 7px;
        padding-right: 7px;
        background: #d1222b;
        color: #fff !important;
        font-size: 14px;
        margin-right: 0;
        border: none;
      }
      .quickadd_button_grey {
        background: grey !important;
      }
      .quickadd_button_grey:after {
        background: grey !important;
      }
      .quickadd_button_red {
        background: #d1222b !important;
      }
      .quickadd_button_red:after {
        background: #d1222b !important;
      }
      .html_sku_select_list_container {
        position: absolute;
        z-index: 1;
        background: white;
        margin-left: -1px;
        color: #888;
        margin-top: -11px;
        border: 1px solid #efefef;
      }
      .html_sku_select_list_row {
        height: 30px;
        padding-top: 3px;
        padding-left: 14px;
      }
      .html_sku_select_list_row:hover {
        background: black;
        color: white;
        cursor: pointer;
      }
      #empty_searchbar_sign {
        position: absolute;
        right: 58px;
        margin-top: 7px;
        z-index: 1000;
        font-size: 2em;
        cursor: pointer;
        display: none;
      }
      .header_partslist_caption_icon_typo {
        border: 1px solid #9f9f9f;
        border-radius: 25px;
        width: 42px;
        height: 42px;
        padding-top: 6px;
        padding-left: 10px;
        margin-top: 1px !important;
        margin-right: -18px !important;
      }
      .logo_cont_typo {
        margin-left: -8px !important;
      }
      .search-wrapper {
        margin-bottom: 0 !important;
      }

      @media (min-width: 1px) and (max-width: 320px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 10px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #empty_searchbar_sign {
          margin-top: 1px !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        .hamburgerMenuAlternateIphone5Typo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: -5px !important;
          margin-right: 5px !important;
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -21px;
          margin-top: -4px;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 110% !important;
        }
        .searchWrapperIphone5Typo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -16px !important;
          height: 72px !important;
          width: 112% !important;
        }
        .megaMenuCaptionTxtIphone5Typo {
          padding-left: 15px !important;
        }
        .megaMenuCaptionTxtIosTypo {
          text-align: center;
          margin-left: -8px !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_ios_typo {
          width: 38px !important;
          height: 38px !important;
          margin-top: -6px;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          margin-right: 7px !important;
          width: 71% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -25px !important;
          width: 145% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: -1px !important;
          width: 39px !important;
          height: 39px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .search_bar_boxIphone5Typo {
          width: 84% !important;
          margin-left: -9px !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }
      .headerActionsLayerContentRow1,
      .headerActionsLayerContentRow2,
      .headerActionsLayerContentRow3,
      .headerActionsLayerContentRow4,
      .headerActionsLayerContentRow5 {
        float: left;
        width: 100%;
      }
      .headerActionsLayerContentRow4 {
        margin-bottom: 10px;
        min-width: 285px;
      }

      .actAsCustomerListContainer,
      .actAsCustomerSearchbarContainer {
        float: left;
        width: 100%;
      }

      .actAsCustomerListContainer {
        margin-top: 10px;
      }

      #actAsCustomerSearchbarResultContainer {
        float: left;
        width: calc(100% - 2px);
        border: none;
        max-height: 265px;
        overflow: hidden;
        overflow-y: scroll;
      }

      #actAsCustomerSearchbarResultList {
        float: left;
      }

      #actAsCustomerSearchbarResultList.active {
        border: solid 1px #cdcdcd;
        padding: 5px;
      }

      #actAsCustomerSearchbarResultList li,
      #actAsCustomerFavouritesList li {
        float: left;
        width: 100%;
        margin: 0;
        list-style-type: none;
        line-height: 12pt;
        font-size: 12pt;
        border-bottom: solid 1px #bbbbbb;
        font-family: system-ui;
      }
      #actAsCustomerSearchbarResultList li:last-of-type,
      #actAsCustomerFavouritesList li:last-of-type {
        border: none;
      }

      #actAsCustomerSearchbarResultList li:hover,
      #actAsCustomerFavouritesList li:hover,
      #actAsCustomerSearchbarResultList li:hover .customerName,
      #actAsCustomerFavouritesList li:hover .customerName,
      #actAsCustomerSearchbarResultList li:hover .customerNr,
      #actAsCustomerFavouritesList li:hover .customerNr {
        cursor: pointer;
        color: black;
        background-color: #ececec;
      }

      #actAsCustomerSearchbarResultList li .customerIcon,
      #actAsCustomerFavouritesList li .customerIcon {
        float: left;
        width: 13px;
        height: 16px;
        margin: 0 3px;
        background-image: url(https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/dmmuuserImg.png);
        background-repeat: no-repeat;
        background-size: contain;
        opacity: 0.2;
      }

      #actAsCustomerSearchbarResultList li .myCustomerIcon,
      #actAsCustomerFavouritesList li .myCustomerIcon {
        float: left;
        width: 13px;
        height: 16px;
        margin: 0 3px;
        background-image: url(https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/icon-myaccount.png);
        background-repeat: no-repeat;
        background-size: contain;
        opacity: 1;
      }

      #actAsCustomerSearchbarResultList li .addressIcon,
      #actAsCustomerFavouritesList li .addressIcon {
        float: left;
        width: 13px;
        height: 16px;
        margin: 0 3px;
        background-image: url(https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/aac-house.png);
        background-repeat: no-repeat;
        background-size: contain;
        opacity: 0.2;
      }

      #actAsCustomerSearchbarResultList li .customerNr,
      #actAsCustomerFavouritesList li .customerNr {
        margin-right: 3px;
        font-weight: bold;
        font-size: 10pt;
        float: left;
        color: #bbbbbb;
      }

      #actAsCustomerSearchbarResultList li .customerName,
      #actAsCustomerFavouritesList li .customerName {
        display: inline-block;
        float: left;
        width: 178px;
        min-height: 32px;
        padding: 2px 5px;
        color: #757575;
        overflow: hidden;
        font-weight: 500;
      }

      #actAsCustomerFavouritesList li .removeFavouriteCustomer {
        float: left;
        width: 10%;
        min-height: 87px;
        padding-right: 3px;
        background-image: url(/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/tools/Bin.png);
        background-repeat: no-repeat;
        background-size: 15px 22px;
        opacity: 0.2;
        background-color: #cdcdcd;
        background-position: center center;
      }

      #actAsCustomerFavouritesList li .removeFavouriteCustomer:hover {
        opacity: 1;
      }

      #actAsCustomerSearchbarResultList li .addFavouriteCustomer,
      #actAsCustomerSearchbarResultList li .addFavouriteCustomerInactive {
        color: #757575;
        float: left;
        width: 10%;
        font-size: 20pt;
        font-weight: bold;
        display: block;
        opacity: 0.2;
        text-align: center;
        line-height: 65pt;
        background-color: #cdcdcd;
        user-select: none;
      }

      #actAsCustomerSearchbarResultList li .addFavouriteCustomerInactive {
        cursor: default;
      }

      #actAsCustomerSearchbarResultList li .addFavouriteCustomer:before {
        content: "+";
      }

      #actAsCustomerSearchbarResultList li .addFavouriteCustomer:hover {
        color: black;
        opacity: 1;
      }

      #actAsCustomerSearchbarResultList li #addAllFavouriteCustomer {
        width: 100%;
        font-size: 10pt;
        line-height: 24pt;
        border: solid 1px #5a5a5a;
        margin: 5px 0;
      }

      #actAsCustomerSearchbar {
        float: left;
        width: calc(100% - 34px);
        border: solid 1px #bdc1c2;
        line-height: 34px;
        padding: 0 6px;
        font-size: 12pt;
      }

      #actAsCustomerSearchbar::placeholder {
        font-size: 10pt;
      }

      #actAsCustomerSearchbar:focus-visible {
        outline: none;
        border-radius: 0;
        line-height: 32px;
        border: solid 2px black;
      }

      #actAsCustomerSearchbar.loading {
        /*border:solid 2px #01A3d9;*/
        border: solid 2px #80151a;
        /*border:solid 2px #e02307;*/
      }

      .aac_text_rows {
        float: left;
        width: 90%;
        padding: 5px 0;
      }

      .aacfl_firstRow,
      .aacfl_secondRow,
      .aacfl_thirdRow {
        float: left;
        width: 100%;
        margin-bottom: 3px;
      }
      .aacfl_firstRow {
        margin-bottom: 5px;
      }

      .aacfl_secondRow,
      .aacfl_thirdRow {
        font-size: 10pt;
        margin: 2px 0;
        padding-left: 3px;
      }

      .aacfl_secondRow {
        display: flex;
      }
      .aacfl_secondRow_c1,
      .aacfl_secondRow_c2,
      .aacfl_thirdRow_c1,
      .aacfl_thirdRow_c2 {
        float: left;
      }
      .aacfl_secondRow_c1,
      .aacfl_thirdRow_c1 {
        width: 24px;
      }

      .aac_headline,
      .aac_headline_L2 {
        font-family: "robotoregular";
        font-size: 16pt;
        margin-bottom: 10px;
        display: block;
        color: black;
        border-bottom: solid 1px #cdcdcd;
        margin-top: 5px;
      }
      .aac_headline_L2 {
        font-size: 12pt;
        margin-bottom: 2px;
        border-bottom: solid 0px #cdcdcd;
      }

      .aac_favouriteListFilter,
      .aac_favouriteListFilterSearch {
        float: left;
        width: 100%;
        border: solid 1px #cdcdcd;
        border-bottom: none;
        padding: 6px 0 4px 0;
        margin-bottom: 0;
        text-align: right;
        background-color: #ffffff;
        display: block;
      }

      .aac_favouriteListFilterLabel {
        font-weight: normal;
        user-select: none;
        cursor: pointer;
        font-size: 10pt;
        margin: 0 5px;
      }

      .aac_favouriteListFilterSearch {
        border: solid 1px #cdcdcd;
        padding: 6px 0 4px 0;
        border-bottom: none;
      }

      .ajaxSpinnerOverlayActAsCustomer,
      #aac_loadingSpinner {
        width: 14px;
        height: 14px;
        background-image: url(https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/download_ajax_loader.gif);
        background-repeat: no-repeat;
        background-size: contain;
      }

      .actAsCustomerMagnifierButton {
        text-align: center;
        float: left;
        color: #fff !important;
        background: black !important;
        padding: 10px 10px 6px 10px;
      }

      .actAsCustomerMagnifierButton.loading {
        /*background: #01A3d9 !important;*/
        background: #80151a !important;
        /*background: #e02307 !important;*/
      }

      .actAsCustomerList {
        float: left;
        width: 100%;
        border: solid 1px #bdc1c2;
        padding: 5px;
        max-height: 510px;
        overflow: hidden;
        overflow-y: scroll;
      }

      .aac_listentry_content_wrapper,
      .aac_listentry_actions_wrapper {
        float: left;
        width: 100%;
        padding: 5px 0;
      }
      .aac_listentry_actions_wrapper {
        display: none;
        row-gap: 5px;
        flex-wrap: wrap;
        /*opacity:0;*/
        background-color: rgba(255, 255, 255, 0.9);
        transition: all 0.5s ease;
      }

      .aac_listentry_actions_wrapper.active {
        display: flex;
        transition: all 0.5s ease;
        opacity: 0;
      }
      .aac_listentry_actions_headline {
        width: 100%;
        text-align: center;
        color: #757575;
      }
      .aac_listentry_actions_headline span {
        color: black;
        display: inline-block;
        padding: 5px 0;
        text-decoration: none;
        font-weight: bold;
      }

      .aac_login_abort,
      .aac_login {
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        width: calc(50% - 1px);
        line-height: 30pt;
      }

      .aac_login_abort:hover {
        background-color: rgba(157, 0, 0, 0.2);
        color: rgba(157, 0, 0, 1);
      }
      .aac_login:hover {
        background-color: rgba(0, 88, 157, 0.2);
        color: rgba(0, 88, 157, 1);
      }

      .aac_login_btn_sapcer {
        width: 0px;
        border-right: solid 1px #cdcdcd;
      }

      #actAsCustomerFavouritesList li.aac_no_fav_li {
        font-size: 10pt;
        font-weight: bold;
      }

      #aac_clearSearchbarIcon {
        display: none;
        float: left;
        margin-left: -23px;
        font-size: 12pt;
        font-weight: bold;
        line-height: 27pt;
        color: #cdcdcd;
        cursor: pointer;
      }

      #aac_clearSearchbarIcon:hover {
        color: black;
      }

      #Aac_AddFavouritesMsgWrapper .messages .success-msg {
        background: #d5ffcc;
        color: #00940f;
        border: 1px solid #00940f;
      }

      .show_ib {
        display: inline-block;
      }

      .show_flex {
        display: flex;
      }

      .show {
        display: block;
      }

      .show_ib {
        display: inline-block;
      }

      .show_flex {
        display: flex;
      }

      .show {
        display: block;
      }
      /*------------------------------------------------------------------------*/
      @media (min-width: 1px) and (max-width: 320px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 10px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #empty_searchbar_sign {
          margin-top: 1px !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        .hamburgerMenuAlternateIphone5Typo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: -5px !important;
          margin-right: 5px !important;
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -21px;
          margin-top: -4px;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 110% !important;
        }
        .searchWrapperIphone5Typo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -16px !important;
          height: 72px !important;
          width: 112% !important;
        }
        .megaMenuCaptionTxtIphone5Typo {
          padding-left: 15px !important;
        }
        .megaMenuCaptionTxtIosTypo {
          text-align: center;
          margin-left: -8px !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_ios_typo {
          width: 38px !important;
          height: 38px !important;
          margin-top: -6px;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          margin-right: 7px !important;
          width: 71% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -25px !important;
          width: 145% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: -1px !important;
          width: 39px !important;
          height: 39px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .search_bar_boxIphone5Typo {
          width: 84% !important;
          margin-left: -9px !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }
      @media (min-width: 321px) and (max-width: 360px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 10px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 36%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 4px !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -18px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
          padding-left: 6px;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -25px !important;
          width: 117% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: -1px !important;
          width: 39px !important;
          height: 39px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 361px) and (max-width: 410px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 10px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 36%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -18px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .scan_magnifier_barcode_ios_typo {
          width: 38px !important;
          height: 38px !important;
          margin-top: -6px;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          margin-right: 7px !important;
          width: 74% !important;
        }
        .megaMenuCaptionTxtIosTypo {
          text-align: center;
          margin-left: -7px !important;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -25px !important;
          width: 117% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: -1px !important;
          width: 39px !important;
          height: 39px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 411px) and (max-width: 460px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 11px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 36%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .megaMenuCaptionTxtIosTypo {
          margin-left: -7px !important;
          text-align: center !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 3px !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -18px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 8px;
          margin-top: -6px;
        }
        .scan_magnifier_barcode_ios_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 8px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 75% !important;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          width: 75% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -51px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 0 !important;
          width: 39px;
          height: 39px;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 461px) and (max-width: 480px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 0.8em !important;
        }
        #showActAsACustomerEmail {
          font-size: 11px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 36%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -18px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -25px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 0 !important;
          width: 39px;
          height: 39px;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }
      /* cookie banner mobile view button adjustment */
      @media (max-width: 500px) {
        .cookie-content .cookie-buttons {
          flex-wrap: wrap;
        }
        .cc-cookies a.cc-cookie-accept,
        .cc-cookies a.cc-cookie-decline {
          width: 100%;
          text-align: center;
          margin-right: 10px;
        }
      }

      @media (min-width: 481px) and (max-width: 560px) {
        #product_longtext {
          margin-left: -240px !important;
          font-size: 12px;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        #showActAsACustomerEmail {
          font-size: 12px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 73%;
          margin-left: -18px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 80% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -139px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 0 !important;
          width: 39px;
          height: 39px;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 561px) and (max-width: 639px) {
        #product_longtext {
          margin-left: -236px !important;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        #showActAsACustomerEmail {
          font-size: 14px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .megaMenuCaptionTxtIphone5Typo {
          padding-left: 15px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateIphone5Typo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: -7px !important;
          margin-right: -3px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 47% !important;
          margin-left: -18px;
          margin-top: 3px !important;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 109% !important;
        }
        .searchWrapperIphone5Typo {
          padding-left: 0 !important;
          padding-right: 10px !important;
          margin-left: -16px !important;
          height: 72px !important;
          width: 112% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 80% !important;
        }
        .search_bar_boxIphone5Typo {
          width: 88% !important;
          margin-left: -2px !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -152px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 0 !important;
          width: 39px;
          height: 39px;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 640px) and (max-width: 767px) {
        #product_longtext {
          margin-left: -236px !important;
        }
        #quickadd_addproduct_button {
          height: 30px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        #showActAsACustomerEmail {
          font-size: 14px !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 19px !important;
          margin-top: -2px !important;
          font-size: 0.8em !important;
        }
        .html_sku_select_list_container {
          width: 84%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.4em !important;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
          text-align: center;
          margin-left: -6px !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        .megaMenuCaptionTxtIosTypo {
          margin-left: -7px !important;
          text-align: center !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        .scan_magnifier_barcode_ios_typo {
          width: 39px !important;
          height: 39px !important;
          margin-left: 3px;
          margin-top: -5px;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          width: 86% !important;
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 47%;
          margin-left: -18px;
          margin-top: 2px;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: -15px !important;
          height: 72px !important;
          width: 105% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 5px;
          margin-top: -6px;
        }
        .searchbox_container_typo {
          width: 85.5% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
          padding-right: 39px;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -53% !important;
          width: 100% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 0 !important;
          width: 39px;
          height: 39px;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 40px !important;
          width: 40px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .logo_cont_typo {
          width: 86%;
        }
        #page_layer_logo_default_image {
          width: 80%;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 5px;
          padding-left: 8px;
        }
      }

      @media (min-width: 768px) and (max-width: 768px) {
        #product_longtext {
          margin-left: -236px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 23px !important;
          margin-top: -2px !important;
        }
        .html_sku_select_list_container {
          width: 89%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
        }
        .megaMenuCaptionTxtIosTypo {
          margin-left: -7px !important;
          text-align: center !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 94% !important;
          margin-left: 13px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          padding-top: 20px !important;
          margin-left: -1px !important;
          height: 92px !important;
          width: 100% !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 40px !important;
          height: 40px !important;
          margin-left: 7px;
          margin-top: -6px;
        }
        .scan_magnifier_barcode_ios_typo {
          width: 53px !important;
          height: 53px !important;
          margin-left: 7px;
          margin-top: -5px;
        }
        .searchbox_container_typo {
          width: 74% !important;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          width: 83.5% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 46px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -222px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 7px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 44px !important;
          width: 44px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 20px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 0 !important;
          padding-left: 0 !important;
        }
        .login_image_mobile_typo {
          margin-left: 11px !important;
          margin-top: 7px !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 6px;
          padding-left: 11px;
        }
      }

      @media (min-width: 769px) and (max-width: 992px) {
        #product_longtext {
          margin-left: -236px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 23px !important;
          margin-top: -2px !important;
        }
        .html_sku_select_list_container {
          width: 89%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        .hamburgerMenuAlternateTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-left: 2px !important;
          margin-right: 5px !important;
        }
        .megaMenuCaptionTxtTypo {
          font-size: 10px !important;
          padding-left: 11px !important;
        }
        .megaMenuCaptionTxtIosTypo {
          margin-left: -7px !important;
          text-align: center !important;
        }
        .hamburgerMenuAlternateIosTypo {
          display: block !important;
          margin-top: -3px !important;
          padding-bottom: 0 !important;
          margin-right: -15px !important;
          margin-left: -5px !important;
        }
        .hamburgerMenuAlternateButtonIosTypo {
        }
        .scan_magnifier_barcode_ios_typo {
          width: 53px !important;
          height: 53px !important;
          margin-left: 8px;
          margin-top: -5px;
        }
        .searchbox_container_ios_typo {
          margin-left: 10px !important;
          width: 83% !important;
        }
        #page_layer_logo_default_typo {
          margin-left: -11px !important;
          margin-top: 0 !important;
        }
        #page_layer_logo_default_image_typo {
          width: 85% !important;
          margin-left: 16px;
          margin-top: 0;
        }
        .searchWrapperTypo {
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: 0 !important;
          height: 86px !important;
          width: 100% !important;
          padding-top: 17px !important;
        }
        .id_scan_button_copy_typo {
          display: block !important;
          background: #f5f5f5 !important;
        }
        .scan_magnifier_barcode_typo {
          width: 54px !important;
          height: 54px !important;
          margin-left: 4px;
          margin-top: -5px;
        }
        .searchbox_container_typo {
          width: 83.5% !important;
        }
        .search_autocomplete_typo {
          width: 99.6% !important;
        }
        .customer_log_in_container_typo {
          border-radius: 20px !important;
          width: 40px !important;
          height: 40px !important;
        }
        .agent_info_head_typo {
          height: 40px !important;
          width: 40px !important;
          border-radius: 20px !important;
        }
        .header_menu_logo_container_left_typo {
          padding-left: 0 !important;
          width: 45% !important;
        }
        .header_menu_links_container_right_typo {
          width: 54.333333% !important;
        }
        .cart_icon_header_typo {
          width: 42px !important;
          margin-top: 3px !important;
        }
        .header_links_typo {
          margin-right: -221px !important;
          width: 115% !important;
        }
        .header_plcaption_icon_typo {
          margin-right: 2px !important;
        }
        .link_header_login_button_typo {
          background: transparent !important;
          height: 44px !important;
          width: 44px !important;
          border: 1px solid #9f9f9f !important;
          border-radius: 25px !important;
          overflow: hidden !important;
          box-shadow: none !important;
          padding-top: 2px !important;
          padding-left: 2px !important;
        }
        .header_partslist_caption_icon_typo {
          padding-top: 7px;
          padding-left: 10px;
        }
      }

      @media (min-width: 993px) and (max-width: 4000px) {
        #product_longtext {
          margin-left: -232px;
        }
        #showActAsACustomerEmailField {
          height: 32px;
          margin-top: -16px;
          margin-bottom: 17px !important;
          position: absolute;
          font-size: 12px !important;
        }
        .checkout_show_act_as_a_customer_email_field {
          position: absolute !important;
          left: 10px !important;
          top: 0 !important;
          font-size: 1em !important;
        }
        .logout_act_as_customer {
          display: inline-block !important;
          height: 23px !important;
          margin-top: -2px !important;
        }
        .html_sku_select_list_container {
          width: 89%;
        }
        #wait_loader {
          margin-left: 35%;
        }
        #empty_searchbar_sign {
          margin-top: 7px !important;
          font-size: 1.6em !important;
        }
      }

      @media screen and (orientation: landscape) {
        #quickadd-barcode-picker {
          width: 50% !important;
          height: auto;
        }
      }
      @media screen and (orientation: portrait) {
        #quickadd-barcode-picker {
          width: 75% !important;
          height: auto;
        }
      }
    </style>


  </body>
</html>