<?php 	

	class Pages {

		public function __construct() {
			echo 'Pages Loaded';
		}

		public function index() {
			
		}

		public function about($id) {
			echo $id;
		}

	}