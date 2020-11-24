<?php 

	class Posts extends Controller {

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('users/login');
			}

			$this->postModel = $this->model('Post');
			$this->userModel = $this->model('User');
		}

		public function index() {
			// Get Posts 
			$posts = $this->postModel->getPosts();

			$data = [
				'posts' => $posts
			];

			$this->view('posts/index', $data);
		}

		public function add() {

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Sanitize post array
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				$data = [
					'title' => trim($_POST['title']),
					'body' => trim($_POST['body']),
					'user_id' => $_SESSION['user_id'],
					'title_err' => '',
					'body_err' => '',
				];

				// Validate title
				if (empty($data['title'])){
					$data['title_err'] = 'Please enter a title';
				}

				// Validate body
				if (empty($data['body'])){
					$data['body_err'] = 'Please enter body text';
				}

				// Make sure no errors
				if(empty($data['title_err']) && empty($data['body_err'])) {
					// Validated
					if($this->postModel->addPost($data)) {
						flash('post_message', 'Post Added');
						redirect('posts');
					} else {
						die('Something went wrong!');
					}
				}else {
					// Load view with errors
					$this->view('posts/add', $data);
				}


			}else {
				$data = [
					'title' => '',
					'body' => ''
			];

			$this->view('posts/add', $data);
			}

		}

		public function edit($id) {

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Sanitize post array
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				$data = [
					'id' => $id,
					'title' => trim($_POST['title']),
					'body' => trim($_POST['body']),
					'user_id' => $_SESSION['user_id'],
					'title_err' => '',
					'body_err' => '',
				];

				// Validate title
				if (empty($data['title'])){
					$data['title_err'] = 'Please enter a title';
				}

				// Validate body
				if (empty($data['body'])){
					$data['body_err'] = 'Please enter body text';
				}

				// Make sure no errors
				if(empty($data['title_err']) && empty($data['body_err'])) {
					// Validated
					if($this->postModel->updatePost($data)) {
						flash('post_message', 'Post Updated');
						redirect('posts');
					} else {
						die('Something went wrong!');
					}
				}else {
					// Load view with errors
					$this->view('posts/edit', $data);
				}


			}else {
				// Fetch the post 
				$post = $this->postModel->getPostById($id);

				// Check for owner 
				if ($post->user_id != $_SESSION['user_id']){
					redirect('posts');
				}

				$data = [
					'id' => $id,
					'title' => $post->title,
					'body' => $post->body
				];

			$this->view('posts/edit', $data);
			}

		}

		public function show($id) {
			$post = $this->postModel->getPostById($id);
			$user = $this->userModel->getUserById($post->user_id);
			$data = [
				'post' => $post,
				'user' => $user,
			];
			$this->view('posts/show', $data);
		}

		public function delete($id) {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Fetch the post 
				$post = $this->postModel->getPostById($id);

				// Check for owner 
				if ($post->user_id != $_SESSION['user_id']){
					redirect('posts');
				}
				if($this->postModel->deletePOst($id)) {
					flash('post_message', 'Post Removed');
					redirect('posts');
				}else {
					die('Something Went Wrong!');
				}
			} else {
				redirect('posts');
			}
		}

		public function rateUp ($id) {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {

				// Fetch the post 
				$post = $this->postModel->getPostById($id);
				$votes = 1;
				$data = [
					'id' => $id,
					'votes' => $post->votes
				];
				// settype($id, "integer");
				if($this->postModel->rateUp($data, $votes)) {
					flash('post_message', 'Point Added to Post');
					redirect('posts');
				}else {
					die('Something Went Wrong!');
				}
			} else {
				redirect('posts');
			}
		}

		public function rateDown ($id) {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {

				// Fetch the post 
				$post = $this->postModel->getPostById($id);
				$votes = 1;
				$data = [
					'id' => $id,
					'votes' => $post->votes
				];
				echo 'here';
				// settype($id, "integer");
				if($this->postModel->rateDown($data, $votes)) {
					flash('post_message', 'Point Subtracted from Post');
					redirect('posts');
				}else {
					die('Something Went Wrong!');
				}
			} else {
				redirect('posts');
			}
		}

	}