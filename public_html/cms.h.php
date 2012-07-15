<?php
    /**
     * Skrypt odpowiedzialny za załączenie wszystkich niezbędnych bibliotek.
     *
     * @package cms.h.php
     * @author Alicja Cyganiewicz
     */

    // konfiguracja developerska - wyświetlanie błędów
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','on');
	ini_set('default_charset', 'utf-8');
   
    // załączenie bibliotek:
    include dirname(dirname(__FILE__)) . '/lib/inc/konfiguracja.inc.php';
	include dirname(dirname(__FILE__)) . '/lib/inc/szablony.inc.php';
?>