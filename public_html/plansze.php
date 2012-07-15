<?php
	/**
	* Plansze do gry
	*
	* @package plansze.php
	* @author Alicja Cyganiewicz
	*/
	
	//załączenie pliku nagłówkowego, który z kolei załącza biblioteki
	include 'cms.h.php';
	
	$strona['zawartosc'] = '404';
	
	wyswietl_strone($sciezki, $szablony, $strona);
?>