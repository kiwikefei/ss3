<?php

class HomePage extends Page
{
    private static $db = [
        'Test'  => 'Varchar',
    ];
}

class HomePage_Controller extends Page_Controller
{

    public function LatestArticles($count = 3)
    {
        return ArticlePage::get()->sort('Created', 'DESC')->limit($count);
    }
}
