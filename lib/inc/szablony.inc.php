<?php
    /**
     * Obsługa szablonów.
     *
     * @package szablony.inc.php
     * @author Alicja Cyganiewicz
     */

    /**
     * Wyświetlenie szablonu.
     *
     * @param array $sciezki Tablica zmiennych konfiguracyjnych, przechowująca ścieżki
     * @param array $szablony Tablica zmiennych konfiguracyjnych przechowująca ustawienia dla szablonów
     * @param array $strona Dane do wyświetlenia w szablonie
     * @param string $layout "Layout" strony
     *
     */
    function wyswietl_strone($sciezki, $szablony, $strona, $layout = 'index.tpl.php') {
        include $sciezki['szablony'] . $layout;
    }
?>