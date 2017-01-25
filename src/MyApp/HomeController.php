<?php

namespace MyApp;

use Silex\Application;

//use Silex\Api\ControllerProviderInterface; 
//use BaseController;

class HomeController extends BaseController {

    public function connect(Application $app) {
        $controllers = $app['controllers_factory'];


        $controllers->get('/', function(Application $app) {
           $this->setTitle("Froid Chaud Service, Conception de cuisine professionnelle,Matériel pour la Restauration, Hotellerie et grande Distribution, Installation et Dépannage d'équipement frigorifique et cuisson ");
            $sql = "SELECT DISTINCT prj.project_id, pimg.path, prj.description,pimg.img_rank, prj.rank, prj.project_id, prj.title
                FROM `project_img` AS pimg 
                JOIN `projects` AS prj
                ON pimg.project_id = prj.project_id
                GROUP BY prj.project_id
                LIMIT 3";

            $projects = $app['db']->fetchAll($sql);

            $sqlProviders = "SELECT * FROM providers";
            $providers = $app['db']->fetchAll($sqlProviders);

            return $app['twig']->render('index.html.twig', array(
                        'name' => 'nom',
                        'app' => $app,
                        'projects' => $projects,
                        'providers' => $providers,
                        'title' => $this->title
            ));
        });
        return $controllers;
    }

}
