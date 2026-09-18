<?php
 
 class Box {

    public function __construct(public int $width, private int $height, protected int $length) {
        
        var_dump('Box was created');
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }

    public function __set($name, $value) 
    {
        var_dump( $name, $value );
    }

    public function __get($name) 
    {
        var_dump( $name );
        return 'You are trying to access ';
    }

    public function __call($name, $arguments) 
    {
        var_dump( $name, $arguments );
    }

    public function __toString() 
    {
        return 'I am a box yippee!';
    }

    public function __destruct() 
    {
        var_dump('Box was destroyed');
    }

}

function test() {
    $box1 = new Box(1, 2, 3);
}
test();

for($i=0; $i < 10; $i++) {
    $box2 = new Box(1, 2, 3);
}

$box1 = new Box(1, 2, 3);
$box1->hello = 'LOL';
var_dump($box1->yolo);
$box1->cool('hello', 'world');
$box1(1, 'asdasa');
var_dump($box1);
echo $box1;


















































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
