<?php

namespace MyApp;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

/* controleur concernant les mentions legales du site */

class MentionsController implements ControllerProviderInterface {

    public function connect(Application $app) {

        //die(var_dump($app));
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            return $app['twig']->render('mentions.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });

        return $controllers;
    }

}
