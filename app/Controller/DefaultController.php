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

}
