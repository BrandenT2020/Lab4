<?php
    function topRow(){
        for($x = 1; $x <= 100; $x++ ){
            echo "<th>" . $x . "</th>";
        }
    }

    function makeTable(){
        topRow();

        for($y = 1; $y <= 100; $y++ ){

          echo "<tr>";
          for($x = 1; $x <= 100; $x++ ){
              echo "<td>" . $x*$y .  "</td>";
          }
          echo "</tr>";

        }

      }
    makeTable();
?>
