<?php 
$person = [
    'name' => 'John',
    'age' => 30,
    'email' => 'john@example.com',
];


//To replace an item of an associate array you can do it, call the item of that array and replace using an equal sign to a new value, the same will work if it's a string, a number, a bool;
$person['age'] = 31;


// To add a new item to you associatve array, what you can simply do is: Call the array like the below example say the new parameter, note that in this case you won't use the associative sing, it's a simple equal sign
$person['phone'] = "555-1234";

$person['gostoMusical'] = [
    'pop',
    'rock',
    'jazz'
];


// On the last case we had use the implode function becase ou gostomusical array is an array itself, so it can'b be printed using our contat "." operator. We need to use the function implode to gather our array element's in a string parted by commas.
echo "NAME: " .$person['name'] . '<br>';
echo "EMAIL: " .$person['email']. '<br>';
echo "Age: " .$person['age']. '<br>';
echo "Phone: " .$person['phone']. '<br>';
echo "Gosto Musical: " . implode(', ', $person['gostoMusical']) . '<br>';
;
