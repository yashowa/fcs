<?php

namespace MyApp;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class BaseController implements ControllerProviderInterface {

    public function connect(Application $app) {
        $controllers = $app['controllers_factory'];
        return $controllers;
    }
    public function test(){
        return 'lol';
    }

}
