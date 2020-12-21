<?php

namespace App\Views;

use App\App;
use Core\View;

class Navigation extends View
{

    public function __construct()
    {
        parent::__construct($this->generate());
    }

    public function generate()
    {
        $nav = [
            App::$router::getUrl('index') => 'Home',
            App::$router::getUrl('about-us') => 'About us',
        ];

        if (App::$session->getUser()) {
            return $nav + [
                    App::$router::getUrl('logout') => 'Logout',
                ];
        }

        return $nav + [
                App::$router::getUrl('register') => 'Register',
                App::$router::getUrl('login') => 'Login',
            ];
    }

    public function render($template_path = ROOT . '/app/templates/nav.tpl.php')
    {
        return parent::render($template_path);
    }
}


