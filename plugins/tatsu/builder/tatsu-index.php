<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php _e( 'Tatsu Page Builder', 'tatsu' ); ?></title>
 <style>
      #be-leftpanel-wrapper {
        position: fixed;
        top : 0;
        left: 0;
        width: 300px;
        background-color: gray;
        min-height: 100vh;
        background-color: #1b1d20;
        font-family: 'Roboto', sans-serif;
      }
      #columns-layout {
        list-style-type: none;
        padding: 0px;
        overflow: auto;

      }
      .column-wrapper > div {
        background-color: #888888;
      }
      .column-wrapper.active > div {
        background-color: #00B5B5;
      }
      .column-wrapper {
        float: left;
        width: calc(25% - 15px);
        margin: 2%;
        height: 37px;
        cursor: pointer;
      }
      .be-1-1,.be-custom-layout {
        width:100%;
        height: 100%;
      }
      .be-1-2 {
        width: calc(50% - 4px);
        height: 100%;
        float: left;
        margin: 2px;
      }
      .be-1-3 {
        width: calc(33.333333% - 4px);
        height: 100%;
        float: left;
        margin: 2px;
      }
      .be-2-3 {
        width: calc(66.666666% - 4px);
        height: 100%;
        float: left;
        margin: 2px;
      }
      .be-1-4 {
        width: calc(25% - 4px);
        height: 100%;
        float: left;
        margin: 2px;
      }
      .be-1-5 {
        width: calc(20% - 4px);
        height: 100%;
        float: left;
        margin: 2px;
      }

    </style>
    <?php wp_head(); ?>
  </head>
  <body>

    <div id="root">
    </div>
    <div class ="tatsu-load-preview-wrapper">
      <div class  ="tatsu-dragon-wrap">
        <div class = "tatsu-dragon">
          <svg viewBox="0 0 32 32" class = "tatsu-dragon-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
              <path class="path1" d="M21.501 19.929c1.138 1.423 1.423 3.537 1.423 3.537 0.569-8.006-5.602-9.064-5.602-9.064 1.95-0.812 4.471 0.163 4.471 0.163-4.885-2.764-8.909-0.326-8.909-0.326 0.446-1.015 2.845-2.113 2.845-2.113-9.104 2.439-8.495 8.332-8.495 8.332 0.285-1.504 2.845-2.276 3.699-2.602 0.394-0.13 0.673-0.495 0.673-0.925 0-0.076-0.009-0.149-0.025-0.22 2.4-2.147 4.797-0.279 4.797-0.279 1.751 2.236-1.584 4.268-6.138 7.353-2.537 1.737-3.873 3.237-4.552 4.438 2.759 2.345 6.363 3.771 10.299 3.771 0.011 0 0.021 0 0.032-0q0.816 0 1.613-0.081c5.816-5.075 3.869-11.986 3.869-11.986z"></path>
              <path class="path2" d="M22.646 17.534c0.187 0.342 0.368 0.746 0.517 1.166l0.22 0.049c3.915-0.2 6.931-2.357 8.605-3.894-0.159-2.227-0.753-4.281-1.696-6.127-0.562 6.114-6.362 8.376-7.646 8.805z"></path>
              <path class="path3" d="M23.691 21.023c0.807-0.017 5.221-0.079 7.812-0.959 0.334-1.221 0.525-2.624 0.525-4.071 0-0.002 0-0.005 0-0.007 0-0.029 0-0.057 0-0.087-1.837 1.565-4.361 3.256-8.603 3.652 0.11 0.411 0.203 0.911 0.261 1.422z"></path>
              <path class="path4" d="M23.773 21.667c0.020 0.308 0.032 0.667 0.032 1.029s-0.011 0.722-0.034 1.078c1.743 0.562 3.775 0.991 5.44 1.275 0.775-1.105 1.435-2.373 1.917-3.726-1.674 0.163-4.113 0.352-7.355 0.344z"></path>
              <path class="path5" d="M22.509 24.496c-0.378 2.835-1.643 5.321-3.504 7.224 3.959-0.776 7.317-2.917 9.641-5.903-1.913-0.386-4.252-0.911-6.101-1.694-0.005 0.124-0.019 0.247-0.037 0.373z"></path>
              <path class="path6" d="M24.183 6.639c1.632 5.48-2.236 9.104-2.577 9.408 0.206 0.232 0.405 0.485 0.587 0.749l0.192-0.033c1.094-0.366 6.579-2.469 7.136-8.034l0.116-1.157c-2.554-4.087-6.802-6.91-11.737-7.489 2.008 0.894 5.175 2.833 6.284 6.556z"></path>
              <path class="path7" d="M12.518 4.443c3.74-0.098 9.429 1.050 11.080 6.506 0.109-0.5 0.172-1.075 0.172-1.664 0-0.862-0.134-1.693-0.382-2.473-1.537-5.158-7.616-6.602-7.677-6.616l-0.625-0.196c-8.435 0.505-15.085 7.469-15.086 15.986 0 0.473 0.021 0.938 0.061 1.401 0.445-6.037 2.938-12.691 12.457-12.943z"></path>
              <path class="path8" d="M16.347 5.602c-0.924 0.378-6.653 2.861-8.896 7.238 0 0 3.82-5.252 10.188-4.634 2.787 0.273 4.289 1.595 5.102 2.728-0.529-1.539-2.071-4.342-6.394-5.331z"></path>
              <path class="path9" d="M11.942 7.047c0.836-0.563 1.808-1.124 2.817-1.62-0.424-0.135-1.088-0.175-1.761-0.175-0.015 0-0.029 0-0.044 0-0.134 0-0.273 0-0.407 0q-3.029 0.081-5.289 1.080c-0.818 0.875-2.581 2.847-3.414 6.697-0.142 0.808-0.232 1.75-0.25 2.71-0.001 0.055-0.001 0.099-0.001 0.143 0 0.852 0.052 1.692 0.154 2.516 0.153 1.253 0.399 2.46 0.731 3.631-0.526-6.205 2.415-11.626 7.464-14.982z"></path>
              <path class="path10" d="M3.892 22.872c-0.937-2.985-2.523-10.132 1.5-15.529-3.768 2.404-5.175 9.464-4.568 13.728 0.894 2.611 2.355 4.83 4.244 6.597 0.895-1.482 2.472-3.008 4.722-4.544l0.812-0.55c-2.18 0.413-5.674 0.474-6.711 0.298z"></path>
          </svg>
        </div>
        <div class = "tatsu-load-indicator-wrap">
          <div class ="tatsu-load-indicator">
            <div class = "tatsu-bounce-1"></div>
            <div class = "tatsu-bounce-2"></div>
            <div class = "tatsu-bounce-3"></div>
          </div>
        </div>
      </div>
    </div>
    
    <?php wp_footer(); ?>
  </body>
</html>