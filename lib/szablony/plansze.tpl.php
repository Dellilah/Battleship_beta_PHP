<?php
    /**
    * Plaze gry
    * @package plansze.tpl.php
    * @author Alicja Cyganiewicz
    */
?>
        <div class='fire'><h2>Twoje strzały</h2>
            <table class='fire_board'>
                <tr>    
                    <th></th><th>1.</th><th>2.</th><th>3.</th><th>4.</th><th>5.</th><th>6.</th><th>7.</th><th>8.</th>
                </tr>
                <tr>    
                    <th>A</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>B</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>C</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>D</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>E</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>F</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>G</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>    
                    <th>H</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
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
                    
                     <th><?php echo $i + 'A' ?> </th>
                        <?php for($j=0; $j<$strona['x']; $j++) { ?><td></td><?php } ?>
                </tr>
                <?php } ?>
            </table>  
        </div>                                                
    </body>