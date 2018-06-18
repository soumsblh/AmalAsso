<?php

namespace Controller;

use Model\UserModel;
use \W\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function home()
    {

        $this->show('default/home');
    }

    /**
     * Page des horaires de prières
     */
    public function contact()
    {

        $this->show('default/contact');
    }

    /**
     * Page Notre Histoire
     */
    public function history()
    {

        $this->show('default/history');
    }

    /**
     * Page des Actions
     */
    public function action()
    {

        $this->show('default/action');
    }

    /**
     * Page des Projets
     */
    public function project()
    {

        $this->show('default/project');
    }

}
