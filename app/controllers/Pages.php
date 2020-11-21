<?php 	

	class Pages extends Controller {

		public function __construct() {
			$this->postModel = $this->model('Post');
		}

		public function index() {
			// $posts = $this->postModel->getPosts();
			if (isLoggedIn()){
				redirect('posts');
			}

			$data = [
				"title" => "Post Rater",
				"description" => "Write, Post, Rate"
			];

			$this->view('pages/index', $data);
		}

		public function about() {
			$data = [
				"title" => "About"
			];

			$this->view('pages/about', $data);
		}

	}