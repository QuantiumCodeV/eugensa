<!DOCTYPE html>
<!-- saved from url=(0064)https://www.schrack.com/shop/catalogsearch/result/?q=module&cat= -->
<html>


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/head.phtml (start) -->
  <meta http-equiv="X-UA-Compatible" content="IE=10,9" />

  <title>
    Search results for '{{ $query}}' - Online Shop - Schrack Technik International
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
                title="Schrack Technik Online Shop">
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
            <!-- app/design/frontend/schrack/schrackresponsive/template/page/template/links.phtml (start) -->

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
          <!-- Mega Menu Container (start) -->
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
                  <span class="top_navigation_item_text">Shop</span>
                </nav>
              </div>



              <div
                id="top_nav_1_typo"
                class="top_navigation_main top_navigation_main_20 typo_top_nav"
                data-target="layer_2">
                <nav
                  class="top_navigation_item top_navigation_item_alternate typo_type">
                  <span class="top_navigation_item_text">Know How</span>
                </nav>
              </div>
              <div
                id="top_nav_2_typo"
                class="top_navigation_main top_navigation_main_20 typo_top_nav"
                data-target="layer_3">
                <nav
                  class="top_navigation_item top_navigation_item_alternate typo_type">
                  <span class="top_navigation_item_text">Tools</span>
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
                        >SALE %</span
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
                  >
                    <span class="top_navigation_item_text">Quick-Add</span>
                  </nav>
                </div>
              </div>
              <!-- Content fetched by AJAX (header.phtml -> MenuController.php) -->
            </div>
            <!-- Mega Menu Container (end) -->
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
            filter: alpha(opacity = 50); /* IE7 & 8 */
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
            .hamburgerMenuAlternateButtonIos {
            }
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
          value="2024-10-20 13:03:03"
        />
        <div class="searchContiner clearfix hide-on-print searchWrapper">
          <div id="showActAsACustomerEmailField" style="display: none">
            <span id="showActAsACustomerEmail"></span>
          </div>
          <div
            id="hamburgerMenuAlternate"
            class="sandwichMenuQuadrant print-hide hamburgerMenuAlternate"
          >
            <button id="hamburgerMenuAlternateButton" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span id="megaMenuCaptionTxt">Menu</span>
            </button>
          </div>
          <div
            id="searchbox_container"
            class="tx-solr-searchbox searchbox_container"
          >
            <form
              class="search-wrapper clearfix"
              id="search_mini_form"
              action="https://www.schrack.com/shop/catalogsearch/result/"
              method="get"
            >
              <div id="search_bar_box" class="input-group search_bar_box">
                <span
                  id="id-scan-button"
                  style="display: none"
                  class="input-group-addon id_scan_button_orig"
                  onclick="openPopupAndScan(&#39;scanpopup_scandit&#39;,scanResultHandler)"
                >
                  <span class="glyphicon glyphicon-barcode"></span>
                </span>
                <div
                  class="input-group-btn hidden-lg hidden-md hidden-xs hidden-sm"
                >
                  <!--  hidden-lg hidden-md hidden-xs hidden-sm -->
                  <button
                    type="button"
                    id="allSrchCat"
                    class="btn btn-secondary dropdown-toggle hidden-lg hidden-md hidden-xs hidden-sm"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    All categories
                  </button>
                  <ul class="dropdown-menu" id="searchDropdownBox" name="cat">
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="All categories"
                      catid=""
                    >
                      All
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Enclosures &amp; distribution boards"
                      catid="4853939"
                    >
                      Enclosures &amp; distribution boards
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Distribution board equipment (MCB, RCCB, SPD, MCCB, Terminals, Fuse Material)"
                      catid="4854509"
                    >
                      Distribution board equipment (MCB, RCCB, SPD, MCCB,
                      Terminals, Fuse Material)
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Control technology"
                      catid="4855089"
                    >
                      Control technology
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Building technology, KNX &amp; Intercoms"
                      catid="4855595"
                    >
                      Building technology, KNX &amp; Intercoms
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Emergency lighting, UPS, CO &amp; Reactive power compensation"
                      catid="4855931"
                    >
                      Emergency lighting, UPS, CO &amp; Reactive power
                      compensation
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Network technology &amp; Server room equipment"
                      catid="4856042"
                    >
                      Network technology &amp; Server room equipment
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Installation &amp; mounting"
                      catid="4856815"
                    >
                      Installation &amp; mounting
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Cables &amp; wires"
                      catid="4856964"
                    >
                      Cables &amp; wires
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Lighting technology"
                      catid="5365724"
                    >
                      Lighting technology
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Photovoltaics &amp; storage"
                      catid="4860149"
                    >
                      Photovoltaics &amp; storage
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Electromobility"
                      catid="4860181"
                    >
                      Electromobility
                    </li>
                    <li
                      class="dropdown-item"
                      onclick="assignCurrCat(this)"
                      value="Catalogues"
                      catid="4860184"
                    >
                      Catalogues
                    </li>
                  </ul>
                </div>
                <input
                  id="search"
                  type="text"
                  placeholder="Search in: All categories"
                  name="q"
                  value=""
                  class="form-control nodefault"
                  autocomplete="off"
                />
                <div id="empty_searchbar_sign" style="display: block">✖</div>
                <input type="hidden" name="cat" id="selSrchHidden" value="" />
                <span id="srchiconclickshop" class="input-group-addon">
                  <span
                    id="srchiconclickshop_glyph"
                    class="glyphicon glyphicon-search"
                  ></span>
                </span>
              </div>
            </form>
          </div>
          <span
            id="id-scan-button-two"
            style="display: none"
            class="input-group-addon id_scan_button_copy"
          >
            <img
              id="scan_magnifier_barcode"
              src="{{asset('assets/scan_magnifier_barcode.png')}}"
              class="scan_magnifier_barcode"
              alt=""
            />
          </span>
          <button
            id="quick_add_button"
            type="button"
            class="btn btn-quickAdd"
            data-toggle="modal"
            data-target="#quickaddpopup"
          >
            Quick Add +
          </button>
        </div><script type="text/javascript">
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
          class="quick_add_button_alternate_container"
        >
          <div id="quick_add_button_alternate" class="btn-quickAdd">
            Quick Add
            <span id="quick_add_button_alternate_arrow">
              <i
                id="quick_add_button_alternate_arrow_trigger"
                class="fa fa-angle-down"
                aria-hidden="true"
              ></i>
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
          aria-labelledby="myModalLabel"
        >
          <div class="modal-dialog scannerPopup" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button
                  data-dismiss="modal"
                  aria-label="Close"
                  id="close_scanner_popup_right_upper_corner"
                  class="close"
                  type="button"
                >
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Scan</h4>
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
                  class="btn btn-secondary"
                >
                  Close
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
          class="scanpopup_scandit_alternate"
        >
          <div
            id="scanner_popup_alternate"
            class="scannerPopup scanner_popup_alternate"
          >
            <div>
              <div>
                <button
                  type="button"
                  class="close close_quickadd_popup_alternate"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button>
                <h4 id="modal-label-headline-alternate" class="modal-title">
                  Quick Add
                </h4>
              </div>
              <hr style="margin-top: 0" />
              <div id="quickadd_message"></div>
              <div>
                <div
                  id="scandit-barcode-picker-alternate"
                  class="scanner"
                ></div>
                <div
                  id="scandit-barcode-result-alternate"
                  class="result-text"
                ></div>
              </div>
            </div>
          </div>
          <hr style="margin-top: 59px" />
          <div>
            <button
              id="close_quickadd_popup_alternate"
              type="button"
              class="btn btn-secondary close_quickadd_popup_alternate"
            >
              Close
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
        <div class="col-xs-12" id="breadcrumbs">
          <!-- app/design/frontend/schrack/schrackresponsive/template/page/html/breadcrumbs.phtml (start) -->

          <style>
            #breadcrumb_block > li {
              font-size: 16px !important;
            }

            #breadcrumb_block > li.sale_red_breadcrumbitem {
              color: red;
              font-weight: bold;
            }

            #breadcrumb_block > li.sale_red_breadcrumbitem:before {
              padding: 0 5px;
              color: #7c7c7c;
              content: "\e258";
              font-family: "Glyphicons Halflings";
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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
              #breadcrumb_block > li {
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

          <div id="metaDescriptionData" hidden="">
            buy online at Schrack Technik » Delivery within 24 hours • on-site
            availability • professional advice • All infos!
          </div>
          <ul
            id="breadcrumb_block"
            property="breadcrumb"
            class="breadcrumb clearfix"
          >
            <li class="home">
              <a
                href="#"
                title="Go to Home Page"
                class="clickable_breadcrumb_link"
                >Home</a
              >
            </li>
            <li class="search last">
              <strong>Search results for '{{ $query}}'</strong>
            </li>
            <ul></ul>
          </ul>
        </div>
        <div id="content" class="col-xs-12 main-content lower_main_content">
          <!-- app\design\frontend\schrack\schrackresponsive\template\catalogsearch\result.phtml (start) -->

          <style>
            #store-icon-container {
              display: none !important;
            }

            .availability_headline {
              font-size: 16pt;
            }

            .logstics-icon-new {
              background: url(https://www.schrack.com/shop/skin/frontend/schrack/default/schrackdesign/Public/Images/rwd/logistics.png)
                left top no-repeat;
              width: 25px;
              height: 12px;
              display: inline-block;
              margin-right: 5px;
              margin-top: 5px;
              background-size: 100%;
            }

            #cut_off_times_ajax_loader_gif {
              width: 20px;
              height: 20px;
              margin-left: 10px;
            }

            .cut_off_time_text {
              color: black;
              margin-left: 53px;
              font-family: robotomedium, Helvetica, Arial, Sans-Serif;
              font-size: 18px;
            }

            .cut_off_time_text_counter {
              color: black;
              font-family: robotomedium, Helvetica, Arial, Sans-Serif;
              font-size: 18px;
            }

            .cut_off_time_text_alternate {
              color: black;
            }

            .store-icon {
              margin-right: 16px !important;
            }

            .logstics-icon {
              margin-right: 14px !important;
              margin-left: 14px !important;
              display: none;
            }

            #logistics-store-section {
              width: auto;
              float: left;
            }

            #logstics-section {
              float: left !important;
              color: black !important;
              font-size: 18px !important;
              font-family: "robotomedium", Helvetica, Arial, Sans-Serif !important;
              width: auto !important;
              margin-right: 5px !important;
            }

            #store-section {
              font-size: 18px !important;
            }

            .glyphicon.glyphicon-info-sign.info-icon {
              color: black;
            }

            @media (min-width: 60px) and (max-width: 320px) {
              .cut_off_time_text {
                font-size: 14px !important;
              }
              .cut_off_time_text_counter {
                font-size: 14px !important;
              }
              #logstics-icon {
                float: left !important;
              }
              #logstics-section {
                font-size: 14px !important;
                width: 69% !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 4px;
                margin-right: 20px !important;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                padding-top: 6px !important;
                font-size: 14px !important;
              }
            }

            @media (min-width: 321px) and (max-width: 480px) {
              .cut_off_time_text {
                font-size: 14px !important;
              }
              .cut_off_time_text_counter {
                font-size: 14px !important;
              }
              #logstics-icon {
                float: left !important;
                margin-top: 3px !important;
              }
              #logstics-section {
                font-size: 14px !important;
                width: 69% !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 7px !important;
                margin-right: 20px !important;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                padding-top: 6px !important;
                font-size: 14px !important;
              }
            }

            @media (min-width: 481px) and (max-width: 768px) {
              .cut_off_time_text {
                font-size: 14px !important;
              }
              .cut_off_time_text_counter {
                font-size: 14px !important;
              }
              #logstics-icon {
                float: left !important;
                margin-top: 3px !important;
              }
              #logstics-section {
                font-size: 14px !important;
                width: 59% !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 7px !important;
                margin-right: 20px !important;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                padding-top: 6px !important;
                font-size: 14px !important;
              }
            }

            @media (min-width: 769px) and (max-width: 1024px) {
              #logstics-icon {
                float: left !important;
              }
              #logstics-section {
                font-size: 18px !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 4px;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                font-size: 18px !important;
                padding-top: 3px !important;
              }
            }

            @media (min-width: 1025px) and (max-width: 1370px) {
              #logstics-icon {
                float: left !important;
              }
              #logstics-section {
                font-size: 18px !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 4px;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                font-size: 18px !important;
                padding-top: 3px !important;
              }
            }

            @media (min-width: 1371px) and (max-width: 1919px) {
              #logstics-icon {
                float: left !important;
              }
              #logstics-section {
                font-size: 18px !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 4px;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                font-size: 18px !important;
                padding-top: 3px !important;
              }
            }

            @media (min-width: 1920px) and (max-width: 4000px) {
              #logstics-icon {
                float: left !important;
              }
              #logstics-section {
                font-size: 18px !important;
              }
              #store-section-cartInfoHide {
                float: left !important;
                width: 90% !important;
                height: 37px !important;
              }
              #store-icon {
                float: left !important;
                width: 1.2em !important;
                margin-left: 0 !important;
                margin-top: 4px;
              }
              #store-section {
                float: left !important;
                width: 75% !important;
                height: 37px !important;
                font-size: 18px !important;
                padding-top: 3px !important;
              }
            }

            .ajaxSpinnerOverlay {
              display: block !important;
              margin-left: auto !important;
              margin-right: auto !important;
              width: 20% !important;
            }
          </style>

          <div id="searchResult">
            <!-- app\design\frontend\schrack\schrackresponsive\template\catalogsearch\search.phtml (start) -->

            <style>
              .search-page-product-list.gridView.grid .visio_sign {
                display: block;
                width: 31%;
                margin-top: 1px;
                margin-bottom: 12px;
                margin-left: 0px;
              }
              .search-page-product-list.listView.list .visio_sign {
                display: block;
                width: 48%;
                margin-top: -10px;
                margin-left: -20px;
                margin-bottom: 30px;
              }
              .search-page-product-list.compactView.compact .visio_sign {
                display: block;
                height: 14px;
                margin-top: -10px;
                margin-left: -20px;
              }
              .search-page-product-list.listView.list .visio_sign.fanpackage {
                width: 100%;
              }
              .search-page-product-list.gridView.grid .visio_sign.fanpackage {
                width: 50%;
              }

              .light_blue:hover {
                color: #0185ea;
              }
              .cat_text {
                float: left;
              }

              .space5 {
                margin-right: 5%;
              }

              .level11 i {
                display: inline-block;
                line-height: 60pt;
              }

              .firstLevel,
              .backNavigationBtn {
                float: left;
                width: 100%;
                margin: 10px 0;
              }
              .category_filter_wrapper {
                float: left;
                margin-bottom: 20px;
                width: 100%;
              }
              .category_filter_wrapper.minimized {
                max-height: 340px;
                overflow: hidden;
              }
              .results_for_line,
              .more_results,
              .more_results_btn,
              .less_results,
              .less_results_btn {
                float: left;
                width: 100%;
              }
              .more_results_btn,
              .less_results_btn {
                text-align: center;
                border-top: solid 1px #cdcdcd;
                padding: 15px 0 0 0;
                margin-top: 5px;
                cursor: pointer;
                line-height: 10pt;
                font-size: 14pt;
              }
              .more_results_btn:hover,
              .less_results_btn:hover {
                color: black;
              }

              #backtoAllCategoriesLinkDesktop,
              #backtoPrevCategorieLinkDesktop {
                font-size: 14pt;
                float: left;
                display: inline-block;
                min-width: 350px;
              }
              .small_count {
                margin-left: 5px;
                font-size: 11px;
                margin-top: 2px;
              }
              .category_sign {
                float: left;
                margin-right: 9px;
                font-size: 19pt;
              }
              .no_link_decoration {
                text-decoration: none !important;
              }
              .box_separator {
                width: 5%;
                float: left;
              }
              .lightgrey_bottom {
                border-bottom: 1px solid lightgrey;
                padding-bottom: 12px;
                padding-left: 13px;
              }
              .blue_headline_horizontal_bar {
                border: 1px solid black;
                margin-top: 6px;
                margin-bottom: 0;
              }
              .column20 {
                width: 20%;
                float: left;
                margin-top: 0;
              }
              .column30 {
                width: 30%;
                float: left;
                padding-top: 12px;
              }
              .column30_hover {
                width: 30%;
                float: left;
                padding-top: 12px;
              }
              .column30_hover:hover {
                background: ghostwhite;
              }
              .column66 {
                width: 66%;
                float: left;
                margin-top: 20px;
              }
              .column80 {
                width: 80%;
                float: left;
                margin-top: 0;
              }
              .oldCategorySearchNavigationPanel {
                display: none;
              }
              .category_filter_navigation_panel {
                padding: 15px;
              }
              .category_filter_navigation_panel.minimized {
                max-height: 270px;
                overflow: hidden;
              }
              .category_filter_navigation_panel.minimized.smallPanel {
                max-height: 220px;
              }
              .category_filter_navigation_panel_headline {
                font-size: 1.2em;
                color: black;
                letter-spacing: 0.1px;
                font-family: robotomedium, Helvetica, Arial, sans-serif;
              }
              .image_mini_panel {
                padding-left: 5px;
                float: left;
                height: 63px;
                display: flex;
                align-items: center;
              }
              .image_mini_panel_content {
                max-width: 63px;
                max-height: 63px;
              }
              .getSearchCategoryLevel10 {
                float: left;
                font-family: robotomedium, Helvetica, Arial, sans-serif;
                color: black;
                font-size: 1em;
                padding-left: 10px;
                padding-right: 9px;
                display: flex;
                align-items: center;
                justify-content: left;
                height: 63px;
                margin-top: 4px;
              }
              .getSearchCategoryLevel11 {
                float: left;
                font-family: robotomedium, Helvetica, Arial, sans-serif;
                color: black;
                font-size: 1em;
                padding-left: 10px;
                padding-right: 9px;
                display: flex;
                align-items: center;
                justify-content: left;
                height: 63px;
                margin-top: 4px;
              }
              .border_fix {
                background: #edecec !important;
                box-shadow: none !important;
              }
              .search-page-container {
                padding: 10px 17px !important;
              }
              .break_word {
                word-break: break-word !important;
              }
              .redColor {
                color: #d1222b !important;
              }
              .prodListingSales {
                display: table !important;
              }
              .search_result_list_tile_sales {
                height: 310px !important;
                float: left !important;
                position: relative;
                width: 180px;
              }
              .search_result_list_subtile_sales {
                float: left;
              }

              .search_result_list_subtile_sales
                .general_current_addtocart_container_sales {
                width: calc(100% - 15px);
                display: inline-flex;
                flex-direction: row;
                justify-content: space-evenly;
              }

              .search-page-product-list.noStock.compactView.compact .imgCont {
                margin-bottom: 22px;
              }

              .search-page-product-list.noStock.listView.list .imgCont {
                margin-bottom: 50px;
              }
              .loginSuggest {
                font-weight: 400;
                font-size: 18px;
                height: auto !important;
                width: 208px !important;
                padding: 10px;
                margin-left: -187px;
                text-align: center;
              }

              .add-to-new-partslist {
                width: 100% !important;
                height: 55px !important;
                margin-bottom: 0 !important;
                margin-right: 0 !important;
                text-align: left !important;
                padding-left: 10px !important;
                padding-top: 9px !important;
                background: #f5f5f5 !important;
                color: black !important;
                cursor: pointer !important;
                border: 0 !important;
                border-bottom: 1px solid #e5ebef !important;
                box-shadow: none;
              }
              .add-to-new-partslist:hover {
                background: black !important;
                color: #fff !important;
              }
              .partslistRow {
                width: 100% !important;
                background: #f5f5f5 !important;
                color: black !important;
                font-size: 14px !important;
                height: auto !important;
                margin: 0 !important;
                padding-top: 8px !important;
                padding-bottom: 8px !important;
                padding-left: 10px !important;
                text-align: left !important;
                cursor: pointer !important;
                border: 0 !important;
                border-bottom: 1px solid #e5ebef !important;
                box-shadow: none;
              }
              .partslistRow:hover {
                background: black !important;
                color: #fff !important;
              }

              .modified_partslist_icon {
                position: absolute;
                top: 10px;
                right: 7px;
              }
              .modified_partslist_icon_sales {
                position: absolute;
                top: 11px;
                right: 15px;
              }

              .modified_price_label {
                width: 100% !important;
                height: 43px;
                position: absolute;
                bottom: 34px;
                left: 0;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
              }

              #gridListView.gridView.grid li.sppl-entry .trinity_sign {
                margin-top: 1px;
                margin-bottom: -18px;
                width: 98px;
                line-height: 11px;
                font-size: 10px;
              }
              #gridListView.listView.list li.sppl-entry .trinity_sign {
                margin-top: -11px;
                margin-left: -20px;
                margin-bottom: 10px;
                width: 80px;
                line-height: 11px;
                font-size: 10px;
              }
              #gridListView.compactView.compact li.sppl-entry .trinity_sign {
                margin-left: -20px;
                margin-top: -9px;
                margin-bottom: 5px;
                width: 76px;
                text-align: center;
                padding: 2px 0;
                height: 14px;
                line-height: 8px;
                font-size: 8px;
              }

              .trinity_sign {
                display: block;
                background: #555555 !important;
                color: #fff !important;
                letter-spacing: 3px;
                font-weight: 600;
                width: 82px;
                z-index: 1;
                padding-top: 4px;
                padding-bottom: 5px;
                padding-left: 8px;
                padding-right: 13px;
              }

              .search-page-product-list.gridView.grid .vignette_sign {
                padding-left: 8px;
                padding-right: 7px;
                padding-top: 1px;
                padding-bottom: 1px;
                font-size: 10px;
                line-height: 11px;
              }

              .search-page-product-list.listView.list .vignette_sign {
                margin-top: -9px;
                margin-left: -20px;
                margin-bottom: 12px;
                padding-left: 8px;
                padding-right: 7px;
                padding-top: 1px;
                padding-bottom: 1px;
                font-size: 10px;
                line-height: 11px;
              }

              .search-page-product-list.compactView.compact .vignette_sign {
                margin-left: -20px;
                margin-top: -10px;
                margin-bottom: 11px;
                height: 14px;
                width: 76px;
                padding-left: 0px;
                padding-right: 0px;
                padding-top: 0px;
                padding-bottom: 0px;
                font-size: 8px;
                line-height: 8px;
              }

              .vignette_sign {
                display: inline-block;
                vertical-align: middle;
                border: 3px solid #d1222b;
                background: #d1222b;
                color: #fff;
                font-weight: 600;
                letter-spacing: 3px;
                width: 98px;
              }

              /* promotions badge */
              .promo_sign {
                position: relative;
                top: 6px;
                left: 6px;
                height: 27px;
                width: 27px;
                z-index: 3;
              }
              /* list and grid view */
              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .image_sku_container
                .promo_sign,
              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .image_sku_container
                .promo_sign {
                top: -4px;
                left: 4px;
                width: 27px;
                margin-bottom: -27px;
                height: 27px;
              }
              .search-page-product-list.grid .info-icon.energyLabel {
                margin-top: 10px;
                margin-left: 48px;
              }
              .search-page-product-list.list .info-icon.energyLabel {
                margin-top: 10px;
                margin-left: 15px;
              }

              .search-page-product-list.compact .info-icon.energyLabel {
                margin-top: 15px;
                margin-left: 374px;
              }

              #chnageOnSaleFilter.col-sm-12
                .search-page-product-list.compact
                .info-icon.energyLabel {
                margin-top: 15px;
                margin-left: 600px;
              }

              .search-page-product-list.list .energyLabelDatasheet {
                margin-top: 17px;
              }
              .search-page-product-list.grid .energyLabelDatasheet {
                margin-top: 17px;
              }
              .search-page-product-list.compact .energyLabelDatasheet {
                margin-top: 22px;
              }
              .energyLabelSales {
                position: absolute;
                bottom: -2px;
                margin-left: 21px;
              }
              .energyLabelSales .energyLabelDatasheet {
                margin-top: 7px;
              }
              /* compact view */
              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .image_sku_container
                .promo_sign {
                top: -9px;
                left: -7px;
                width: 25px;
                margin-bottom: -25px;
                height: 25px;
              }

              .search_result_availability_data {
                color: #555;
                text-align: left;
                padding: 0 10px 0 10px;
                display: block;
                /* font-family: robotoregular,Helvetica,Arial,Sans-Serif;
        font-weight: bold;
        font-size: 12px; */
              }

              .qty_underlined {
                margin-top: 4px;
                border-bottom: 1px solid #555;
                font-weight: bold;
              }

              .stock_switch_icon {
                position: absolute;
                right: 0px;
                top: 36px;
                padding: 2px;
                color: white !important;
                font-size: 22px;
                font-weight: bold;
                background: #005b9f;
                cursor: pointer;
              }

              .search_result_list_tile_sales .avail_tab_container {
                position: absolute;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                background: white;
                z-index: 2;
                display: none;
                padding: 10px 0 0 0 !important;
                overflow: hidden;
              }

              .ajaxSpinnerOverlayPriceLoading.small {
                width: 21px;
                height: 21px;
              }
              /* will be set in commonJS -> getProductAvailabilitiesList !!!!!! DO NOT DELETE !!!!!*/
              .popupBox li span.pickup_store_name {
                float: left;
                padding: 0;
                font-size: 9pt;
              }

              .popupBox li span.nds-time {
                float: left;
                padding: 0;
              }

              .popupBox li span.pickup_store_name.schrack_txt_highlight {
                float: left;
                color: #005b9f;
                padding: 0;
                font-size: 11pt;
                font-weight: 700;
              }

              .popupBox li .fav_store {
                margin: 3px 2px;
                color: #d1222b;
              }

              .new_category_search_navigation_panel .moreData .note-msg {
                color: black;
                font-weight: bold;
                font-size: 14pt;
                text-align: center;
                padding: 20px 0;
              }

              .note-msg {
                color: black;
                font-weight: bold;
                font-size: 14pt;
                text-align: center;
                padding: 20px 0;
              }

              .search-page-product-list.compact
                li.sppl-entry
                .stock-section
                .popupBox
                li
                span.nds-time {
                display: inline-block;
              }

              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive {
                background: #b9b9b9;
                border-top: 1px solid #b9b9b9;
                border-bottom: 1px solid #b9b9b9;
              }

              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive:after,
              .search-page-container
                .search-page-product-list.grid
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive:after {
                background: #b9b9b9;
                border-top: 1px solid #b9b9b9;
                border-bottom: 1px solid #b9b9b9;
                top: -1px;
              }

              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive {
                background: #b9b9b9;
                border-top: 1px solid #b9b9b9;
                border-bottom: 1px solid #b9b9b9;
              }

              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive:after,
              .search-page-container
                .search-page-product-list.list
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive:after {
                background: #b9b9b9;
                border-top: 1px solid #b9b9b9;
                border-bottom: 1px solid #b9b9b9;
                top: -1px;
              }

              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive,
              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive:after,
              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive:after {
                background: #b9b9b9;
                border-top: 1px solid #b9b9b9;
                border-bottom: 1px solid #b9b9b9;
              }

              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container
                .qtyaddtocartbutton.inactive:after,
              .search-page-container
                .search-page-product-list.compact
                li.sppl-entry
                .add_to_cart_wrapper
                .general_current_addtocart_container_sales
                .qtyaddtocartbutton.inactive:after {
                top: -1px;
              }
              .search-page-product-list.grid
                li.sppl-entry
                .stock-section
                span.logstics-icon-text.on_request,
              .search-page-product-list.list
                li.sppl-entry
                .stock-section
                span.logstics-icon-text.on_request,
              .search-page-product-list.compact
                li.sppl-entry
                .stock-section
                span.logstics-icon-text.on_request,
              .qtyBoxCont ul li.on_request {
                font-weight: bold;
                color: #d1222b;
              }

              .noResultShowAdvisor {
                margin-top: 20px;
                font-family: robotoregular, Helvetica, Arial, Sans-Serif;
              }

              .bluetextColor {
                color: black;
              }

              .standardFontSize {
                font-size: 14px;
              }

              .advisorCard {
                float: left;
                width: 50%;
                padding: 10px;
                border: 1px solid #e5e5e5;
                margin-left: 25%;
              }
              .advisorImageFrame {
                float: left;
                width: 25%;
              }
              .advisorImage {
                height: 160px;
              }

              .advisorStart {
                font-weight: bold;
              }

              .advisorFullnameId {
                font-size: 18px;
                font-weight: bold;
              }
              .advisorTitle {
                word-break: break-word;
              }

              .advisorPhone {
                margin-top: 20px;
              }

              .advisorPhoneId {
                margin-top: 20px;
              }

              .faxLabel {
                float: left;
              }

              @media (min-width: 401px) {
                .qty_right {
                  /*
                        position: absolute;
                        right: 10px;
            */
                  float: right;
                }
              }
              @media (min-width: 1px) and (max-width: 400px) {
                .qty_right {
                  /* position: absolute;
            right: 10px; */
                }
              }

              @media (min-width: 1px) and (max-width: 320px) {
                .search-page-container {
                  padding: 0 1px !important;
                }
                .searchResultPartslistIcon {
                  margin-right: -16px;
                  margin-top: -5px;
                }
                /*.trinity_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 22px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 22px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 1px;
                  height: 22px;
                  width: 22px;
                }
                .shop_specific_height {
                  font-size: 1em !important;
                }
                .modified_partslist_icon {
                  right: 18px;
                }
                .modified_partslist_icon_sales {
                  right: 26px;
                }
                .general_current_price_container {
                  margin-left: 12px;
                }
                .general_current_addtocart_container {
                  margin-left: -32px;
                  padding-left: 23px;
                  padding-top: 10px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 13px !important;
                }
                .qtyaddtocartbutton {
                  width: 35px;
                }
                .addToCartListViewOffset {
                  margin-left: 9% !important;
                }
                .loginSuggest {
                  margin-left: -100px;
                  width: 132px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 14%;
                  width: 79%;
                }
              }

              @media (min-width: 321px) and (max-width: 360px) {
                /*.trinity_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 18px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 18px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 1px;
                  height: 22px;
                  width: 22px;
                }
                .shop_specific_height {
                  font-size: 0.9em !important;
                }
                .modified_partslist_icon {
                  right: 18px;
                }
                .modified_partslist_icon_sales {
                  right: 26px;
                }
                .general_current_addtocart_container {
                  margin-left: -39px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 29px !important;
                }
                .addToCartListViewOffset {
                  margin-left: 10% !important;
                }
                .loginSuggest {
                  margin-left: -106px;
                  width: 132px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 0;
                  width: 100%;
                }
              }

              @media (min-width: 361px) and (max-width: 410px) {
                /*.trinity_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 3px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 4px;
                  left: 4px;
                  height: 22px;
                  width: 22px;
                }
                .shop_specific_height {
                  font-size: 1em !important;
                }
                .modified_partslist_icon {
                  right: 18px;
                }
                .modified_partslist_icon_sales {
                  right: 26px;
                }
                .general_current_addtocart_container {
                  margin-left: -11px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 48px !important;
                }
                .addToCartListViewOffset {
                  margin-left: 13% !important;
                }
                .loginSuggest {
                  margin-left: -138px;
                  width: 167px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 0;
                }
              }

              @media (min-width: 411px) and (max-width: 460px) {
                .shop_specific_height {
                  font-size: 1em !important;
                }
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 7px;
                  left: 7px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 18px;
                }
                .modified_partslist_icon_sales {
                  right: 26px;
                }
                .general_current_addtocart_container {
                  margin-left: -11px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 57px !important;
                }
                .addToCartListViewOffset {
                  margin-left: 16% !important;
                }
                .loginSuggest {
                  margin-left: -150px;
                  width: 177px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 4%;
                }
              }

              @media (min-width: 461px) and (max-width: 480px) {
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 1px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 19px;
                }
                .modified_partslist_icon_sales {
                  right: 27px;
                }
                .general_current_addtocart_container {
                  margin-left: -6px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 69px !important;
                }
                .addToCartListViewOffset {
                  margin-left: 18% !important;
                }
                .loginSuggest {
                  margin-left: -171px;
                  width: 197px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 2%;
                }
              }

              @media (min-width: 481px) and (max-width: 560px) {
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 1px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 19px;
                }
                .modified_partslist_icon_sales {
                  right: 27px;
                }
                .general_current_addtocart_container {
                  margin-left: 8px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 82px;
                }
                .addToCartListViewOffset {
                  margin-left: 19% !important;
                }
                .loginSuggest {
                  margin-left: -199px;
                  width: 228px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 7%;
                }
              }

              @media (min-width: 561px) and (max-width: 639px) {
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 49px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 16px;
                }
                .modified_partslist_icon_sales {
                  right: 24px;
                }
                .general_current_addtocart_container {
                  margin-left: 22px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 111px;
                }
                .general_current_price_container {
                  margin-top: 1px !important;
                  margin-left: 61px;
                }
                .addToCartListViewOffset {
                  margin-left: 21% !important;
                }
                .loginSuggest {
                  margin-left: -242px;
                  width: 268px !important;
                  font-size: 14px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 14%;
                }
              }

              @media (min-width: 640px) and (max-width: 767px) {
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 21px !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 87px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 16px;
                }
                .modified_partslist_icon_sales {
                  right: 24px;
                }
                .general_current_addtocart_container {
                  margin-left: 40px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 149px;
                }
                .addToCartListViewOffset {
                  margin-left: 23% !important;
                }
                .loginSuggest {
                  margin-left: -287px;
                  width: 312px !important;
                  font-size: 15px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 20%;
                }
              }

              @media (min-width: 768px) and (max-width: 768px) {
                /*.trinity_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 26px !important;*/
                /*}*/
                /*.vignette_sign {*/
                /*    line-height: 4px !important;*/
                /*    font-size: 8px !important;*/
                /*    top: 26px !important;*/
                /*    letter-spacing: 0.2em !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 1px;
                  height: 22px;
                  width: 22px;
                }
                .modified_partslist_icon {
                  right: 16px;
                }
                .modified_partslist_icon_sales {
                  right: 24px;
                }
                .general_current_addtocart_container {
                  margin-left: 11px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 4px;
                }
                .addToCartListViewOffset {
                  margin-left: 24% !important;
                }
                .loginSuggest {
                  margin-left: -196px;
                  width: 226px !important;
                  font-size: 15px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 0%;
                }
              }

              @media (min-width: 769px) and (max-width: 992px) {
                .general_current_addtocart_container {
                  margin-left: 11px;
                }
                .general_current_addtocart_container_sales {
                  margin-left: 0;
                }
                .loginSuggest {
                  margin-left: -205px;
                  width: 226px !important;
                  font-size: 15px;
                }
                .search_result_list_tile_sales {
                  width: 100%;
                }
                .search_result_list_subtile_sales {
                  margin-left: 3%;
                }
                /*.vignette_sign {*/
                /*    top: 26px !important;*/
                /*    letter-spacing: 0.2em !important;*/
                /*}*/
                .promo_sign {
                  top: 2px;
                  left: 38px;
                  height: 22px;
                  width: 22px;
                }
              }

              @media (min-width: 1024px) and (max-width: 1280px) {
                /*.vignette_sign {*/
                /*    top: 26px !important;*/
                /*    letter-spacing: 0.2em !important;*/
                /*}*/
                #stockCleranceMob {
                  width: 19% !important;
                }
                .promo_sign {
                  top: 2px;
                  left: 87px;
                  height: 22px;
                  width: 22px;
                }
              }

              /*@media (min-width: 1281px) and (max-width: 2047px) {*/
              /*    .vignette_sign {*/
              /*        letter-spacing: 0.2em !important;*/
              /*    }*/
              /*}*/

              @media (min-width: 1px) and (max-width: 1199px) {
                .category_filter_wrapper {
                  display: none;
                }
              }

              @media (max-width: 375px) {
                .energyLabelSet .modal-dialog {
                  max-width: 80%;
                }
              }

              .info-icon.energyLabel {
                width: 43px;
                border: solid 0px green;
              }

              #energyLableSet {
                order: 8;
                display: inline-flex;
              }
            </style>

            <div class="search-page-container">
              <!-- Main tabs -->
              <div class="tabSection">
                <ul class="clearfix">
                  <li
                    class="active shop_specific shop_specific_height"
                    id="tab_show_products_panel"
                  >
                    <a
                      href="#"
                      class="shop_specific shop_specific_height"
                      role="tab"
                      data-toggle="tab"
                    >
                      Products ({{ $products->count() }})
                    </a>
                  </li>
                  <li
                    class="hidden-sm hidden-md hidden-lg shop_specific shop_specific_height"
                    style=""
                  >
                    <a
                      href="#"
                      class="shop_specific shop_specific_height"
                      role="tab"
                      data-toggle="tab"
                      onclick="jQuery(&#39;#activeproductcontainer&#39;).val(&#39;prodListingSales&#39;);"
                    >
                      Products on Sale (0)
                    </a>
                  </li>
                  
                </ul>
              </div>
              <!-- End Main tabs -->
              <div class="tab-content">
                <div class="tab-pane fade active in row" id="prodCont">
                  <div class="col-xs-3 hidden-xs hidden-sm hidden-md">
                    <!-- Categories -->

                    <div class="row">
                      <div class="col-xs-12" id="solrsearch-container">
                        <div
                          class="dropdown-menu filterPopup openedBx search-attributes-desktop"
                        >
                          <div class="tabSection posRel">
                            <span
                              class="glyphicon glyphicon-remove filterCrossIcon hidden-md hidden-lg"
                              onclick="jQuery(&#39;#filterMenu&#39;).click(); return false;"
                            ></span>
                            <!-- Filter tabs -->
                            <ul class="clearfix" role="tablist">
                              <li
                                role="presentation"
                                class="shop_specific shop_specific_height active"
                              >
                                <a
                                  class="shop_specific_height"
                                  href="#"
                                  role="tab"
                                  data-toggle="tab"
                                  onclick="toggleFilterState = &#39;topFilter&#39;;"
                                  id="topFilterBtn"
                                >
                                  Filter
                                </a>
                              </li>
                              <li
                                role="presentation"
                                class="shop_specific shop_specific_height"
                                style="display: none"
                              >
                                <a
                                  class="shop_specific_height"
                                  href="#"
                                  role="tab"
                                  data-toggle="tab"
                                  onclick="toggleFilterState = &#39;moreFilter&#39;;"
                                  id="moreFilterBtn"
                                >
                                  More Filters
                                </a>
                              </li>
                            </ul>
                            <!-- Filter tab Data -->
                            <div class="tab-content">
                              <div
                                class="tab-pane active products-tab"
                                id="topFilter"
                              >
                                <button
                                  id="clearFilter"
                                  class="btn btn-default marginTB10 marginL15 hide"
                                  onclick="clearSearchFilter()"
                                >
                                  Clear Filters
                                </button>
                                <div
                                  class="panel-group"
                                  id="topFilterAccordion"
                                  role="tablist"
                                  aria-multiselectable="true"
                                >
                                <script>
                                  function openFilter(element) {
                                    var filter = document.getElementById(element);
                                    filter.classList.toggle('in');
                                  }
                                </script>
                                @foreach($attributes as $attribute)
                                    <div class="panel panel-default facet" id="{{ $attribute->name }}" >
                                      <div class="panel-heading" role="tab" onclick="openFilter('facet-{{ $attribute->id }}')">
                                        <h4 class="panel-title">
                                          <a role="button" class="accordion-toggle" data-toggle="collapse" aria-expanded="true" aria-controls="facet-{{ $attribute->id }}">
                                            <span class="facetlabel">{{ $attribute->name }}:</span>
                                            <span class="selected-filter" id="selectedFilter-{{ $attribute->name }}"><span></span></span>
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="facet-{{ $attribute->id }}" class="panel-collapse collapse"  role="tabpanel">
                                        <div class="panel-body">
                                          <a href="#" onclick="performFilterSearchAjax(this, 'showall'); return false;" class="filter-deselect hide" style="font-size: 0.9em; color: #174573;">
                                            <i style="font-size: 1em; position: absolute; margin-top: 5px;" class="fa fa-eject fa-lg"></i>
                                            <span style="margin-left: 19px">Отменить выбор</span>
                                          </a>
                                          <ul>
                                           
                                            @foreach($attribute->values as $value)
                                              <li position="{{ $loop->iteration }}">
                                                <input
                                                  id="checkbox-{{ $attribute->id }}-{{ $value->id }}"
                                                  class="checkbox-filter-selection"
                                                  type="checkbox"
                                                  value="{{ $value->value }}"
                                                  data-showwhat="current"
                                                  filtertype="{{ $attribute->name }}"
                                                  onchange="updateFilter(this)"  
                                                  {{ in_array($value->value, explode(',', request()->get($attribute->name, ''))) && $value->value === last(explode(',', request()->get($attribute->name, ''))) ? 'checked' : '' }}/>
                                              
                                                <label for="checkbox-{{ $attribute->id }}-{{ $value->id }}">
                                                  <a
                                                    id="link-{{ $attribute->id }}-{{ $value->id }}"
                                                    class="checkbox-filter-selection-label-link"
                                                    rel="nofollow"
                                                    data-index="{{ $attribute->id }}"
                                                    data-pos="{{ $loop->iteration }}"
                                                    filtertype="{{ $attribute->name }}"
                                                  >
                                                    {{ $value->value }}
                                                  </a>
                                                </label>
                                              </li>
                                            @endforeach
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="hide" id="selectedFilterTemp-{{ $attribute->name }}"></div>
                                    </div>
                                  @endforeach

