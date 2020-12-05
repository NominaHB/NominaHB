<?php
	
	require 'models/Login.php';
	

	class LoginController
	{		
		private $model;

		public function __construct()
	    {
	        try{
	            $this->model = new Login;
	        }catch(PDOException $e){
	            die($e->getMessage());
	        }
	    }

		public function index()
		{
			if(isset($_SESSION['usuario'])) 
				header('Location: ?controller=home');
			else 
				require 'views/login.php';
		}

		public function login()
		{
			$validateUser = $this->model->validateUser($_POST);

			if($validateUser === true) {
				header('Location: ?controller=home');				
			} else {
				$error = ['errorMessage' => $validateUser, 'USUARIO' => $_POST['USUARIO']];
				require 'views/login.php';
			}
		}

		public function logout()
		{
			if(isset($_SESSION['usuario']))
				session_destroy();
			header('Location: ?controller=login');
		}

	}