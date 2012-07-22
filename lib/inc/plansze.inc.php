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
	* Ustawianie na sztywno statk�w na podanej planszy
	*
	* @param array $plansza Plansza na kt�rej ustawiamy statki
	*
	*/
	
	function ustaw_statki(&$plansza){
		//czteromasztowiec
		$plansza[8]=1;
		$plansza[16]=1;
		$plansza[24]=1;
		$plansza[32]=1;
		//tr�jmasztowce dwa
		$plansza[2]=1;
		$plansza[3]=1;
		$plansza[4]=1;
		
		$plansza[47]=1;
		$plansza[55]=1;
		$plansza[63]=1;
		//dwumasztowce trzy
		$plansza[41]=1;
		$plansza[42]=1;
		
		$plansza[53]=1;
		$plansza[61]=1;
		
		$plansza[18]=1;
		$plansza[19]=1;
		
		//jednomasztowce
		$plansza[13]=1;
		$plansza[36]=1;
		$plansza[57]=1;
		$plansza[31]=1;
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