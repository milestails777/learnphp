<?php
// library

class Job {
    public function task(Logger $logger) {
        for($i=0; $i<10; $i++) {
            // we do some task
            
            $logger->log("Task $i completed!");
        }
    }
}

class ConsoleLogger {
    public function log($message) {
        echo "$message\n";
    }
}

class NothingLogger implements Logger {
    public function log($message) {
        
    }
}

interface Logger {
    public function log($message);
}

//user code

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$job = new job();
$logger = new FileLogger();
$job->task($logger);



















































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
