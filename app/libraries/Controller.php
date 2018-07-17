<?php
/* 
Base Controller
Loads the models and views
*/

class Controller {
    // Load model
    public function model($model){
        // require model file

        require_once '../app/models/'. $model . '.php';

        //Instance model
        return new $model();
    }

    //Load view 
    public function view($view, $data = []){
        // check for view file
        if(file_exists('../app/views/'. $view .'.php')){
            require_once '../app/views/'. $view.'.php';
        } else {
            // View dose not exist
            die('View does not exist');
        }
    }
}