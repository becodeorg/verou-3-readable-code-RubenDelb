<?php

function orderPizza($pizzaType, $client) {
    $price = calculatePrice($pizzaType);
    $address = 'unknown';
    if($client == 'Koen') {
        $address = 'a yacht in Antwerp';
    } else if ($client == 'Manuele') {
        $address = 'somewhere in Belgium';
    } else if ($client == 'Students') {
        $address = 'BeCode office';
    }
    echo "Creating new order... <br> A {$pizzaType} pizza should be sent to {$client} <br> The address: {$address}. <br>
        The bill is € {$price}. <br> Order finished.<br><br>";
}

function calculatePrice($pizzaType) {
    $price = 'unknown';
    if ($pizzaType == 'Marguerita') {
        $price = 5;
    } else if ($pizzaType == 'Golden') {
        $price = 100;
    } else if ($pizzaType == 'Calzone') {
        $price = 10;
    } else {
        throw new Exception('Computer says no');
    }
    return $price;
}

function orderPizzaForAll() {
    orderPizza('Calzone', 'Koen');
    orderPizza('Marguerita', 'Manuele');
    orderPizza('Golden', 'Students');
}

orderPizzaForAll();