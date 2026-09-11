<?php

function hello(): void {
    var_dump('Hello');
}

hello();
hello();
hello();

function helloName($name='Nameless', $age=0) {
    var_dump("Hello, $name! You are $age years old.");
}

helloName('Samir', 18);
helloName('Miles', 8);
helloName();

function square(int $a): int|null {
    if($a < 0) {
        return 0;
    } else {
        return $a * $a;
    }
    var_dump('This will never be reached');
}

$answer = square(-4);
$answer = square(4);
var_dump($answer);
var_dump(square(5));



































































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
