<?php
/**
 * Created by PhpStorm.
 * User: Mustapha
 * Date: 20/06/2018
 * Time: 16:40
 */

namespace Controller;

use \W\Controller\Controller;

class SecurityController extends Controller
{

    /**
     * Page forget
     */
    public function forget()
    {

        $this->show('security/forget');
    }

    /**
     * Page Login
     */
    public function login()
    {

        $this->show('security/login');
    }

    /**
     * Page register
     */
    public function register()
    {

        $this->show('security/register');
    }
}