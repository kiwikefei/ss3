<?php

class Page extends SiteTree
{
    private static $db = array(
    );

    private static $has_one = array(
    );

    private static $has_many = [
       'Regions'    => 'Region'
    ];
}
