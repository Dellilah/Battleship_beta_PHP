<?php
	/**
	* Plansze do gry
	*
	* @package plansze.php
	* @author Alicja Cyganiewicz
	*/
	
	//załączenie pliku nagłówkowego, który z kolei załącza biblioteki
	include 'cms.h.php';
	
	//wielkość plansz
	$strona['x'] = 8;
	
	
	$strona['zawartosc'] = 'plansze';
	
	wyswietl_strone($sciezki, $szablony, $strona);
?>