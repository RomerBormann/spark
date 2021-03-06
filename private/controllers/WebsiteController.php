<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {

//        $users = getUsers();

		$template_engine = get_template_engine();
//		echo $template_engine->render('homepage', ['users' => $users]);
        echo $template_engine->render('homepage');

	}

    public function about() {

        $template_engine = get_template_engine();
        echo $template_engine->render('aboutpage');

    }

    public function studiodrift() {

        $template_engine = get_template_engine();
        echo $template_engine->render('studiodrift');

    }

    public function diensten() {

        $template_engine = get_template_engine();
        echo $template_engine->render('dienstenpage');

    }

    public function dienstendigitaal() {

        $template_engine = get_template_engine();
        echo $template_engine->render('dienstendigitaal');

    }

    public function dienstenanaloog() {

        $template_engine = get_template_engine();
        echo $template_engine->render('dienstenanaloog');

    }

    public function portfolio() {

        $template_engine = get_template_engine();
        echo $template_engine->render('portfoliopage');

    }

    public function portfolioinstagram() {

        $template_engine = get_template_engine();
        echo $template_engine->render('portfolio/instagram-portfolio');

    }

}

