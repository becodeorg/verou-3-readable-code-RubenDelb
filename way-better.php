<?php

function orderPizza($pizzaType, $client) {
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculatePrice($pizzaType);
    $address = 'unknown';
    if($client == 'koen') {
        $address = 'a yacht in Antwerp';
    } else if ($client == 'manuele') {
        $address = 'somewhere in Belgium';
    } else if ($client == 'students') {
        $address = 'BeCode office';
    }
    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint . '<br>';
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

function calculatePrice($pizzaType) {
    $price = 'unknown';
    if ($pizzaType == 'marguerita') {
        $price = 5;
    } else if ($pizzaType == 'golden') {
        $price = 100;
    } else if ($pizzaType == 'calzone') {
        $price = 10;
    } else if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    return $price;
}

function orderPizzaForAll() {
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeAllHappy($do_it) {
    if ($do_it) {
        orderPizzaForAll();
    } else {
        // Should not do anything when false
        return false;
    }
}

makeAllHappy(true);