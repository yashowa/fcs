<?php

namespace MyApp;

use Silex\Application;

/**
 * Description of AfterSalesController
 *
 * @author Josué
 */
class AfterSalesController extends BaseController {

    public function connect(Application $app) {

        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            $title = "Froid chaud Service, Service Après Vente, Contrat d'entretien, Maintenance curative & Dépannage d'équipement Cuisine";
            $this->setTitle($title);

            return $app['twig']->render('sav.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });
        return $controllers;
    }
}
