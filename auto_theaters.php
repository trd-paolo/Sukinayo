<?php


/*-
 *
 *
 *
 *
 *    ini
 *
 *
 *
 */

$html_file = "index.html";
$readFile = "theaters.xlsx";


/*
 *
 *
 *
 *
 *    run
 *
 *
 *
 */

$data = readXlsx($readFile);

//print '<pre>';
//var_dump($data);
//print '</pre>';


$html_strings = "";

foreach ($data as $key => $value) {
	
	switch ($value['A']) {
		case 'links':
			$html_strings .= get_links_html($value);
			break;
		
		case 'title':
			$html_strings .= get_title_html($value);
			break;
		case 'header':
			$html_strings .= get_header_html($value);
			break;
		case 'row':
			$html_strings .= get_row_html($value);
			break;
		default:
			break;
	}
}



file_put_contents($html_file, $html_strings);


exit;



/*
 * 
 * 
 * 
 * 
 *    functions
 * 
 * 
 * 
 */

function readXlsx($readFile)
{
	require_once dirname(__FILE__) . '/lib/PHPExcel/IOFactory.php';

	if (!file_exists($readFile)) {
		exit($readFile. "not found . " . EOL);
	}

	$objPExcel = PHPExcel_IOFactory::load($readFile);

	return $objPExcel->getActiveSheet()->toArray(null,true,true,true);
}



function get_links_html($array) {
	
	return $html;
}


function get_title_html($array) {
	
	return $html;
}


function get_header_html($array) {

	return $html;
}

function get_row_html($array) {

	return $html;
}
