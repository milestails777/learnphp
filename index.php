<?php
$num = 10;
if ($num > 5) {
    var_dump('Number is greater than 5');
} else if ($num < 5) {
    var_dump('Number is less than or equal to 5');
} else {
    var_dump('Number is equal to 10');
} 

$day = (int) date('w');
var_dump($day);

if ($day === 0) {
    var_dump('Today is Sunday');
} else if ($day === 1) {
    var_dump('Today is Monday');
} else if ($day === 2) {
    var_dump('Today is Tuesday');
} else if ($day === 3) {
    var_dump('Today is Wednesday');
} else if ($day === 4) {
    var_dump('Today is Thursday');
} else if ($day === 5) {
    var_dump('Today is Friday');
} else if ($day === 6 || $day === 7) {
    var_dump('Today is Saturday');
} else {
    var_dump('weirdoday');
}

switch ($day) {
    case 0:
        var_dump('Today is Sunday');
        break;
    case 1:
        var_dump('Today is Monday');
        break;
    case 2:
        var_dump('Today is Tuesday');
        break;
    case 3:
        var_dump('Today is Wednesday');
        break;
    case 4:
        var_dump('Today is Thursday');
        break;
    case 5:
        var_dump('Today is Friday');
        break;
    case 6:
        var_dump('Today is Saturday');
        break;
    default:
        var_dump('weirdoday');
        var_dump('asasd');
}


































































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
