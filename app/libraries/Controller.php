<?php 

	// Base controller and loads models and views
	class Controller {

		// Load model 
		public function model($model) {
			// require model file
			require_once "../app/models/" . $model . '.php';

			// Instaniate the model 
			return new $model();

		}

		// Load view 
		public function view($view, $data = []) {
			// Check for view file 
			if( file_exists('../app/views/'. $view . '.php') ) {
				require_once '../app/views/'. $view . '.php';
			} else {
				// View does not exist 
				die('View Does not exist!');
			}
		}

	}