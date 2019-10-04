<?php



/**

    Plugin Name:	CapaciterSearch

	Plugin URI:		http://softwaremena.com.ve/

	Description:	Plugin

	Version: 		0.1

	Author:			Osmel Mena

	Author URI:		http://softwaremena.com.ve/

	License:		GPLv2 or later

 **/



//---------------------------------------------------------------------

// REGISTER TESTIMONIOS POST TYPE

//---------------------------------------------------------------------

if ( ! function_exists('filtros') ) {



    // Register Custom Post Type

    function filtros() {



        $labels = array(

            'name'                => _x( 'Filtros', 'Post Type General Name', 'apk' ),

            'singular_name'       => _x( 'Filtro', 'Post Type Singular Name', 'apk' ),

            'menu_name'           => __( 'Filtros', 'apk' ),

            'name_admin_bar'      => __( 'Filtros', 'apk' ),

            'parent_item_colon'   => __( 'Superior:', 'apk' ),

            'all_items'           => __( 'Todas las filtros', 'apk' ),

            'add_new_item'        => __( 'Agregar filtro', 'apk' ),

            'add_new'             => __( 'Agregar nuevo', 'apk' ),

            'new_item'            => __( 'Nueva filtro', 'apk' ),

            'edit_item'           => __( 'Editar filtro', 'apk' ),

            'update_item'         => __( 'Actualizar filtro', 'apk' ),

            'view_item'           => __( 'Ver filtro', 'apk' ),

            'search_items'        => __( 'Buscar filtros', 'apk' ),

            'not_found'           => __( 'No se ha encontrado :(', 'apk' ),

            'not_found_in_trash'  => __( 'Nada en la papelera', 'apk' ),

        );

        $args = array(

            'label'               => __( 'filtro', 'apk' ),

            'description'         => __( 'Filtros', 'apk' ),

            'labels'              => $labels,

            'supports'            => array( 'title', 'editor', 'thumbnail', ),

            'hierarchical'        => false,

            'public'              => true,

            'show_ui'             => true,

            'show_in_menu'        => true,

            'menu_position'       => 20,

            'menu_icon'           => 'dashicons-editor-quote',

            'show_in_admin_bar'   => false,

            'show_in_nav_menus'   => false,

            'can_export'          => true,

            'has_archive'         => false,

            'exclude_from_search' => true,

            'publicly_queryable'  => true,

            'capability_type'     => 'page',

        );

        register_post_type( 'filtros', $args );



    }



    // Hook into the 'init' action

    add_action( 'init', 'filtros', 0 );



}



add_action( 'init', 'filtros' );









//---------------------------------------------------------------------

// TESTIMONIOS SHORTCODE COLUMN

//---------------------------------------------------------------------



//Personaliza las columnas

function filtros_columns($testimonios_columns) {



    //La columna con el checkbox

    $new_columns['cb'] = '<input type="checkbox" />';



    //La columna con el título 

    $new_columns['title'] = _x('Autor', 'autor');



    //La columna con el código

    $new_columns['codigo'] = _x('Código', 'codigo');





    return $new_columns;



}



add_filter('manage_edit-filtros_columns', 'filtros_columns');





function manage_filtros_columns($column_name, $id) {

    global $wpdb;

    switch ($column_name) {



        case 'codigo':

            echo '<input type="text" readonly="readonly" value="[Contenidos]" class="shortcode-in-list-table wp-ui-text-highlight code">';

            break;



        default:

            break;

    } // end switch

}



add_action('manage_filtros_posts_custom_column', 'manage_filtros_columns', 10, 2);





class Filtros {





}





define('DDBB_USER', 'root');

define('DDBB_PASSWORD', '');

define('DDBB_NAME', 'aishi');

define('DDBB_HOST', 'localhost');

/*

define('DDBB_USER', 'root');

define('DDBB_PASSWORD', '');

define('DDBB_NAME', 'aishi');

define('DDBB_HOST', 'localhost');

*/



