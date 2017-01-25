<?php

namespace MyApp;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class AdminController extends CrudController {

    public function connect(Application $app) {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function(Application $app) {
            /* $sql = "SELECT * from users";
              $users = $app['db']->fetchAssoc($sql);
              die(var_dump($users)); */
            return $app['twig']->render('admin.html.twig', array('name' => 'nom', 'app' => $app));
        });

        $controllers->post('admin/references/create', function(Application $app) {

            $newProject = $request->request;
            $this->create('references', $newProject);
            die(var_dump($request->request));
        });
        /* $sql = "SELECT * from users";
          $users = $app['db']->fetchAssoc($sql);
          die(var_dump($users));
          // return $app['twig']->render('admin.html.twig', array('name' => 'nom', 'app' => $app));
          }); */
        return $controllers;
    }

}
