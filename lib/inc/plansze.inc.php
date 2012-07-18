<?php
	/**
	* Przydatne funkcje
	*
	* @package plansze.inc.php
	* @author Alicja Cyganiewicz
	*/
	
	/** 
	* Wype�nienie planszy wod�
	*
	*@param array $plansza Plansza do wype�nienia
	*@param int $x Wymiar planszy
	*
	*/
	
	// znak "&" przed zmienn� oznacza trwa�� zmian�. Normalnie, kiedy zmienna trafia do funkcji jest przez ni� wykoszystywana, ale po wyj�ciu z funkcji
	// (nawet je�eli uleg�a jakim� przeobra�eniom po drodze) - wraca do swojej "wej�ciowej" wersji
	// w tym wypadku b�dziemy chcieli, �eby nasze plansze uleg�y TRWA�YM zmianom
	
	function pusta_plansza(&$plansza, $x){
	
		for($i=0; $i<$x * $x; $i++){
				$plansza[$i] = 0;
		}
		
	}
	
	/**
	* Oddanie na strza�u na plansz�
	*
	*@param array $plansza Plansza na kt�r� oddawany jest strza�
	*@param int $x Wsp�rz�dne strza�u
	*
	*/
	
	function oddaj_strzal(&$plansza, $x){
		
		if($plansza[$x] == 1){
			$plansza[$x] = 2;
		}
		
		if($plansza[$x] == 0){
			$plansza[$x] = 3;
		}
	}
?>