function capacitor_callback(){



    global $wpdb;	



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }



    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }



    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }







    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }









    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a

    where 1 and productType != '' and productType != '0'

    ".$g."

    group by a.productType

    order by a.productType asc";





    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Capacitor Type</option>';

    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->productType.'" >'.$fila->productType.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_capacitor','capacitor_callback');

add_action('wp_ajax_capacitor','capacitor_callback');



function series_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }



    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }



    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }





    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1 and series != '' and series != '0'

    ".$g."

    group by a.series

    order by a.series asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Series</option>';

    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->series.'" >'.$fila->series.'</option>';



    endforeach;





}

add_action('wp_ajax_nopriv_series','series_callback');

add_action('wp_ajax_series','series_callback');



function voltage_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }





    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1 and voltageV != '' and voltageV != '0'

    ".$g."

    group by a.voltageV

    order by a.voltageV asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Voltage</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->voltageV.'" >'.$fila->voltageV.'</option>';



    endforeach;





} 



add_action('wp_ajax_nopriv_voltage','voltage_callback');

add_action('wp_ajax_voltage','voltage_callback');





function voltageca_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and voltageVAC != '' and voltageVAC != '0'

    ".$g."

    group by a.voltageVAC

    order by a.voltageVAC asc";





    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Voltage</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->voltageVAC.'" >'.$fila->voltageVAC.'</option>';



    endforeach;





} 



add_action('wp_ajax_nopriv_voltageca','voltageca_callback');

add_action('wp_ajax_voltageca','voltageca_callback');





function capacitance_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and capacitanceUF != '' and capacitanceUF != '0'

    ".$g."

    group by a.capacitanceUF

    order by a.capacitanceUF asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Capacitance</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->capacitanceUF.'" >'.$fila->capacitanceUF.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_capacitance','capacitance_callback');

add_action('wp_ajax_capacitance','capacitance_callback');



function diameter_callback(){



    global $wpdb;	





    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }





    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1 and diameterMM != '' and diameterMM != '0'

    ".$g."

    group by a.diameterMM

    order by a.diameterMM asc";





    //echo $consulta;



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Diameter</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->diameterMM.'" >'.$fila->diameterMM.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_diameter','diameter_callback');

add_action('wp_ajax_diameter','diameter_callback');



function width_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }





    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and widthMM != '' and widthMM != '0'

    ".$g."

    group by a.widthMM

    order by a.widthMM asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Height</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->widthMM.'" >'.$fila->widthMM.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_width','width_callback');

add_action('wp_ajax_width','width_callback');



function height_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }



    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }



    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }





    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and heightMM != '' and heightMM != '0'

    ".$g."

    group by a.heightMM

    order by a.heightMM asc";

    

    echo $consulta;



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Height</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->heightMM.'" >'.$fila->heightMM.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_height','height_callback');

add_action('wp_ajax_height','height_callback');



function lead_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }





    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1 and leadSpacingMM != '' and leadSpacingMM != '0'

    ".$g."

    group by a.leadSpacingMM

    order by a.leadSpacingMM asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Height</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->leadSpacingMM.'" >'.$fila->leadSpacingMM.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_lead','lead_callback');

add_action('wp_ajax_lead','lead_callback');



function temp_max_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and tempUpperLimit != '' and tempUpperLimit != '0'

    ".$g."

    group by a.tempUpperLimit

    order by a.tempUpperLimit asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Temp Max</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->tempUpperLimit.'" >'.$fila->tempUpperLimit.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_temp_max','temp_max_callback');

add_action('wp_ajax_temp_max','temp_max_callback');



function temp_min_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }





    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['life']) > 0 && $_REQUEST['life']!=''){



        $gg=0;

        $life='';

        foreach($_REQUEST['life'] as $row){

            $gg++;

            if($gg>1){

                $life.=','."'".$row."'";

            }

            else

            {

                $life.= "'".$row."'";

            }



        }

    }





    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if($life!='')

    {

        $g.="and a.productLife in (".$life.")";   

    }





    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and tempLowLimit != '' and tempLowLimit != '0'

    ".$g."

    group by a.tempLowLimit

    order by a.tempLowLimit asc";



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Temp Min</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->tempLowLimit.'" >'.$fila->tempLowLimit.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_temp_min','temp_min_callback');

