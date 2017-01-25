<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

/**
 * Description of DesignOfficeController
 *
 * @author Josué
 */
class DesignOfficeController extends BaseController {

    public function connect(Application $app) {
        $title = "Bureau d'études suivi de travaux Froid Chaud Service ";
        $this->setTitle($title);
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {
            return $app['twig']->render('design-office.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'title' => $this->title
            ));
        });

        return $controllers;
    }

}
