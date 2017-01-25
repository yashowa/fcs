<?php

namespace MyApp;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReferencesController extends BaseController {

    public $_app;

    public function connect(Application $app) {

        $controllers = $app['controllers_factory'];

        $controllers->get('/', function(Application $app) {

            $title = "Portail réferences, Froid Chaud Service Cuisine professionnelle";
            $this->setTitle($title);
            $sql = "SELECT pimg.path, pimg.img_rank, p.title, p.description, p.rank "
                    . "FROM projects AS p "
                    . "JOIN project_img AS pimg "
                    . "ON p.project_id = pimg.project_id";

            $projects = $app['db']->fetchAll($sql);
            //die(var_dump($projects));
            $projects_title = array();
            return $app['twig']->render('references.html.twig', array('name' => 'nom',
                        'app' => $app,
                        "projets" => $projects,
                        'title' => $this->title
            ));
        });

        $controllers->post('/create', function(Request $request)use($app) {
            //$response = array();
            $postQuery = $request->request->all();
            $newProject = array(
                'title' => $postQuery['title'],
                'description' => $postQuery['description'],
                'customer_id' => 3,
                'date_creation' => date('Y-m-d H:i:s'),
                'last_update' => date('Y-m-d H:i:s')
            );
            $response = array(
                "status" => "success",
                "message" => "Le projet '" . $newProject['title'] . "' a bien été crée"
            );
            $notifications = new Response(json_encode($response));
            $notifications->headers->set('Content-Type', 'application/json');
            return $notifications;
        });
        $controllers->put('/update/{id}', function(Request $request, $id)use($app) {
            die($id);
            $postQuery = $request->request->all();
            $newProject = array(
                'title' => $postQuery['title'],
                'description' => $postQuery['description'],
                'customer_id' => 3,
                'date_creation' => date('Y-m-d H:i:s'),
                'last_update' => date('Y-m-d H:i:s')
            );
            //erecherche de l'utilisateur
            foreach ($postQuery as $input) {
                if ($input) {
                    
                }
            }
            die();
            $app['db']->insert('projects', $newProject);
            $this->create('references', $newProject);
            die(var_dump($request->request));
        });
        return $controllers;
    }

    public function create($entity) {
        die(var_dump($post));
    }

    public function getProjects() {
        
    }

}
