<?php
 
 class Box {
    public $width;
    public $height;
    public $length;

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
 }


 $box1 = new Box();
 $box1->width = 1;
 $box1->height = 2;
 $box1->length = 3;
 var_dump($box1);
 var_dump($box1->volume());

 $box2 = new Box();
 $box2->width = 4;
 $box2->height = 5;
 $box2->length = 6;
 var_dump($box2);
 var_dump($box2->volume());

 $box3 = new Box();
 $box3->width = 7;
 $box3->height = 8;
 $box3->length = 9;
 var_dump($box3);
 var_dump($box3->volume());

























































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
