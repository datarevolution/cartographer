<?php
class Places extends MY_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('places_model');
                $this->load->helper('url_helper');
        }
		
		public function index()
		{
			
				$this->is_logged_in();
					
				$data['places'] = $this->places_model->get_places();
				$data['name'] = 'Map of all places';

				$this->load->view('templates/map_header', $data);
				$this->load->view('places/index', $data);
				$this->load->view('templates/footer');
		}
		
		public function edit()
		{
			
			$id = $this->uri->segment(3);
			
			if (empty($id))
				{
					show_404();
				}
				
			$data['place'] = $this->places_model->get_place($id);
			
			if( $this->require_min_level(6) ) {
				
				if (empty($data['place']))
					{
							show_404();
					}

				
				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['name'] = $data['place']['place_name'];

				$this->form_validation->set_rules('place_name', 'Name', 'required');
				$this->form_validation->set_rules('longitude', 'Longitude', 'required');
				$this->form_validation->set_rules('latitude', 'Latitude', 'required');

				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header', $data);
					$this->load->view('places/edit', $data);
					$this->load->view('templates/footer');

				}
				else
				{
					$this->places_model->set_places($id);
					redirect( base_url() . 'index.php/coops/');
				}
			}
		}

		public function create()
		{
			
		if( $this->require_min_level(6) ) {

			
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['name'] = 'Create a place';

			$this->form_validation->set_rules('place_name', 'Name', 'required');
			$this->form_validation->set_rules('longitude', 'Longitude', 'required');
			$this->form_validation->set_rules('latitude', 'Latitude', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('places/create', $data);
				$this->load->view('templates/footer');

			}
			else
			{
				$this->places_model->set_places();
				$this->index();
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
			
			$data['place'] = $this->places_model->get_place($id);
			
			if( $this->require_min_level(6) ) {
			
				if (empty($data['place']))
				{
						show_404();
				}
				
				$this->load->helper('form');
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('delete', 'delete', 'required');
				
				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header', $data);
					$this->load->view('places/delete', $data);
					$this->load->view('templates/footer');

				}
				else
				{
					$this->places_model->delete_place($id);
					redirect( base_url() . 'index.php/coops/');
				}
			}
				
			
		}

}