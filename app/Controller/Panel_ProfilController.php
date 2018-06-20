<?php
/**
 * Created by PhpStorm.
 * User: Mustapha
 * Date: 20/06/2018
 * Time: 16:40
 */

namespace Controller;

use \W\Controller\Controller;

class Panel_ProfilController extends Controller
{
    /**
     * Page Profile admin
     */
    public function profilAdmin()
    {

        $this->show('panel_profil/profilAdmin');
    }

    /**
     * Page Profile Donateur
     */
    public function profilDonateur()
    {

        $this->show('panel_profil/profilDonateur');
    }


    /**
     * Page Profile Contributeur
     */
    public function profilContributeur()
    {

        $this->show('panel_profil/profilContributeur');
    }

    /**
     * Page Profile Super admin
     */
    public function profilSuperAdmin()
    {

        $this->show('panel_profil/profilSuperAdmin');
    }

}