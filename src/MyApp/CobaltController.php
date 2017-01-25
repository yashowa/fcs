<?php

namespace MyApp;

use Silex\Application;

class CobaltController extends BaseController {

    public function connect(Application $app) {

        //die(var_dump($app));
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            $title = "Cobalt-France,  fabricant de Meubles Inox pour cuisines profesionnelles";
            $this->setTitle($title);
            return $app['twig']->render('cobalt.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });

        return $controllers;
    }

}
