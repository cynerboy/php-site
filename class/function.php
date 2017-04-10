<?php

/* redirect in php */

require_once('initialize.php');
function redirect_to($location){
    header('Location:'.$location);
        die();
            exit();
}
