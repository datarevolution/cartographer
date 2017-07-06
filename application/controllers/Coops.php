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
						show_404();
				}

				$data['name'] = $data['coop']['name'];

				$this->load->view('templates/header', $data);
				$this->load->view('coops/view', $data);
				$this->load->view('templates/footer');
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
			//$this->form_validation->set_rules('longitude', 'Longitude', 'required');
			//$this->form_validation->set_rules('latitude', 'Latitude', 'required');
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
				$this->index();
			}
		}
	}

}