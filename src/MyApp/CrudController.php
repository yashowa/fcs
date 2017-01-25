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
 * Description of CrudController
 *
 * @author Josué
 */
class CrudController implements ControllerProviderInterface {

    private $table;
    protected $_app;

    private function setTable($name) {
        $this->table = $name;
    }

    private function getTableName() {
        return $this->$table;
    }

    public function connect(Application $app) {

        $controllers = $app['controllers_factory'];
        $controllers->get('/', function(Application $app) {

            return $app['twig']->render('references.html.twig', array('name' => 'nom', 'app' => $app));
        });
        return $controllers;
    }


    public function create($table, $entity) {

       $app['db']->insert($table, $entity);
        return true;
    }

    public function read() {
        
    }

    public function search($id) {
        
    }

    public function delete() {
        
    }

    public function update() {
        
    }

}
