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
    public function horairePriere()
    {

        $this->show('default/horairePriere');
    }

}
