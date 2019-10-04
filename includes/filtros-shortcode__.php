<?php

class Filtros_Shortcode {

    function __construct() {

        add_shortcode( 'Contenidos', array( $this, 'contenidos' ) );
        add_shortcode( 'Head', array( $this, 'head' ) );
    }

    function Contenidos($atts) {

        extract( shortcode_atts(
            array('id' => '',), $atts ));

        ob_start();

        //wp_enqueue_style( 'filtros-shortcode1',  'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        //wp_enqueue_script( 'filtros-shortcode1', 'http://code.jquery.com/jquery-1.12.4.js' );
        wp_enqueue_style( 'filtros-shortcode222112',WP_PLUGIN_URL . '/filtros/css/popup.css' );
        $this->html2($id);

        wp_enqueue_script( 'filtros-shortcode614', WP_PLUGIN_URL . '/filtros/js/filtros-shortcode.js' );
        wp_enqueue_style( 'filtros-shortcode22', WP_PLUGIN_URL . '/filtros/css/filtros-shortcode.css' );
        //wp_enqueue_script( 'filtros-shortcode611', WP_PLUGIN_URL . '/filtros/js/jquery.jqGrid.js' );
        wp_enqueue_style( 'filtros-shortcode22211',WP_PLUGIN_URL . '/filtros/css/jquery-ui-custom.css' );
        wp_enqueue_style( 'filtros-shortcode222',WP_PLUGIN_URL . '/filtros/css/ui.jqgrid.min.css' );
        wp_enqueue_script( 'filtros-shortcode611133',WP_PLUGIN_URL . '/filtros/js/jquery.min.js' );
        wp_enqueue_script( 'filtros-shortcode61111',WP_PLUGIN_URL . '/filtros/js/jquery.jqgrid.min.js' );
        wp_enqueue_style( 'filtros-shortcode2221',WP_PLUGIN_URL . '/filtros/css/jquery.multiselect.css' );
        wp_enqueue_script( 'filtros-shortcode611111',WP_PLUGIN_URL . '/filtros/js/jquery.multiselect.js' );
        wp_enqueue_script( 'filtros-shortcode6111111',WP_PLUGIN_URL . '/filtros/js/popup.js' );

        return ob_get_clean();


    }

    function html2($id) {

        /*$mail="Test";
        $co="g3rardo21@gmail.com, efrain.sanmiguel@gmail.com, morten.lj.koch@gmail.com";
        $titulo = "AiSHi capacitor information (to: Test)";
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=UTF-8\r\n"; 
        $headers .= "From: Nick < nick.visic@aihuaglobal.com >\r\n";
        //$headers .= "CC: nick.visic@aihuaglobal.com\r\n"; 
        $bool = mail($co,$titulo,$mail,$headers);*/



        //$token=get_post_meta( $id, 'token', true );
        //$idioma=get_post_meta( $id, 'idioma', true );

        global $wpdb;

        print '<style>

        input[type=checkbox] {
    visibility: inherit !important;
    }

        .col-md-7{

            width:58.33333333%;
            float:left;

        }

        .col-md-5{

            width:41.66666667%;
            float:left;

        }

        .col-md-4{

            width:33.3333333%;
            float:left;

        }

        .col-md-8{

            width:66.6666666%;
            float:left;

        }

        .col-md-12{

            width:100%;
            float:left;

        }

        .le{
            float:left;
        }

        .search{
            font-size: 16px;
            padding: 6px 6px;
            border-radius: 4px;
        }

        .form-control{
            border-radius: 2px;
        }

        .fil{
            width:14%;
            margin-right: 2px;
        }

        .contenedor-productos{
        padding-top: 10px;
        }

        .ms-options-wrap > button{
            border-color: #ebebeb !important;
            background-color: #f8f8f8 !important;
            color: #919191 !important;
            font-size: 16px !important;
            padding: 8px !important;
        }

        .ms-options > ul > li > label > input{
            margin-top: 4px !important;
            margin-left: -4px !important;
        }

        .col-md-9{
            margin-bottom: 120px;
        }

        .col-md-12{
                margin-top: 3px !important;
                margin-bottom: 3px !important;
        }

        .ui-pg-input{
            width: auto !important;
            display: initial !important;
        }
        .ui-pg-selbox{
            width: auto !important;
            display: initial !important;
        }

     @media (max-width:991px){

         .le{
                width: 100% !important;
            }
            
            .searcha{
                
                    margin-left: 0px !important;
            
            }
            
            .searchaa{
                    margin-top: 8px !important;
            }
            
            .les{
            
                height: 50px !important;
            
            }

     }

        @media (max-width:767px){


            .le{
                width: 100% !important;
            }

            .col-md-4{
                width: 100% !important;
            }

            .col-md-5{
                width: 100% !important;
            }

            .contenedor-productos {
                padding-top: 0px !important;
            }
            .col-md-9{
                clear: both;
            }

            .ui-jqgrid-bdiv{
                width: 100% !important;
            }

            .ui-jqgrid-htable{
                width: 100% !important;
            }

            .ui-jqgrid-hdiv{
                width: 100% !important;
            }

            .ui-jqgrid-view{
                width: 100% !important;
            }

            .ui-jqgrid{
                width: 100% !important;
            }

            .ui-jqgrid-pager{
                width: 100% !important;
            }

            .ms-options > ul{
            column-count:1 !important;
            }

        }

        .clear{

            height: 30px;

        padding: 2px 7px;

        border: 1px solid;
        margin-right: 5px;
        margin-top: 3px;
        border-radius: 3px;
        border-color:transparent !important;
        width: 100% !important;
        text-align: right;

        }

        .ms-active > .ms-options > .clear{
            visibility: visible !important;
        }

        .ui-jqgrid-pg-left{
            display:none;
        }

        .entry-content-wrapper li{
            padding: 0px 0 !important;
        }

        #pager2_center{
            width: 86% !important;  
        }