<script>
  function updateFilter(checkbox) {
    const filterType = checkbox.getAttribute('filtertype');
    const value = checkbox.value;
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);

    if (checkbox.checked) {
      params.append(filterType, value); // Добавляем параметр
    } else {
      params.delete(filterType, value); // Удаляем параметр
    }

    // Обновляем URL без перезагрузки страницы
    window.history.replaceState({}, '', `${url.pathname}?${params}`);
    window.location.reload();
    // Здесь можно добавить логику для выполнения AJAX-запроса, если это необходимо
    // Например, performFilterSearchAjax();
  }
</script>
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-lg-9">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="row prodListHd">
                          <div
                            class="col-xs-12 col-sm-6 text-right pull-right print-hide-imp"
                          >
                            Sort by:
                            <select
                              name="sort"
                              id="sort"
                              onchange="sortBySearch(this.value)"
                            >
                              <option value="ranking" selected="selected">
                                Best Sellers
                              </option>
                              <option value="score">Best Match</option>
                              <option value="name">Alphabetical</option>
                            </select>

                            <a id="grid_button" class="gridViewBttn blueTxt"
                              ><span class="glyphicon glyphicon-th"></span
                            ></a>
                            <a id="list_button" class="listViewBttn"
                              ><span class="glyphicon glyphicon-th-list"></span
                            ></a>
                            <a
                              id="listcompact_button"
                              class="compactlistViewBttn"
                              ><span class="glyphicon glyphicon-list"></span
                            ></a>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <h3 class="search">Products for: '{{$query}}'</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Sorting -->
                    <div class="row">
                      <!-- search products Start -->
                      <div
                        class="col-xs-12 col-sm-12 col-md-12 left"
                        id="chnageOnSaleFilter"
                      >
                        <ul
                          class="search-page-product-list gridView grid noStock"
                          id="gridListView"
                          data-name="results_list1"
                        >
                          <script>
                            document
                              .querySelector("#list_button")
                              .addEventListener("click", function () {
                                document.getElementById(
                                  "gridListView"
                                ).className =
                                  "search-page-product-list listView list noStock";
                              });

                            document
                              .querySelector("#listcompact_button")
                              .addEventListener("click", function () {
                                document.getElementById(
                                  "gridListView"
                                ).className =
                                  "search-page-product-list compactView compact noStock";
                              });

                            document
                              .querySelector("#grid_button")
                              .addEventListener("click", function () {
                                document.getElementById(
                                  "gridListView"
                                ).className =
                                  "search-page-product-list gridView grid noStock";
                              });
                          </script>
                          @foreach ($products as $product)
                          
                          <li
                            class="sppl-entry"
                            id="product_HSEMRJ6GS2"
                            data-sku="HSEMRJ6GS2"
                          >
                            <div class="image_sku_container">
                              <h2 class="p-sku">{{ $product->unique_identifier }}</h2>
                              <div class="imgCont" style="">
                                <span class="sale_mark sale-btn hidden"></span
                                ><a
                                  class="print-hide p-img previewImageHover track_product_click"
                                 ><img
                                    class="lazy loaded"
                                    alt="HSEMRJ6GS2"
                                    style="max-width: 200px;"
                                    src="{{$product->photo }}"
                                    data-was-processed="true" /></a
                                ><img
                                  class="print-only"
                                  src="{{$product->photo }}"
                                  alt="HSEMRJ6GS2"
                                />
                              </div>
                            </div>
                            <span class="hide-on-print p-name"
                              ><a
                                id="textLink_HSEMRJ6GS2"
                                href="#"
                                title=""
                                data-sku="HSEMRJ6GS2"
                                data-brand="Schrack"
                                class="searchtresult_productdetail_link track_product_click"
                                    >{{$product->name}}</a
                              ></span
                            >
                            <div class="modified_price_label_new">
                              <span class="span_on_request"
                                >Price {{ $product->price }} EUR</span
                              >
                              <div
                                class="general_current_addtocart_container"
                                style="margin-top: 11px"
                                id="general_current_addtocart_containerHSEMRJ6GS2"
                              >
                                <input
                                  type="text"
                                  class="qtyaddtocartfield qty-HSEMRJ6GS2"
                                  id="qtyaddtocartfieldHSEMRJ6GS2"
                                  name="qty-HSEMRJ6GS2"
                                  data-sku="HSEMRJ6GS2"
                                /><button
                                  id="addtocart-HSEMRJ6GS2"
                                  class="bttn-sm qtyaddtocartbutton vtc"
                                  data-sku="HSEMRJ6GS2"
                                  data-salesunitqty="1"
                                >
                                  <img
                                    class="addToCartImage loading cartButtonImage"
                                    src="{{asset('assets/cartIconWht.png')}}"
                                  />
                                </button>
                              </div>
                              <input
                                type="hidden"
                                id="qty-HSEMRJ6GS2"
                                value="1"
                              /><input
                                type="hidden"
                                id="productId-HSEMRJ6GS2"
                                value="HSEMRJ6GS2"
                              />
                            </div>
                            <div class="add_to_cart_wrapper"></div>
                            <div class="modified_partslist_icon_new"></div>
                            <div
                              class="glyphicon glyphicon-chevron-down detail-expand"
                            ></div>
                            <div class="stock-section">
                              <div class="pc-store product-store">
                                <div class="logistics-icon-text-row">
                                  <span class="logistic-icon"></span
                                  ><span class="logstics-icon-text"
                                    ><span class="nds-time sucubus"
                                      >in 1 day</span
                                    >
                                    <span class="nds-qty">{{ random_int(100, 1000) }} pc</span>
                                    <span class="nds-delivery"
                                      >deliverable</span
                                    >
                                  </span>
                                </div>
                                <div
                                  class="cut_off_time_text hide-on-print"
                                ></div>
                                <div class="cartInfoHide pickup-icon-text-row">
                                  <span class="store-icon-new"></span
                                  ><span class="formatted-pickup-qty-sum"
                                    >0 pc
                                    <span class="pickup-sum-stores-txt"
                                      >Σ all stores</span
                                    ></span
                                  >
                                </div>
                                <div class="product_stock_container">
                                  <span
                                    class="glyphicon glyphicon-info-sign info-icon"
                                    id="product-stock-icon-HSEMRJ6GS2"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                  ></span>
                                  <div
                                    class="popupBox qtyBoxCont dropdown-menu"
                                    aria-labelledby="product-stock-icon-HSEMRJ6GS2"
                                  >
                                    <ul>
                                      <li class="hd">
                                        Ready For Shipment<span></span>
                                      </li>
                                      <li>
                                        <span class="nds-time">in 1 day :</span
                                        ><span class="nds-qty">984 pc</span>
                                      </li>
                                      <li class="info_button_pickup_info hd">
                                        Ready For Pickup<span></span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          @endforeach
                          <script>
    let page = 1; // Начальная страница
    let loading = false; // Флаг загрузки

    window.addEventListener('scroll', function() {
        // Проверяем, достигли ли мы конца страницы
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 500 && !loading) {
            loading = true; // Устанавливаем флаг загрузки

            page++; // Увеличиваем номер страницы

            // Выполняем AJAX-запрос для загрузки дополнительных товаров
            fetch(`{{ route('products.loadMore') }}?page=${page}&q={{ $query }}`)
                .then(response => response.json())
                .then(data => {
                    if (data.data.length > 0) {
                        // Добавляем новые товары в список
                        const productList = document.getElementById('gridListView');
                        data.data.forEach(product => {
                            const li = document.createElement('li');
                            li.className = 'sppl-entry';
                            li.innerHTML = `
                                <div class="image_sku_container">
                                    <h2 class="p-sku">${product.unique_identifier}</h2>
                                    <div class="imgCont">
                                        <a class="print-hide p-img previewImageHover track_product_click">
                                            <img class="lazy loaded" alt="${product.unique_identifier}" style="max-width: 200px;" src="${product.photo}" />
                                        </a>
                                    </div>
                                </div>
                                <span class="hide-on-print p-name">
                                    <a href="${product.url}" title="${product.name}" class="searchtresult_productdetail_link track_product_click">${product.name}</a>
                                </span>
                                <div class="modified_price_label_new">
                                    <span class="span_on_request">Price ${product.price} EUR</span>
                                </div>
                            `;
                            productList.appendChild(li);
                        });
                    }
                    loading = false; // Сбрасываем флаг загрузки
                })
                .catch(error => {
                    console.error('Ошибка при загрузке товаров:', error);
                    loading = false; // Сбрасываем флаг загрузки в случае ошибки
                });
        }
                            });
                          </script>
                        </ul>
                      </div>
                      <!-- search products End -->
                      <!-- Stock Clearance Start -->

                      <!-- Stock Clearance End -->
                    </div>
                  </div>
                </div>
                <!-- Stock Clearance Start for mobile -->
                
                <!-- Article Tab End -->
              </div>
            </div>
          </div>

         
        </div>
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
                      title="Company"
                      >Company</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Schrack Technik Group"
                      >Schrack Technik Group</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Contact"
                      >Contact</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Worldwide"
                      >Worldwide</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="General Terms and Conditions"
                      >General Terms and Conditions</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Data Protection"
                      >Data Protection</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="General Terms of Use"
                      >General Terms of Use</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Editorial"
                      >Editorial</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      onclick="UC_UI.showSecondLayer(); return false;"
                      role="button"
                      >Cookie settings</a
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
                        Your advantages
                        <a
                          class="anchor-link"
                          href="#"
                          aria-label="Anchor for Your advantages"
                        ></a>
                      </h2>
                    </div>
                  </div>
                </header>

                <ul class="rte-ul">
                  <li>Extensive advisory service</li>
                  <li>Immediate delivery</li>
                  <li>Safe payment</li>
                  <li>Protection of personal data</li>
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
                        Get the Schrack Newsletter now!
                        <a
                          class="anchor-link"
                          href="#"
                          aria-label="Anchor for Get the Schrack Newsletter now!"
                        ></a>
                      </h2>
                    </div>
                  </div>
                </header>

                <p class="bodytext">
                  Stay informed - subscribe to our newsletter now and never
                  again miss our latest discounts and promos
                </p>
                <p class="bodytext">
                  <a
                    href="#"
                    class="button-small"
                    title="Just register here and take all actual information from SCHRACK Technik"
                    >SUBSCRIBE HERE<br
                  /></a>
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
        text-decoration: none; /* background: #7DAF3B; */
        padding: 0.5em 0.75em; /* border-radius: 3px; */
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