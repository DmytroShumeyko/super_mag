<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
    'catalog' => 'catalog/index', // actionIndex в CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',

    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    'user/register' => 'user/register',

    'user/login' => 'user/login',

    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit',

    'cabinet' => 'cabinet/index',

    '' => 'site/index', // actionIndex в SiteController
    
);
