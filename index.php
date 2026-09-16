<?php
 
 class Box {
    public $width;
    private $height;
    protected $length;

    public function volume() {
        return $this->width * $this->height * $this->length;
    }

    public function test1() {
        $this->height = 10;
        var_dump($this->height);
    }
 }

class MetalBox extends Box {
    public $weightPerUnit;
    public function mass() {
        return $this->volume() * $this->weightPerUnit;
    }

    public function test2() {
        $this->height = 10;
        var_dump($this->height);
    }
}

$box1 = new Box();
$box1->width = 10;
var_dump($box1->width);

$metal1 = new MetalBox();
$metal1->test2();
var_dump($metal1);




















































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
