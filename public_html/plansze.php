<?php
	/**
	* Plansze do gry
	*
	* @package plansze.php
	* @author Alicja Cyganiewicz
	*/
	
	//załączenie pliku nagłówkowego, który z kolei załącza biblioteki
	include 'cms.h.php';
		
	$strona['zawartosc'] = 'plansze';
	
	//wielkość plansz
	$strona['x'] = 8;
	$strona['plansza_komputera'] = array();
	$strona['plansza_gracza'] = array();
	
	
	// jeżeli użytkownik dokonał strzału to znaczy, że zostały wysłane dane metodą POST - sprawdzamy więc czy występują!
	
	if(isset($_POST['strzal'])){
		
		//po pierwsze musimy na nowo wypełnić nasze plansze takim stanem w jakim się znajdywały przed oddaniem strzału
		
		$strona['plansza_komputera'] = str_split(base64_decode($_POST['plansza_komputera']));
		$strona['plansza_gracza'] = str_split(base64_decode($_POST['plansza_gracza']));
		
		$strzal = str_split($_POST['strzal']);
		//strzał powinien mieć format a5, albo A5
		// zakładając, że a lub A to 1, b/B to 2... strzał na A5 = strzał na pole (A-1)*8 + (5 - 1) = 4, B7 -> 14
		// Ideałem by było rozbić strzał na literę i cyfrę, po czym literę zamienić na liczbę
		// każdy znak ma przypisaną wartość, którą "wyzyskujemy z niego" za pomocą funkcji ORD
		// np ord("a") = 97, ord("b") = 98, ord("A") = 65, ord("B") = 66...
		// żeby jednak wiedzieć ile odjąć dobrze by było przekształcić podaną literę na dużą
		
		
		if(count($strzal) > 1){	
			$x = $strzal[0];
			$y = $strzal[1];
			
			if(ctype_alpha($x)){
				$x = strtoupper($x);
				$x = ord($x) - 65;
				
				$strona['strzal'] = $x * 8 + $y - 1;
				if($strona['strzal'] < 0 || $strona['strzal'] > $strona['x']*$strona['x']){	
					$strona['blad'] = 'Zły format strzału. Strata.';
				}
			}
			else{
				$strona['blad'] = 'Zły format strzału. Strata.';
			}
			
		}
		else{
				$strona['blad'] = 'Zły format strzału. Strata.';
		}
		
		if(!isset($strona['blad'])){
			oddaj_strzal(&$strona['plansza_komputera'], $strona['strzal']);
			
		}
		if(!in_array( 1, $strona['plansza_komputera'])){
				$strona['zawartosc'] = 'koniec';
				$strona['komunikat'] = 'Koniec gry. ZWYCIĘSTWO!';
		}
		else{
			$strzal_komp = rand(0, $strona['x']*$strona['x']);
			oddaj_strzal(&$strona['plansza_gracza'], $strzal_komp);
			if(!in_array( 1, $strona['plansza_gracza'])){
				$strona['zawartosc'] = 'koniec';
				$strona['komunikat'] = 'Koniec gry. Przegrana!';
			}
		}
		
		
	
	}
	//jeżeli jak dotąd nie zostało nic wysłane "od użytkownika", to inicjujemy plansze
	//tworzymy puste plansze
	else{
			
		pusta_plansza(&$strona['plansza_komputera'], $strona['x']);
		pusta_plansza(&$strona['plansza_gracza'], $strona['x']);
		
		//ustawiamy statki gracza - "na sztywno"
		ustaw_statki(&$strona['plansza_gracza']);
		ustaw_statki(&$strona['plansza_komputera']);
		
	}
	
	//dane do statystyk

		$strona['stat_komp'] = array_count_values($strona['plansza_komputera']);
		if(!isset($strona['stat_komp'][2]))
			$strona['stat_komp'][2] = 0;
		if(!isset($strona['stat_komp'][1]))
			$strona['stat_komp'][1] = 0;
		$strona['stat_gracz'] = array_count_values($strona['plansza_gracza']);
		if(!isset($strona['stat_gracz'][2]))
			$strona['stat_gracz'][2] = 0;
		if(!isset($strona['stat_gracz'][1]))
			$strona['stat_gracz'][1] = 0;
				
			

	
	wyswietl_strone($sciezki, $szablony, $strona);
?>