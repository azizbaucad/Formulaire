<?php

/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
	if(isset($_GET['doc'])){
	  ob_start();
	
	switch($_GET['doc']){
	case 'vente' : include("vente.php");
	break;
	
	
	}
  
	
	//$_SESSION['id']=$_GET['id']
	
	
	
   // include("imprimer_patients.php");
    //include(dirname(__FILE__).'/res/exemple07b.php');
    $content = ob_get_clean();

    // convert to PDF
    require_once('../Model/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
       $html2pdf->pdf->SetDisplayMode('fullpage');
        //$html2pdf->pdf->SetProtection(array('print'), 'chicequipement');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple07.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
}