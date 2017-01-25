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
class ProjectController implements ControllerProviderInterface {

    public function connect(Application $app) {

        $controllers = $app['controllers_factory'];
        $controllers->get('/', function(Application $app) {
            return $app['twig']->render('design-office.html.twig', array('name' => 'nom', 'app' => $app));
        });
        return $controllers;
    }

    public function getProjects() {
        $projects = array();
        return $projects;
    }

    public function getProject($id) {
        $projects = array();
        return $project;
    }

}
