<?php

	$w_routes = array(

	    #Routes Default Controller
        ['GET', '/', 'default#home', 'default_home'],
        ['GET', '/action', 'default#action', 'default_action'],
        ['GET|POST', '/contact', 'default#contact', 'default_contact'],
        ['GET|POST', '/dons', 'default#dons', 'default_dons'],
        ['GET', '/nous', 'default#nous', 'default_nous'],
        ['GET', '/project', 'default#project', 'default_project'],

        #Routes Security Controller
        ['GET|POST', '/forget', 'security#foret', 'security_home'],
        ['GET|POST', '/login', 'security#login', 'security_login'],
        ['GET|POST', '/register', 'security#register', 'security_register'],

        #Routes Panel Profil Controller
        ['GET|POST', '/profilAdmin', 'panel_profil#profilAdmin', 'panel_profil_profilAdmin'],
        ['GET|POST', '/profilDonateur', 'panel_profil#profilDonateur', 'panel_profil_profilDonateur'],
        ['GET|POST', '/profilContributeur', 'panel_profil#profilContributeur', 'panel_profil_profilContributeur'],
        ['GET|POST', '/profilSuperAdmin', 'panel_profil#profilSuperAdmin', 'panel_profil_profilSuperAdmin'],

	);
