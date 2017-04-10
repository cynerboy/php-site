<?php

class session{

    public function __construct(){

        session_start();

    }

    /* Message notifications alert reserved for bootstrap style */

	// message success

    public function message_success($message){

        if (isset($_SESSION["message"])){

            $output = "<div class='alert alert-success' role='alert'><strong>تبریک! </strong>";
            $output .= $message;
            $output .= "</div>";

            $_SESSION["message"] = null;

            return $output;
        }

    }

	// message information

    public function message_information($message){

        if (isset($_SESSION["message"])){

            $output = "<div class='alert alert-info' role='alert'><strong>اطلاعیه! </strong>";
            $output .= $message;
            $output .= "</div>";

            $_SESSION["message"] = null;

            return $output;
        }

    }

	// message warning

    public function message_warning($message){

        if (isset($_SESSION["message"])){

            $output = "<div class='alert alert-warning' role='alert'><strong>هشدار! </strong>";
            $output .= $message;
            $output .= "</div>";

            $_SESSION["message"] = null;

            return $output;
        }

    }

	// message error

    public function message_error($message){

        if (isset($_SESSION["message"])){

            $output = "<div class='alert alert-danger' role='alert'><strong>اخطار! </strong>";
            $output .= $message;
            $output .= "</div>";

            $_SESSION["message"] = null;

            return $output;
        }

    }

}

$session = new session();