add_action('wp_ajax_temp_min','temp_min_callback');



function life_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }





    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['dv']) > 0 && $_REQUEST['dv']!=''){

        $gg=0;

        $dv='';

        foreach($_REQUEST['dv'] as $row){

            $gg++;

            if($gg>1){

                $dv.=','."'".$row."'";

            }

            else

            {

                $dv.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }



    if($dv!='')

    {

        $g.="and a.dvdtVus in (".$dv.")";   

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1  and productLife != '' and productLife != '0'

    ".$g."

    group by a.productLife

    order by a.productLife asc";



    //echo $consulta;



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Life</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->productLife.'" >'.$fila->productLife.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_life','life_callback');

add_action('wp_ajax_life','life_callback');



function dv_callback(){



    global $wpdb;	



    if(count($_REQUEST['capacitor']) > 0 && $_REQUEST['capacitor']!=''){



        $capacitor='';

        foreach($_REQUEST['capacitor'] as $row){

            $gg++;

            if($gg>1){

                $capacitor.=','."'".$row."'";

            }

            else

            {

                $capacitor.= "'".$row."'";

            }



        }



    }



    if(count($_REQUEST['series']) > 0 && $_REQUEST['series']!=''){



        $gg=0;

        $series='';

        foreach($_REQUEST['series'] as $row){

            $gg++;

            if($gg>1){

                $series.=','."'".$row."'";

            }

            else

            {

                $series.= "'".$row."'";

            }



        }

    }





    if(count($_REQUEST['voltage']) > 0 && $_REQUEST['voltage']!=''){

        $gg=0;

        $voltage='';

        foreach($_REQUEST['voltage'] as $row){

            $gg++;

            if($gg>1){

                $voltage.=','."'".$row."'";

            }

            else

            {

                $voltage.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['capacitance']) > 0 && $_REQUEST['capacitance']!=''){



        $gg=0;

        $capacitance='';

        foreach($_REQUEST['capacitance'] as $row){

            $gg++;

            if($gg>1){

                $capacitance.=','."'".$row."'";

            }

            else

            {

                $capacitance.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['diameter']) > 0 && $_REQUEST['diameter']!=''){



        $gg=0;

        $diameter='';

        foreach($_REQUEST['diameter'] as $row){

            $gg++;

            if($gg>1){

                $diameter.=','."'".$row."'";

            }

            else

            {

                $diameter.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['height']) > 0 && $_REQUEST['height']!=''){



        $gg=0;

        $height='';

        foreach($_REQUEST['height'] as $row){

            $gg++;

            if($gg>1){

                $height.=','."'".$row."'";

            }

            else

            {

                $height.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_max']) > 0 && $_REQUEST['temp_max']!=''){



        $gg=0;

        $temp_max='';

        foreach($_REQUEST['temp_max'] as $row){

            $gg++;

            if($gg>1){

                $temp_max.=','."'".$row."'";

            }

            else

            {

                $temp_max.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['temp_min']) > 0 && $_REQUEST['temp_min']!=''){



        $gg=0;

        $temp_min='';

        foreach($_REQUEST['temp_min'] as $row){

            $gg++;

            if($gg>1){

                $temp_min.=','."'".$row."'";

            }

            else

            {

                $temp_min.= "'".$row."'";

            }



        }

    }



    if($capacitor!='')

    {

        $g.="and a.productType in (".$capacitor.")";   

    }



    if($series!='')

    {

        $g.="and a.series in (".$series.")";   

    }





    if($voltage!='')

    {

        $g.="and a.voltageV in (".$voltage.")";   

    }





    if($capacitance!='')

    {

        $g.="and a.capacitanceUF in (".$capacitance.")";   

    }



    if($diameter!='')

    {

        $g.="and a.diameterMM in (".$diameter.")";   

    }



    if($height!='')

    {

        $g.="and a.heightMM in (".$height.")";   

    }



    if($temp_max!='')

    {

        $g.="and a.tempUpperLimit in (".$temp_max.")";   

    }



    if($temp_min!='')

    {

        $g.="and a.tempLowLimit in (".$temp_min.")";   

    }



    if(count($_REQUEST['voltage_ca']) > 0 && $_REQUEST['voltage_ca']!=''){

        $gg=0;

        $voltageca='';

        foreach($_REQUEST['voltage_ca'] as $row){

            $gg++;

            if($gg>1){

                $voltageca.=','."'".$row."'";

            }

            else

            {

                $voltageca.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['width']) > 0 && $_REQUEST['width']!=''){

        $gg=0;

        $width='';

        foreach($_REQUEST['width'] as $row){

            $gg++;

            if($gg>1){

                $width.=','."'".$row."'";

            }

            else

            {

                $width.= "'".$row."'";

            }



        }

    }



    if(count($_REQUEST['lead']) > 0 && $_REQUEST['lead']!=''){

        $gg=0;

        $lead='';

        foreach($_REQUEST['lead'] as $row){

            $gg++;

            if($gg>1){

                $lead.=','."'".$row."'";

            }

            else

            {

                $lead.= "'".$row."'";

            }



        }

    }



    if($voltageca!='')

    {

        $g.="and a.voltageVAC in (".$voltageca.")";   

    }



    if($width!='')

    {

        $g.="and a.widthMM in (".$width.")";   

    }



    if($lead!='')

    {

        $g.="and a.leadSpacingMM in (".$lead.")";   

    }





    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1 and dvdtVus != '' and dvdtVus != '0'

    ".$g."

    group by a.dvdtVus

    order by a.dvdtVus asc";



    //echo $consulta;



    $resultado = $gestordb->get_results( $consulta );



    //echo '<option value="" >Life</option>';



    foreach ( $resultado as $fila ):



    echo '<option value="'.$fila->dvdtVus.'" >'.$fila->dvdtVus.'</option>';



    endforeach;





} 

add_action('wp_ajax_nopriv_dv','dv_callback');

add_action('wp_ajax_dv','dv_callback');





function grid_callback(){





    global $wpdb;	



    $gg=0;





    if($_REQUEST['buscar']!='')

    {

        $g.="and concat(a.partNumber) like '%".$_REQUEST['buscar']."%' ";   

    }

    else

    {





        if($_REQUEST['capacitor']!='' && $_REQUEST['capacitor']!='null'){

            $_REQUEST['capacitor']=explode(',',$_REQUEST['capacitor']);

            $capacitor='';

            foreach($_REQUEST['capacitor'] as $row){

                $gg++;

                if($gg>1){

                    $capacitor.=','."'".$row."'";

                }

                else

                {

                    $capacitor.= "'".$row."'";

                }



            }



        }



        if($_REQUEST['series']!='' && $_REQUEST['series']!='null'){

            $_REQUEST['series']=explode(',',$_REQUEST['series']);

            $gg=0;

            $series='';

            foreach($_REQUEST['series'] as $row){

                $gg++;

                if($gg>1){

                    $series.=','."'".$row."'";

                }

                else

                {

                    $series.= "'".$row."'";

                }



            }

        }





        if($_REQUEST['voltage']!='' && $_REQUEST['voltage']!='null'){

            $_REQUEST['voltage']=explode(',',$_REQUEST['voltage']);



            $gg=0;

            $voltage='';

            foreach($_REQUEST['voltage'] as $row){

                $gg++;

                if($gg>1){

                    $voltage.=','."'".$row."'";

                }

                else

                {

                    $voltage.= "'".$row."'";

                }



            }

        }

        

        if($_REQUEST['voltageac']!='' && $_REQUEST['voltageac']!='null'){

            $_REQUEST['voltageac']=explode(',',$_REQUEST['voltageac']);



            $gg=0;

            $voltageac='';

            foreach($_REQUEST['voltageac'] as $row){

                $gg++;

                if($gg>1){

                    $voltageac.=','."'".$row."'";

                }

                else

                {

                    $voltageac.= "'".$row."'";

                }



            }

        }



        if($_REQUEST['capacitance']!='' && $_REQUEST['capacitance']!='null'){

            $_REQUEST['capacitance']=explode(',',$_REQUEST['capacitance']);

            $gg=0;

            $capacitance='';

            foreach($_REQUEST['capacitance'] as $row){

                $gg++;

                if($gg>1){

                    $capacitance.=','."'".$row."'";

                }

                else

                {

                    $capacitance.= "'".$row."'";

                }



            }

        }





        if($_REQUEST['diameter']!='' && $_REQUEST['diameter']!='null'){

            $_REQUEST['diameter']=explode(',',$_REQUEST['diameter']);

            $gg=0;

            $diameter='';

            foreach($_REQUEST['diameter'] as $row){

                $gg++;

                if($gg>1){

                    $diameter.=','."'".$row."'";

                }

                else

                {

                    $diameter.= "'".$row."'";

                }



            }

        }





        if($_REQUEST['height']!='' && $_REQUEST['height']!='null'){

            $_REQUEST['height']=explode(',',$_REQUEST['height']);

            $gg=0;

            $height='';

            foreach($_REQUEST['height'] as $row){

                $gg++;

                if($gg>1){

                    $height.=','."'".$row."'";

                }

                else

                {

                    $height.= "'".$row."'";

                }



            }

        }

        

        if($_REQUEST['width']!='' && $_REQUEST['width']!='null'){

            $_REQUEST['width']=explode(',',$_REQUEST['width']);

            $gg=0;

            $width='';

            foreach($_REQUEST['width'] as $row){

                $gg++;

                if($gg>1){

                    $width.=','."'".$row."'";

                }

                else

                {

                    $width.= "'".$row."'";

                }



            }

        }

        

        

        if($_REQUEST['lead']!='' && $_REQUEST['lead']!='null'){

            $_REQUEST['lead']=explode(',',$_REQUEST['lead']);

            $gg=0;

            $lead='';

            foreach($_REQUEST['lead'] as $row){

                $gg++;

                if($gg>1){

                    $lead.=','."'".$row."'";

                }

                else

                {

                    $lead.= "'".$row."'";

                }



            }

        }

        

        

        if($_REQUEST['dv']!='' && $_REQUEST['dv']!='null'){

            $_REQUEST['dv']=explode(',',$_REQUEST['dv']);

            $gg=0;

            $dv='';

            foreach($_REQUEST['dv'] as $row){

                $gg++;

                if($gg>1){

                    $dv.=','."'".$row."'";

                }

                else

                {

                    $dv.= "'".$row."'";

                }



            }

        }





        if($_REQUEST['temp_max']!='' && $_REQUEST['temp_max']!='null'){

            $_REQUEST['temp_max']=explode(',',$_REQUEST['temp_max']);

            $gg=0;

            $temp_max='';

            foreach($_REQUEST['temp_max'] as $row){

                $gg++;

                if($gg>1){

                    $temp_max.=','."'".$row."'";

                }

                else

                {

                    $temp_max.= "'".$row."'";

                }



            }

        }



        if($_REQUEST['temp_min']!='' && $_REQUEST['temp_min']!='null'){

            $_REQUEST['temp_min']=explode(',',$_REQUEST['temp_min']);

            $gg=0;

            $temp_min='';

            foreach($_REQUEST['temp_min'] as $row){

                $gg++;

                if($gg>1){

                    $temp_min.=','."'".$row."'";

                }

                else

                {

                    $temp_min.= "'".$row."'";

                }



            }

        }



        if($_REQUEST['life']!='' && $_REQUEST['life']!='null'){

            $_REQUEST['life']=explode(',',$_REQUEST['life']);

            $gg=0;

            $life='';

            foreach($_REQUEST['life'] as $row){

                $gg++;

                if($gg>1){

                    $life.=','."'".$row."'";

                }

                else

                {

                    $life.= "'".$row."'";

                }



            }

        }





        if($capacitor!='')

        {

            $g.="and a.productType in (".$capacitor.")";   

        }

        

        if($voltageac!='')

        {

            $g.="and a.voltageVAC in (".$voltageac.")";   

        }

        

        if($width!='')

        {

            $g.="and a.widthMM in (".$width.")";   

        }

        

        if($lead!='')

        {

            $g.="and a.leadSpacingMM in (".$lead.")";   

        }

        

        if($dv!='')

        {

            $g.="and a.dvdtVus in (".$dv.")";   

        }



        if($series!='')

        {

            $g.="and a.series in (".$series.")";   

        }





        if($voltage!='')

        {

            $g.="and a.voltageV in (".$voltage.")";   

        }





        if($capacitance!='')

        {

            $g.="and a.capacitanceUF in (".$capacitance.")";   

        }



        if($diameter!='')

        {

            $g.="and a.diameterMM in (".$diameter.")";   

        }



        if($height!='')

        {

            $g.="and a.heightMM in (".$height.")";   

        }



        if($temp_max!='')

        {

            $g.="and a.tempUpperLimit in (".$temp_max.")";   

        }



        if($temp_min!='')

        {

            $g.="and a.tempLowLimit in (".$temp_min.")";   

        }



        if($life!='')

        {

            $g.="and a.productLife in (".$life.")";   

        }

    }



    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);





    $consultas='';

    $consultas = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1

    ".$g."

    ";



    $resultados = $gestordb->get_results( $consultas );



    //echo '<option value="" >Life</option>';



    $page = $_REQUEST['page']; // get the requested page

    $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid

    $sidx = $_REQUEST['sidx']; // get index row - i.e. user click to sort

    $sord = $_REQUEST['sord']; // get the direction

    if(!$sidx) $sidx =1;

    // connect to the database

    $count = count($resultados);



    if( $count >0 ) {

        $total_pages = ceil($count/$limit);

    } else {

        $total_pages = 0;

    }

    if ($page > $total_pages) $page=$total_pages;

    $start = $limit*$page - $limit; // do not put $limit*($page - 1)



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1

    ".$g."

    LIMIT $start , $limit";



    //echo $consulta;



    $resultado = $gestordb->get_results( $consulta );





    $responce->page = $page;

    $responce->total = $total_pages;

    $responce->records = $count;

    $i=0;

    foreach ( $resultado as $fila ):

    $responce->rows[$i]['id']=$fila->partNumber;

    $responce->rows[$i]['cell']=array($fila->partNumber.','.$fila->seriesDatasheet,$fila->productType,$fila->application,$fila->series,$fila->seriesDatasheet,$fila->voltageV,$fila->voltageVAC,$fila->capacitanceUF,$fila->diameterMM,$fila->widthMM,$fila->heightMM,$fila->lengthMM,$fila->leadSpacingMM,$fila->secLeadSpacingMM,$fila->leadWireMM,$fila->productLife,$fila->productLife85c,$fila->productLife105c,$fila->productLife125c,$fila->productLife130c,$fila->productLife135c,$fila->tempUpperLimit,$fila->tempLowLimit,$fila->capLowLimit,$fila->capUpperLimit,$fila->dissipationFactor,$fila->leakage1min,$fila->leakage2min,$fila->leakage5min,$fila->ripple105c100kHz,$fila->ripple125c100kHz,$fila->ripple130c100kHZ,$fila->ripple135c100kHz,$fila->ripple85c120Hz,$fila->ripple105c120Hz,$fila->esr100kHz,$fila->esr120Hz,$fila->impedanceZ,$fila->dvdtVus,$fila->irmsA,$fila->peakCurrentA,$fila->eslnH,$fila->esrmOhms,$fila->thermalRes);

    $i++;

    endforeach;    



    echo json_encode($responce);



    exit;











} 

add_action('wp_ajax_nopriv_grid','grid_callback');

add_action('wp_ajax_grid','grid_callback');





function email_callback(){





    if($_REQUEST['select']!='' && $_REQUEST['select']!='null'){

        //$_REQUEST['select']=explode(',',$_REQUEST['select']);

        $gg=0;

        $select='';

        foreach($_REQUEST['select'] as $row){

            $gg++;

            if($gg>1){

                $select.=','."'".$row."'";

            }

            else

            {

                $select.= "'".$row."'";

            }



        }

    }



    if($select!='')

    {

        $g.="and a.partNumber in (".$select.")";   

    }





    $gestordb = new wpdb(DDBB_USER, DDBB_PASSWORD, DDBB_NAME, DDBB_HOST);



    $consulta='';

    $consulta = "SELECT * FROM AiSHi_full_catalog AS a 

    where 1

    ".$g."

    ";



    $resultado = $gestordb->get_results( $consulta );  



    $mail = "

    <br />

    Hello ".$_REQUEST['name']."

    <br />

    <br />

    ".$_REQUEST['note']."

    <br />

    <br />

    Here are the specs for the part(s) as well as the attached data sheet(s):

    <br />

    ";

    $mail.= "





    <br />

    <br />

    <table>";



    

     $mail.= "

        <tr>

            <th style='border: 1px solid #ccc;'>Part number</th>

            <th style='border: 1px solid #ccc;'>Product Type</th>

            <th style='border: 1px solid #ccc;'>Application</th>

            <th style='border: 1px solid #ccc;'>Series</th>

            <th style='border: 1px solid #ccc;'>Data Sheet</th>

            <th style='border: 1px solid #ccc;'>Voltage (V)</th>

            <th style='border: 1px solid #ccc;'>Voltage (AC)</th>

            <th style='border: 1px solid #ccc;'>Capacitance (uF)</th>

            <th style='border: 1px solid #ccc;'>Diameter (mm)</th>

            <th style='border: 1px solid #ccc;'>Width (mm)</th>

            <th style='border: 1px solid #ccc;'>Height (mm)</th>

            <th style='border: 1px solid #ccc;'>Thickness (mm)</th>

            <th style='border: 1px solid #ccc;'>Lead Spacing (mm)</th>

            <th style='border: 1px solid #ccc;'>2nd Lead Spacing (mm)</th>

            <th style='border: 1px solid #ccc;'>Lead Wire (mm)</th>

            <th style='border: 1px solid #ccc;'>Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>85 °C Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>105 °C Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>125 °C Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>130 °C Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>135 °C Product Life (Hrs)</th>

            <th style='border: 1px solid #ccc;'>Temperature Upper limit(°C)</th>

            <th style='border: 1px solid #ccc;'>Temperature Lower limit(°C)</th>

            <th style='border: 1px solid #ccc;'>Capacitance Lower limit (%)</th>

            <th style='border: 1px solid #ccc;'>Capacitance Upper limit (%)</th>

            <th style='border: 1px solid #ccc;'>tan δ(120Hz 20°C)</th>

            <th style='border: 1px solid #ccc;'>Leakage current (μA,1min,20°C)</th>

            <th style='border: 1px solid #ccc;'>Leakage current (μA,2min,20°C)</th>

            <th style='border: 1px solid #ccc;'>Leakage current (μA,5min,20°C)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 105°C 100kHz)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 125°C 100kHz)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 130°C 100kHz)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 135°C 100kHz)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 85°C 120Hz)</th>

            <th style='border: 1px solid #ccc;'>Ripple current (mA, 105°C 120Hz)</th>

            <th style='border: 1px solid #ccc;'>ESR (mΩ,20°C,100kHz)</th>

            <th style='border: 1px solid #ccc;'>ESR (mΩ,20°C,120kHz)</th>

            <th style='border: 1px solid #ccc;'>Z(Ω,20°C 100kHz)</th>

            <th style='border: 1px solid #ccc;'>dv/dt (V/us)</th>

            <th style='border: 1px solid #ccc;'>I rms (A)</th>

            <th style='border: 1px solid #ccc;'>Peak Current (A)</th>

            <th style='border: 1px solid #ccc;'>ESL (nH)</th>

            <th style='border: 1px solid #ccc;'>ESR (mΩ)</th>

            <th style='border: 1px solid #ccc;'>Thermal Res (°C/W)</th>

        </tr>";



    

    foreach ( $resultado as $fila ):

    $mail.= "<tr>

            <td style='border: 1px solid #ccc;'>".$fila->partNumber."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productType."</td>

            <td style='border: 1px solid #ccc;'>".$fila->application."</td>

            <td style='border: 1px solid #ccc;'>".$fila->series."</td>

            <td style='border: 1px solid #ccc;'><a href='".$fila->seriesDatasheet."'>".$fila->seriesDatasheet."</a></td>

            <td style='border: 1px solid #ccc;'>".$fila->voltageV."</td>

            <td style='border: 1px solid #ccc;'>".$fila->voltageVAC."</td>

            <td style='border: 1px solid #ccc;'>".$fila->capacitanceUF."</td>

            <td style='border: 1px solid #ccc;'>".$fila->diameterMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->widthMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->heightMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->lengthMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->leadSpacingMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->secLeadSpacingMM."</td>

            <td style='border: 1px solid #ccc;'>".$fila->leadWireMM."</td> 

            <td style='border: 1px solid #ccc;'>".$fila->productLife."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productLife85c."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productLife105c."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productLife125c."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productLife130c."</td>

            <td style='border: 1px solid #ccc;'>".$fila->productLife135c."</td>

            <td style='border: 1px solid #ccc;'>".$fila->tempUpperLimit."</td>

            <td style='border: 1px solid #ccc;'>".$fila->tempLowLimit."</td>

            <td style='border: 1px solid #ccc;'>".$fila->capLowLimit."</td>

            <td style='border: 1px solid #ccc;'>".$fila->capUpperLimit."</td>

            <td style='border: 1px solid #ccc;'>".$fila->dissipationFactor."</td>

            <td style='border: 1px solid #ccc;'>".$fila->leakage1min."</td>

            <td style='border: 1px solid #ccc;'>".$fila->leakage2min."</td>

            <td style='border: 1px solid #ccc;'>".$fila->leakage5min."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple105c100kHz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple125c100kHz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple130c100kHZ."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple135c100kHz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple85c120Hz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->ripple105c120Hz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->esr100kHz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->esr120Hz."</td>

            <td style='border: 1px solid #ccc;'>".$fila->impedanceZ."</td>

            <td style='border: 1px solid #ccc;'>".$fila->dvdtVus."</td>

            <td style='border: 1px solid #ccc;'>".$fila->irmsA."</td>

            <td style='border: 1px solid #ccc;'>".$fila->peakCurrentA."</td>

            <td style='border: 1px solid #ccc;'>".$fila->eslnH."</td>

            <td style='border: 1px solid #ccc;'>".$fila->esrmOhms."</td>

            <td style='border: 1px solid #ccc;'>".$fila->thermalRes."</td>

        </tr>";

    endforeach; 



    $mail.= "</table>

    ";





    $mail.= "<br />    

    <br />

    Thank you for considering AiSHi Capacitors for your project. We are happy to support your project with engineering, quotes and samples.



    <br />

    <br />

    Nick Visic, EE

    <br />

    Director of North America Sales

    <br />

    Phone: 1-281-235-0294

    <br />

    Email: nick.visic@aihuaglobal.com  

    ";



    //Titulo

    $titulo = "AiSHi capacitor information (to: ".$_REQUEST['name'].", ".$_REQUEST['email'].")";

    //cabecera

    $headers = "MIME-Version: 1.0\r\n"; 

    $headers .= "Content-type: text/html; charset=UTF-8\r\n"; 

    //dirección del remitente 

    $headers .= "From: Nick < nick.visic@aihuaglobal.com >\r\n";

    $headers .= "CC: nick.visic@aihuaglobal.com\r\n"; 

    //Enviamos el mensaje a tu_dirección_email 



    //nick.visic@aihuaglobal.com

    //alden.woo@aihuaglobal.com

    //echo $mailadresje;



    $bool = mail($_REQUEST['email'],$titulo,$mail,$headers);

    //$bool2 = mail("brayan262@gmail.com",$titulo,$mail,$headers);









} 

add_action('wp_ajax_nopriv_email','email_callback');

add_action('wp_ajax_email','email_callback');







require_once dirname( __FILE__ ) . '/includes/filtros-shortcode.php';

