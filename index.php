<?php

    include_once 'Request.php';
    include_once 'Router.php';
    $router = new Router(new Request);

    $router->get('/', function() {
      return <<<HTML
      <h1>Hello World</h1>
      HTML;
    });

    $router->get('/profile', function($resquest) {
      return <<<HTML
      <h1>Profile</h1>
      HTML;
    });

    $router->post('/data', function($request){
      return json_encode($request->getBody());
    }); 
    

