<!DOCTYPE html>
<!-- saved from url=(0064)https://www.schrack.com/shop/catalogsearch/result/?q=module&cat= -->
<html>


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/head.phtml (start) -->
  <meta http-equiv="X-UA-Compatible" content="IE=10,9" />

  <title>
    Paieškos rezultatai '{{ $query}}' - Internetinė parduotuvė - Schrack Technik International
  </title>
  </title>

  <link
    rel="shortcut icon"
    href="https://www.schrack.com/shop/skin/frontend/schrack/default/favicon.ico"
    type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <style>
    inpost-geowidget #shadow-root div,
    inpost-geowidget #shadow-root embed,
    inpost-geowidget #shadow-root iframe {
      border: none;
      height: calc(100% - 5px);
      width: 100%;
    }

    inpost-geowidget .mobile-above-map {
      display: none;
    }
  </style>

  <link
    rel="stylesheet"
    type="text/css"
    href="{{asset('assets/4f524e92_allPacked.css')}}"
    media="all" />
  <link
    rel="stylesheet"
    type="text/css"
    href="{{asset('assets/datatables.css')}}"
    media="all" />
  <link
    rel="stylesheet"
    type="text/css"
    href="{{asset('assets/styles.css')}}"
    media="all" />

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

<!-- app/design/frontend/schrack/schrackresponsive/template/page/1column.phtml (Globalwrapper)  -->

