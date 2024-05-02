<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {

        // Challenge 1. This should not print anything out.
        // It's suppose to only print out if var1 is hoowla and var2 is marvelous.
        // Q: Why is it printing? What can we do to prevent it printing, while keeping the same lookup criteria?
        $var1 = 'hoowla'; 
        $var2 = 'marvelous';
        if ($var1 === 'hoowla' || $var1 === 'buzz' && $var2 === 'irritating') {
            $response->getBody()->write('Do not print (1)');
        }

        // Challenge 2. This should not print anything out.
        // As $testVar is not equal it shouldn't print out, so why is it?
        // Q: Why is it printing?
        $testVar = 'Something';
        if ($testVar = 'Else') {
            $response->getBody()->write('Do not print (2)');
        }

        // Challenge 3: Can we return the response 'All Complete!' as JSON?
        $body = 'All Complete!';
        $response->getBody()->write($body);

        return $response;
    });


};
