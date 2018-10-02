<?php

    function welcome(){
        echo "Welcome to Branden's Ultimate store of everything \n";

        $password = $_GET['password'];

        echo"Your password is: " . $password;
    }

    function process(){
        $quant = array($_GET['numApples'],$_GET['numOranges'],$_GET['numBananas']);
        $cost = array(1.5, 2, .75);
        $shipping = 0;
        $total = 0;

        if($_GET['ship'] == "7 Day"){
            $shipping =0;
        }else if($_GET['ship'] == "over night"){
            $shipping = 50;
        }else if($_GET['ship'] == "three day"){
            $shipping = 5;
        }

        for($x =0; $x < 3; $x++){
            $total += $quant[$x]*$cost[$x];
        }

        $total += $shipping;

        receipt($quant, $cost, $shipping, $total);
    }

    function receipt($quant, $cost, $shipping, $total){
        echo "<table>";
        echo "<th> </th><th>Quantity:</th><th>Cost Per Item:</th><th>Sub Total:</th>";
        echo "<tr><td>Item 1:</td><td>". $quant[0] . "</td><td>$" . $cost[0] . "</td><td>$" . $quant[0]*$cost[0] . "</tr>";
        echo "<tr><td>Item 2:</td><td>". $quant[1] . "</td><td>$" . $cost[1] . "</td><td>$" . $quant[1]*$cost[1] . "</tr>";
        echo "<tr><td>Item 3:</td><td>". $quant[2] . "</td><td>$" . $cost[2] . "</td><td>$" . $quant[2]*$cost[2] . "</tr>";
        echo "<tr><td>Shipping:</td><td>". $_GET['ship'] . "</td><td> </td><td>$" . $shipping . "</td></tr>";
        echo "<tr><td>TOTAL:</td><td> </td><td> </td><td>$" . $total . "</td></tr>";
        echo "</table>";
    }

    process()

?>