<body class="catalogsearch-result-index" id="tmpl-1column">
  <style>
    .poll_label {
      font-weight: normal !important;
    }

    #pollpopup_content {
      margin-left: 15px !important;
    }

    .poll_thanks_line {
      margin-left: 0;
    }

    .poll_thanks_line_content {
      float: left;
      width: 100%;
      color: black !important;
      font-weight: bold;
    }

    .poll_answer_textarea {
      width: 75% !important;
      resize: vertical !important;
    }

    .poll_question {
      color: black !important;
      font-size: 16px !important;
    }

    .poll_checkbox_label {
      font-weight: normal !important;
    }

    .container {
      display: block !important;
    }

    html,
    body {
      max-width: 100% !important;
      overflow-x: hidden !important;
      min-height: 100vh;
    }

    #page_layer_text_block_content {
      float: left;
      margin-left: 12px;
      margin-top: 7px;
      width: 90%;
      text-align: justify;
      color: black;
      font-size: 1.1em;
    }

    #page_layer_checkbox_block {
      color: black !important;
      font-size: 1em;
      font-weight: bold;
      padding-left: 4%;
      padding-top: 2%;
    }

    #page_layer_cancel_button_warning_text {
      display: none;
      margin-top: 20px;
      font-size: 1.2em;
      color: red;
      font-weight: bold;
      text-align: center;
    }

    #page_layer_user_terms_confirm_checkbox {
      float: left;
    }

    #page_layer_user_terms_confirm_checkbox_text {
      float: left;
      margin-left: 3px;
      margin-top: 2px;
    }

    button#close_poll_popup_right_lower_corner,
    button#close_poll_popup_right_lower_corner:after {
      background-color: #919191;
    }

    @media (min-width: 60px) and (max-width: 320px) {
      .modal-content {
        width: 99% !important;
      }

      #page_layer_container {
        margin-top: 3%;
        margin-left: 3%;
        width: 94%;
        height: auto;
        padding: 14px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 11%;
        height: 30px !important;
      }

      #page_layer_cancel_button {
        height: 30px !important;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 24%;
      }

      #page_layer_text_block_content {
        font-size: 0.8em;
      }

      #page_layer_checkbox_block {
        font-size: 0.8em;
      }

      #page_layer_actions_block {
        margin-top: 16px !important;
      }

      #page_layer_cancel_button_warning_text {
        display: none;
        margin-top: -109px;
        font-size: 0.9em;
        color: red;
        font-weight: bold;
        text-align: center;
      }

      #page_layer_cancel_warning_button_yes {
        height: 30px !important;
      }

      #page_layer_cancel_warning_button_no {
        height: 30px !important;
      }
    }

    @media (min-width: 321px) and (max-width: 480px) {
      .modal-content {
        width: 99% !important;
      }

      #page_layer_container {
        margin-top: 3%;
        margin-left: 3%;
        width: 94%;
        height: auto;
        padding: 14px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 11%;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 24%;
      }
    }

    @media (min-width: 481px) and (max-width: 768px) {
      .modal-content {
        width: 99% !important;
      }

      .inquiryPopup {
        width: 100% !important;
        margin-left: 0 !important;
      }

      #page_layer_container {
        margin-top: 3%;
        margin-left: 3%;
        width: 94%;
        height: auto;
        padding: 35px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 25%;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 30%;
      }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
      .modal-content {
        width: 99% !important;
      }

      #quickaddpopup .modal-dialog .modal-content {
        width: 600px !important;
      }

      .inquiryPopup {
        width: 120% !important;
        margin-left: -10% !important;
      }

      #page_layer_container {
        margin-top: 3%;
        margin-left: 3%;
        width: 94%;
        height: auto;
        padding: 35px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 25%;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 32%;
      }
    }

    @media (min-width: 1025px) and (max-width: 1370px) {
      .modal-content {
        width: 100% !important;
      }

      #quickaddpopup .modal-dialog .modal-content {
        width: 600px !important;
      }

      .inquiryPopup {
        width: 140% !important;
        margin-left: -17% !important;
      }

      #page_layer_container {
        margin-top: 5%;
        margin-left: 24%;
        width: 52%;
        height: auto;
        padding: 35px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 25%;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 30%;
      }
    }

    @media (min-width: 1371px) and (max-width: 3000px) {
      .modal-content {
        width: 100% !important;
      }

      #quickaddpopup .modal-dialog .modal-content {
        width: 600px !important;
      }

      .inquiryPopup {
        width: 140% !important;
        margin-left: -17% !important;
      }

      #page_layer_container {
        margin-top: 5%;
        margin-left: 24%;
        width: 52%;
        height: auto;
        padding: 35px;
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid #005b9f;
      }

      #page_layer_confirm_button {
        float: left;
        margin-left: 25%;
      }

      #page_layer_cancel_warning_button_yes {
        float: left;
        margin-left: 30%;
      }
    }

    #page_layer {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(143, 143, 143, 0.95);
      z-index: 99999999;
    }

    #page_layer_text_block {
      height: auto;
    }

    .pageLayerAgbConfirmCheckbox {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerAgbConfirmCheckboxWarning {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #ffb9af;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerAgbConfirmCheckboxConfirmed {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #afeeee;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerDataprotectionConfirmCheckbox {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
    }

    .pageLayerDataprotectionConfirmCheckboxWarning {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #ffb9af;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerDataprotectionConfirmCheckboxConfirmed {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #afeeee;
      padding-bottom: 2px;
      margin-bottom: 10px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerDSGVOConfirmCheckbox {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      padding-bottom: 2px;
      width: 90%;
    }

    .pageLayerDSGVOConfirmCheckboxWarning {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #ffb9af;
      padding-bottom: 2px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerDSGVOConfirmCheckboxConfirmed {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #afeeee;
      padding-bottom: 2px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerUserTermsConfirmCheckbox {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      padding-bottom: 2px;
      width: 90%;
    }

    .pageLayerUserTermsConfirmCheckboxWarning {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #ffb9af;
      padding-bottom: 2px;
      width: 90%;
      border-radius: 4px;
    }

    .pageLayerUserTermsConfirmCheckboxConfirmed {
      padding-left: 7px;
      padding-right: 7px;
      padding-top: 5px;
      background: #afeeee;
      padding-bottom: 2px;
      width: 90%;
      border-radius: 4px;
    }

    #page_layer_actions_block {
      margin-top: 31px;
    }

    #page_layer_cancel_button {
      float: left;
      margin-left: 20%;
    }

    #page_layer_cancel_warning_button_no {
      float: left;
      margin-left: 20%;
    }

    .clearBoth {
      clear: both;
    }

    .not_visible {
      display: none;
    }

    #page_layer_logo {
      float: right;
      margin-bottom: 9px;
    }

    #page_layer_logo_default {
      margin-left: 0;
      float: none;
      margin-top: 5px;
      box-sizing: border-box;
      display: block;
      line-height: 1.42857143;
      z-index: 100;
      cursor: pointer;
      position: absolute;
    }

    #headerPLCaptionIcon {
      border: 1px solid #9f9f9f;
      border-radius: 25px;
      width: 41px;
      height: 41px;
      padding-top: 6px;
      padding-left: 9px;
      margin-top: 1px !important;
    }

    /* Mobile Mega Menu Redesign 2019 */
    @media (min-width: 1px) and (max-width: 320px) {
      .lower_main_content {
        padding-right: 27px !important;
        padding-left: 26px !important;
      }

      #crtRtAction {
        padding-left: 10px !important;
      }

      #headerLinks {
        margin-right: -44px !important;
        margin-top: -2px;
      }

      #page_layer_logo_default {
        margin-left: -11px !important;
        margin-top: 0 !important;
      }

      #page_layer_logo_default_image {
        width: 70%;
        margin-left: 8px;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 0 !important;
        width: 38px;
        height: 38px;
        padding-top: 1px;
        padding-left: 6px;
      }

      .partlistBlueIcon {
        padding-top: 4px !important;
        padding-left: 8px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
        margin-left: -33px !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 7px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }

      .cart_icon_header {
        width: 40px !important;
      }
    }

    @media (min-width: 321px) and (max-width: 360px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -18px !important;
        width: 121% !important;
      }

      #page_layer_logo_default {
        margin-left: -11px !important;
        margin-top: 4px !important;
      }

      #page_layer_logo_default_image {
        width: 70%;
        margin-left: 4px;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 1px !important;
        width: 38px;
        height: 38px;
        padding-top: 2px;
        padding-left: 6px;
      }

      #link_header_login_button {
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

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 9px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }

      .cart_icon_header {
        width: 81% !important;
        margin-top: 3px !important;
      }
    }

    @media (min-width: 361px) and (max-width: 410px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      .my_account_image {
        float: left;
        padding: 0;
        width: 25px;
        margin-top: 5px;
        margin-left: 4px;
      }

      #my_account_text {
        float: left;
        color: black;
        font-size: 13px;
        font-weight: bold;
        margin-left: 10px;
        margin-top: 10px;
      }

      .my_logout_link_image {
        float: left;
        padding: 0;
        width: 25px;
        margin-top: 9px;
        margin-left: 7px;
      }

      #my_logout_text {
        float: left;
        color: black;
        font-size: 13px;
        font-weight: bold;
        margin-left: 12px;
        margin-top: 11px;
      }

      #headerLinks {
        margin-right: -12px !important;
        width: 118% !important;
      }

      #page_layer_logo_default {
        margin-left: 0 !important;
        margin-top: 0 !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #page_layer_logo_default_image {
        width: 116px !important;
        margin-left: -8px;
        margin-top: 1px;
      }

      #headerPLCaptionIcon {
        margin-right: 1px !important;
        width: 40px;
        height: 40px;
        padding-top: 4px;
        padding-left: 9px;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 55.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 7px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }

      .cart_icon_header {
        width: 81% !important;
      }
    }

    @media (min-width: 411px) and (max-width: 460px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -37px !important;
      }

      #page_layer_logo_default {
        margin-left: -11px !important;
        margin-top: 3px !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #page_layer_logo_default_image {
        width: 70%;
        margin-left: 4px;
      }

      #headerPLCaptionIcon {
        margin-right: 0 !important;
        width: 39px;
        height: 39px;
        padding-top: 2px;
        padding-left: 7px;
      }

      #link_header_login_button {
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

      .header_menu_links_container_right {
        /* width: 54.333333% !important; */
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 9px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }

      .cart_icon_header {
        width: 81% !important;
      }
    }

    @media (min-width: 461px) and (max-width: 480px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -13px !important;
      }

      #page_layer_logo_default {
        margin-left: 0 !important;
        margin-top: 0 !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 7px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 9px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }
    }

    @media (min-width: 481px) and (max-width: 560px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -13px !important;
      }

      #page_layer_logo_default {
        margin-left: 0 !important;
        margin-top: 0 !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 7px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 9px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }
    }

    @media (min-width: 561px) and (max-width: 639px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -13px !important;
      }

      #page_layer_logo_default {
        margin-left: 0 !important;
        margin-top: 0 !important;
      }

      #page_layer_logo_default_image {
        width: 48%;
        margin-left: -9px;
        margin-top: 4px !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 7px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 7px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }
    }

    @media (min-width: 640px) and (max-width: 767px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -13px !important;
      }

      #page_layer_logo_default {
        margin-left: 0 !important;
        margin-top: 0 !important;
      }

      #page_layer_logo_default_image {
        width: 47%;
        margin-left: -7px;
        margin-top: 2px;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 0 !important;
        width: 40px;
        height: 40px;
        padding-top: 5px;
        padding-left: 9px;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 40px !important;
        width: 40px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 7px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }
    }

    @media (min-width: 768px) and (max-width: 768px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: 18px !important;
      }

      #page_layer_logo_default {
        margin-left: 16px !important;
        margin-top: 0 !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 2px !important;
        padding-top: 3px !important;
        padding-left: 8px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 45px !important;
        width: 45px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 25px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 2px !important;
        padding-left: 2px !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 9px !important;
        margin-top: 5px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }

      .cart_icon_header {
        width: 45px !important;
        margin-top: 3px !important;
      }
    }

    @media (min-width: 769px) and (max-width: 992px) {
      .lower_main_content {
        padding-right: 32px !important;
      }

      #headerLinks {
        margin-right: -13px !important;
      }

      #page_layer_logo_default {
        margin-left: 13px !important;
        margin-top: 0 !important;
      }

      .header_menu_logo_container_left {
        padding-left: 0 !important;
        width: 44% !important;
      }

      #headerPLCaptionIcon {
        margin-right: 2px !important;
        padding-top: 3px !important;
        padding-left: 7px !important;
      }

      #link_header_login_button {
        background: transparent !important;
        height: 43px !important;
        width: 43px !important;
        border: 1px solid #9f9f9f !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: none !important;
        padding-top: 0 !important;
      }

      .header_menu_links_container_right {
        width: 54.333333% !important;
        margin-left: -8px !important;
      }

      #agentInfoHead {
        height: 40px !important;
        width: 40px !important;
        border-radius: 20px !important;
      }

      .partlistGrayIcon {
        font-size: 24px !important;
        margin-top: 3px !important;
      }

      #login_image_mobile {
        display: block !important;
        width: 21px !important;
        height: 28px !important;
        margin-left: 8px !important;
        margin-top: 6px !important;
      }

      #customerLogInContainer {
        border-radius: 20px !important;
        width: 40px !important;
        height: 40px !important;
      }
    }

    #testinfolayer {
      margin: 0;
      padding-left: 5px;
      padding-right: 5px;
      padding-bottom: 19px;
      position: absolute;
      top: 13px;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 4px solid red;
      z-index: 1000000000000000000000000000;
      color: red;
      font-weight: bold;
      background: yellow;
      font-size: 16px;
      opacity: 0.2;
      height: 25px;
    }

    #dsgvoLayerHeadline {
      font-size: 1.5em;
      color: #005b9f;
      text-align: center;
      font-weight: bold;
      text-decoration: underline;
      letter-spacing: 0.06em;
    }
  </style>


  <!--16weUbBzDpJ3yqt4--><!-- currentUrl = https://www.schrack.com/shop/catalogsearch/result/?q=module&amp;cat= -->

  <div id="global_wrapper_header" class="headerHgt">
    <header class="gradient main_header">
      <div id="global_wrapper" class="container">
        <div class="row">
          <div
            class="col-xs-6 col-sm-6 col-md-5 padR0 header_menu_logo_container_left">
            <div id="page_layer_logo_default">
              <a
                id="startpage"
                href="/"
                title="Schrack Technik internetinė parduotuvė">
                <img
                  id="page_layer_logo_default_image"
                  src="{{asset('assets/image.png')}}"
                  class="loading"
                  width="160px"
                  data-was-processed="true" />
              </a>
              <!--<a id="siteHeaderInfoIconLink" class="hidden-xs" href="javascript:void(0)" target="_blank" title="Schrack Technik"><span id="siteHeaderInfoIcon" class="glyphicon glyphicon-info-sign info-icon blueTxt" style="display:none;"></span></a>
				-->
            </div>
          </div>
          <div
            class="col-xs-6 col-sm-6 col-md-7 header_menu_links_container_right print-hide">
            <!-- app/design/frontend/schrack/schrackresponsive/template/page/template/links.phtml (pradžia) -->

            <style>
              #advisor_telephone_symbol {
                margin-top: -3px;
              }

              .advisor_panel {
                cursor: default;
              }

              .other_advisors_button {
                cursor: pointer !important;
                margin-top: 10px;
                margin-left: 2px;
                float: left;
                width: 128px;
                height: 32px;
                color: black;
                border: 1px solid #b0b0b0;
                font-size: 16px;
                font-family: robotoregular, Helvetica, Arial, Sans-Serif;
              }

              .logout_act_as_customer {
                height: 30px;
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

              .cart_icon_header {
                width: 42px;
                margin-top: 3px !important;
              }

              @media (min-width: 200px) and (max-width: 600px) {
                #showActAsACustomerEmailField {
                  margin-bottom: 11px !important;
                  font-size: 0.8em !important;
                }

                .logout_act_as_customer {
                  font-size: 0.8em !important;
                  height: 19px !important;
                }

                #advisor_telephone_symbol {
                  font-size: 2.6em;
                }
              }

              @media (min-width: 601px) and (max-width: 766px) {
                #showActAsACustomerEmailField {
                  margin-bottom: 11px !important;
                  font-size: 0.8em !important;
                }

                .logout_act_as_customer {
                  font-size: 0.8em !important;
                  height: 19px !important;
                }

                #advisor_telephone_symbol {
                  font-size: 2.6em;
                }
              }

              @media (min-width: 767px) and (max-width: 1024px) {
                #showActAsACustomerEmailField {
                  margin-bottom: 11px !important;
                  font-size: 1em !important;
                }

                .logout_act_as_customer {
                  font-size: 1em !important;
                  height: 19px !important;
                }

                #advisor_telephone_symbol {
                  font-size: 3.36em;
                }
              }

              @media (min-width: 1025px) and (max-width: 1119px) {
                #showActAsACustomerEmailField {
                  margin-bottom: 11px !important;
                  font-size: 1em !important;
                }

                #advisor_telephone_symbol {
                  font-size: 3.36em;
                }
              }

              @media (min-width: 1120px) and (max-width: 4000px) {
                #showActAsACustomerEmailField {
                  margin-bottom: 11px !important;
                  font-size: 1em !important;
                }

                #advisor_telephone_symbol {
                  font-size: 3.36em;
                }
              }

              .multiple_advisor_pic_container {
                float: left;
                width: 72px;
                margin: 10px 0 10px 10px;
              }

              .multiple_advisor_pic {
                border: 1px solid #d9d9d9;
                width: 100%;
                max-width: 100%;
                height: 105px;
              }

              .multiple_advisor_contact_data_container {
                float: left;
                width: 180px;
                margin: 10px;
              }

              .multiple_advisor_designation_data {
                display: block;
                color: black;
                font-size: 14px;
              }

              .multiple_advisor_contact_data {
                display: block;
                color: #7b7b7b;
                font-size: 14px;
                line-height: normal;
              }

              .multiple_advisor_name {
                display: block;
                color: black;
                font-size: 18px;
                line-height: 19px;
              }

              .advisor_phone_icon,
              .advisor_mobile_icon {
                display: inline-block;
                position: relative;
                width: 16px;
                height: 16px;
              }

              .advisor_mobile_icon {}
            </style>

            <div
              id="siteMessageWarning"
              class="alert alert-danger"
              style="
                  display: none;
                  position: absolute;
                  margin-top: 40px;
                  margin-left: -164px;
                  z-index: 9999;
                ">
              &nbsp;
            </div>
            <input
              type="hidden"
              id="links_phtml_uncached_timestamp"
              value="2024-10-20 13:03:03" />


          </div>
        </div>
      </div>
      <div id="messagebar_content"></div>
    </header>

    <style>
      .top-navigation-container-hide {
        display: none;
      }
    </style>

    <!-- Mega Menu load container (start) -->
    <div class="top-navigation-container">
      <div class="top-navigation-wrapper">
        <div class="navbar navbar-megamenu" role="navigation">
          <!-- Mega Menu Container (pradžia) -->
          <div class="mainNav bottom-header" id="mainNav">
            <div id="navigationEnvelope" class="navigation_envelope">

              <img
                id="imageMobileMainLayer"
                class="imageMobileMainLayer"
                src="{{asset('assets/schrack-logo.png')}}" />
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
                href="#">
                <div
                  id="sales_button"
                  class="top_navigation_main top_navigation_main_20 typo_top_nav">
                  <nav
                    class="top_navigation_item top_navigation_item_alternate typo_type">
                    <span class="top_navigation_item_text" style="color: red">IŠPARDAVIMAS %</span>
                  </nav>
                </div>
              </a>
              <div
                id="quick_add_button_menu"
                class="top_navigation_main top_navigation_main_20"
                data-toggle="modal"
                data-target="#quickaddpopup">
                <div
                  class="backfiller_right"
                  style="background: #d2d2d2"></div>
                <nav
                  class="top_navigation_item top_navigation_item_alternate top_navigation_item_quickadd">
                  <span class="top_navigation_item_text">Greitas pridėjimas</span>
                </nav>
              </div>
            </div>
            <!-- Turinys gaunamas per AJAX (header.phtml -> MenuController.php) -->
          </div>
          <!-- Mega Menu Container (pabaiga) -->
        </div>
      </div>
    </div>

    <!-- Mega Menu load container (end) -->

    <!-- poll modal start -->
    <!-- poll modal end -->

    <div class="container">
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalogsearch\form.mini.phtml (start) -->

      <style>
        html,
        body {
          max-width: 100% !important;
          overflow-x: hidden !important;
        }

        .hideImportant {
          display: none !important;
        }

        .overlay {
          background-color: #000;
          bottom: 0;
          display: none;
          left: 0;
          opacity: 0.5;
          filter: alpha(opacity=50);
          /* IE7 & 8 */
          position: fixed;
          right: 0;
          top: 0;
          z-index: 1002;
        }

        #showActAsACustomerEmailField {
          display: none;
          width: auto;
          z-index: 111;
        }

        #showActAsACustomerEmail {
          color: #e32c2c !important;
          font-weight: bold !important;
          padding: 5px !important;
          cursor: default !important;
        }

        #srchiconclickshop {
          background: black !important;
          color: #fff !important;
        }

        #megaMenuCaptionTxt {
          color: black !important;
        }

        @media screen and (orientation: landscape) {
          .scannerPopup {
            width: 45% !important;
            height: auto !important;
          }
        }

        @media screen and (orientation: portrait) {
          .scannerPopup {
            width: 65% !important;
            height: auto !important;
          }
        }

        .modal {
          text-align: center;
        }

        .modal::before {
          content: "";
          display: inline-block;
          height: 100%;
          margin-right: -4px;
          vertical-align: top;
        }

        .modal-dialog {
          display: inline-block;
          text-align: left;
          vertical-align: top;
        }

        .hamburgerMenuAlternate {
          width: 36px !important;
          z-index: 101 !important;
          margin-left: 0 !important;
          display: none !important;
          background: #f5f5f5;
        }

        #quick_add_button_alternate_container {
          display: none;
        }

        #quick_add_button_alternate {
          width: 100% !important;
          height: 47px !important;
          font-family: robotoregular, Helvetica, Arial, Sans-Serif !important;
          font-size: 18px !important;
          color: black !important;
          text-align: left !important;
          padding-left: 25px !important;
        }

        #quick_add_button_alternate_arrow {
          color: black !important;
          margin-right: 23px !important;
          margin-top: -10px !important;
          float: right !important;
          font-size: 30px !important;
          font-weight: bold !important;
        }

        #quick_add_container_alternate {
          display: none;
        }

        #scanpopup_scandit_alternate {
          display: none;
          z-index: 100000000000 !important;
          border: 1px solid grey !important;
          width: 80% !important;
          top: 14px !important;
          position: absolute !important;
          background: #fff !important;
          padding-top: 10px;
          padding-left: 20px !important;
          border-radius: 7px;
          box-sizing: border-box;
        }

        .scanpopup_scandit_alternate {
          height: 429px !important;
        }

        .scanpopup_scandit_alternate_message_open {
          height: 529px !important;
        }

        #close_quickadd_popup_alternate {
          float: right !important;
          margin-top: -7px !important;
          margin-right: 10px !important;
          margin-bottom: 10px !important;
        }

        #scanner_popup_alternate {
          width: 94% !important;
        }

        .scanner_popup_alternate {
          height: 298px !important;
        }

        .scanner_popup_alternate_message_open {
          height: 400px !important;
        }

        #scandit-barcode-picker-alternate {
          height: 284px !important;
        }

        #modal-label-headline-alternate {
          margin-bottom: 10px;
        }

        .search-wrapper {
          margin-bottom: 0 !important;
        }

        /* Mobile Mega Menu Redesign 2019 */
        @media (min-width: 1px) and (max-width: 320px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
            padding-left: 8px !important;
          }

          .minimized_rightcartnav {
            padding-right: 10px !important;
          }

          .otherActions {
            margin-left: -5px;
          }

          .quick_add_button_alternate_container {
            width: 104% !important;
            margin-left: -14px !important;
          }

          .quick_add_button_alternate_containerIos {
            width: 104% !important;
            margin-left: -14px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: -15px !important;
            margin-left: -5px !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          .searchWrapperIphone5 {
            width: 122% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
            margin-right: 0 !important;
          }

          .hamburgerMenuAlternateIphone5 {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: -15px !important;
            margin-left: -2px !important;
          }

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -8px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 9px !important;
            height: 40px !important;
            width: 68% !important;
          }

          .searchbox_containerIos {
            margin-left: 9px !important;
            height: 40px !important;
            width: 68% !important;
          }

          .search_bar_box {
            width: 103% !important;
          }

          .search_bar_boxIos {
            width: 103% !important;
          }

          .search_bar_boxIphone5 {
            width: 105% !important;
          }

          #crtLtItems {
            padding-left: 8px !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 46px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
            margin-left: 12px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
            margin-left: 8px !important;
            margin-top: 1px;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 22px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 18px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
            z-index: ;
          }
        }

        @media (min-width: 321px) and (max-width: 360px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 103.5% !important;
            margin-left: -14px !important;
          }

          .quick_add_button_alternate_containerIos {
            width: 103.5% !important;
            margin-left: -14px !important;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: -15px !important;
            margin-left: -5px !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            /* width: 100% !important; */
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
            height: 72px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 9px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 9px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 100% !important;
            margin-left: -3px !important;
          }

          .search_bar_boxIos {
            width: 100% !important;
            margin-left: -3px !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 46px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
            margin-left: 6px;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
            margin-left: 6px;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 361px) and (max-width: 410px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 111% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          .quick_add_button_alternate_containerIos {
            width: 104% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: -15px !important;
            margin-left: -5px !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 112% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
            margin-right: 0 !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 100% !important;
          }

          .search_bar_boxIos {
            width: 93% !important;
            margin-left: 6px !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 66px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
            margin-left: 14px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
            margin-left: -6px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: -8px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 411px) and (max-width: 460px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 103.5% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          .quick_add_button_alternate_containerIos {
            width: 103.5% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-left: 3px !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: -8px !important;
            margin-left: -5px !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 104% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -13px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 7px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 7px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 101% !important;
          }

          .search_bar_boxIos {
            width: 102% !important;
            margin-left: -3px;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 54px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
            margin-left: 6px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
            margin-left: 6px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: -8px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 461px) and (max-width: 480px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 103% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          .quick_add_button_alternate_containerIos {
            width: 111% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 100% !important;
          }

          .search_bar_boxIos {
            width: 100% !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 54px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: -8px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 481px) and (max-width: 560px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 103% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          .quick_add_button_alternate_containerIos {
            width: 111% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 100% !important;
          }

          .search_bar_boxIos {
            width: 100% !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 54px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: -8px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 561px) and (max-width: 639px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 103% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          .quick_add_button_alternate_containerIos {
            width: 103% !important;
            margin-left: -14px !important;
            margin-right: -14px;
          }

          #quick_add_button_alternate {
            padding-top: 11px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          .hamburgerMenuAlternateIphone5 {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-left: -7px !important;
            margin-right: -8px !important;
          }

          .searchWrapperIphone5 {
            width: 103% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
          }

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 103% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: 5px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 114% !important;
          }

          .search_bar_boxIos {
            width: 114% !important;
          }

          .search_bar_boxIphone5 {
            width: 123% !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 40px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: -8px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 25px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 640px) and (max-width: 767px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 102% !important;
            margin-left: -14px !important;
          }

          .quick_add_button_alternate_containerIos {
            width: 102% !important;
            margin-left: -14px !important;
          }

          #quick_add_button_alternate {
            padding-top: 12px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          #proceed_to_checkout_button {
            height: 30px;
            width: 185px;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-left: -2px !important;
          }

          .hamburgerMenuAlternateButtonIos {}

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 102% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -14px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 9px !important;
            height: 40px !important;
            width: 82% !important;
          }

          .searchbox_containerIos {
            margin-left: 9px !important;
            height: 40px !important;
            width: 82% !important;
          }

          .search_bar_box {
            width: 103.7% !important;
            margin-left: -5px !important;
          }

          .search_bar_boxIos {
            width: 102.5% !important;
            margin-left: -11px !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          #id-scan-button {
            margin-right: 40px !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 49px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 40px !important;
            height: 40px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 40px !important;
            height: 40px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 37px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 31px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 60px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 768px) and (max-width: 768px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            width: 104.6% !important;
            margin-left: -26px !important;
          }

          .quick_add_button_alternate_containerIos {
            width: 97.4% !important;
            margin-left: -1px !important;
          }

          #quick_add_button_alternate {
            height: 100% !important;
            padding-top: 14px !important;
            padding-bottom: 2px !important;
            padding-left: 57px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 6px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: 8px !important;
            margin-left: 3px !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: 6px !important;
            padding-bottom: 0 !important;
            margin-right: -23px !important;
            margin-left: 0 !important;
          }

          .hamburgerMenuAlternateButtonIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: 15px !important;
            margin-left: -1px !important;
          }

          #megaMenuCaptionTxt {
            font-size: 10px !important;
            text-align: center;
            margin-left: 0px !important;
          }

          .searchWrapper {
            width: 97.9% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -3px !important;
            height: 94px !important;
            padding-top: 20px !important;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 6px !important;
            height: 40px !important;
            width: 71% !important;
          }

          .searchbox_containerIos {
            margin-left: 6px !important;
            height: 40px !important;
            width: 71.6% !important;
          }

          .search_bar_box {
            width: 109% !important;
          }

          .search_bar_boxIos {
            width: 114% !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 55px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 53px !important;
            height: 53px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 53px !important;
            height: 53px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 54px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #editAreaAlternate {
            margin-left: 14px !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 48px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 769px) and (max-width: 992px) {
          #search {
            font-size: 16px !important;
          }

          .container {
            padding-right: 0 !important;
          }

          .quick_add_button_alternate_container {
            margin-left: -1px !important;
            margin-right: -46px !important;
            width: 100% !important;
          }

          .quick_add_button_alternate_containerIos {
            margin-left: -1px !important;
            margin-right: -46px !important;
            width: 100% !important;
          }

          #quick_add_button_alternate {
            height: 100% !important;
            padding-top: 13px !important;
            padding-bottom: 2px !important;
          }

          #quick_add_button_alternate_arrow_trigger {
            padding-top: 8px !important;
          }

          .hamburgerMenuAlternate {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: 6px !important;
          }

          .hamburgerMenuAlternateIos {
            display: block !important;
            margin-top: -3px !important;
            padding-bottom: 0 !important;
            margin-right: 6px !important;
            margin-left: -5px !important;
          }

          .hamburgerMenuAlternateButtonIos {
            margin-left: -3px !important;
          }

          #megaMenuCaptionTxt {
            font-size: 10px !important;
          }

          .searchWrapper {
            width: 100.32% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            padding-top: 18px !important;
            padding-bottom: 18px !important;
            margin-left: -2px;
          }

          #search_mini_form {
            height: 40px !important;
          }

          .searchbox_container {
            margin-left: 9px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .searchbox_containerIos {
            margin-left: -11px !important;
            height: 40px !important;
            width: 73% !important;
          }

          .search_bar_box {
            width: 110% !important;
          }

          .search_bar_boxIos {
            width: 115.5% !important;
          }

          .id_scan_button_orig {
            display: none !important;
          }

          .id_scan_button_copy {
            display: block !important;
            float: right !important;
            margin-right: 52px !important;
            padding: 0 !important;
            background: transparent !important;
          }

          .scan_magnifier_barcode {
            width: 53px !important;
            height: 53px !important;
          }

          .scan_magnifier_barcodeIos {
            width: 53px !important;
            height: 53px !important;
          }

          #quick_add_button {
            display: none !important;
          }

          #srchiconclickshop {
            background: #fff !important;
          }

          #srchiconclickshop_glyph {
            color: black !important;
          }

          #search_mini_form {
            width: 100% !important;
          }

          #scan_magnifier_barcode_and_cart {
            height: 40px !important;
          }

          #id_scan_button_quickadd_copy {
            display: block !important;
            float: right !important;
            margin-right: 50px !important;
            padding: 0 !important;
            background: transparent !important;
            width: 40px !important;
            vertical-align: middle !important;
            text-align: center !important;
            border: none !important;
            margin-top: -10px !important;
          }

          #quick_add_container_alternate {
            padding-left: 10px !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
          }

          #scanpopup_scandit_alternate {
            margin-left: 32px !important;
          }

          #product_quickadd_form {
            margin-left: 36px !important;
          }

          #search_autocomplete {
            width: 99.6% !important;
          }
        }

        @media (min-width: 993px) and (max-width: 4000px) {
          #search {
            font-size: 16px !important;
          }

          .hamburgerMenuAlternate {
            display: none !important;
          }

          .hamburgerMenuAlternateIos {
            display: none !important;
          }

          .id_scan_button_copy {
            display: none !important;
          }
        }
      </style>
      <input type="hidden" id="hide_show_alternate" value="down" />
      <input
        type="hidden"
        id="form_mini_phtml_uncached_timestamp"
        value="2024-10-20 13:03:03" />
      <div class="searchContiner clearfix hide-on-print searchWrapper">
        <div id="showActAsACustomerEmailField" style="display: none">
          <span id="showActAsACustomerEmail"></span>
        </div>
        <div
          id="hamburgerMenuAlternate"
          class="sandwichMenuQuadrant print-hide hamburgerMenuAlternate">
          <button id="hamburgerMenuAlternateButton" type="button">
            <span class="sr-only">Perjungti navigaciją</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span id="megaMenuCaptionTxt">Meniu</span>
          </button>
        </div>
        <div
          id="searchbox_container"
          class="tx-solr-searchbox searchbox_container">
          <form
            class="search-wrapper clearfix"
            id="search_mini_form"
            action="https://www.schrack.com/shop/catalogsearch/result/"
            method="get">
            <div id="search_bar_box" class="input-group search_bar_box">
              <span
                id="id-scan-button"
                style="display: none"
                class="input-group-addon id_scan_button_orig"
                onclick="openPopupAndScan(&#39;scanpopup_scandit&#39;,scanResultHandler)">
                <span class="glyphicon glyphicon-barcode"></span>
              </span>
              <div
                class="input-group-btn hidden-lg hidden-md hidden-xs hidden-sm">
                <!--  hidden-lg hidden-md hidden-xs hidden-sm -->
                <button
                  type="button"
                  id="allSrchCat"
                  class="btn btn-secondary dropdown-toggle hidden-lg hidden-md hidden-xs hidden-sm"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  Visos kategorijos
                </button>
                <ul class="dropdown-menu" id="searchDropdownBox" name="cat">
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Visos kategorijos"
                    catid="">
                    Visos
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Korpusai ir skirstymo skydai"
                    catid="4853939">
                    Korpusai ir skirstymo skydai
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Skirstymo skydo įranga (MCB, RCCB, SPD, MCCB, Gnybtai, Saugiklių medžiagos)"
                    catid="4854509">
                    Skirstymo skydo įranga (MCB, RCCB, SPD, MCCB, Gnybtai, Saugiklių medžiagos)
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Valdymo technologija"
                    catid="4855089">
                    Valdymo technologija
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Pastatų technologija, KNX ir vidaus ryšio sistemos"
                    catid="4855595">
                    Pastatų technologija, KNX ir vidaus ryšio sistemos
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Avarinis apšvietimas, UPS, CO ir reaktyviosios galios kompensavimas"
                    catid="4855931">
                    Avarinis apšvietimas, UPS, CO ir reaktyviosios galios kompensavimas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Tinklo technologija ir serverių patalpos įranga"
                    catid="4856042">
                    Tinklo technologija ir serverių patalpos įranga
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Montavimas ir instaliacija"
                    catid="4856815">
                    Montavimas ir instaliacija
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Kabeliai ir laidai"
                    catid="4856964">
                    Kabeliai ir laidai
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Apšvietimo technologija"
                    catid="5365724">
                    Apšvietimo technologija
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Fotovoltinės sistemos ir saugojimas"
                    catid="4860149">
                    Fotovoltinės sistemos ir saugojimas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Elektromobilumas"
                    catid="4860181">
                    Elektromobilumas
                  </li>
                  <li
                    class="dropdown-item"
                    onclick="assignCurrCat(this)"
                    value="Katalogai"
                    catid="4860184">
                    Katalogai
                  </li>
                </ul>
              </div>
              <input
                id="search"
                type="text"
                placeholder="Ieškoti: Visos kategorijos"
                name="q"
                value=""
                class="form-control nodefault"
                autocomplete="off" />
              <div id="empty_searchbar_sign" style="display: block">✖</div>
              <input type="hidden" name="cat" id="selSrchHidden" value="" />
              <span id="srchiconclickshop" class="input-group-addon">
                <span
                  id="srchiconclickshop_glyph"
                  class="glyphicon glyphicon-search"></span>
              </span>
            </div>
          </form>
        </div>
        <span
          id="id-scan-button-two"
          style="display: none"
          class="input-group-addon id_scan_button_copy">
          <img
            id="scan_magnifier_barcode"
            src="{{asset('assets/scan_magnifier_barcode.png')}}"
            class="scan_magnifier_barcode"
            alt="" />
        </span>
        <button
          id="quick_add_button"
          type="button"
          class="btn btn-quickAdd"
          data-toggle="modal"
          data-target="#quickaddpopup">
          Greitas pridėjimas +
        </button>
      </div>
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

      <div id="messagebar_form_mini_smartphone"></div>

      <div
        id="quick_add_button_alternate_container"
        class="quick_add_button_alternate_container">
        <div id="quick_add_button_alternate" class="btn-quickAdd">
          Greitas pridėjimas
          <span id="quick_add_button_alternate_arrow">
            <i
              id="quick_add_button_alternate_arrow_trigger"
              class="fa fa-angle-down"
              aria-hidden="true"></i>
          </span>
        </div>
        <div style="clear: both !important"></div>
      </div>

      <!-- scan modal scandit start -->
      <div
        class="modal fade"
        id="scanpopup_scandit"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog scannerPopup" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button
                data-dismiss="modal"
                aria-label="Close"
                id="close_scanner_popup_right_upper_corner"
                class="close"
                type="button">
                <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">Nuskaityti</h4>
            </div>
            <div class="modal-body">
              <div id="scandit-barcode-picker" class="scanner"></div>
              <div id="scandit-barcode-result" class="result-text"></div>
            </div>
            <div class="modal-footer">
              <button
                data-dismiss="modal"
                type="button"
                id="close_scanner_popup_right_lower_corner"
                class="btn btn-secondary">
                Uždaryti
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- scan modal scandit end -->

      <!-- scan non-modal scandit start -->
      <div
        id="scanpopup_scandit_alternate"
        tabindex="-1"
        class="scanpopup_scandit_alternate">
        <div
          id="scanner_popup_alternate"
          class="scannerPopup scanner_popup_alternate">
          <div>
            <div>
              <button
                type="button"
                class="close close_quickadd_popup_alternate"
                data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h4 id="modal-label-headline-alternate" class="modal-title">
                Greitas pridėjimas
              </h4>
            </div>
            <hr style="margin-top: 0" />
            <div id="quickadd_message"></div>
            <div>
              <div
                id="scandit-barcode-picker-alternate"
                class="scanner"></div>
              <div
                id="scandit-barcode-result-alternate"
                class="result-text"></div>
            </div>
          </div>
        </div>
        <hr style="margin-top: 59px" />
        <div>
          <button
            id="close_quickadd_popup_alternate"
            type="button"
            class="btn btn-secondary close_quickadd_popup_alternate">
            Uždaryti
          </button>
        </div>
      </div>
      <!-- scan non-modal scandit end -->
    </div>
  </div>

  <style>
    /* Mobile Mega Menu Redesign 2019 */
    @media (min-width: 1px) and (max-width: 320px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: -8px !important;
      }
    }

    @media (min-width: 321px) and (max-width: 360px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: 13px !important;
      }
    }

    @media (min-width: 361px) and (max-width: 639px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: 13px !important;
      }
    }

    @media (min-width: 640px) and (max-width: 767px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: -8px !important;
      }
    }

    @media (min-width: 768px) and (max-width: 768px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: -8px !important;
      }
    }

    @media (min-width: 769px) and (max-width: 992px) {
      #breadcrumbs {
        padding-right: 0 !important;
        padding-left: 0 !important;
        width: 103% !important;
        margin-left: -8px !important;
      }
    }
  </style>
  <div id="content-wrap" class="container">
    <div class="row">
      <div class="col-xs-12 breadcrumb_product_detail" id="breadcrumbs">
        <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/breadcrumbs.phtml (start) -->

        <style>
          #breadcrumb_block>li {
            font-size: 16px !important;
          }

          #breadcrumb_block>li.sale_red_breadcrumbitem {
            color: red;
            font-weight: bold;
          }

          #breadcrumb_block>li.sale_red_breadcrumbitem:before {
            padding: 0 5px;
            color: #7c7c7c;
            content: "\e258";
            font-family: 'Glyphicons Halflings';
            vertical-align: middle;
          }

          @media (min-width: 1px) and (max-width: 320px) {
            .breadcrumb_custom {
              margin-left: 8px !important;
            }

            .breadcrumb_my_account {
              margin-left: 8px !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 321px) and (max-width: 360px) {
            .breadcrumb_custom {
              width: 94% !important;
            }

            .breadcrumb_my_account {
              width: 104% !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 361px) and (max-width: 410px) {
            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 411px) and (max-width: 460px) {
            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 461px) and (max-width: 480px) {
            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 481px) and (max-width: 560px) {
            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 561px) and (max-width: 639px) {
            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }

            #breadcrumb_block>li {
              font-size: 14px !important;
            }
          }

          @media (min-width: 640px) and (max-width: 700px) {
            .breadcrumb_custom {
              margin: 0 -14px 20px !important;
            }

            .breadcrumb_my_account {
              margin: 0 -14px 20px !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }
          }

          @media (min-width: 701px) and (max-width: 767px) {
            .breadcrumb_custom {
              margin: 0 -15px 20px !important;
            }

            .breadcrumb_my_account {
              margin: 0 -15px 20px !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }
          }

          @media (min-width: 768px) and (max-width: 768px) {
            .breadcrumb_custom {
              margin-bottom: 20px !important;
              width: 91.2% !important;
              margin-left: 20px !important;
            }

            .breadcrumb_my_account {
              margin-bottom: 20px !important;
              width: 98% !important;
              margin-left: -3px !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }
          }

          @media (min-width: 769px) and (max-width: 992px) {
            .breadcrumb_custom {
              width: 93.5% !important;
              margin-left: 22px !important;
            }

            .breadcrumb_my_account {
              width: 93.5% !important;
              margin-left: 22px !important;
            }

            .breadcrumb_product_detail {
              display: none !important;
            }

            .breadcrumb_category_search {
              display: none !important;
            }
          }
        </style>

        <div id="metaDescriptionData" hidden="">buy online at Schrack Technik » Delivery within 24 hours • on-site availability • professional advice • All infos!</div>
        <ul id="breadcrumb_block" property="breadcrumb" class="breadcrumb clearfix">
          <li class="home"><a href="https://www.schrack.com/shop/" title="Go to Home Page" class="clickable_breadcrumb_link">Home</a></li>
          <li class="category4856042"><a href="https://www.schrack.com/shop/network-technology-server-room-equipment.html" title="" class="clickable_breadcrumb_link">Network technology &amp; Server room equipment</a></li>
          <li class="category4856146"><a href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper.html" title="" class="clickable_breadcrumb_link">Networking Technology Copper</a></li>
          <li class="category5104224"><a href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular.html" title="" class="clickable_breadcrumb_link">S-JACK Cat.6a System Modular</a></li>
          <li class="category5365089"><a href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/datendosen.html" title="" class="clickable_breadcrumb_link">Datendosen</a></li>
          <li class="category5365092"><a href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/datendosen/s-jack-visio-module-insert-uae-design-for-one-or-two-s-jack-modules-without-centralplate-without-cover.html" title="" class="clickable_breadcrumb_link">S-JACK / VISIO Module insert UAE design for one or two S-JACK Modules without Centralplate, without Cover</a></li>
          <li class="product last"><strong>Module insert empty UAE Design 1/2 S-JACK modules, angled</strong></li>
          <ul>
            <script type="text/javascript">
              //<![CDATA[
              // set meta description in head
              let data = jQuery('#metaDescriptionData').text();
              jQuery('#metaDescriptionDataHead').attr('content', data);
              localStorage.metaDescriptionText = data;

              jQuery(document).ready(function() {
                refreshBreadcrumbOnSale(true);
                if (jQuery(window).width() < 993) {
                  jQuery('#breadcrumb_block').addClass('breadcrumb_custom');
                }

                jQuery('.clickable_breadcrumb_link').on('click', function() {
                  if (dataLayer && jQuery(this).text()) {
                    dataLayer.push({
                      'event': 'allNavigation',
                      'eventAction': 'Breadcrumb Navigation',
                      'eventLabel': jQuery(this).text()
                    });
                  }
                });
              });

              //]]>
            </script>
            <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/breadcrumbs.phtml (end) -->
          </ul>
        </ul>
      </div>
      <div id="content" class="col-xs-12 main-content lower_main_content">
        <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view.phtml (start) -->

        <style>
          .visio_sign {
            width: 12%;
            margin-left: 8px;
            margin-bottom: 7px;
          }

          @media (min-width: 1150px) {
            .instead_price {
              position: absolute;
              left: 40%;
              top: 0;
            }
          }

          @media (min-width: 992px) and (max-width: 1149px) {
            .instead_price {
              position: absolute;
              left: 50%;
              top: 0;
            }
          }

          @media (max-width: 991px) {
            .instead_price {
              display: none;
            }
          }

          /* > 908 */
          .instead_price {
            /* text-decoration: line-through red; */
            background: #eeeeee;
            color: black !important;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 110px;
          }

          .instead_price::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 3%;
            width: 94%;
            height: 1px;
            background: red;
            transform: rotate(-7deg);
          }

          .instead_price::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 3%;
            width: 94%;
            height: 1px;
            background: red;
            transform: rotate(7deg);
          }

          .trinity_sign {
            display: inline-block;
            vertical-align: top;
            border: 3px solid #555555;
            background: #555555;
            color: #fff;
            font-size: 10px;
            letter-spacing: 3px;
            line-height: 11px;
            margin-left: 15px;
            font-weight: 600 !important;
            padding-left: 8px;
            padding-right: 7px;
            padding-top: 1px;
            padding-bottom: 1px;
          }

          .vignette_sign {
            display: inline-block;
            vertical-align: top;
            border: 3px solid #d1222b;
            background: #d1222b;
            color: #fff;
            font-size: 10px;
            letter-spacing: 3px;
            line-height: 11px;
            margin-left: 15px;
            font-weight: 600 !important;
            padding-left: 8px;
            padding-right: 7px;
            padding-top: 1px;
            padding-bottom: 1px;
          }

          .promotion_sign {
            margin-left: 15px;
            position: absolute;
            top: -8px;
            height: 27px;
            width: 27px;
          }

          .cut_off_time_text,
          .cut_off_time_text_counter {
            font-size: 11pt;
          }

          .product-details .other-actions li a.replacing_product {
            background-color: #d1222b;
            color: #ffffff;
          }

          a.moreactions_replacing_product_link {
            background: #00589d;
            color: #fff;
          }

          a.moreactions_replacing_product_link span {
            color: #fff;
          }

          @media {
            ul.product-list-slide-list li span {
              font-size: 10px;
            }
          }


          @media (min-width: 60px) and (max-width: 320px) {
            .trinity_sign {
              float: left;
              margin-left: 0;
            }

            .vignette_sign {
              float: left;
              margin-left: 0;
            }

            .promotion_sign {
              width: 25px;
              height: 25px;
            }

            .product-sq {
              font-size: 16px;
              width: 185px;
            }

            .marker_sku_infoline_mobile {
              padding-left: 0;
              margin-left: -14px;
            }

            .marker_sku_infoline_desktop {
              display: none;
            }


            @media (min-width: 321px) and (max-width: 346px) {
              .trinity_sign {
                float: left;
                margin-left: 0;
              }

              .vignette_sign {
                float: left;
                margin-left: 0;
              }

              .promotion_sign {
                width: 25px;
                height: 25px;
              }

              .product-sq {
                font-size: 16px;
                width: 185px;
              }

              .marker_sku_infoline_mobile {
                padding-left: 0;
                margin-left: -14px;
              }

              .marker_sku_infoline_desktop {
                display: none;
              }
            }

            @media (min-width: 347px) and (max-width: 480px) {
              .trinity_sign {
                float: left;
                margin-left: 0;
              }

              .vignette_sign {
                margin-left: 0;
                float: left;
              }

              .promotion_sign {
                width: 25px;
                height: 25px;
              }

              .product-sq {
                font-size: 16px;
                width: 185px;
              }

              .marker_sku_infoline_mobile {
                padding-left: 0;
                margin-left: -14px;
              }

              .marker_sku_infoline_desktop {
                display: none;
              }
            }

            @media (min-width: 481px) and (max-width: 767px) {
              .trinity_sign {
                float: left;
                margin-left: 0;
              }

              .vignette_sign {
                float: left;
                margin-left: 0;
              }

              .promotion_sign {
                width: 25px;
                height: 25px;
              }

              .product-sq {
                font-size: 16px;
                width: 185px;
              }

              .marker_sku_infoline_mobile {
                padding-left: 0;
                margin-left: -14px;
              }

              .marker_sku_infoline_desktop {
                display: none;
              }
            }

            @media (min-width: 768px) and (max-width: 768px) {
              .trinity_sign {
                top: -470px;
                left: 1px;
              }

              .vignette_sign {}

              .marker_sku_infoline_mobile {
                display: none;
              }
            }

            @media (min-width: 769px) and (max-width: 1024px) {
              .marker_sku_infoline_mobile {
                display: none;
              }
            }

            @media (min-width: 1025px) and (max-width: 1370px) {
              .marker_sku_infoline_mobile {
                display: none;
              }
            }

            @media (min-width: 1371px) and (max-width: 1919px) {
              .marker_sku_infoline_mobile {
                display: none;
              }
            }

            @media (min-width: 1920px) and (max-width: 4000px) {
              .marker_sku_infoline_mobile {
                display: none;
              }
            }
        </style>

        <script type="text/javascript">
          // var PAGETYPE = 'DETAIL_VIEW';
          // localStorage.setItem('trackingData_pagetype', PAGETYPE);

          jQuery('#accessories_parlistdropdownbtn-' + "HSED02UMBV").on('click', function() {
            var sku = jQuery('relatedSkuHeader').text();
            jQuery('#accessories_parlistdropdown-' + sku).toggle();
          });

          //<![CDATA[
          var partslist = new ListRequestManager.List('https://www.schrack.com/shop/wishlist/partslist/');
          partslist.setProductAddUrl('https://www.schrack.com/shop/checkout/cart/addProductToPartslist/');
          var partslistFE = new ListRequestManager.Frontend(partslist, ListRequestManager.Product);

          var cart = new ListRequestManager.List('https://www.schrack.com/shop/checkout/cart/', true);
          var cartFE = new ListRequestManager.Frontend(cart, ListRequestManager.Product);

          var compare = new ListRequestManager.List('https://www.schrack.com/shop/catalog/product_compare/', true);
          var compareFE = new ListRequestManager.Frontend(compare, ListRequestManager.Product);

          jQuery(document).ready(function() {
            jQuery('select.dropdown-menu').dropdown({
              activateOnClick: false
            });

            if (typeof(window.matchMedia) !== 'undefined' && window.matchMedia('print').matches) {
              jQuery('#content-wrap > div.large-3').remove();
              jQuery('#content-wrap > div.content-container')
                .removeClass('large-9').addClass('large-12');
            }
          });

          //]]>
        </script>

        <!-- Collecting Google SEO Data (start) -->

        <div>
          <div itemtype="http://schema.org/Product" itemscope="">
            <meta itemprop="mpn" content="9004840595109">
            <meta itemprop="name" content="Module insert empty UAE Design 1/2 S-JACK modules, angled">
            <link itemprop="image" href="https://image.schrackcdn.com/340x380/f_hsed02umbvv12.jpg">
            <meta itemprop="description" content="Switchprogramme compatible. Compatible also to two TOOLLESS LINE SFB-modules.">
            <meta itemprop="sku" content="0446310786">
            <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope="">
              <link itemprop="url" href="https://www.schrack.com/shop/module-insert-empty-for-1-or-2-hsl-hsp-modules-angled-uae-hsed02umbv.html">
              <meta itemprop="availability" content="https://schema.org/InStock">
              <meta itemprop="priceCurrency" content="EUR">
              <meta itemprop="itemCondition" content="https://schema.org/UsedCondition">
              <meta itemprop="price" content="1.95">
              <meta itemprop="priceValidUntil" content="2024-10-24">
              <div itemprop="seller" itemtype="http://schema.org/Organization" itemscope="">
                <meta itemprop="name" content="Schrack">
              </div>
            </div>
            <div itemprop="brand" itemtype="http://schema.org/Thing" itemscope="">
              <meta itemprop="name" content="Schrack">
            </div>
          </div>
        </div>


        <!-- Collecting Google SEO Data (end) -->

        <div class="col-xs-12 product-detail">
          <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\hint.phtml (start) -->

          <style>
            .hint-msg {
              background: #EBF8FC;
              color: #01A3D9;
              border: 1px solid #01A3D9;
              padding: 11px 14px 11px;
            }
          </style>

          <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\hint.phtml (end) --> <!-- Product Details -->
          <div class="col-md-12 padLR0 product-details" id="product_HSED02UMBV">
            <form class="" action="https://www.schrack.com/shop/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2NocmFjay5jb20vc2hvcC9uZXR3b3JrLXRlY2hub2xvZ3ktc2VydmVyLXJvb20tZXF1aXBtZW50L25ldHdvcmtpbmctdGVjaG5vbG9neS1jb3BwZXIvcy1qYWNrLWNhdC02YS1zeXN0ZW0tbW9kdWxhci9kYXRlbmRvc2VuL3MtamFjay12aXNpby1tb2R1bGUtaW5zZXJ0LXVhZS1kZXNpZ24tZm9yLW9uZS1vci10d28tcy1qYWNrLW1vZHVsZXMtd2l0aG91dC1jZW50cmFscGxhdGUtd2l0aG91dC1jb3Zlci9tb2R1bGUtaW5zZXJ0LWVtcHR5LWZvci0xLW8uaHRtbA,,/product/61276/form_key/XWDrviVZ1KV1rAfm/" method="post" name="product_addtocart_form" id="product_addtocart_form">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 product-name name-mobile">
                  Module insert empty UAE Design 1/2 S-JACK modules, angled<br>
                  <div class="gray small long-text-addition">
                    Switchprogramme compatible. Compatible also to two TOOLLESS LINE SFB-modules. </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 marker_sku_infoline_mobile">
                <div class="product-sq">
                  Article #: <span>HSED02UMBV</span>
                  <span class="sale_mark sale-btn hide"></span>
                  <input type="hidden" id="schrack_hersteller" value="Schrack">
                </div>
                <!-- ATTENTION: please take care to AJAX Call which is pointed to css-class 'product-sq' -->
                <!-- There is some Element about promotions inserted here, after '.product-sq' -->
              </div>
              <div class="row" style="margin-top: 10px;"></div>
              <div class="col-md-4 col-sm-6 col-xs-12 mobile-product-slider">
                <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\media.phtml (start) -->

                <style>
                  .cursor_crosshair {
                    cursor: crosshair !important;
                  }

                  .zoomIn {
                    display: inline-block;
                    position: relative;
                    overflow: hidden;
                    cursor: crosshair;
                  }

                  .sliderpoints_panel {
                    text-align: center;
                    margin: -48px auto 20px;
                  }

                  .desktop_thumb_row {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    width: 392px;
                  }

                  .desktop_thumb_cell {
                    border: 2px solid rgba(211, 211, 211, .63);
                    margin: 0 4px 6px 0;
                  }

                  .desktop_thumb_cell_selected {
                    border: 2px solid rgba(111, 111, 111, .63);
                    margin: 0 4px 6px 0;
                  }

                  .desktop_large_img_outher_div {
                    width: 388px;
                    height: 434px;
                    padding: 15px 15px 39px 15px;
                  }

                  .desktop_large_img_inner_div {
                    width: 340px;
                    height: 380px;
                    object-fit: contain;
                  }

                  .img-zoom-container {
                    position: relative;
                  }

                  #img-zoom-lens {
                    position: absolute;
                    display: none;
                    border: 1px solid #d4d4d4;
                    background-color: rgba(0, 88, 157, 0.15);
                    /*set the size of the lens:*/
                    width: 120px;
                    height: 90px;
                  }

                  .img-zoom-result {
                    position: relative;
                    top: -397px;
                    left: 400px;
                    z-index: 9999999;
                    border: 1px solid #d4d4d4;
                    /*set the size of the result div:*/
                    height: 434px;
                    background-repeat: no-repeat;
                    background-color: #FFFFFF;
                  }

                  #mobile-product-detail-image-group,
                  #mobile-product-detail-image-group-ul {
                    min-height: 300px;
                  }

                  .pdp_mobile_gallery .lg-backdrop {
                    background-color: #FFFFFF !important;
                  }

                  .pdp_mobile_gallery .lg-toolbar {
                    background-color: rgba(0, 0, 0, 0.2) !important;
                  }

                  .pdp_mobile_gallery .lg-thumb-outer {
                    background-color: #dadada !important;
                  }
                </style>

                <div id="desktop-product-detail-image-group" class="product-images product-detail-slider" style=""> <!-- desktop image group --><span class="sale_mark mobile-sale hide"></span>
                  <div class="desktop_large_img_outher_div largeCont clearfix">
                    <div class="img-zoom-container cursor_crosshair">
                      <div id="img-zoom-lens" style="width: 164.556px; display: none; left: 22px; top: 0px;" class="cursor_crosshair"></div><img id="desktop-large-img" src="https://image.schrackcdn.com/340x380/f_hsed02umbv.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loading cursor_crosshair" data-was-processed="true">
                    </div>
                    <div id="desktop-large-img-zoom" class="img-zoom-result" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg" style="display: none; width: calc(800px); background-image: url(&quot;https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg&quot;); background-size: 1190px 1330px; background-position: -20.6061px -3.85938px;"></div>
                  </div>
                  <div id="zoom_explanation_text_desktop" class="hide-on-print" style="margin-top: -14px; text-align: right; margin-bottom: 10px; margin-right: 6px; font-size: 0.9em;">Roll over image to zoom in</div>
                  <div class="desktop_thumb_row clearfix">
                    <div class="desktop_thumb_cell_selected"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbv.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbv.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv02.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv02.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv02.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv03.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv03.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv03.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv04.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv04.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv04.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv05.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv05.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv05.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv06.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv06.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv06.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv07.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv07.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv07.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                    <div class="desktop_thumb_cell"><a class="desktop_thumb_a" data-large-img-src="https://image.schrackcdn.com/340x380/f_hsed02umbvv08.jpg" data-zoom-img-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv08.jpg" href=""><span><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv08.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="loaded" data-was-processed="true"></span></a></div>
                  </div>
                </div>
                <div id="mobile-product-detail-image-group" class="product-images product-detail-slider" style="position: relative; display: none;"><span class="sale_mark mobile-sale hide"></span>
                  <ul id="mobile-product-detail-image-group-ul"><!-- mobile image group -->
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg" class="" data-lg-id="0a319620-f0d0-4424-98b3-ee2477f759ad"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbv.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv02.jpg" class="" data-lg-id="6253b8d4-6825-4fc6-ac2b-0135fcdf808f"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv02.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv03.jpg" class="" data-lg-id="dbe4b45e-84ca-4751-a514-b385d405ce83"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv03.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv04.jpg" class="" data-lg-id="acd7662f-527a-4ec9-858a-37209beaba87"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv04.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv05.jpg" class="" data-lg-id="ef783cd6-92b5-4f08-a3cb-4b1bc2c17e92"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv05.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv06.jpg" class="" data-lg-id="ae211860-9d0f-4837-8161-c1b33b1f6d10"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv06.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv07.jpg" class="" data-lg-id="4f2f53c2-8a6d-47bf-aa0e-5d17f18b4b39"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv07.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv08.jpg" class="" data-lg-id="2937e1cd-b613-4f9f-bf82-08d86e002b2d"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv08.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv09.jpg" class="" data-lg-id="b1ac84f0-cfcb-4bdb-9778-4fd92857f133"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv09.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv10.jpg" class="" data-lg-id="d13373bf-e3ae-492d-b6ca-bdb663ece877"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv10.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv11.jpg" class="" data-lg-id="0832fd8b-73ce-4576-9c29-ae35b081bae3"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv11.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                    <li data-src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv12.jpg" class="" data-lg-id="0ca6f276-2d09-4901-89c3-ebfa7c1cb113"><img src="https://image.schrackcdn.com/90x90/f_hsed02umbvv12.jpg" title="Module insert empty UAE Design 1/2 S-JACK modules, angled" alt="Module insert empty UAE Design 1/2 S-JACK modules, angled"></li>
                  </ul>
                  <div class="lg-container pdp_mobile_gallery lg-inline lg-show lg-show-in" id="lg-container-1" tabindex="-1" aria-modal="true" role="dialog">
                    <div id="lg-backdrop-1" class="lg-backdrop in" style="transition-duration: 300ms;"></div>

                    <div id="lg-outer-1" class="lg-outer lg-use-css3 lg-css3 lg-slide lg-grab lg-show-after-load lg-animate-thumb lg-has-thumb lg-use-transition-for-zoom lg-start-zoom lg-components-open lg-visible" data-lg-slide-type="image">

                      <div id="lg-content-1" class="lg-content" style="top: 0px; bottom: 0px;">
                        <div id="lg-inner-1" class="lg-inner" style="transition-timing-function: ease; transition-duration: 400ms;">
                          <div id="lg-item-1-0" class="lg-item lg-loaded lg-next-slide lg-prev-slide lg-current lg-complete lg-complete_ lg-zoomable">
                            <picture class="lg-img-wrap" style="transform: translate3d(0px, 0px, 0px);"> <img alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="lg-object lg-image" data-index="0" src="https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg" style="transform: scale3d(1, 1, 1);"></picture>
                          </div>
                          <div id="lg-item-1-1" class="lg-item lg-loaded lg-complete lg-complete_ lg-zoomable">
                            <picture class="lg-img-wrap"> <img alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="lg-object lg-image" data-index="1" src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv02.jpg"></picture>
                          </div>
                          <div id="lg-item-1-2" class="lg-item lg-loaded lg-complete lg-complete_ lg-zoomable">
                            <picture class="lg-img-wrap"> <img alt="Module insert empty UAE Design 1/2 S-JACK modules, angled" class="lg-object lg-image" data-index="2" src="https://image.schrackcdn.com/1190x1330/f_hsed02umbvv03.jpg"></picture>
                          </div>
                          <div id="lg-item-1-11" class="lg-item"></div>
                          <div id="lg-item-1-3" class="lg-item"></div>
                          <div id="lg-item-1-4" class="lg-item"></div>
                          <div id="lg-item-1-5" class="lg-item"></div>
                          <div id="lg-item-1-6" class="lg-item"></div>
                          <div id="lg-item-1-7" class="lg-item"></div>
                          <div id="lg-item-1-8" class="lg-item"></div>
                          <div id="lg-item-1-9" class="lg-item"></div>
                        </div>
                        <button type="button" id="lg-prev-1" aria-label="Previous slide" class="lg-prev lg-icon"> </button>
                        <button type="button" id="lg-next-1" aria-label="Next slide" class="lg-next lg-icon"> </button>
                      </div>
                      <div id="lg-toolbar-1" class="lg-toolbar lg-group">
                        <button type="button" aria-label="Toggle maximize" id="lg-maximize-1" class="lg-maximize lg-icon"></button>

                        <a id="lg-download-1" target="_blank" rel="noopener" aria-label="Download" download="" class="lg-download lg-icon" href="https://image.schrackcdn.com/1190x1330/f_hsed02umbv.jpg"></a>
                        <div class="lg-counter" role="status" aria-live="polite">
                          <span id="lg-counter-current-1" class="lg-counter-current">1</span> /
                          <span id="lg-counter-all-1" class="lg-counter-all">12 </span>
                        </div><button type="button" aria-label="Toggle fullscreen" class="lg-fullscreen lg-icon"></button><button id="lg-actual-size-1" type="button" aria-label="View actual size" class="lg-zoom-in lg-icon"></button>
                      </div>

                      <div id="lg-components-1" class="lg-components">
                        <div class="lg-sub-html lg-empty-html" role="status" aria-live="polite"></div>
                        <div class="lg-thumb-outer lg-thumb-align-middle lg-grab">
                          <div class="lg-thumb lg-group" style="transition-duration: 400ms; width: 1260px; position: relative; transform: translate3d(-49px, 0px, 0px);">
                            <div data-lg-item-id="0" class="lg-thumb-item active" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="0" src="https://image.schrackcdn.com/90x90/f_hsed02umbv.jpg">
                            </div>
                            <div data-lg-item-id="1" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="1" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv02.jpg">
                            </div>
                            <div data-lg-item-id="2" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="2" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv03.jpg">
                            </div>
                            <div data-lg-item-id="3" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="3" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv04.jpg">
                            </div>
                            <div data-lg-item-id="4" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="4" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv05.jpg">
                            </div>
                            <div data-lg-item-id="5" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="5" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv06.jpg">
                            </div>
                            <div data-lg-item-id="6" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="6" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv07.jpg">
                            </div>
                            <div data-lg-item-id="7" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="7" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv08.jpg">
                            </div>
                            <div data-lg-item-id="8" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="8" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv09.jpg">
                            </div>
                            <div data-lg-item-id="9" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="9" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv10.jpg">
                            </div>
                            <div data-lg-item-id="10" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="10" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv11.jpg">
                            </div>
                            <div data-lg-item-id="11" class="lg-thumb-item" style="width:100px; height: 80px;
            margin-right: 5px;">
                              <img data-lg-item-id="11" src="https://image.schrackcdn.com/90x90/f_hsed02umbvv12.jpg">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  /*<![CDATA[*/
                  jQuery(document).ready(function() {
                    //==============================================================================
                    const lgLicense = 'OTBCRUZDQkUtRjg2NjQ1M0UtOTQyN0QyNUQtQ0Q5N0U0NEE=';

                    const lgContainer = document.getElementById('mobile-product-detail-image-group');
                    const lgGallery = document.getElementById('mobile-product-detail-image-group-ul');
                    const inlineGallery = lightGallery(lgGallery, {
                      plugins: [lgFullscreen, lgThumbnail, lgZoom],
                      licenseKey: atob(lgLicense),
                      container: lgContainer,
                      addClass: 'pdp_mobile_gallery',
                      // dynamic: false,
                      // Turn off hash plugin in case if you are using it
                      // as we don't want to change the url on slide change
                      hash: false,
                      // Do not allow users to close the gallery
                      closable: false,
                      // Add maximize icon to enlarge the gallery
                      showMaximizeIcon: true,
                      // Append caption inside the slide item
                      // to apply some animation for the captions (Optional)
                      slideDelay: 400,
                      toggleThumb: false,
                      getCaptionFromTitleOrAlt: false,
                      allowMediaOverlap: false,
                      enableSwipe: true,
                      controls: true
                    });

                    // Since we are using dynamic mode, we need to programmatically open lightGallery
                    jQuery(window).load(function() {
                      imageZoom("desktop-large-img", "desktop-large-img-zoom");
                      inlineGallery.openGallery();
                    });


                    jQuery('#desktop-large-img-zoom').hide();
                    jQuery('#img-zoom-lens').hide();

                    jQuery('#desktop-large-img').on("mouseover mouseenter mousemove", function(e) {
                      jQuery('#desktop-large-img').addClass('cursor_crosshair');
                      jQuery('#img-zoom-lens').addClass('cursor_crosshair');
                      jQuery('.img-zoom-container').addClass('cursor_crosshair');
                      jQuery('#desktop-large-img-zoom').show();
                    });
                    jQuery('#desktop-large-img').on("mouseleave", function(e) {
                      jQuery('#desktop-large-img-zoom').hide();
                      jQuery('#img-zoom-lens').hide();
                    });
                    jQuery('.row, .desktop_large_img_outher_div').on("mouseenter mouseleave", function(e) {
                      jQuery('#desktop-large-img-zoom').hide();
                      jQuery('#img-zoom-lens').hide();
                    });


                    jQuery('.desktop_thumb_a').on('click', function(e) {
                      e.preventDefault();
                      var scr = jQuery(this).data('large-img-src');
                      var zoom_scr = jQuery(this).data('zoom-img-src');
                      //------------------------------------------- set new image for mainview
                      jQuery('#desktop-large-img').attr("src", scr);
                      //----------------------------------------------- set new image for zoom
                      jQuery('#desktop-large-img-zoom').data('zoom-img-src', zoom_scr);
                      jQuery('#desktop-large-img-zoom').css('backgroundImage', "url('" + zoom_scr + "')");
                      //------------------------------------- change active status to selected
                      jQuery('.desktop_thumb_cell_selected').removeClass('desktop_thumb_cell_selected').addClass('desktop_thumb_cell');
                      jQuery(this).parent().removeClass('desktop_thumb_cell').addClass('desktop_thumb_cell_selected');
                    });

                    function GetIEVersion() {
                      var sAgent = window.navigator.userAgent;
                      var Idx = sAgent.indexOf("MSIE");

                      // If IE, return version number.
                      if (Idx > 0) {
                        return parseInt(sAgent.substring(Idx + 5, sAgent.indexOf(".", Idx)));
                      }
                      // If IE 11 then look for Updated user agent string.
                      else if (!!navigator.userAgent.match(/Trident\/7\./)) {
                        return 11;
                      } else {
                        return 0; //It is not IE
                      }
                    }

                    var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

                    if (GetIEVersion() > 0) {
                      // Old Internet Explorer
                    } else {
                      if (viewportWidth >= 320 && viewportWidth <= 767) {
                        jQuery('#sliderpoints_panel').removeClass('smallCont');
                        jQuery('#sliderpoints_panel').addClass('sliderpoints_panel');
                      }
                      if (viewportWidth > 1024) {
                        jQuery('#zoom_explanation_text').show();
                      }
                      if (viewportWidth >= 1260) {
                        jQuery('#mobile-product-detail-image-group').hide();
                        jQuery('#desktop-product-detail-image-group').show();
                      }
                      jQuery('.zoomable').zoomIn({});
                    }

                    function imageZoom(imgID, resultID) {
                      var imgContainer, img, lens, result, resultRatio, cx, cy, paddingLR, paddingTB;
                      img = jQuery('#' + imgID);
                      imgContainer = img.parent();
                      result = jQuery('#' + resultID);
                      /* Create + Insert lens: */
                      jQuery('.img-zoom-container').prepend('<div id="img-zoom-lens" />');
                      lens = jQuery('#img-zoom-lens');
                      result.css("width", "calc(" + jQuery('.product-details').width() + "px - 400px)");
                      resultRatio = result.width() / result.height(); // heigth is set in css
                      lens.width(lens.height() * resultRatio + "px");
                      jQuery(window).resize(function() {
                        result.css("width", "calc(" + jQuery('.product-details').width() + "px - 400px)");
                        resultRatio = result.width() / result.height();
                        lens.width(lens.height() * resultRatio + "px");
                      });

                      /* Calculate the ratio between result DIV and lens: */
                      cx = ((img.outerWidth() / lens.outerWidth()));
                      cy = ((img.outerHeight() / lens.outerHeight()));

                      var imgMainWrapperH = jQuery('.desktop_large_img_outher_div').outerHeight();
                      var imgInnerWrapperH = imgContainer.outerHeight();


                      /* Set background properties for the result DIV */
                      if (result.css('background-image') == 'none') {
                        result.css('backgroundImage', "url('" + jQuery('#desktop-large-img-zoom').data('zoom-img-src') + "')");
                      }
                      result.css('backgroundSize', "1190px 1330px");

                      paddingLR = (imgContainer.outerWidth() - img.outerWidth()) / 2;
                      paddingTB = (imgMainWrapperH - imgInnerWrapperH) / 2;

                      /* Execute a function when someone moves the cursor over the image, or the lens: */
                      img.on("mousemove touchmove", moveLens);
                      lens.on("mousemove touchmove", moveLens);


                      function moveLens(e) {
                        var pos, x, y;
                        /* Prevent any other actions that may occur when moving over the image */
                        e.preventDefault();
                        /* Get the cursor's x and y positions: */
                        pos = getCursorPos(e);
                        /* Calculate the position of the lens: */
                        x = (pos.x + paddingLR) - (lens.outerWidth() / 2);
                        y = (pos.y - lens.outerHeight() - 10);
                        // console.log("x= " + x + " y= " + y);
                        /* Prevent the lens from being positioned outside the image: */
                        if (x > paddingLR + img.outerWidth() - lens.outerWidth()) {
                          x = paddingLR + img.outerWidth() - lens.outerWidth();
                        }
                        if (x <= paddingLR) {
                          x = paddingLR;
                        }
                        if (y > paddingTB + img.outerHeight() - lens.outerHeight()) {
                          y = paddingTB + img.outerHeight() - lens.outerHeight();
                        }
                        if (y <= 0) {
                          y = 0;
                        }
                        /* Set the position of the lens: */
                        lens.css('left', x + "px");
                        lens.css('top', y + "px");
                        /* Display what the lens "sees": */
                        result.css('backgroundPosition', "-" + ((x - paddingLR) * cx) + "px -" + ((y - paddingTB) * cy) + "px");
                        jQuery('#img-zoom-lens').hide();

                      }

                      function getCursorPos(e) {
                        var a, x = 0,
                          y = 0;
                        e = e || window.event;
                        /* Get the x and y positions of the image: */
                        a = img.get(0).getBoundingClientRect();
                        /* Calculate the cursor's x and y coordinates, relative to the image: */
                        x = e.pageX - a.left;
                        y = e.pageY - a.top;
                        /* Consider any page scrolling: */
                        x = x - window.pageXOffset;
                        y = y - window.pageYOffset;
                        return {
                          x: x,
                          y: y
                        };
                      }
                    }
                  }); /*]]>-------------------------------------------------------------*/
                </script>
                <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\media.phtml (end) -->
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 product-description padR0">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 marker_sku_infoline_desktop">
                    <div class="product-sq">
                      Article #: <span>HSED02UMBV</span>
                      <span class="sale_mark sale-btn hide"></span>
                      <input type="hidden" id="schrack_hersteller" value="Schrack">
                    </div>
                    <!-- ATTENTION: please take care to AJAX Call which is pointed to css-class 'product-sq' -->
                    <!-- There is some Element about promotions inserted here, after '.product-sq' -->
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 product-name">
                    Module insert empty UAE Design 1/2 S-JACK modules, angled <br>
                    <div class="gray normalTxt long-text-addition">
                      Switchprogramme compatible. Compatible also to two TOOLLESS LINE SFB-modules. </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="addtocart">
                      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\addtocart.phtml (start) -->

                      <style>
                        .cartInfoHide {
                          display: none !important;
                        }

                        .info_button_pickup_info {
                          display: none !important;
                        }

                        .product-details .product-description .product-store #newStockInfoWrapper span.glyphicon {
                          font-family: 'Glyphicons Halflings';
                        }

                        .product-details .product-description .product-store span.pickup_store_name,
                        .product-details .product-description .product-store span.nds-time {
                          float: none;
                          padding-left: 0;
                        }

                        #cut_off_times_ajax_loader_gif {
                          width: 20px;
                          height: 20px;
                          margin-left: 10px;
                        }

                        /*
        .cut_off_time_text {
            margin-left: 50px;
            font-family: robotomedium,Helvetica,Arial,Sans-Serif !important;
            font-size: 18px !important;
        }
    */

                        .cut_off_time_text_alternate {
                          color: #000000;
                        }

                        .cut_off_time_text_counter {
                          color: #00589d;
                          font-family: robotomedium, Helvetica, Arial, Sans-Serif;
                        }

                        /*
        .logstics-icon-text-row {
            width: auto;
            float: left;
            margin-right: 5px;
        }
    */

                        .store-icon {
                          margin-right: 22px !important;
                        }

                        .logstics-icon {
                          margin-right: 14px !important;
                        }

                        .minQtyOuther {
                          width: 175px !important;
                        }

                        a.replacing_product_details_link {
                          background: 0 0;
                          color: #fff;
                          font-size: 15px;
                          text-align: center;
                          width: 280px;
                          border: 0;
                          position: relative;
                          border-bottom: 57px solid #d1222b;
                          border-left: 25px solid transparent;
                          display: inline-block;
                          vertical-align: top;
                          top: 0px;
                        }

                        a.replacing_product_details_link span {
                          position: absolute;
                          top: 17px;
                          left: 14px;
                        }

                        .product-details .product-description .add-cart-btn.inactive {
                          width: 254px;
                          border-top: 57px solid #b9b9b9;
                          border-right: 25px solid transparent;
                          margin-bottom: -37px;
                          padding-left: 0;
                          float: left;
                        }

                        .product-details .product-description .add-cart-btn .cart-btn.inactive {
                          background: 0 0;
                          color: #fff;
                          font-size: 15px;
                          text-align: center;
                          width: 250px;
                          border: 0;
                          position: relative;
                          border-top: 53px solid #b9b9b9;
                          border-right: 25px solid transparent;
                          display: inline-block;
                          vertical-align: top;
                          top: -57px;
                        }

                        .logistics-icon-text-row span.logistic-icon {
                          margin-right: 10px;
                        }

                        .logistics-icon-text-row span.logstics-icon-text.on_request,
                        .qtyBoxCont ul li.on_request {
                          font-weight: bold;
                          color: #d1222b;
                        }

                        .pickup-icon-text-row span.store-icon-new {
                          margin-right: 20px;
                        }

                        .info-icon.energyLabel {
                          width: 50px;
                          height: 27px;
                          border: solid 0px green;
                          margin-left: 10px;
                          margin-top: -7px;
                        }

                        #energyLableSet {
                          display: inline-flex;
                        }


                        @media (min-width: 60px) and (max-width: 320px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }

                          .cut_off_time_text {
                            font-size: 14px !important;
                          }

                          .cut_off_time_text_counter {
                            font-size: 14px;
                          }

                          .logstics-icon-text-row {
                            float: none;

                          }
                        }

                        @media (min-width: 321px) and (max-width: 480px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }

                          .cut_off_time_text {
                            font-size: 14px !important;
                            float: none;
                          }

                          .cut_off_time_text_counter {
                            font-size: 14px;
                          }

                          .logstics-icon-text-row {
                            float: none;

                          }
                        }

                        @media (min-width: 481px) and (max-width: 768px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }

                          .cut_off_time_text {
                            font-size: 18px !important;
                          }

                          .cut_off_time_text_counter {
                            font-size: 18px;
                          }

                          .logstics-icon-text-row {
                            float: none;

                          }
                        }

                        @media (min-width: 769px) and (max-width: 1024px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }
                        }

                        @media (min-width: 1025px) and (max-width: 1370px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }
                        }

                        @media (min-width: 1371px) and (max-width: 1919px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }
                        }

                        @media (min-width: 1920px) and (max-width: 4000px) {
                          .logstics-icon {
                            margin-top: 0 !important;
                            width: 32px !important;
                            height: 19px !important;
                          }

                          .store-icon {
                            width: 23px !important;
                            height: 29px !important;
                            margin-top: 4px !important;
                            margin-left: 0 !important;
                          }
                        }
                      </style>

                      <div class="row">
                        <div id="detail-product-data" style="display: none;" data-sku="HSED02UMBV" data-name="Module insert empty UAE Design 1/2 S-JACK modules, angled" data-position="0" data-category="S-JACK / VISIO Module insert UAE design for one or two S-JACK Modules without Centralplate, without Cover" data-price="1.95"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12 product-price posRel show-for-print"><span class="span_on_request">Price&nbsp;on request</span></div>
                        <div style="padding-bottom:20px">
                          <div class="col-md-12 col-sm-12 col-xs-12 product-quantity hide-on-print" style="margin-bottom:0; ">
                            <div class="qtyLbl">Quantity:</div>
                            <div class="inputArea">
                              <input type="number" onkeypress="return isNumberKey(event)" class="qty form-control quantity-bx" name="qty" id="qty-HSED02UMBV" maxlength="12" value="" title="Qty">
                              <input type="hidden" value="61276" name="productId" id="productId-HSED02UMBV">
                            </div>
                            <div class="qtyTxt hide-on-print">
                              <!-- ### -->
                              <div class="small sales-unit">
                                <span class="">Sales Unit: </span>
                                <span style="white-space: nowrap;" id="salesunit-val-id">1 pc</span>
                              </div>
                              <div class="minQtyOuther small">
                                <span>Minimum Quantity: </span>
                                <span style="white-space: nowrap;" id="minqty-val-id">1 pc</span><br>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="stock-section">
                          <div class="col-md-12 col-sm-12 col-xs-12 product-stock posRel">
                          </div>
                          <!-- Deliverable statuses and stock info will be laoded by AJAX from commonJs.js -->
                          <div class="col-md-12 col-sm-12 col-xs-12 product-store">
                            <div class="logistics-icon-text-row"><span class="logistic-icon"></span><span class="logstics-icon-text"><span class="nds-time sucubus">in 1 day</span> <span class="nds-qty">3.106 pc</span> <span class="nds-delivery">deliverable</span> </span></div>
                            <div class="cut_off_time_text hide-on-print"></div>
                            <div class="cartInfoHide pickup-icon-text-row"><span class="store-icon-new"></span><span class="formatted-pickup-qty-sum">0 pc <span class="pickup-sum-stores-txt">Σ all stores</span></span></div>
                            <div class="product_stock_container"><span class="glyphicon glyphicon-info-sign info-icon" id="product-stock-icon-HSED02UMBV" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
                              <div class="popupBox qtyBoxCont dropdown-menu" aria-labelledby="product-stock-icon-HSED02UMBV">
                                <ul>
                                  <li class="hd">Ready For Shipment<span></span></li>
                                  <li><span class="nds-time">in 1 day :</span><span class="nds-qty">3.106 pc</span></li>
                                  <li class="info_button_pickup_info hd">Ready For Pickup<span></span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 hide-on-print">
                          <div class=" add-cart-btn">
                            <button class="addToCartTracking cart-btn add-cart-btn" id="buyNowButton" type="button" title="Buy now" data-tracking-enabled="enabled" data-brand="" data-click="" data-event="addToCart" data-id="HSED02UMBV" data-sku="HSED02UMBV" data-name="Module insert empty UAE Design 1/2 S-JACK modules, angled" data-category="87-02-263_18-02-04" data-price="1.95" <span=""><span>Buy now</span>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="addtocart print-only">
                        <span class="price onrequest">On Request</span>
                      </div>
                      <input type="hidden" id="cut_off_time_stopper" value="">

                      <script type="text/javascript">
                        //<![CDATA[

                        var trackingData = new Object();
                        trackingData.trackingEnabled = jQuery('.addToCartTracking').attr("data-tracking-enabled");
                        trackingData.pagetype = 'cart';
                        trackingData.sku = jQuery('.addToCartTracking').attr("data-sku");
                        trackingData.name = jQuery('.addToCartTracking').attr("data-name");
                        trackingData.price = '1.95'.replace(",", ".");
                        trackingData.category = jQuery('.addToCartTracking').attr("data-category");
                        trackingData.currencyCode = 'EUR';

                        var productAddToCartForm = new VarienForm('product_addtocart_form');
                        //--------------------------------------------------------------------------
                        productAddToCartForm.submit = function() {
                          if (this.validator.validate()) {
                            addToCartDispacher();
                          }
                        }.bind(productAddToCartForm);

                        function countdownTimer(remainingSeconds, remainTimeStopTime, alternateStopTimeMessage) {
                          // Update the count down every 1 second
                          var originalDistance = (remainingSeconds - 1);
                          var calculatedDistance = (remainingSeconds - 1);
                          var hours = 0;
                          var minutes = 0;
                          var seconds = 0;
                          var langOnOrderIn = '<span class="validToTxt">Valid On Order In</span>';
                          //var langDeliverablePrefix = '//';
                          var langHours = 'hours';
                          var langMinutes = 'minutes';
                          var isViewStopperActive = false;

                          var originalDistanceTimeStopTime = (remainTimeStopTime - 1);
                          var calculatedDistanceTimeStopTime = (remainTimeStopTime - 1);
                          var hoursTimeStopTime = 0;
                          var minutesTimeStopTime = 0;
                          var secondsTimeStopTime = 0;

                          if (remainTimeStopTime > 0) {
                            isViewStopperActive = true;
                          }

                          var x = setInterval(function() {
                            // Find the distance between now an the count down date
                            // Time calculations for days, hours, minutes and seconds
                            if (calculatedDistance >= 3600) {
                              hours = Math.floor(calculatedDistance / (60 * 60));
                              calculatedDistance = calculatedDistance - (hours * 60 * 60);
                            } else {
                              hours = 0;
                            }
                            if (calculatedDistance >= 60) {
                              minutes = Math.floor(calculatedDistance / 60);
                              calculatedDistance = calculatedDistance - (minutes * 60);
                            } else {
                              minutes = 0;
                            }
                            seconds = calculatedDistance;

                            var displayHours = hours + " " + langHours;
                            var displayMinutes = minutes + " " + langMinutes;

                            // Output the result in an element with id="demo"
                            if (hours == 0) displayHours = "";
                            if (displayMinutes == 0) displayMinutes = "00 " + langMinutes;
                            jQuery('#cut_off_times_ajax_loader_gif').remove();
                            if (isViewStopperActive == false) {
                              jQuery('.cut_off_time_text').html(langOnOrderIn + " " + '<span class="cut_off_time_text_counter" >' + displayHours + " " + displayMinutes + '</span>');
                            }

                            calculatedDistance = originalDistance - 1;
                            originalDistance = originalDistance - 1;

                            // If the count down is over, write some text
                            if (originalDistance < 0) {
                              clearInterval(x);
                              processCutOffTime();
                            }

                            if (isViewStopperActive == true) {
                              if (calculatedDistanceTimeStopTime >= 3600) {
                                hoursTimeStopTime = Math.floor(calculatedDistanceTimeStopTime / (60 * 60));
                                calculatedDistanceTimeStopTime = calculatedDistanceTimeStopTime - (hoursTimeStopTime * 60 * 60);
                              } else {
                                hoursTimeStopTime = 0;
                              }
                              if (calculatedDistanceTimeStopTime >= 60) {
                                minutesTimeStopTime = Math.floor(calculatedDistanceTimeStopTime / 60);
                                calculatedDistanceTimeStopTime = calculatedDistanceTimeStopTime - (minutesTimeStopTime * 60);
                              } else {
                                minutesTimeStopTime = 0;
                              }
                              secondsTimeStopTime = calculatedDistanceTimeStopTime;

                              var displayHoursTimeStopTime = hoursTimeStopTime;
                              var displayMinutesTimeStopTime = minutesTimeStopTime;

                              if (hoursTimeStopTime == 0) displayHoursTimeStopTime = "00";
                              if (displayMinutesTimeStopTime == 0) displayMinutesTimeStopTime = "00";
                              if (secondsTimeStopTime == 0) secondsTimeStopTime = "00";
                              if (hoursTimeStopTime < 10 && hoursTimeStopTime > 0) displayHoursTimeStopTime = "0" + displayHoursTimeStopTime;
                              if (displayMinutesTimeStopTime < 10 && displayMinutesTimeStopTime > 0) displayMinutesTimeStopTime = "0" + displayMinutesTimeStopTime;
                              if (secondsTimeStopTime < 10 && secondsTimeStopTime > 0) secondsTimeStopTime = "0" + secondsTimeStopTime;

                              var resultTimeStopTime = displayHoursTimeStopTime + ':' + displayMinutesTimeStopTime + ':' + secondsTimeStopTime;
                              jQuery('#cut_off_time_stopper').val(resultTimeStopTime);
                              jQuery('.cut_off_time_text').html('<span class="cut_off_time_text_alternate" >' + alternateStopTimeMessage + '</span>');

                              if (resultTimeStopTime == "00:00:00") {
                                clearInterval(x);
                                processCutOffTime();
                              }

                              calculatedDistanceTimeStopTime = originalDistanceTimeStopTime - 1;
                              originalDistanceTimeStopTime = originalDistanceTimeStopTime - 1;
                            }
                          }, 1000);
                        }

                        function processCutOffTime() {}


                        jQuery(document).ready(function() {

                          jQuery('#energyLableText').text(Translator.translate('Datasheet'));

                          localStorage.searchResultIsSingleProduct = '';

                          jQuery('#product_addtocart_form').submit(function(event) {
                            event.preventDefault();
                            jQuery('#buyNowButton').trigger('click');
                          });

                          jQuery('#buyNowButton').on('click', function(event) {
                            event.preventDefault();
                            if (jQuery('#qty-HSED02UMBV').length) {
                              var inputQuantityObject = jQuery('#qty-HSED02UMBV');
                            } else if (jQuery('#qty').length) {
                              var inputQuantityObject = jQuery('#qty');
                            }

                            var inputQuantity = inputQuantityObject.val();

                            if (inputQuantity == "") {
                              inputQuantity = "1";
                              inputQuantityObject.val(1);
                            }

                            if (inputQuantity.match(/^\d+$/) && inputQuantity != 0) {
                              //---------------------------------------------------- VTC check
                              var vtcMaxQty = jQuery(this).data("vtcmaxqty");
                              if (typeof vtcMaxQty !== 'undefined' && inputQuantity > vtcMaxQty) {
                                jQuery('ul.messages').empty();
                                jQuery('ul.errors').empty();
                                appendMessageUl([Translator.translate("Your selected quantity may result in a longer delivery time. Please select the available quantity currently in stock or pick an alternative item. Get in touch if you would like us to recommend a suitable article.")], 'messages_hidden', 'error-msg', 'glyphicon glyphicon-exclamation-sign');
                                jQuery('.error-msg').scrollTop();
                                console.log('appendMessageUl #vtc PDP addtocart');
                              } else {
                                //it's all digits
                                productAddToCartForm.submit();
                              }
                            } else {
                              console.log(inputQuantityObject.val() + ' is not a number');
                            }
                          })


                          jQuery('.tracking_info_icon').on('click', function() {
                            var infoSku = jQuery(this).attr('data-sku');
                            var infoType = jQuery(this).attr('data-type');
                            var infoStatusFieldId = jQuery(this).attr('data-statusfield');
                            var infoStatusFieldValue = jQuery('#' + infoStatusFieldId).val();

                            if (infoStatusFieldValue == 'closed') {
                              var sku = "HSED02UMBV";
                              var custom_item_name = "Module insert empty UAE Design 1/2 S-JACK modules, angled";
                              var custom_item_category = "4855612";
                              productPriceInfoTracking(sku, custom_item_name, custom_item_category);
                              if (dataLayer) {
                                dataLayer.push({
                                  'event': 'clickSmallInfoSymbol',
                                  'eventAction': infoType,
                                  'eventLabel': infoSku
                                });
                              }
                              jQuery('#' + infoStatusFieldId).val('open');
                            }
                          });
                        });

                        function simpleAddToCartDispacher(sku, qty, isCableLeaving) {
                          setOverlayLoader();
                          jQuery('ul.messages').empty();
                          jQuery('ul.errors').empty();
                          jQuery.ajax(ajaxUrl, {
                            'dataType': 'json',
                            'type': 'POST',
                            'data': {
                              'form_key': 'XWDrviVZ1KV1rAfm',
                              'setAddToCart': {
                                'data': {
                                  'sku': sku,
                                  'quantity': qty,
                                  'leaving': isCableLeaving
                                }
                              }
                            },

                            'success': function(data) {
                              unsetOverlayLoader();
                              var parsedData = data;
                              var result = parsedData.setAddToCart.result;
                              if (result.showPopup == true) { // Open Inquiry Popup
                                jQuery('#quantitywarningpopup').html(result.popupHtml);
                                jQuery('#quantitywarningpopupBtn').click();
                              } else {
                                jQuery("html, body").animate({
                                  scrollTop: 0
                                }, "slow");
                                console.log('ScrollTop #53');
                                if (result.numberOfDifferentItemsInCart) {
                                  jQuery('.MyCart').append('<div id="cartNoBxItemCount" class="cartNoBx">' + result.numberOfDifferentItemsInCart + '</div>');
                                }
                                var newQuantityDetected = false;
                                if (result.data.newQty && result.data.newQty > 0) {
                                  newQuantityDetected = true;
                                  if (jQuery('#qty-HSED02UMBV').length) {
                                    var inputQuantityObject = jQuery('#qty-HSED02UMBV');
                                  } else if (jQuery('#qty').length) {
                                    var inputQuantityObject = jQuery('#qty');
                                  }
                                  inputQuantityObject.val(result.data.newQty);
                                }
                                var messageArray = result.data.messages;
                                if (result.result.indexOf("SUCCESS") == -1) {
                                  appendMessageUl(messageArray, 'messages', 'error-msg', 'glyphicon glyphicon-exclamation-sign');
                                  console.log('appendMessageUl #10');
                                } else {
                                  // Fire trackingcode:
                                  if (newQuantityDetected == false) {
                                    trackingData.quantity = qty;
                                    addToCartTracking(trackingData, 'Detail');
                                  }
                                  appendMessageUl(messageArray, 'messages', 'success-msg', 'glyphicon glyphicon-ok');
                                  console.log('appendMessageUl #11');
                                }
                              }
                            },
                            'error': function(data) {
                              var parsedData = data;
                              //debugger;
                            }
                          });
                        }

                        function addToCartDispacher() {
                          addToCartUrl = jQuery('#product_addtocart_form').attr('action');
                          var productItem = jQuery('#detail-product-data');

                          var data = jQuery('#product_addtocart_form').serialize();
                          if (jQuery('#qty-HSED02UMBV').length) {
                            var inputQuantityObject = jQuery('#qty-HSED02UMBV');
                          } else if (jQuery('#qty').length) {
                            var inputQuantityObject = jQuery('#qty');
                          }
                          simpleAddToCartDispacher(jQuery(productItem).attr("data-sku"), inputQuantityObject.val(), false);
                        }

                        function setQty(id, qty) {
                          if ('.row product-main-details') {
                            jQuery("#ajax-loader").show();
                          }
                          if (jQuery('#qty-HSED02UMBV').length) {
                            var inputQuantityObject = jQuery('#qty-HSED02UMBV');
                          } else if (jQuery('#qty').length) {
                            var inputQuantityObject = jQuery('#qty');
                          }
                          inputQuantityObject.val(qty);
                          productAddToCartForm.submit();
                        }
                        //]]>
                      </script>
                      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\addtocart.phtml (end) -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-12 col-xs-12 other-actions">
                <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\moreactions.phtml (start) -->
                <h4>Other Actions</h4>
                <ul class="product-info-links hide-on-print">
                  <li class="partlist-label-container"><a href="#" id="parlistdropdownbtn-HSED02UMBV" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="lgtGray" onclick="return false;"><span class="glyphicon glyphicon-pushpin pin-icon"></span><span>Add to parts list</span></a>
                    <ul class="dropdown-list dropdown-menu withoutLgn" aria-labelledby="parlistdropdownbtn-HSED02UMBV">
                      <li><a href="https://www.schrack.com/shop/customer/account/login/referer/aHR0cHM6Ly93d3cuc2NocmFjay5jb20vc2hvcC9uZXR3b3JrLXRlY2hub2xvZ3ktc2VydmVyLXJvb20tZXF1aXBtZW50L25ldHdvcmtpbmctdGVjaG5vbG9neS1jb3BwZXIvcy1qYWNrLWNhdC02YS1zeXN0ZW0tbW9kdWxhci9kYXRlbmRvc2VuL3MtamFjay12aXNpby1tb2R1bGUtaW5zZXJ0LXVhZS1kZXNpZ24tZm9yLW9uZS1vci10d28tcy1qYWNrLW1vZHVsZXMtd2l0aG91dC1jZW50cmFscGxhdGUtd2l0aG91dC1jb3Zlci9tb2R1bGUtaW5zZXJ0LWVtcHR5LWZvci0xLW8uaHRtbA,,/" title="Login">Please login first!</a></li>
                    </ul>
                  </li>
                  <li class="project-price"><a id="project-price" href="https://www.schrack.com/onlinecontact/?article=Request+project+price+for+article+HSED02UMBV" rel="nofollow" target="_blank"><img src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/project-price.png" class="loaded" data-was-processed="true"><span>Request project price</span></a></li>
                </ul>
                <script type="text/javascript">
                  jQuery(document).ready(function() {
                    // Google Tag Manager Project Price Request
                    jQuery('#project-price').on('click', function() {
                      var custom_item_id = "HSED02UMBV";
                      var custom_item_name = "Module insert empty UAE Design 1/2 S-JACK modules, angled";
                      var custom_item_category = "4855612";
                      gtag({
                        'event': 'project_price_request',
                        'custom_item_id': custom_item_id,
                        'custom_item_name': custom_item_name,
                        'custom_item_category': custom_item_category
                      });
                    });
                    //GA4 Implementation (end)
                  });
                </script>
                <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\moreactions.phtml (end) -->
              </div>
            </form>
          </div>

        </div>
        <!-- Product Details -->
        <!-- Product Accordin -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12  product-content-section">
            <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\attributes.phtml (start) -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <!-- app/design/frontend/schrack/schrackresponsive/template/catalog/product/view/otherbatches.phtml(start) -->
              <!-- app/design/frontend/schrack/schrackresponsive/template/catalog/product/view/otherbatches.phtml(end) --> <input type="hidden" id="product_attributes_status" value="open">
              <div id="product_attributes" class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a id="productDetailsAccordeonButton" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                      Product Details <span class="glyphicon glyphicon-menu-down pull-right arrow-icon"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="detail-description-headline">SCHRACK-Info</h2>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 detail-description">
                        The HSED02UMBV UAE module insert can be fitted with one or two S-JACK modules or two TOOLLESS LINE SFB-modules<br>One module is inserted into the center of the insert.<br>Two modules are inserted side by side.<br>Compatible with all common design-compatible switch programs, such as the SCHRACK VISIO S 55 or SCHRACK VISIO S 50 covers and matching frames in pure white, anthracite, silver and black.<br>Suitable Insulated female Push-on terminal GI5587512-: 6.3mm.<br>Suitable for VISIO S 55 (1 or 2 modules) and VISIO S 50 (2 modules) covers.<br>Suitable for UAE covers SCHRACK VISIO S 55 (1 or 2 modules) and SCHRACK VISIO S 50 (2 modules), as well as for UAE covers from other switch program vendors. </div>
                    </div>
                    <div class="row hide-on-print">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="hr">
                          <hr>
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive tableCont marginB15">
                      <table class="attributes table">
                        <tbody>
                          <tr>
                            <th>EAN-Code</th>
                            <td>
                              9004840595109 </td>
                          </tr>
                          <tr>
                            <th>Net length</th>
                            <td>
                              80,00mm </td>
                          </tr>
                          <tr>
                            <th>Net width</th>
                            <td>
                              80,00mm </td>
                          </tr>
                          <tr>
                            <th>Net height</th>
                            <td>
                              28,00mm </td>
                          </tr>
                          <tr>
                            <th>Min. ambient temperature </th>
                            <td>
                              -10°C </td>
                          </tr>
                          <tr>
                            <th>Max. ambient temperature </th>
                            <td>
                              60°C </td>
                          </tr>
                          <tr>
                            <th>Net weight</th>
                            <td>
                              0,09kg </td>
                          </tr>
                          <tr>
                            <th>Product</th>
                            <td>
                              Outlet </td>
                          </tr>
                          <tr>
                            <th>SCHRACK Format</th>
                            <td>
                              SFB </td>
                          </tr>
                          <tr>
                            <th>Series</th>
                            <td>
                              S-JACK </td>
                          </tr>
                          <tr>
                            <th>Ports</th>
                            <td>
                              2, 1 </td>
                          </tr>
                          <tr>
                            <th>Manufacturer</th>
                            <td>
                              Schrack </td>
                          </tr>
                          <tr>
                            <th>Packaging units</th>
                            <td>
                              1 pc, 5 pc, 100 pc </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="row-fine foreign-keywords">
                      <div class="heading">Foreign Keywords:</div>
                      <div class="content">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            Keystone; Keystones; CKVD1DS; Datendose; Leerdose; Moduleinsatz; Tragplatte; Einsatz </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            Flushmount, centralplate, </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default print-hide-imp  product_downloads">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a id="accordionDownloads" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Downloads <span class="glyphicon glyphicon-menu-down pull-right arrow-icon"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">

                    <div id="product-files" class="product-files">
                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment1" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 4,51 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment1').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbv.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment2" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,38 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment2').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv02.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment3" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,44 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment3').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv03.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment4" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 4,59 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment4').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv04.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment5" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 3,63 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment5').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv05.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment6" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 3,09 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment6').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv06.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment7" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,27 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment7').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv07.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment8" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,37 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment8').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv08.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment9" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,14 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment9').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv09.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment10" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 2,99 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment10').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv10.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment11" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 3,59 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment11').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv11.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="foto foto" id="attachment12" href="javascript: return false" title="Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">jpg , </span> 5,29 MB)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment12').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'imageFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://image.schrackcdn.com/foto/f_hsed02umbvv12.jpg');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                      <div class="filelinks-single">
                        <a rel="nofollow" class="onlinedatasheet pdfFileDownload" id="attachment13" href="javascript: return false" title="Online Datasheet: Module insert empty UAE Design 1/2 S-JACK modules, angled">Online Datasheet: Module insert empty UAE Design 1/2 S-JACK modules, angled <span class="filelinks-filetype">(<span class="filelinks-fileext">pdf , </span> 0,00 B)</span>
                        </a>
                      </div>
                      <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function() {
                          jQuery('#attachment13').on('click', function() {
                            var realUserClicked = jQuery('#realUserIdent').val();
                            if (dataLayer) {
                              dataLayer.push({
                                'event': 'userDownloads',
                                'eventCategory': 'File Download',
                                'eventAction': 'Single Media Detail Page Download',
                                'eventLabel': 'onlinedatasheetFileDownload',
                                'productSku': 'HSED02UMBV'
                              });
                            }
                            window.open('https://www.schrack.com/shop/catalog/download/deliverOnlineDataSheet?articlenr=HSED02UMBV' + realUserClicked, '_blank');
                            return false; //this is critical to stop the click event which will trigger a normal file download
                          });
                        });
                        //]]>
                      </script>

                    </div>

                  </div>

                  <div id="copy_and_paste_links" style="padding: 15px; display: none; ">
                    <h2>Copy&amp;Paste Links:</h2>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbv.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbv.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv02.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv02.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv03.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv03.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv04.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv04.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv05.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv05.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv06.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv06.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv07.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv07.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv08.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv08.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv09.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv09.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv10.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv10.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv11.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv11.jpg<br><br>
                    <a href="https://image.schrackcdn.com/foto/f_hsed02umbvv12.jpg">Photo: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://image.schrackcdn.com/foto/f_hsed02umbvv12.jpg<br><br>
                    <a href="https://www.schrack.com/shop/catalog/download/deliverOnlineDataSheet?articlenr=HSED02UMBV&amp;realUser=yes">Online Datasheet: Module insert empty UAE Design 1/2 S-JACK modules, angled</a>: https://www.schrack.com/shop/catalog/download/deliverOnlineDataSheet?articlenr=HSED02UMBV&amp;realUser=yes<br><br>
                  </div>

                  <script type="text/javascript">
                    //<![CDATA[
                    jQuery(document).ready(function() {

                      // Google Tag Manager Product Details Open
                      jQuery('#productDetailsAccordeonButton, #accordionDownloads').on('click', function() {
                        let linkText = jQuery(this).text().trim();
                        let eventData = {
                          'event': 'product_details_open',
                          'link_text': linkText,
                        };

                        window.dataLayer.push(eventData);
                      });

                      console.log("localStorage.actAsACustomer = " + localStorage.actAsACustomer);
                      console.log("localStorage.customerLoggedInEmail = " + localStorage.customerLoggedInEmail);
                      var realLoggedInUser = typeof localStorage.customerLoggedInEmail == 'string' ?
                        localStorage.customerLoggedInEmail :
                        '';
                      if (localStorage.actAsACustomer == 1 ||
                        (realLoggedInUser > '' && (
                          realLoggedInUser.match(/live.schrack.com/i) ||
                          realLoggedInUser.match(/@schrack./i) ||
                          realLoggedInUser.match(/@schrack-technik.'/i)))) {
                        jQuery('#copy_and_paste_links').show();
                      }
                    });
                    //]]>
                  </script>

                </div>
              </div>
            </div>
            <input type="hidden" id="realUserIdent" val="" value="&amp;realUser=yes">
          </div>

          <script type="text/javascript">
            //<![CDATA[

            jQuery(document).ready(function() {
              jQuery('#accordionDownloads').on('click', function() {
                console.log('clicked on accordion');
                jQuery('#realUserIdent').val('&realUser=yes');
              });

              if (window.location.href.indexOf('focusDownloads=1') > 0) {
                setTimeout(function() {
                  jQuery('#accordionDownloads').trigger('click');
                }, 500);
                jQuery('html, body').animate({
                  scrollTop: (jQuery('#accordionDownloads').offset().top)
                }, 'slow');
              }

              jQuery('#product_attributes').on('click', function() {
                if (jQuery('#product_attributes_status').val() == 'closed') {
                  if (dataLayer) {
                    dataLayer.push({
                      'event': 'productDetailsAttributesOpened',
                      'eventLabel': 'HSED02UMBV'
                    });
                  }
                }
                jQuery('#product_attributes_status').val('open');
              });

              setTimeout(function() {
                jQuery('#productDetailsAccordeonButton').click();
              }, 2000);

            });

            //]]>
          </script>

          <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\attributes.phtml (end) -->
        </div>
      </div>
      <!-- Product Accordin -->
      <!-- View Accessories -->
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\accessories.phtml (start) -->

      <style>
        .accessories_headline_container {
          margin-left: 14px !important;
          margin-top: 12px !important;
        }

        .view_accessories_list .bx-wrapper,
        .view_accessories_list .bx-viewport {
          height: 300px !important;
        }


        .view_accessories .bx-controls-direction a.bx-prev {
          left: 6px !important;
        }

        .view_accessories .bx-controls-direction a.bx-next {
          right: 6px !important;
        }

        .accessories_slider_ajax_gif_container {
          float: left !important;
          width: 143px !important;
          margin-top: -7px !important;
          display: block !important;
          height: 30px !important;
        }

        .accessories_slider_ajax_gif {
          width: 20px !important;
          display: block;
          margin-left: auto;
          margin-right: auto;
          margin-top: 5px;
        }

        .accessories_slider_price_currency {
          float: left;
          font-size: 14px !important;
        }

        .accessories_slider_price {
          color: #005b9f;
          font-size: 14px !important;
          float: left;
          margin-left: 4px;
        }

        .accessories_slider_price_unit {
          float: left;
          font-size: 14px !important;
        }

        .accessories_slider_qty {
          float: left !important;
          margin-left: 24%;
          width: 40px;
          text-align: center !important;
          color: #898989 !important;
          font-size: 16px !important;
          font-weight: bold !important;
          padding: 0 !important;
          border: 1px solid #888;
          height: 25px !important;
        }

        .accessories_slider_cart {
          float: left !important;
          margin-left: 10px;
          padding: 0;
          border: none;
          width: 47px;
          height: 25px;
        }

        .accessories_slider_cart:after {
          height: 25px !important;
        }

        .cartButtonImage {
          width: 20px !important;
          margin-left: 15px !important;
        }

        .accessory_image_link img {
          margin-top: -4px;
        }

        .accessory_text_link {
          font-size: 16px !important;
          line-height: 18px !important;
        }

        .add-to-new-partslist {
          height: auto !important;
          width: 86px !important;
        }

        .addToExistingPartslist {
          height: auto !important;
          text-align: left !important;
          font-size: 11px !important;
          width: 122px !important;
        }

        .partslist_dropdown_menu {
          height: 265px !important;
          width: 141px !important;
          left: 46px !important;
        }

        .newPartslistDiv {
          height: 24px;
          margin-left: -11px !important;
        }

        .newPartslistText {
          font-size: 10px !important;
          word-wrap: break-word;
          text-align: left;
          margin-left: 25px !important;
        }
      </style>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 view_accessories product-list-slide">
          <div class="col-md-9 col-sm-9 col-xs-9 padL0">
            <h3 class="headline accessories_headline_container">Accessories</h3>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 pull-right text-right padR0">
            <!--a href="#"></a-->
          </div>
        </div>
        <div class="inner" id="featureSliderCon">
          <div class="bx-wrapper" style="max-width: 1040px;">
            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 325px;">
              <ul class="view-accessories product-list-slide-list2" style="width: 22215%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                <li class="slide product-item sliderBoxItem" aria-hidden="false" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">HSEMRJ6GS2</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-HSEMRJ6GS2>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_HSEMRJ6GS2" aria-labelledby="accessories_parlistdropdownbtn-HSEMRJ6GS2">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="HSEMRJ6GS2" data-preview-path="https://image.schrackcdn.com/340x380/f_hsemrj6gs2_v00.jpg" href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/buchsen/s-jack-modules-rj45-shielded-cat-6a-schrack-format-b-sfb/s-jack-module-rj45-shielded-cat-6a-10gb-24-pieces-box-hsemrj6gs2.html" title="S-JACK Module RJ45 shielded, Cat.6a 10GB, 24 pieces box">
                      <img src="https://image.schrackcdn.com/340x380/f_hsemrj6gs2_v00.jpg" alt="S-JACK Module RJ45 shielded, Cat.6a 10GB, 24 pieces box" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="HSEMRJ6GS2" href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/buchsen/s-jack-modules-rj45-shielded-cat-6a-schrack-format-b-sfb/s-jack-module-rj45-shielded-cat-6a-10gb-24-pieces-box-hsemrj6gs2.html" title="S-JACK Module RJ45 shielded, Cat.6a 10GB, 24 pieces box">
                      S-JACK Module RJ45 shielded, Cat.6a 10GB, 24 pieces box </a>
                  </div>
                  <div data-sku="HSEMRJ6GS2" id="accessories_slider_priceHSEMRJ6GS2" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesHSEMRJ6GS2" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyHSEMRJ6GS2" class="accessories_slider_qty qty-HSEMRJ6GS2" data-sku="HSEMRJ6GS2">
                    <button id="addtocart-related-HSEMRJ6GS2" class="bttn-sm accessories_slider_cart" data-sku="HSEMRJ6GS2">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataHSEMRJ6GS2" data-name="S-JACK Module RJ45 shielded, Cat.6a 10GB, 24 pieces box" data-category="87-02-261_18-02-01">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="false" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">HSEMRJ6GS1</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-HSEMRJ6GS1>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_HSEMRJ6GS1" aria-labelledby="accessories_parlistdropdownbtn-HSEMRJ6GS1">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="HSEMRJ6GS1" data-preview-path="https://image.schrackcdn.com/340x380/f_hsemrj6gs1_v00.jpg" href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/buchsen/s-jack-modules-rj45-shielded-cat-6a-schrack-format-b-sfb/s-jack-module-rj45-shielded-cat-6a-10gb-single-pack-hsemrj6gs1.html" title="S-JACK Module RJ45 shielded, Cat.6a 10GB, Single Pack">
                      <img src="https://image.schrackcdn.com/340x380/f_hsemrj6gs1_v00.jpg" alt="S-JACK Module RJ45 shielded, Cat.6a 10GB, Single Pack" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="HSEMRJ6GS1" href="https://www.schrack.com/shop/network-technology-server-room-equipment/networking-technology-copper/s-jack-cat-6a-system-modular/buchsen/s-jack-modules-rj45-shielded-cat-6a-schrack-format-b-sfb/s-jack-module-rj45-shielded-cat-6a-10gb-single-pack-hsemrj6gs1.html" title="S-JACK Module RJ45 shielded, Cat.6a 10GB, Single Pack">
                      S-JACK Module RJ45 shielded, Cat.6a 10GB, Single Pack </a>
                  </div>
                  <div data-sku="HSEMRJ6GS1" id="accessories_slider_priceHSEMRJ6GS1" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesHSEMRJ6GS1" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyHSEMRJ6GS1" class="accessories_slider_qty qty-HSEMRJ6GS1" data-sku="HSEMRJ6GS1">
                    <button id="addtocart-related-HSEMRJ6GS1" class="bttn-sm accessories_slider_cart" data-sku="HSEMRJ6GS1">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataHSEMRJ6GS1" data-name="S-JACK Module RJ45 shielded, Cat.6a 10GB, Single Pack" data-category="87-02-261_18-02-01">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="false" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV104312--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV104312-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV104312--" aria-labelledby="accessories_parlistdropdownbtn-EV104312--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV104312--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev104312--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-white-ev104312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, white">
                      <img src="https://image.schrackcdn.com/340x380/f_ev104312--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 2-Port, white" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV104312--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-white-ev104312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, white">
                      Cover for RJ45 UAE outlet, labelling window, 2-Port, white </a>
                  </div>
                  <div data-sku="EV104312--" id="accessories_slider_priceEV104312--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV104312--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV104312--" class="accessories_slider_qty qty-EV104312--" data-sku="EV104312--">
                    <button id="addtocart-related-EV104312--" class="bttn-sm accessories_slider_cart" data-sku="EV104312--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV104312--" data-name="Cover for RJ45 UAE outlet, labelling window, 2-Port, white" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="false" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV104314--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV104314-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV104314--" aria-labelledby="accessories_parlistdropdownbtn-EV104314--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV104314--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev104314--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-white-ev104314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, white">
                      <img src="https://image.schrackcdn.com/340x380/f_ev104314--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 1-Port, white" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV104314--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-white-ev104314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, white">
                      Cover for RJ45 UAE outlet, labelling window, 1-Port, white </a>
                  </div>
                  <div data-sku="EV104314--" id="accessories_slider_priceEV104314--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV104314--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV104314--" class="accessories_slider_qty qty-EV104314--" data-sku="EV104314--">
                    <button id="addtocart-related-EV104314--" class="bttn-sm accessories_slider_cart" data-sku="EV104314--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV104314--" data-name="Cover for RJ45 UAE outlet, labelling window, 1-Port, white" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="false" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV114312--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV114312-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV114312--" aria-labelledby="accessories_parlistdropdownbtn-EV114312--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV114312--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev114312--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-anthrac-ev114312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, anthrac">
                      <img src="https://image.schrackcdn.com/340x380/f_ev114312--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 2-Port, anthrac" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV114312--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-anthrac-ev114312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, anthrac">
                      Cover for RJ45 UAE outlet, labelling window, 2-Port, anthrac </a>
                  </div>
                  <div data-sku="EV114312--" id="accessories_slider_priceEV114312--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV114312--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV114312--" class="accessories_slider_qty qty-EV114312--" data-sku="EV114312--">
                    <button id="addtocart-related-EV114312--" class="bttn-sm accessories_slider_cart" data-sku="EV114312--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV114312--" data-name="Cover for RJ45 UAE outlet, labelling window, 2-Port, anthrac" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV114314--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV114314-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV114314--" aria-labelledby="accessories_parlistdropdownbtn-EV114314--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV114314--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev114314--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-anthrac-ev114314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, anthrac">
                      <img src="https://image.schrackcdn.com/340x380/f_ev114314--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 1-Port, anthrac" class="loaded" data-was-processed="true">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV114314--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-anthrac-ev114314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, anthrac">
                      Cover for RJ45 UAE outlet, labelling window, 1-Port, anthrac </a>
                  </div>
                  <div data-sku="EV114314--" id="accessories_slider_priceEV114314--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV114314--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV114314--" class="accessories_slider_qty qty-EV114314--" data-sku="EV114314--">
                    <button id="addtocart-related-EV114314--" class="bttn-sm accessories_slider_cart" data-sku="EV114314--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV114314--" data-name="Cover for RJ45 UAE outlet, labelling window, 1-Port, anthrac" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV124312--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV124312-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV124312--" aria-labelledby="accessories_parlistdropdownbtn-EV124312--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV124312--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev124312--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-silver-ev124312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, silver">
                      <img src="https://image.schrackcdn.com/340x380/f_ev124312--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 2-Port, silver">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV124312--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-silver-ev124312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, silver">
                      Cover for RJ45 UAE outlet, labelling window, 2-Port, silver </a>
                  </div>
                  <div data-sku="EV124312--" id="accessories_slider_priceEV124312--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV124312--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV124312--" class="accessories_slider_qty qty-EV124312--" data-sku="EV124312--">
                    <button id="addtocart-related-EV124312--" class="bttn-sm accessories_slider_cart" data-sku="EV124312--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV124312--" data-name="Cover for RJ45 UAE outlet, labelling window, 2-Port, silver" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV124314--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV124314-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV124314--" aria-labelledby="accessories_parlistdropdownbtn-EV124314--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV124314--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev124314--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-silver-ev124314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, silver">
                      <img src="https://image.schrackcdn.com/340x380/f_ev124314--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 1-Port, silver">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV124314--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-silver-ev124314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, silver">
                      Cover for RJ45 UAE outlet, labelling window, 1-Port, silver </a>
                  </div>
                  <div data-sku="EV124314--" id="accessories_slider_priceEV124314--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV124314--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV124314--" class="accessories_slider_qty qty-EV124314--" data-sku="EV124314--">
                    <button id="addtocart-related-EV124314--" class="bttn-sm accessories_slider_cart" data-sku="EV124314--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV124314--" data-name="Cover for RJ45 UAE outlet, labelling window, 1-Port, silver" data-category="14-29_14-29-17">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV134312--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV134312-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV134312--" aria-labelledby="accessories_parlistdropdownbtn-EV134312--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV134312--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev134312--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-black-ev134312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, black">
                      <img src="https://image.schrackcdn.com/340x380/f_ev134312--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 2-Port, black">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV134312--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-2-port-black-ev134312.html" title="Cover for RJ45 UAE outlet, labelling window, 2-Port, black">
                      Cover for RJ45 UAE outlet, labelling window, 2-Port, black </a>
                  </div>
                  <div data-sku="EV134312--" id="accessories_slider_priceEV134312--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV134312--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV134312--" class="accessories_slider_qty qty-EV134312--" data-sku="EV134312--">
                    <button id="addtocart-related-EV134312--" class="bttn-sm accessories_slider_cart" data-sku="EV134312--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV134312--" data-name="Cover for RJ45 UAE outlet, labelling window, 2-Port, black" data-category="">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV134314--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV134314-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV134314--" aria-labelledby="accessories_parlistdropdownbtn-EV134314--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV134314--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev134314--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-black-ev134314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, black">
                      <img src="https://image.schrackcdn.com/340x380/f_ev134314--.jpg" alt="Cover for RJ45 UAE outlet, labelling window, 1-Port, black">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV134314--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/network-technology/cover-for-rj45-uae-outlet-labelling-window-1-port-black-ev134314.html" title="Cover for RJ45 UAE outlet, labelling window, 1-Port, black">
                      Cover for RJ45 UAE outlet, labelling window, 1-Port, black </a>
                  </div>
                  <div data-sku="EV134314--" id="accessories_slider_priceEV134314--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV134314--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV134314--" class="accessories_slider_qty qty-EV134314--" data-sku="EV134314--">
                    <button id="addtocart-related-EV134314--" class="bttn-sm accessories_slider_cart" data-sku="EV134314--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV134314--" data-name="Cover for RJ45 UAE outlet, labelling window, 1-Port, black" data-category="">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV105301--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV105301-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV105301--" aria-labelledby="accessories_parlistdropdownbtn-EV105301--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV105301--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev105301--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-white-ev105301.html" title="One gang frame, Design CUBIC, white">
                      <img src="https://image.schrackcdn.com/340x380/f_ev105301--.jpg" alt="One gang frame, Design CUBIC, white">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV105301--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-white-ev105301.html" title="One gang frame, Design CUBIC, white">
                      One gang frame, Design CUBIC, white </a>
                  </div>
                  <div data-sku="EV105301--" id="accessories_slider_priceEV105301--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV105301--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV105301--" class="accessories_slider_qty qty-EV105301--" data-sku="EV105301--">
                    <button id="addtocart-related-EV105301--" class="bttn-sm accessories_slider_cart" data-sku="EV105301--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV105301--" data-name="One gang frame, Design CUBIC, white" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV105302--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV105302-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV105302--" aria-labelledby="accessories_parlistdropdownbtn-EV105302--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV105302--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev105302--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-white-ev105302.html" title="Two gang frame, Design CUBIC, white">
                      <img src="https://image.schrackcdn.com/340x380/f_ev105302--.jpg" alt="Two gang frame, Design CUBIC, white">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV105302--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-white-ev105302.html" title="Two gang frame, Design CUBIC, white">
                      Two gang frame, Design CUBIC, white </a>
                  </div>
                  <div data-sku="EV105302--" id="accessories_slider_priceEV105302--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV105302--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV105302--" class="accessories_slider_qty qty-EV105302--" data-sku="EV105302--">
                    <button id="addtocart-related-EV105302--" class="bttn-sm accessories_slider_cart" data-sku="EV105302--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV105302--" data-name="Two gang frame, Design CUBIC, white" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV115301--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV115301-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV115301--" aria-labelledby="accessories_parlistdropdownbtn-EV115301--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV115301--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev115301--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-anthracite-ev115301.html" title="One gang frame, Design CUBIC, anthracite">
                      <img src="https://image.schrackcdn.com/340x380/f_ev115301--.jpg" alt="One gang frame, Design CUBIC, anthracite">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV115301--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-anthracite-ev115301.html" title="One gang frame, Design CUBIC, anthracite">
                      One gang frame, Design CUBIC, anthracite </a>
                  </div>
                  <div data-sku="EV115301--" id="accessories_slider_priceEV115301--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV115301--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV115301--" class="accessories_slider_qty qty-EV115301--" data-sku="EV115301--">
                    <button id="addtocart-related-EV115301--" class="bttn-sm accessories_slider_cart" data-sku="EV115301--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV115301--" data-name="One gang frame, Design CUBIC, anthracite" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV115302--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV115302-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV115302--" aria-labelledby="accessories_parlistdropdownbtn-EV115302--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV115302--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev115302--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-anthracite-ev115302.html" title="Two gang frame, Design CUBIC, anthracite">
                      <img src="https://image.schrackcdn.com/340x380/f_ev115302--.jpg" alt="Two gang frame, Design CUBIC, anthracite">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV115302--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-anthracite-ev115302.html" title="Two gang frame, Design CUBIC, anthracite">
                      Two gang frame, Design CUBIC, anthracite </a>
                  </div>
                  <div data-sku="EV115302--" id="accessories_slider_priceEV115302--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV115302--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV115302--" class="accessories_slider_qty qty-EV115302--" data-sku="EV115302--">
                    <button id="addtocart-related-EV115302--" class="bttn-sm accessories_slider_cart" data-sku="EV115302--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV115302--" data-name="Two gang frame, Design CUBIC, anthracite" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV125301--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV125301-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV125301--" aria-labelledby="accessories_parlistdropdownbtn-EV125301--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV125301--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev125301--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-silver-ev125301.html" title="One gang frame, Design CUBIC, silver">
                      <img src="https://image.schrackcdn.com/340x380/f_ev125301--.jpg" alt="One gang frame, Design CUBIC, silver">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV125301--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-silver-ev125301.html" title="One gang frame, Design CUBIC, silver">
                      One gang frame, Design CUBIC, silver </a>
                  </div>
                  <div data-sku="EV125301--" id="accessories_slider_priceEV125301--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV125301--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV125301--" class="accessories_slider_qty qty-EV125301--" data-sku="EV125301--">
                    <button id="addtocart-related-EV125301--" class="bttn-sm accessories_slider_cart" data-sku="EV125301--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV125301--" data-name="One gang frame, Design CUBIC, silver" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV125302--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV125302-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV125302--" aria-labelledby="accessories_parlistdropdownbtn-EV125302--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV125302--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev125302--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-silver-ev125302.html" title="Two gang frame, Design CUBIC, silver">
                      <img src="https://image.schrackcdn.com/340x380/f_ev125302--.jpg" alt="Two gang frame, Design CUBIC, silver">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV125302--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-silver-ev125302.html" title="Two gang frame, Design CUBIC, silver">
                      Two gang frame, Design CUBIC, silver </a>
                  </div>
                  <div data-sku="EV125302--" id="accessories_slider_priceEV125302--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV125302--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV125302--" class="accessories_slider_qty qty-EV125302--" data-sku="EV125302--">
                    <button id="addtocart-related-EV125302--" class="bttn-sm accessories_slider_cart" data-sku="EV125302--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV125302--" data-name="Two gang frame, Design CUBIC, silver" data-category="14-29_14-29-21">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV135301--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV135301-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV135301--" aria-labelledby="accessories_parlistdropdownbtn-EV135301--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV135301--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev135301--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-black-ev135301.html" title="One gang frame, Design CUBIC, black">
                      <img src="https://image.schrackcdn.com/340x380/f_ev135301--.jpg" alt="One gang frame, Design CUBIC, black">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV135301--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/one-gang-frame-design-cubic-black-ev135301.html" title="One gang frame, Design CUBIC, black">
                      One gang frame, Design CUBIC, black </a>
                  </div>
                  <div data-sku="EV135301--" id="accessories_slider_priceEV135301--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV135301--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV135301--" class="accessories_slider_qty qty-EV135301--" data-sku="EV135301--">
                    <button id="addtocart-related-EV135301--" class="bttn-sm accessories_slider_cart" data-sku="EV135301--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV135301--" data-name="One gang frame, Design CUBIC, black" data-category="">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV135302--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV135302-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV135302--" aria-labelledby="accessories_parlistdropdownbtn-EV135302--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV135302--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev135302--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-black-ev135302.html" title="Two gang frame, Design CUBIC, black">
                      <img src="https://image.schrackcdn.com/340x380/f_ev135302--.jpg" alt="Two gang frame, Design CUBIC, black">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV135302--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/frames-design-cubic/two-gang-frame-design-cubic-black-ev135302.html" title="Two gang frame, Design CUBIC, black">
                      Two gang frame, Design CUBIC, black </a>
                  </div>
                  <div data-sku="EV135302--" id="accessories_slider_priceEV135302--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV135302--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV135302--" class="accessories_slider_qty qty-EV135302--" data-sku="EV135302--">
                    <button id="addtocart-related-EV135302--" class="bttn-sm accessories_slider_cart" data-sku="EV135302--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV135302--" data-name="Two gang frame, Design CUBIC, black" data-category="">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV105306--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV105306-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV105306--" aria-labelledby="accessories_parlistdropdownbtn-EV105306--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV105306--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev105306--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-white-ev105306.html" title="One gang wall mounting housing, white">
                      <img src="https://image.schrackcdn.com/340x380/f_ev105306--.jpg" alt="One gang wall mounting housing, white">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV105306--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-white-ev105306.html" title="One gang wall mounting housing, white">
                      One gang wall mounting housing, white </a>
                  </div>
                  <div data-sku="EV105306--" id="accessories_slider_priceEV105306--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV105306--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV105306--" class="accessories_slider_qty qty-EV105306--" data-sku="EV105306--">
                    <button id="addtocart-related-EV105306--" class="bttn-sm accessories_slider_cart" data-sku="EV105306--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV105306--" data-name="One gang wall mounting housing, white" data-category="14-29_14-29-23">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV115306--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV115306-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV115306--" aria-labelledby="accessories_parlistdropdownbtn-EV115306--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV115306--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev115306--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-anthracite-ev115306.html" title="One gang wall mounting housing, anthracite">
                      <img src="https://image.schrackcdn.com/340x380/f_ev115306--.jpg" alt="One gang wall mounting housing, anthracite">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV115306--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-anthracite-ev115306.html" title="One gang wall mounting housing, anthracite">
                      One gang wall mounting housing, anthracite </a>
                  </div>
                  <div data-sku="EV115306--" id="accessories_slider_priceEV115306--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV115306--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV115306--" class="accessories_slider_qty qty-EV115306--" data-sku="EV115306--">
                    <button id="addtocart-related-EV115306--" class="bttn-sm accessories_slider_cart" data-sku="EV115306--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV115306--" data-name="One gang wall mounting housing, anthracite" data-category="14-29_14-29-23">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV125306--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV125306-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV125306--" aria-labelledby="accessories_parlistdropdownbtn-EV125306--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV125306--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev125306--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-silver-ev125306.html" title="One gang wall mounting housing, silver">
                      <img src="https://image.schrackcdn.com/340x380/f_ev125306--.jpg" alt="One gang wall mounting housing, silver">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV125306--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-silver-ev125306.html" title="One gang wall mounting housing, silver">
                      One gang wall mounting housing, silver </a>
                  </div>
                  <div data-sku="EV125306--" id="accessories_slider_priceEV125306--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV125306--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV125306--" class="accessories_slider_qty qty-EV125306--" data-sku="EV125306--">
                    <button id="addtocart-related-EV125306--" class="bttn-sm accessories_slider_cart" data-sku="EV125306--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV125306--" data-name="One gang wall mounting housing, silver" data-category="14-29_14-29-23">
                </li>
                <li class="slide product-item sliderBoxItem" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 200px; margin-right: 10px;">
                  <div class="product-name actionIcon relatedItemActionButtons">
                    <div class="relatedSkuHeader">EV135306--</div>
                    <span class="glyphicon glyphicon-pushpin blueTxt" id="accessories_parlistdropdownbtn-EV135306-->" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Add to parts list" style="cursor:pointer;">
                    </span>
                    <ul class="dropdown-list dropdown-menu partslist_dropdown_menu withoutLgn" id="ulDropdownElementAccessories_EV135306--" aria-labelledby="accessories_parlistdropdownbtn-EV135306--">
                      <li class="add-to-new-partslist"><a href="https://www.schrack.com/shop/customer/account/login"> Please login first! </a></li>
                    </ul>
                  </div>
                  <div class="imgBox">
                    <div class="col-xs-12 col-sm-8 col-md-9 left prod-img-wrapper">
                      <div class="slider-product-container">
                      </div>
                    </div>
                    <a class="previewImageHover accessory_image_link product-image" data-sku="EV135306--" data-preview-path="https://image.schrackcdn.com/340x380/f_ev135306--.jpg" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-black-ev135306.html" title="One gang wall mounting housing, black">
                      <img src="https://image.schrackcdn.com/340x380/f_ev135306--.jpg" alt="One gang wall mounting housing, black">
                    </a>
                  </div>
                  <div class="slider_related_text_link_container">
                    <a class="accessory_text_link" data-sku="EV135306--" href="https://www.schrack.com/shop/building-technology-knx-intercoms/installation-switches-and-smoke-detectors/switches-visio-s-55-design-cubic/surface-mounting-housing/one-gang-wall-mounting-housing-black-ev135306.html" title="One gang wall mounting housing, black">
                      One gang wall mounting housing, black </a>
                  </div>
                  <div data-sku="EV135306--" id="accessories_slider_priceEV135306--" class="related_slider_price_container"><input type="hidden" id="price_unit_accessoriesEV135306--" value="1"><span class="accessories_slider_price_currency">EUR</span><span class="accessories_slider_price">On Request</span><span class="accessories_slider_price_unit">/1 pc</span></div>
                  <div style="clear: both !important;"></div>
                  <div class="related_slider_qty_cart_container">
                    <input type="text" id="accessories_slider_qtyEV135306--" class="accessories_slider_qty qty-EV135306--" data-sku="EV135306--">
                    <button id="addtocart-related-EV135306--" class="bttn-sm accessories_slider_cart" data-sku="EV135306--">
                      <img class="addToCartImage loading cartButtonImage" src="https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/cartIconWht.png" data-was-processed="true">
                    </button>
                  </div>
                  <div class="energyLabel"></div>

                  <input type="hidden" id="accessories_sliderItemDataEV135306--" data-name="One gang wall mounting housing, black" data-category="">
                </li>
              </ul>
            </div>
            <div class="bx-controls bx-has-controls-direction">
              <div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div>
            </div>
          </div>
        </div>
      </div>


      <script type="text/javascript">
        //<![CDATA[

        jQuery(document).ready(function() {
          jQuery('.view-accessories').bxSlider({
            touchEnabled: touchDisableForDesktop,
            auto: false,
            pager: false,
            slideWidth: 200,
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 5,
            slideMargin: 10,
            infiniteLoop: false,
            hideControlOnEnd: true,
            responsive: true,
            oneToOneTouch: true,
            onSliderLoad: function(currentIndex) {
              jQueryLazyLoader.update();
            }
          });

          var fetchedPartslistData = '';
          if (typeof partListData !== 'undefined' && partListData) {
            fetchedPartslistData = partListData;
          } else {
            if (typeof localStorage.partListData !== 'undefined' && localStorage.partListData) {
              fetchedPartslistData = JSON.parse(localStorage.partListData);
            }
          }


          var skuListOfAccessoriesSlider = new Object();

          var configObject = new Object();
          var sku = 'HSEMRJ6GS2';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '193143';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_HSEMRJ6GS2';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'HSEMRJ6GS1';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '193142';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_HSEMRJ6GS1';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV104312--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199065';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV104312--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV104314--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199446';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV104314--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV114312--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '198924';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV114312--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV114314--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199441';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV114314--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV124312--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199078';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV124312--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV124314--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199444';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV124314--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV134312--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '203492';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV134312--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV134314--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '203493';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV134314--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV105301--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199091';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV105301--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV105302--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '198869';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV105302--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV115301--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '198944';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV115301--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV115302--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '198990';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV115302--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV125301--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199087';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV125301--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV125302--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199082';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV125302--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV135301--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '203461';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV135301--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV135302--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '203462';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV135302--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV105306--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199135';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV105306--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV115306--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '199010';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV115306--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV125306--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '198855';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV125306--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;
          var configObject = new Object();
          var sku = 'EV135306--';
          configObject.partListData = fetchedPartslistData;
          configObject.mageProductEntityId = '203458';
          configObject.productSku = sku;
          configObject.destinationElementClass = 'relatedItemActionButtons';
          configObject.destinationDropdownId = 'ulDropdownElementAccessories_EV135306--';
          configObject.trackingFeatureSource = 'product detail view accessories slider';
          buildHTMLForPartslistSelection(configObject);

          skuListOfAccessoriesSlider[sku] = sku;

          function getProductPricesForAccessoriesSlider() {
            var get_product_prices_service_url = BASE_URL + '/onlinetools/commonTools/getProductPrices';
            if (typeof skuListOfAccessoriesSlider !== 'undefined') {
              jQuery.ajax(get_product_prices_service_url, {
                'dataType': 'json',
                'type': "POST",
                'data': {
                  'skuList': skuListOfAccessoriesSlider
                },
                'success': function(responseData) {
                  var parsedData = responseData;
                  jQuery.each(parsedData, function(sku, recordset) {
                    var currencyClass = "accessories_slider_price_currency";
                    var priceClass = "accessories_slider_price";
                    var priceUnitClass = "accessories_slider_price_unit";

                    var currency = recordset.currency;
                    var price = recordset.price;
                    var priceunitPerQty = "/" + recordset.priceunit + ' ' + recordset.qtyunit;
                    var priceUnit = recordset.priceunit;

                    var sliderPriceCurrencyHtml = '<span class="' + currencyClass + '">' + currency + '</span>';
                    var sliderPriceHtml = '<span class="' + priceClass + '">' + price + '</span>';
                    var sliderPriceUnitHtml = '<span class="' + priceUnitClass + '">' + priceunitPerQty + '</span>';

                    var priceUnitHtml = '<input type="hidden" id="price_unit_accessories' + sku + '"';
                    priceUnitHtml += ' value="' + priceUnit + '">';

                    var resultPriceString = priceUnitHtml;
                    resultPriceString += sliderPriceCurrencyHtml + sliderPriceHtml + sliderPriceUnitHtml;

                    if (recordset.qtyunit.length > 5) {
                      jQuery('#accessories_slider_price' + sku).css('margin-left', '0');
                    }

                    jQuery('#accessories_slider_price' + sku).text('');
                    jQuery('#accessories_slider_price' + sku).html(resultPriceString);
                  });
                },
                'error': function(data) {
                  var parsedData = data;
                  //debugger;
                }
              });
            }
          }

          // Fetch Prices lazy:
          getProductPricesForAccessoriesSlider();

          jQuery('.accessories_slider_cart').on('click', function() {
            qtyAddToCartAccessories(this);
          });

          jQuery('.accessories_slider_qty').keyup(function(e) {
            if (e.keyCode == 13) {
              var sku = jQuery(this).data('sku');
              var that = jQuery('#addtocart-related-' + sku);
              qtyAddToCartAccessories(that);
            }
          });

          function qtyAddToCartAccessories(that) {
            var lastDefaultMinAccessoriesQuantity;

            var sku = jQuery(that).attr('data-sku');
            lastDefaultMinAccessoriesQuantity = jQuery('#price_unit_accessories' + sku).val();
            var insertedQuantityOfAccessoriesSlider = jQuery('#accessories_slider_qty' + sku).val();
            var selectedQuantityAccessories = 0;

            if (insertedQuantityOfAccessoriesSlider > 0) {
              selectedQuantityAccessories = insertedQuantityOfAccessoriesSlider;
            } else {
              selectedQuantityAccessories = lastDefaultMinAccessoriesQuantity;
              jQuery('#accessories_slider_qty' + sku).val(lastDefaultMinAccessoriesQuantity);
            }

            // Add to cart (sku + qty)
            jQuery('ul.messages').empty();
            jQuery('ul.errors').empty();
            jQuery.ajax(ajaxUrl, {
              'dataType': 'json',
              'type': 'POST',
              'data': {
                'form_key': 'XWDrviVZ1KV1rAfm',
                'setAddToCartFromSlider': {
                  'data': {
                    'sliderClass': 'view-accessories',
                    'sku': sku,
                    'quantity': selectedQuantityAccessories,
                    'drum': ''
                  }
                }
              },
              'success': function(data) {
                unsetOverlayLoader();
                var parsedData = data;
                var result = parsedData.setAddToCartFromSlider.result;
                if (result.showPopup == true) { // Open Inquiry Popup
                  jQuery('#quantitywarningpopup').html(result.popupHtml);
                  jQuery('#quantitywarningpopupBtn').click();
                } else {
                  //jQuery("html, body").animate({ scrollTop: 0 }, "slow");
                  //console.log('ScrollTop #52');
                  if (result.numberOfDifferentItemsInCart) {
                    jQuery('.MyCart').append('<div id="cartNoBxItemCount" class="cartNoBx">' + result.numberOfDifferentItemsInCart + '</' + 'div' + '>');
                  }
                  var newQuantityDetected = false;
                  if (result.data.newQty && result.data.newQty > 0) {
                    jQuery('#accessories_slider_qty' + sku).val(result.data.newQty);
                    selectedQuantityAccessories = result.data.newQty;
                    newQuantityDetected = true;
                  }

                  var messageArray = result.data.messages;
                  if (result.result.indexOf("SUCCESS") == -1) {
                    appendMessageUl(messageArray, 'messages', 'error-msg', 'glyphicon glyphicon-exclamation-sign');
                    console.log('appendMessageUl #08');
                  } else {
                    if (newQuantityDetected == false) {
                      var sliderItemName = jQuery('#accessories_sliderItemData' + sku).attr('data-name');
                      var sliderItemCategory = jQuery('#accessories_sliderItemData' + sku).attr('data-category');
                      var trackingData = new Object();
                      let priceContainer = document.querySelector("#accessories_slider_price" + sku);

                      trackingData.trackingEnabled = globalTRACKING_ENABLED;
                      trackingData.pagetype = 'product detail page';
                      trackingData.sku = sku;
                      trackingData.name = sliderItemName;
                      trackingData.price = priceContainer.querySelector('.accessories_slider_price').innerHTML.replace(".", "").replace(",", ".");
                      trackingData.category = sliderItemCategory;
                      trackingData.currencyCode = globalCURRENCY_CODE;
                      trackingData.quantity = selectedQuantityAccessories;
                      addToCartTracking(trackingData, 'Slider Detail Accessory Product');
                    }
                    appendMessageUl(messageArray, 'messages_hidden', 'success-msg', 'glyphicon glyphicon-ok');
                    console.log('appendMessageUl #09');
                  }
                }
              },
              'error': function(data) {
                var parsedData = data;
                //debugger;
              }
            });
          }

          function accessoriesTracking(sku) {
            var trackingData = new Object();
            trackingData.trackingEnabled = globalTRACKING_ENABLED;
            trackingData.pageType = 'product detail page';
            trackingData.affectedSku = sku;
            //trackingData.price             = dataProductPrice;
            trackingData.currencyCode = globalCURRENCY_CODE;
            trackingData.trackingSource = 'accessories product slider';
            trackingData.typoUrl = globalTYPO_URL;
            trackingData.shopCategoryAjaxUrl = globalSHOP_CATEGORY_AJAX_URL;
            trackingData.formKey = globalFORM_KEY;
            trackingData.crmUserId = globalCRM_USER_ID;
            trackingData.customerType = globalCUSTOMER_TYPE;
            trackingData.accountCrmId = globalACCOUNT_CRM_ID;
            trackingData.position = 1;

            trackProductClick(trackingData);
          }



          jQuery('.accessory_text_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "ACCESSORIES_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            accessoriesTracking(sku);
          });

          jQuery('.accessory_image_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "ACCESSORIES_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            accessoriesTracking(sku);
          });

        });

        //]]>
      </script>

      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\accessories.phtml (end) -->
      <!-- View Accessories -->
      <!-- View Family Products Slider start -->
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\family.phtml (start) -->




      <script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery('.family_products').bxSlider({
            touchEnabled: touchDisableForDesktop,
            auto: false,
            pager: false,
            slideWidth: 200,
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 5,
            slideMargin: 10,
            infiniteLoop: false,
            responsive: true,
            hideControlOnEnd: true,
            oneToOneTouch: true,
            onSliderLoad: function(currentIndex) {
              jQueryLazyLoader.update();
            }
          });


          var fetchedPartslistData = '';
          if (typeof partListData !== 'undefined' && partListData) {
            fetchedPartslistData = partListData;
          } else {
            if (typeof localStorage.partListData !== 'undefined' && localStorage.partListData) {
              fetchedPartslistData = JSON.parse(localStorage.partListData);
            }
          }



          function getProductPricesForRelatedSlider() {
            var get_product_prices_service_url = BASE_URL + '/onlinetools/commonTools/getProductPrices';
            if (typeof skuListOfRelatedSlider !== 'undefined') {
              jQuery.ajax(get_product_prices_service_url, {
                'dataType': 'json',
                'type': "POST",
                'data': {
                  'skuList': skuListOfRelatedSlider
                },
                'success': function(responseData) {
                  var parsedData = responseData;
                  jQuery.each(parsedData, function(sku, recordset) {
                    var currencyClass = "family_slider_price_currency";
                    var priceClass = "family_slider_price";
                    var priceUnitClass = "family_slider_price_unit";

                    var currency = recordset.currency;
                    var price = recordset.price;
                    var priceunitPerQty = "/" + recordset.priceunit + ' ' + recordset.qtyunit;
                    var priceUnit = recordset.priceunit;

                    var sliderPriceCurrencyHtml = '<span class="' + currencyClass + '">' + currency + '</span>';
                    var sliderPriceHtml = '<span class="' + priceClass + '">' + price + '</span>';
                    var sliderPriceUnitHtml = '<span class="' + priceUnitClass + '">' + priceunitPerQty + '</span>';

                    var priceUnitHtml = '<input type="hidden" id="price_unit_related' + sku + '"';
                    priceUnitHtml += ' value="' + priceUnit + '">';

                    var resultPriceString = priceUnitHtml;
                    resultPriceString += sliderPriceCurrencyHtml + sliderPriceHtml + sliderPriceUnitHtml;

                    if (recordset.qtyunit.length > 5) {
                      jQuery('#family_slider_price' + sku).css('margin-left', '0');
                    }

                    jQuery('#family_slider_price' + sku).text('');
                    jQuery('#family_slider_price' + sku).html(resultPriceString);
                  });
                },
                'error': function(data) {
                  var parsedData = data;
                  //debugger;
                }
              });
            }
          }

          // Fetch Prices lazy:
          getProductPricesForRelatedSlider();

          jQuery('.family_slider_cart').on('click', function() {
            qtyAddToCartRelated(this);
          });

          jQuery('.related_slider_qty').keyup(function(e) {
            if (e.keyCode == 13) {
              e.preventDefault();
              var sku = jQuery(this).data('sku');
              var that = jQuery('#addtocart-related-' + sku);
              console.log("that: ", that);
              qtyAddToCartRelated(that);
            }
          });

          function qtyAddToCartRelated(that) {
            var lastDefaultMinRelatedQuantity;

            var sku = jQuery(that).attr('data-sku');
            lastDefaultMinRelatedQuantity = jQuery('#price_unit_related' + sku).val();
            var insertedQuantityOfRelatedSlider = jQuery('#related_slider_qty' + sku).val();

            var selectedQuantityRelated = 0;

            if (insertedQuantityOfRelatedSlider > 0) {
              selectedQuantityRelated = insertedQuantityOfRelatedSlider;
            } else {
              selectedQuantityRelated = lastDefaultMinRelatedQuantity;
              jQuery('#related_slider_qty' + sku).val(lastDefaultMinRelatedQuantity);
            }

            // Add to cart (sku + qty)
            jQuery('ul.messages').empty();
            jQuery('ul.errors').empty();
            jQuery.ajax(ajaxUrl, {
              'dataType': 'json',
              'type': 'POST',
              'data': {
                'form_key': 'XWDrviVZ1KV1rAfm',
                'setAddToCartFromSlider': {
                  'data': {
                    'sliderClass': 'view_family_list',
                    'sku': sku,
                    'quantity': selectedQuantityRelated,
                    'drum': ''
                  }
                }
              },
              'success': function(data) {
                unsetOverlayLoader();
                var parsedData = data;
                var result = parsedData.setAddToCartFromSlider.result;
                var savedOldValueBeforeOverwrite = jQuery('#qty-' + sku).val();
                if (result.showPopup == true) { // Open Inquiry Popup
                  jQuery('#qty-' + item_sku).val(savedOldValueBeforeOverwrite);
                  jQuery('#quantitywarningpopup').html(result.popupHtml);
                  jQuery('#quantitywarningpopupBtn').click();
                } else {
                  //jQuery("html, body").animate({ scrollTop: 0 }, "slow");
                  //console.log('ScrollTop #54');
                  if (result.numberOfDifferentItemsInCart) {
                    jQuery('.MyCart').append('<div id="cartNoBxItemCount" class="cartNoBx">' + result.numberOfDifferentItemsInCart + '</' + 'div' + '>');
                  }
                  var newQuantityDetected = false;
                  if (result.data.newQty && result.data.newQty > 0) {
                    jQuery('#related_slider_qty' + sku).val(result.data.newQty);
                    selectedQuantityRelated = result.data.newQty;
                    newQuantityDetected = true;
                  }

                  var messageArray = result.data.messages;
                  if (result.result.indexOf("SUCCESS") == -1) {
                    appendMessageUl(messageArray, 'messages', 'error-msg', 'glyphicon glyphicon-exclamation-sign');
                    console.log('appendMessageUl #12');
                  } else {
                    if (newQuantityDetected == false) {
                      var sliderItemName = jQuery('#related_sliderItemData' + sku).attr('data-name');
                      var sliderItemCategory = jQuery('#related_sliderItemData' + sku).attr('data-category');
                      var trackingData = new Object();
                      let priceContainer = document.querySelector("#family_slider_price" + sku);

                      trackingData.trackingEnabled = globalTRACKING_ENABLED;
                      trackingData.pagetype = 'product detail page';
                      trackingData.sku = sku;
                      trackingData.name = sliderItemName;
                      trackingData.price = priceContainer.querySelector('.family_slider_price').innerHTML.replace(".", "").replace(",", ".");
                      trackingData.category = sliderItemCategory;
                      trackingData.currencyCode = globalCURRENCY_CODE;
                      trackingData.quantity = selectedQuantityRelated;
                      addToCartTracking(trackingData, 'Slider Detail Family Product');
                    }
                    appendMessageUl(messageArray, 'messages_hidden', 'success-msg', 'glyphicon glyphicon-ok');
                    console.log('appendMessageUl #13');
                  }
                }
              },
              'error': function(data) {
                var parsedData = data;
                //debugger;
              }
            });
          }

          function relatedTracking(sku) {
            var trackingData = new Object();
            trackingData.trackingEnabled = globalTRACKING_ENABLED;
            trackingData.pageType = 'product detail page';
            trackingData.affectedSku = sku;
            //trackingData.price             = dataProductPrice;
            trackingData.currencyCode = globalCURRENCY_CODE;
            trackingData.trackingSource = 'related product slider';
            trackingData.typoUrl = globalTYPO_URL;
            trackingData.shopCategoryAjaxUrl = globalSHOP_CATEGORY_AJAX_URL;
            trackingData.formKey = globalFORM_KEY;
            trackingData.crmUserId = globalCRM_USER_ID;
            trackingData.customerType = globalCUSTOMER_TYPE;
            trackingData.accountCrmId = globalACCOUNT_CRM_ID;
            trackingData.position = 1;

            trackProductClick(trackingData);
          }

          jQuery('.family_text_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "FAMILY_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            relatedTracking(sku);
          });

          jQuery('.family_image_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "RELATED_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            relatedTracking(sku);
          });

        });
      </script>
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\family.phtml (end) -->
      <!-- View Family Products Slider end -->
      <!-- Related Products -->
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\related.phtml (start) -->


      <style>
        .related_headline_container {
          margin-left: 14px !important;
          margin-top: 12px !important;
        }

        .view_related_list {
          margin-left: 7px !important;
          width: 98.5% !important;
        }

        .view_related_list .bx-wrapper,
        .view_related_list .bx-viewport {
          height: 300px !important;
        }

        .bx-wrapper img {
          width: 60%;
        }

        .view_related .bx-controls-direction a.bx-prev {
          left: 6px !important;
        }

        .view_related .bx-controls-direction a.bx-next {
          right: 6px !important;
        }

        .related_slider_ajax_gif_container {
          float: left !important;
          width: 143px !important;
          margin-top: -7px !important;
          display: block !important;
          height: 30px !important;
        }

        .related_slider_ajax_gif {
          width: 20px !important;
          display: block;
          margin-left: auto;
          margin-right: auto;
          margin-top: 5px;
        }

        .related_slider_price_container {
          height: 32px;
          color: #464646;
          font-size: 14px;
          line-height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;

          .general_current_price {
            color: #005b9f;
            font-size: 16px;
            font-weight: 700;
            padding-left: 3px;
            padding-right: 3px;
          }
        }

        .family_slider_price_container {
          height: 32px;
          color: #464646;
          font-size: 14px;
          line-height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .related_slider_qty_cart_container {
          display: flex;
          align-items: center;
          flex-direction: row;
          padding: 10px 0;

          div {
            float: left;
          }

          input {
            color: #464646;
            text-align: center;
            width: 40px;
          }
        }

        .related_slider_price_currency {
          float: left;
          font-size: 14px !important;
        }

        .related_slider_price {
          color: #005b9f;
          font-size: 14px !important;
          float: left;
          margin-left: 4px;
        }

        .related_slider_price_unit {
          float: left;
          font-size: 14px !important;
        }

        .family_slider_price_currency {
          float: left;
          font-size: 14px !important;
        }

        .family_slider_price {
          color: #005b9f;
          font-size: 14px !important;
          float: left;
          margin-left: 4px;
        }

        .family_slider_price_unit {
          float: left;
          font-size: 14px !important;
        }

        .related_slider_qty {
          float: left !important;
          margin-left: 24%;
          width: 40px;
          text-align: center !important;
          color: #898989 !important;
          font-size: 16px !important;
          font-weight: bold !important;
          padding: 0 !important;
          border: 1px solid #888;
          height: 25px !important;
        }

        .related_slider_cart {
          float: left !important;
          margin-left: 10px;
          padding: 0;
          border: none;
          width: 47px;
          height: 25px;
        }

        .related_slider_cart:after {
          height: 25px !important;
        }

        .family_slider_cart {
          float: left !important;
          margin-left: 10px;
          padding: 0;
          border: none;
          width: 47px;
          height: 25px;
        }

        .family_slider_cart:after {
          height: 25px !important;
        }


        .cartButtonImage {
          width: 20px !important;
          margin-left: 15px !important;
        }

        .sliderBoxItem {
          float: left;
          border: solid 1px #d6d6d6;
          box-shadow: 0 0 4px 0 rgba(0, 0, 0, .16);
          display: flex;
          flex-direction: column;
          width: 210px;
          position: relative;
          margin-right: 10px;
          height: 325px;

          .product-name {}

          .previewImageHover {
            display: block;
            padding: 0 20px;
            text-align: center;

            .productImage {
              height: initial;
            }
          }
        }

        .imgBox {
          margin-bottom: 15px;

          div.prod-img-wrapper {
            float: left;
            width: 100%;
            padding: 0;

            .slider-product-container {
              margin-bottom: -100px;
              position: relative;
              z-index: 2;
              float: left;
            }
          }

          img {
            display: inline-block;
          }

          .visio_sign {
            display: block;
            width: 31%;
            margin-top: 1px;
            margin-left: 0;
          }

          .trinity_sign {
            display: block;
            vertical-align: top;
            border: 3px solid #555555;
            background: #555555;
            color: #fff;
            font-size: 10px;
            letter-spacing: 3px;
            line-height: 11px;
            margin-left: 0;
            font-weight: 600 !important;
            padding-left: 8px;
            padding-right: 7px;
            padding-top: 1px;
            padding-bottom: 1px;
          }

          .vignette_sign {
            margin-left: 0;
          }
        }

        ul.product-list-slide-list li .imgBox {
          height: 180px !important;
          display: flex;
          flex-direction: column;
        }

        .related_image_link img {
          margin-top: -4px;
        }

        .family_image_link img {
          margin-top: -4px;
        }

        .slider_related_text_link_container {
          height: 60px;
          overflow: hidden !important;
          line-height: 20px;
          padding: 0px 10px;
          text-align: center;
          overflow-wrap: break-word;
        }

        .related_text_link {
          font-size: 16px !important;
          line-height: 18px !important;
        }

        .family_text_link {
          font-size: 16px !important;
          line-height: 18px !important;
        }

        ul.product-list-slide-list li {
          min-width: 122px;
        }

        .relatedItemActionButtons {
          padding: 10px 0;

          .glyphicon.glyphicon-pushpin {
            cursor: pointer;
            z-index: 2;
            position: relative;
            float: left;
            margin-left: -20px;
            margin-top: 3px;
          }
        }

        .relatedSkuHeader {
          color: #005b9f;
          font-size: 16px;
          float: left;
          width: 100%;
          text-align: center;
        }

        .add-to-new-partslist {
          height: auto !important;
          width: 86px !important;
        }

        .addToExistingPartslist {
          height: auto !important;
          text-align: left !important;
          font-size: 11px !important;
          width: 122px !important;
        }

        .partslist_dropdown_menu {
          height: 265px !important;
          width: 141px !important;
          left: 46px !important;
        }

        .newPartslistDiv {
          height: 24px;
          margin-left: -11px !important;
        }

        .newPartslistText {
          font-size: 10px !important;
          word-wrap: break-word;
          text-align: left;
          margin-left: 25px !important;
        }

        .promo_sign {
          position: absolute;
          top: 9px;
          left: -82px;
          height: 28px;
          z-index: 3;
        }

        .energyLabel {
          text-align: center;
          padding: 2.5px;
        }

        #featureSliderCon {
          padding: 0 30px;
          float: left;
        }
      </style>




      <script type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function() {
          jQuery('.related_products').bxSlider({
            touchEnabled: touchDisableForDesktop,
            auto: false,
            pager: false,
            slideWidth: 200,
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 5,
            slideMargin: 10,
            infiniteLoop: false,
            hideControlOnEnd: true,
            responsive: true,
            oneToOneTouch: true,
            onSliderLoad: function(currentIndex) {
              jQueryLazyLoader.update();
            }
          });

          var fetchedPartslistData = '';
          if (typeof partListData !== 'undefined' && partListData) {
            fetchedPartslistData = partListData;
          } else {
            if (typeof localStorage.partListData !== 'undefined' && localStorage.partListData) {
              fetchedPartslistData = JSON.parse(localStorage.partListData);
            }
          }


          function getProductPricesForRelatedSlider() {
            var get_product_prices_service_url = BASE_URL + '/onlinetools/commonTools/getProductPrices';
            if (typeof skuListOfRelatedSlider !== 'undefined') {
              jQuery.ajax(get_product_prices_service_url, {
                'dataType': 'json',
                'type': "POST",
                'data': {
                  'skuList': skuListOfRelatedSlider
                },
                'success': function(responseData) {
                  var parsedData = responseData;
                  jQuery.each(parsedData, function(sku, recordset) {
                    var currencyClass = "related_slider_price_currency";
                    var priceClass = "related_slider_price";
                    var priceUnitClass = "related_slider_price_unit";

                    var currency = recordset.currency;
                    var price = recordset.price;
                    var priceunitPerQty = "/" + recordset.priceunit + ' ' + recordset.qtyunit;
                    var priceUnit = recordset.priceunit;

                    var sliderPriceCurrencyHtml = '<span class="' + currencyClass + '">' + currency + '</span>';
                    var sliderPriceHtml = '<span class="' + priceClass + '">' + price + '</span>';
                    var sliderPriceUnitHtml = '<span class="' + priceUnitClass + '">' + priceunitPerQty + '</span>';

                    var priceUnitHtml = '<input type="hidden" id="price_unit_related' + sku + '"';
                    priceUnitHtml += ' value="' + priceUnit + '">';

                    var resultPriceString = priceUnitHtml;
                    resultPriceString += sliderPriceCurrencyHtml + sliderPriceHtml + sliderPriceUnitHtml;

                    if (recordset.qtyunit.length > 5) {
                      jQuery('#related_slider_price' + sku).css('margin-left', '0');
                    }

                    jQuery('#related_slider_price' + sku).text('');
                    jQuery('#related_slider_price' + sku).html(resultPriceString);
                  });
                },
                'error': function(data) {
                  var parsedData = data;
                  //debugger;
                }
              });
            }
          }

          // Fetch Prices lazy:
          getProductPricesForRelatedSlider();

          jQuery('.related_slider_cart').on('click', function() {
            qtyAddToCartRelated(this);
          });

          jQuery('.related_slider_qty').keyup(function(e) {
            if (e.keyCode == 13) {
              var sku = jQuery(this).data('sku');
              var that = jQuery('#addtocart-related-' + sku);
              qtyAddToCartRelated(that);
            }
          });

          function qtyAddToCartRelated(that) {
            var lastDefaultMinRelatedQuantity;

            var sku = jQuery(that).attr('data-sku');
            lastDefaultMinRelatedQuantity = jQuery('#price_unit_related' + sku).val();
            var insertedQuantityOfRelatedSlider = jQuery('#related_slider_qty' + sku).val();
            var selectedQuantityRelated = 0;

            if (insertedQuantityOfRelatedSlider > 0) {
              selectedQuantityRelated = insertedQuantityOfRelatedSlider;
            } else {
              selectedQuantityRelated = lastDefaultMinRelatedQuantity;
              jQuery('#related_slider_qty' + sku).val(lastDefaultMinRelatedQuantity);
            }

            // Add to cart (sku + qty)
            jQuery('ul.messages').empty();
            jQuery('ul.errors').empty();
            jQuery.ajax(ajaxUrl, {
              'dataType': 'json',
              'type': 'POST',
              'data': {
                'form_key': 'XWDrviVZ1KV1rAfm',
                'setAddToCartFromSlider': {
                  'data': {
                    'sliderClass': 'view_related_list',
                    'sku': sku,
                    'quantity': selectedQuantityRelated,
                    'drum': ''
                  }
                }
              },
              'success': function(data) {
                unsetOverlayLoader();
                var parsedData = data;
                var result = parsedData.setAddToCartFromSlider.result;
                var savedOldValueBeforeOverwrite = jQuery('#qty-' + sku).val();
                if (result.showPopup == true) { // Open Inquiry Popup
                  jQuery('#qty-' + item_sku).val(savedOldValueBeforeOverwrite);
                  jQuery('#quantitywarningpopup').html(result.popupHtml);
                  jQuery('#quantitywarningpopupBtn').click();
                } else {
                  //jQuery("html, body").animate({ scrollTop: 0 }, "slow");
                  //console.log('ScrollTop #54');
                  if (result.numberOfDifferentItemsInCart) {
                    jQuery('.MyCart').append('<div id="cartNoBxItemCount" class="cartNoBx">' + result.numberOfDifferentItemsInCart + '</' + 'div' + '>');
                  }
                  var newQuantityDetected = false;
                  if (result.data.newQty && result.data.newQty > 0) {
                    jQuery('#related_slider_qty' + sku).val(result.data.newQty);
                    selectedQuantityRelated = result.data.newQty;
                    newQuantityDetected = true;
                  }

                  var messageArray = result.data.messages;
                  if (result.result.indexOf("SUCCESS") == -1) {
                    appendMessageUl(messageArray, 'messages', 'error-msg', 'glyphicon glyphicon-exclamation-sign');
                    console.log('appendMessageUl #12');
                  } else {
                    if (newQuantityDetected == false) {
                      var sliderItemName = jQuery('#related_sliderItemData' + sku).attr('data-name');
                      var sliderItemCategory = jQuery('#related_sliderItemData' + sku).attr('data-category');
                      var trackingData = new Object();
                      let priceContainer = document.querySelector("#related_slider_price" + sku);

                      trackingData.trackingEnabled = globalTRACKING_ENABLED;
                      trackingData.pagetype = 'product detail page';
                      trackingData.sku = sku;
                      trackingData.name = sliderItemName;
                      trackingData.price = priceContainer.querySelector('.related_slider_price').innerHTML.replace(".", "").replace(",", ".");
                      trackingData.category = sliderItemCategory;
                      trackingData.currencyCode = globalCURRENCY_CODE;
                      trackingData.quantity = selectedQuantityRelated;
                      addToCartTracking(trackingData, 'Slider Detail Related Product');
                    }
                    appendMessageUl(messageArray, 'messages_hidden', 'success-msg', 'glyphicon glyphicon-ok');
                    console.log('appendMessageUl #13');
                  }
                }
              },
              'error': function(data) {
                var parsedData = data;
                //debugger;
              }
            });
          }

          function relatedTracking(sku) {
            var trackingData = new Object();
            trackingData.trackingEnabled = globalTRACKING_ENABLED;
            trackingData.affectedSku = sku;
            trackingData.pageType = 'product detail page';
            //trackingData.price             = dataProductPrice;
            trackingData.currencyCode = globalCURRENCY_CODE;
            trackingData.trackingSource = 'related product slider';
            trackingData.typoUrl = globalTYPO_URL;
            trackingData.shopCategoryAjaxUrl = globalSHOP_CATEGORY_AJAX_URL;
            trackingData.formKey = globalFORM_KEY;
            trackingData.crmUserId = globalCRM_USER_ID;
            trackingData.customerType = globalCUSTOMER_TYPE;
            trackingData.accountCrmId = globalACCOUNT_CRM_ID;
            trackingData.position = 1;

            trackProductClick(trackingData);
          }


          jQuery('.related_text_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "RELATED_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            relatedTracking(sku);
          });

          jQuery('.related_image_link').on('click', function() {
            var sku = jQuery(".product-sq span").first().text();
            var trackingSource = "RELATED_SLIDER " + sku;
            localStorage.setItem('trackingData_pagetype', trackingSource);
            relatedTracking(sku);
          });

        });

        //]]>
      </script>
      <!-- app\design\frontend\schrack\schrackresponsive\template\catalog\product\view\related.phtml (end) -->
      <!-- Releated Products -->
      <!-- Next Previous -->
      <!-- SCHRAC-890 -->
      <!-- Next Previous -->
    </div>
  </div>
  <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/footer.phtml (start) -->

  <style>
    @media (min-width: 60px) and (max-width: 320px) {
      .save_new_partslist {
        height: 30px !important;
      }

      .save_new_partslist_deactivated {
        height: 30px !important;
      }
    }

    @media (min-width: 321px) and (max-width: 480px) {
      .save_new_partslist {
        height: 30px !important;
      }

      .save_new_partslist_deactivated {
        height: 30px !important;
      }
    }

    @media (min-width: 481px) and (max-width: 767px) {
      .save_new_partslist {
        height: 30px !important;
      }

      .save_new_partslist_deactivated {
        height: 30px !important;
      }
    }

    .save_new_partslist_deactivated {
      background: #d1d1d1 !important;
    }

    .save_new_partslist_deactivated:after {
      background: #d1d1d1 !important;
    }
  </style>

  <div id="footer-container" class="hide-on-print">
    <footer class="hide-for-print">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-6 col1">
            <h2 class="hidden-xs headline b1">Schrack Technik</h2>
            <nav>
              <ul>
                <li>
                  <a
                    href="#"
                    title="Įmonė">Įmonė</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Schrack Technik grupė">Schrack Technik grupė</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Kontaktai">Kontaktai</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Visame pasaulyje">Visame pasaulyje</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Bendrosios sąlygos">Bendrosios sąlygos</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Duomenų apsauga">Duomenų apsauga</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Bendrosios naudojimo sąlygos">Bendrosios naudojimo sąlygos</a>
                </li>
                <li>
                  <a
                    href="#"
                    title="Redakcija">Redakcija</a>
                </li>
                <li>
                  <a
                    href="#"
                    onclick="UC_UI.showSecondLayer(); return false;"
                    role="button">Slapukų nustatymai</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-4 col-sm-4 hidden-xs col2">
            <div
              id="c30133"
              class="frame frame-default frame-type-text frame-layout-0">
              <header>
                <div>
                  <div>
                    <h2 class="headline b1">
                      Jūsų privalumai
                      <a
                        class="anchor-link"
                        href="#"
                        aria-label="Inkaras Jūsų privalumams"></a>
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
              class="frame frame-default frame-type-text frame-layout-0">
              <header>
                <div>
                  <div>
                    <h2 class="headline b1">
                      Gaukite Schrack naujienlaiškį dabar!
                      <a
                        class="anchor-link"
                        href="#"
                        aria-label="Inkaras Gaukite Schrack naujienlaiškį dabar!"></a>
                    </h2>
                  </div>
                </div>
              </header>

              <p class="bodytext">
                Būkite informuoti - užsiprenumeruokite mūsų naujienlaiškį dabar ir niekada
                nepraleisite mūsų naujausių nuolaidų ir akcijų
              </p>
              <p class="bodytext">
                <a
                  href="#"
                  class="button-small"
                  title="Tiesiog užsiregistruokite čia ir gaukite visą aktualią informaciją iš SCHRACK Technik">UŽSIPRENUMERUOKITE ČIA<br /></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>


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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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

      .hamburgerMenuAlternateButtonIosTypo {}

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


  <style>
    .cc-cookies {
      position: fixed;
      width: 100%;
      left: 0;
      top: 0;
      padding: 0.5em 5%;
      background: #565656;
      background: rgba(86, 86, 86, 0.95);
      z-index: 99999;
    }

    .cc-cookies a,
    .cc-cookies a:hover {
      color: black;
      text-decoration: underline;
    }

    .cc-cookies a:hover {
      text-decoration: none;
    }

    .cc-overlay {
      height: 100%;
      padding-top: 25%;
    }

    .cc-cookies-error {
      float: left;
      width: 90%;
      text-align: center;
      margin: 1em 0 2em 0;
      background: #fff;
      padding: 2em 5%;
      border: 1px solid #ccc;
      font-size: 18px;
      color: #333;
    }

    .cc-cookies a.cc-cookie-accept,
    .cc-cookies-error a.cc-cookie-accept,
    .cc-cookies a.cc-cookie-decline,
    .cc-cookies-error a.cc-cookie-decline,
    .cc-cookies a.cc-cookie-reset {
      display: inline-block;
      color: #fff;
      text-decoration: none;
      /* background: #7DAF3B; */
      padding: 0.5em 0.75em;
      /* border-radius: 3px; */
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.25);
      text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.35);
      -o-transition: background 0.5s ease-in;
      -webkit-transition: background 0.25s ease-in;
      -moz-transition: background 0.25s ease-in;
    }

    .cc-cookies a.cc-cookie-decline,
    .cc-cookies-error a.cc-cookie-decline {
      /* background: #af3b3b; */
      background: none;
      color: black;
      text-decoration: none;
      box-shadow: none;
      text-shadow: none;
      margin-left: 0.5em;
    }

    .cc-cookies a.cc-cookie-reset {
      background: #f15b00;
    }

    .cc-cookies a:hover.cc-cookie-accept,
    .cc-cookies-error a:hover.cc-cookie-accept,
    .cc-cookies a:hover.cc-cookie-decline,
    .cc-cookies-error a:hover.cc-cookie-decline,
    .cc-cookies a:hover.cc-cookie-reset {
      background: #000;
      -o-transition: background 0.5s ease-in;
      -webkit-transition: background 0.25s ease-in;
      -moz-transition: background 0.25s ease-in;
    }

    .cc-cookies a:hover.cc-cookie-accept {
      background: black;
      text-decoration: none;
    }

    .cc-cookies a:hover.cc-cookie-decline {
      background: none;
      text-decoration: underline;
    }

    .cc-cookies-error a.cc-cookie-accept,
    .cc-cookies-error a.cc-cookie-decline {
      display: block;
      margin-top: 1em;
    }

    .cc-cookies.cc-discreet {
      width: auto;
      padding: 0.5em 1em;
      left: auto;
      top: auto;
    }

    .cc-cookies.cc-discreet a.cc-cookie-reset {
      background: none;
      text-shadow: none;
      padding: 0;
      text-decoration: underline;
    }

    .cc-cookies.cc-discreet a:hover.cc-cookie-reset {
      text-decoration: none;
    }
  </style>


</body>

</html>