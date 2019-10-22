<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'               => 'rs-mustfillfields',
    'title'            => '*RS Must fill fields by lang',
    'description'      => 'Enable option to set "must fill fields" by language',
    'thumbnail'        => '',
    'version'          => '1.0.0',
    'author'           => '',
    'url'              => '',
    'email'            => '',
    'extend'           => array(
        \OxidEsales\Eshop\Core\Config::class => rs\mustfillfields\Core\Config::class,
    ),
);
