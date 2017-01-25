<?php

namespace MyApp;
use Silex\Application;

class PartnersController extends BaseController {

    public function connect(Application $app){

        //die(var_dump($app));
        $title = "Partenaires et fournisseurs de Froid Chaud Service";
        $this->setTitle($title);
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            return $app['twig']->render('partners.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });

        return $controllers;
    }

}