        .col-md-3{
            width: 29%;
        }

        .col-md-9{
            width: 69%;
        }
        
        .col-md-10{
            width: 83.3333%;
        }
        
        .col-md-2{
            width: 16.7777%;
        }




';

        print'</style>';

        print '<input type="hidden" id="ajax" value="'.admin_url('admin-ajax.php').'" />';

        print '
        <!--<div class="col-md-7">
        &nbsp;
        </div>
        <div class="col-md-5">
        <div style="width: 77%;margin-right: 10px;" class="le">
            <input type="text" name="buscar" placeholder="Enter AISHI Part Number or Description" value="'.$_REQUEST['search'].'" id="buscar" class="form-control" />
        </div>
        <div style="width:20%;" class="le">
            <button type="button" id="buscarr" class="search">Search</button>
        </div>
        </div>-->

        <div class="a1 col-md-10">
            <div style="width:18%;" class="le">
            <select class="form-control" id="capacitor" multiple="multiple">
                <option value="">Capacitor Type</option>
            </select>
            </div>
            <div style="width:18%;" class="le">
            <select class="form-control" id="series" multiple="multiple">
                <option value="">Series</option>
            </select>
            </div>
            
            <div style="width:18%;" class="le">
            <select class="form-control" id="voltage" multiple="multiple">
                <option value="">Voltaje (CC)</option>
            </select>
            </div>
            
            
            <div style="width:18%;" class="le">
            <select class="form-control" id="voltaje-ca" multiple="multiple">
                <option value="">Voltaje (CA)</option>
            </select>
            </div>
            
            <div style="width:18%;" class="le">
            <select class="form-control" id="capacitance" multiple="multiple">
                <option value="">Capacitance (uF)</option>
            </select>
            </div>
            
            
            <div style="width:10%;" class="le">
            <button type="button" id="reset" class="search searcha ms-selectall " style="margin-left: 10px;margin-top: 1px;">Reset</button>



        </div>
        </div>

        <div class="le les col-md-2">
        <div class="le">
        <button type="button" id="otro" class="search searchaa">Request Custom Caps</button>
        </div>
        &nbsp;
        </div>

