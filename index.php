<?php
/**
 * Created by PhpStorm.
 * User: Geoff
 * Date: 4/26/2018
 * Time: 7:02 PM
 */

    $fatFree = require 'vendor/bcosca/fatfree-core/base.php';

    $fatFree->set('ONERROR',function($fatFree){
        echo $fatFree->get('ERROR.text');
    });

    //define some routes
    $fatFree->route('GET /',function(){
        echo 'hello';
    });

    $fatFree->run();
?>