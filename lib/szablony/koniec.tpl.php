<?php
    /**
    * Koniec gry
    * @package koniec.tpl.php
    * @author Alicja Cyganiewicz
    */
?>
       <h1> <?php echo $strona['komunikat']; ?> </h1>
        <div class='fire'><h2>Twoje strzały</h2>
            <table class='fire_board'>
                <tr>    
                    <th></th><th>1.</th><th>2.</th><th>3.</th><th>4.</th><th>5.</th><th>6.</th><th>7.</th><th>8.</th>
                </tr>
                <?php for($i=0; $i< $strona['x']; $i++){ ?>
                <tr>    
                    
                     <th><?php echo chr(65+$i) ?> </th>
                        <?php for($j=0; $j<$strona['x']; $j++) { ?>
                        <td class="<?php 
                                $pole = $strona['plansza_komputera'][$i*8+$j];
                               
                               switch($pole){
                                    case 0:
                                        echo 'puste';
                                        break;
                                    case 1:
                                        echo 'puste';
                                        break;
                                    case 2:
                                        echo 'trafiony';
                                        break;
                                    case 3:
                                        echo 'pudlo';
                                        break;
                                }
                                ?>"
                        >
                        </td>
                        <?php } ?>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class='your'>
            <h2>Twoja plansza</h2>
            <table class='your_board'>

                <tr>    
                    <th></th><th>1.</th><th>2.</th><th>3.</th><th>4.</th><th>5.</th><th>6.</th><th>7.</th><th>8.</th>
                </tr>
                <?php for($i=0; $i< $strona['x']; $i++){ ?>
                <tr>    
                    
                     <th><?php echo chr(65+$i) ?> </th>
                        <?php for($j=0; $j<$strona['x']; $j++) { ?>
                        <td class="<?php 
                                $pole = $strona['plansza_gracza'][$i*8+$j];
                               
                               switch($pole){
                                    case 0:
                                        echo 'puste';
                                        break;
                                    case 1:
                                        echo 'statek';
                                        break;
                                    case 2:
                                        echo 'trafiony';
                                        break;
                                    case 3:
                                        echo 'pudlo';
                                        break;
                                }
                                ?>"
                        >
                        </td>
                        <?php } ?>
                </tr>
                <?php } ?>
            </table>  
        </div> 
        <div class="statystyki">
                <h3> Statystyki </h3>
                </br>
                <b>Twoja flota:</br></b>
                maszty na wodzie: <?php echo $strona['stat_gracz'][1]; ?> </br>
                maszty zatopione: <?php echo $strona['stat_gracz'][2]; ?> </br>
                </br>
                </br>
                <b>Flota przeciwnika:</br></b>
                maszty na wodzie: <?php echo $strona['stat_komp'][1]; ?> </br>
                maszty zatopione: <?php echo $strona['stat_komp'][2]; ?> </br>
        </div>
    </body>