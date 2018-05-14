<?php

class ArticleHolder extends Page
{
    private static $allowed_children = [
        'ArticlePage'
    ];
    private static $can_be_root = false;
}

class ArticleHolder_Controller extends Page_Controller
{

}