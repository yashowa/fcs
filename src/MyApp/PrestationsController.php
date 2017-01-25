<?php

namespace MyApp;

use Silex\Application;

class PrestationsController extends BaseController {

    public function connect(Application $app) {

        //die(var_dump($app));
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            $title = "Froid Chaus service Installation, Conseil,  Équipement Cuisines professionnelles, Restauration, Hotellerie";
            $this->setTitle($title);
            return $app['twig']->render('prestations.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });

        return $controllers;
    }

}
