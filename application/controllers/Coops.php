<?php
class Coops extends MY_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('coops_model');
                $this->load->helper('url_helper');
        }

		public function json()
		{
			
				$this->is_logged_in();
					
				$data['places'] = $this->coops_model->get_places();
				
				foreach	($data['places'] as $place) {

					$data['coops'][$place['place_id']] = $this->coops_model->get_coops($place['place_id']);
				
				}				
					
				$this->load->view('coops/json', $data);
		}
		
		public function index()
		{
			
				$this->is_logged_in();
					
				//$data['coops'] = $this->coops_model->get_coops();
				$data['name'] = 'Map of all coops';

				$this->load->view('templates/map_header', $data);
				$this->load->view('coops/index', $data);
				$this->load->view('templates/footer');
		}

		public function view($slug = NULL)
		{


			
				$data['coop'] = $this->coops_model->get_coops($slug);

				if (empty($data['coop']))
				{
						//show_404();
				}


				var_dump($data['coop']);
				$data['name'] = $data['coop']['name'];

				$this->load->view('templates/header', $data);
				$this->load->view('coops/view', $data);
				$this->load->view('templates/footer');
		}
		
		public function edit()
		{
			$id = $this->uri->segment(3);
			
			 if (empty($id))
				{
					show_404();
				}
			
			$data['coop'] = $this->coops_model->get_coop($id);
			$data['places'] = $this->coops_model->get_places();
			
			if( $this->require_min_level(6) ) {
			
				if (empty($data['coop']))
				{
						show_404();
				}
				
				$this->load->helper('form');
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('sentence', 'Sentence', 'required');
				$this->form_validation->set_rules('description', 'Description', 'required');
				$this->form_validation->set_rules('link_to_page', 'Link to page', 'required');
				
				$this->form_validation->set_rules('private_email', 'Private email address', 'valid_email');
				$this->form_validation->set_rules('public_email', 'Public email address', 'valid_email');
				
				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header', $data);
					$this->load->view('coops/edit', $data);
					$this->load->view('templates/footer');

				}
				else
				{
					$this->coops_model->set_coops($id);
					redirect( base_url() . 'index.php/coops');
				}
			}
				
			
		}
		
		public function delete()
		{
			$id = $this->uri->segment(3);
			
			 if (empty($id))
				{
					show_404();
				}
			
			$data['coop'] = $this->coops_model->get_coop($id);
			
			if( $this->require_min_level(6) ) {
			
				if (empty($data['coop']))
				{
						show_404();
				}
				
				$this->load->helper('form');
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('delete', 'delete', 'required');
				
				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header', $data);
					$this->load->view('coops/delete', $data);
					$this->load->view('templates/footer');

				}
				else
				{
					$this->coops_model->delete_coop($id);
					redirect( base_url() . 'index.php/coops');
				}
			}
				
			
		}

		public function create()
		{
			$data['coops'] = $this->coops_model->get_places();
			
		if( $this->require_min_level(6) ) {

			
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['name'] = 'Create a coop';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('sentence', 'Sentence', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('link_to_page', 'Link to page', 'required');
			
			$this->form_validation->set_rules('private_email', 'Private email address', 'valid_email');
			$this->form_validation->set_rules('public_email', 'Public email address', 'valid_email');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('coops/create', $data);
				$this->load->view('templates/footer');

			}
			else
			{
				$this->coops_model->set_coops();
				redirect( base_url() . 'index.php/coops');
			}
		}
	}

}