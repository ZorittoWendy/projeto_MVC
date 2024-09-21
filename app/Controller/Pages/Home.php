<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page
{
    public static function getHome()
    {
       $content = View::render('pages/home', [
            'name' => 'WDEV - canal',
            'description' => 'Canal do youtube: https://www.youtube.com/watch?v=30upeqFWLRM',
            'site' => 'https://github.com/ZorittoWendy'
       ]);
       return parent::getPage('Zoritto - Canal - HOME', $content);
    }
}
