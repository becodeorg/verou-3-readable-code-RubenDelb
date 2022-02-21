<?php

$clients = [
    ['name' => 'Koen', 'pizzaType' => "Calzone", 'address' => 'a yacht in Antwerp'],
    ['name' => 'Manuele', 'pizzaType' => "Marguerita", 'address' => 'Somewhere in Belgium'],
    ['name' => 'Students', 'pizzaType' => "Golden", 'address' => 'BeCode office'],
    ['name' => 'Ruben', 'pizzaType' => "Calzone", 'address' => 'Brugas'],
];

function orderPizza($clients) {
    foreach ($clients as $client) {
        $person = $client["name"];
        $pizzaType = $client["pizzaType"];
        $address = $client["address"];
        $price = calculatePrice($pizzaType);
        echo "Creating new order... <br> A {$pizzaType} pizza should be sent to {$person} <br> The address: {$address}. <br>
        The bill is € {$price}. <br> Order finished.<br><br>";
    }
}

orderPizza($clients);

function calculatePrice($pizzaType) {
    if ($pizzaType == 'Marguerita') {
        $price = 5;
    }
    if ($pizzaType == 'Golden') {
        $price = 100;
    }
    if ($pizzaType == 'Calzone') {
        $price = 10;
    }
    return $price;
}