        <div class="col-md-12">
            <div class="le fil">
                <select class="form-control" id="voltage" multiple="multiple">
                    <option value="">Voltage (V)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="capacitance" multiple="multiple">
                    <option value="">Capacitance (uF)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="diameter" multiple="multiple">
                    <option value="">Diameter (mm)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="height" multiple="multiple">
                    <option value="">Height (mm)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="tem-max" multiple="multiple">
                    <option value="">Temp Max (°C)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="tem-min" multiple="multiple">
                    <option value="">Temp Min (°C)</option>
                </select>
            </div>

            <div class="le fil">
                <select class="form-control" id="life" multiple="multiple">
                    <option value="">Life (Hours)</option>
                </select>
            </div>

        </div>

        ';


        print '
        <div style="width: 100%;float: left;">
            <div>
                <button type="button" id="envi" class="search">Send</button> <span style="font-size: 15px;color:black;
">After final filtering, please select the capacitor(s) and click "Send" and we will email the specs and data sheets to you! </span><br /><span style="font-size: 13px;color:black;
">*Note: When you reset the search or move to another screen your selections are cleared.</span><br />
          <div class="contenedor-productos">
          <table id="grid"></table>
          <div id="pager2"></div>
          <div>
        ';
        print '</div>
          </div>
        </div>
        ';

        print '
        <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <p class=" first_form  form_element form_element_half" id="element_avia_1_1"> 
        <input name="avia_1_1" class="text_input is_empty" type="text" id="name" value="" placeholder="Name*">
    </p>
    <p class=" form_element form_element_half" id="element_avia_2_1"> 
        <input name="avia_2_1" class="text_input is_email" type="text" id="emaill" value="" placeholder="E-Mail*">
    </p>

    <p class=" form_element form_element_half" id="avia_3_1"> 
        <textarea name="avia_3_1" class="text_input"  id="note"  placeholder="Note"></textarea>
    </p>

    <p class=" form_element form_element_half" id="element_avia_4_1"> 
        <button type="button" id="enviar" class="search">Send</button>
        <span style="font-size: 13px;color:black;
">Please check your SPAM folder as our email to you may end up there. We are definitly sending you the specs requested!</span>
            </div>
    </p>


