<?php

//copy by value
$person = array('name' => 'John', 'age' => 30);
$newPerson = $person;
$newPerson['name'] = 'Ryan';


print_r($person);
print_r($newPerson);

//copy by reference
//shadow copy
//& dile shallow hoy
$person1 = array('name' => 'John Cena', 'age' => 50);
$newPerson1 = &$person1;
$newPerson1['name'] = 'john ';

print_r($person1);
