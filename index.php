<?php
$numbers = array(1, 2, 3);
$numbers = [1, 2, 3];
var_dump($numbers[1]);
$numbers[2] = 5;
var_dump($numbers);
$test = [1, 'sasd', true, [1, 2, 3]];
var_dump($test);
var_dump($test[3][1]);
$test = [
    'name' => 'Miles Cibis',
    'age' => 18,
    1,
    2,
    3,
    'color' => 'red',
    'music' => 'jazz',
    5,
    100 => 6,
    7,
];
var_dump($test);
var_dump($test['name']);

$combined = [1, 2, 3] + [4, 5, 6, 7];
//[1, 2, 3] + 
//[4, 5, 6, 7]; an example of array union operator in different method
var_dump($combined);

$text = implode('_', $test);
var_dump($text);

array_push($test, 77, 'asdasd', 243);
var_dump($test);
$test[] = 'value';
unset($test[100]);
var_dump($test);











































































//--- Unused code below from the past classes ---
//$test = 'hello';
//$test = 'hello' . ' world' . '!';
//$test = $test . '!!!!!';
//$test .= '!!!!!';
//$age = 18;
//$name = 'Miles';
//$test = $name . ' is ' . $age . ' years old.';
//$test = "$name is $age years old.";
//$test = "hello\n\nworld";
//$test = <<<END
//Hello world
//END;

//$test = 10;
//$test = 10 + 10;
//$test = 10 - 10;
//$test = 10 * 10 * 10;
//$test = 10 / 10;
//$test = 5 % 2;
//$test = 2 ** 3;
//$test += 10;
//$test -= 10;
//$test *= 10;  
//$test /= 10;
//$test %= 10;
//$test **= 10;
//$test++;
//$test--;

//$a = 1;
//$b = ++$a;
//var_dump($a, $b);

//$test = "Hello";
//$test = 'õpilane';
//$test = 'bruh';
//$test = true;
//$test = false;
//$test = null;
//$test = [1, true, 'blah'];
//$test = new stdClass();
//$test->name = 'John';
//var_dump($test);
