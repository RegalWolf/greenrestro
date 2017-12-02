<?php 
	/**
	* 
	*/
	class pagesController extends CI_Controller
	{
		
		public function index()
		{
		
		}

		public function view(){

			// $exists = file_exists('application/views/pages/' . $page) . '.php';
			// if (!$exists) {
			// 	show_404();
			// }

			// $data['pages'] = $page;
			//$this->load->view('templates/header');
			$this->load->view('pages/index');
			//$this->load->view('templates/footer');
		}

	}
?>