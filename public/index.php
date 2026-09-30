<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


function dump(...$vars) {
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    $class = str_replace ('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

use App\Router;

require __DIR__ . '/../routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router -> match();
if($match) {
    if(is_callable($match['action'])) {
        call_user_func($match['action']);
    } else if (is_array($match['action'])) {
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
} else {
    echo 404;
}

// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World';
//         $posts = [
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2021',
//             'author' => 'Pets',
//             'body' => 'Some World body 1',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2023',
//             'author' => 'Sega',
//             'body' => 'Some World body 2',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2024',
//             'author' => 'Mario',
//             'body' => 'Some World body 3',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2025',
//             'author' => 'Verity',
//             'body' => 'Some World body 4',
//         ],
//         ];
//         include __DIR__ . '/../views/index.php';
//         break;
//     case '/us':
//         $posts = [
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2021',
//             'author' => 'Pets',
//             'body' => 'Some World body 1',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2023',
//             'author' => 'Sega',
//             'body' => 'Some World body 2',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2024',
//             'author' => 'Mario',
//             'body' => 'Some World body 3',
//         ],
//         [
//             'title' => 'Some World title 1',
//             'date' => 'January 1, 2025',
//             'author' => 'Verity',
//             'body' => 'Some World body 4',
//         ],
//         ];
//         include __DIR__ . '/../views/us.php';
//         break;
//     default:
//         echo 404;
// }