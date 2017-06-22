<?php
class Coops extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('coops_model');
                $this->load->helper('url_helper');
        }

		public function index()
		{
				$data['coops'] = $this->coops_model->get_coops();
				$data['name'] = 'List of all coops';

				$this->load->view('templates/header', $data);
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
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['name'] = 'Create a coop';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('coops/create');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->coops_model->set_coops();
				$this->load->view('coops/');
			}
		}

}