  </div>

</div>
        ';





    }


    function Head($atts) {

        extract( shortcode_atts(
            array('id' => '',), $atts ));

        ob_start();

        //wp_enqueue_style( 'filtros-shortcode1',  'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        //wp_enqueue_script( 'filtros-shortcode1', 'http://code.jquery.com/jquery-1.12.4.js' );
        $this->html3($id);

        wp_enqueue_script( 'filtros-shortcode61', WP_PLUGIN_URL . '/filtros/js/filtros-shortcode-2.js' );
        //wp_enqueue_style( 'filtros-shortcode22', WP_PLUGIN_URL . '/filtros/css/filtros-shortcode.css' );
        //wp_enqueue_script( 'filtros-shortcode611', WP_PLUGIN_URL . '/filtros/js/jquery.jqGrid.js' );
        //wp_enqueue_style( 'filtros-shortcode22211',WP_PLUGIN_URL . '/filtros/css/jquery-ui-custom.css' );
        //wp_enqueue_style( 'filtros-shortcode222',WP_PLUGIN_URL . '/filtros/css/ui.jqgrid.min.css' );
        //wp_enqueue_script( 'filtros-shortcode611133',WP_PLUGIN_URL . '/filtros/js/jquery.min.js' );
        //wp_enqueue_script( 'filtros-shortcode61111',WP_PLUGIN_URL . '/filtros/js/jquery.jqgrid.min.js' );
        //wp_enqueue_style( 'filtros-shortcode2221',WP_PLUGIN_URL . '/filtros/css/jquery.multiselect.css' );
        //wp_enqueue_script( 'filtros-shortcode611111',WP_PLUGIN_URL . '/filtros/js/jquery.multiselect.js' );

        return ob_get_clean();


    }

    function html3($id) {

        //$token=get_post_meta( $id, 'token', true );
        //$idioma=get_post_meta( $id, 'idioma', true );


        global $wpdb;

        print '<style>
        .col-md-7{

            width:58.33333333%;
            float:left;

        }

        .col-md-5{

            width:41.66666667%;
            float:left;

        }

        .col-md-4{

            width:33.3333333%;
            float:left;

        }

        .col-md-8{

            width:66.6666666%;
            float:left;

        }

        .col-md-12{

            width:100%;
            float:left;

        }

        .le{
            float:left;
        }

        .les{
            float:left;
        }

        .les2{
            float:left;
        }

        .search{
            font-size: 16px;
            padding: 6px 6px;
            border-radius: 4px;
        }

        .form-control{
            border-radius: 2px;
        }

        .fil{
            width:14%;
            margin-right: 2px;
        }

        .contenedor-productos{
        padding-top: 10px;
        }

        .ms-options-wrap > button{
            border-color: #ebebeb !important;
            background-color: #f8f8f8 !important;
            color: #919191 !important;
            font-size: 16px !important;
            padding: 8px !important;
        }

        .ms-options > ul > li > label > input{
            margin-top: 4px !important;
            margin-left: -4px !important;
        }

        .col-md-9{
            margin-bottom: 120px;
        }

        .col-md-12{
            margin-top: 20px !important;
            margin-bottom: 25px !important;
        }

        .ui-pg-input{
            width: auto !important;
            display: initial !important;
        }
        .ui-pg-selbox{
            width: auto !important;
            display: initial !important;
        }

        @media (max-width:767px){
            .le{
                width: 100% !important;
            }

            .col-md-4{
                width: 100% !important;
            }

            .col-md-5{
                width: 100% !important;
            }

            .contenedor-productos {
                padding-top: 0px !important;
            }
            .col-md-9{
                clear: both;
            }

            .ms-options > ul{
            column-count:1 !important;
            }

            .bus{
                padding: 0px 35px !important;
                position: initial !important;
            }

        }


        .ui-jqgrid-bdiv{
                width: 100% !important;
            }

            .ui-jqgrid-htable{
                width: 100% !important;
            }

            .ui-jqgrid-hdiv{
                width: 100% !important;
            }

            .ui-jqgrid-view{
                width: 100% !important;
            }

            .ui-jqgrid{
                width: 100% !important;
            }

            .ui-jqgrid-pager{
                width: 100% !important;
            }

        .clear{

            height: 30px;
        width: 60px;
        padding: 2px 7px;

        border: 1px solid;
        margin-left: 5px;
        margin-top: 3px;
        border-radius: 3px;

        }

        .ms-active > .ms-options > .clear{
            visibility: visible !important;
        }

        .ui-jqgrid-pg-left{
            display:none;
        }

        .bus{
                margin-top: -25px;
        }

        .bb{
            height: 25px !important;
            margin-bottom: 5px !important;
        }

        #menu-item-search{
        display:none !important;
        }

        @media(max-width:81px){

            .les{
                float: left !important;
                width: 86% !important;
                margin-right: 10px;
            }

            .les2{
                float: left !important;
                width: 10% !important;
            }

            #menu-item-search{
                display:none !important;
            }

            #menu-item-3499{
                display:none;
            }

            #menu-item-3498{
                display:none;
            }

            #menu-item-3497{
                display:none;
            }

            #menu-item-3493{
                display:none;
            }

            #menu-item-3564{
                display:none;
            }

            #menu-item-3149{
                display:none;
            }

        }

';

        print'</style>';

        print '<input type="hidden" id="ajax" value="'.admin_url('admin-ajax.php').'" />';

        print '

        <div class="bus">
        <form action="//www.aishi.us/test/search/" method="get">
        <div class="col-md-7">
        &nbsp;
        </div>
        <div class="col-md-5">
        <div style="width: 70%;margin-right: 10px;" class="les">
            <input type="text" name="search" placeholder="Enter AiSHi Part Number" value="'.$_REQUEST['search'].'" id="buscar" class="form-control bb" />
        </div>
        <div style="width:27%;" class="les2">

        <a href="#"  data-av_icon="" data-av_iconfont="entypo-fontello" style="color: #969696;" id="buscarr"><span class="avia_hidden_link_text">Search</span></a>

        </div>
        </div>
        </form>
        </div>';

    }

}


$filtros_shortcode = new Filtros_Shortcode();
