<?php
class Coops_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_coops($slug = FALSE)
		{
				if ($slug === FALSE)
				{
						$query = $this->db->get('coops');
						return $query->result_array();
				}

				$query = $this->db->get_where('coops', array('slug' => $slug));
				return $query->row_array();
		}
		
		public function set_coops()
		{
			$this->load->helper('url');

			$slug = url_title($this->input->post('name'), 'dash', TRUE);

			$data = array(
				'name' => $this->input->post('name'),
				'slug' => $slug,
				'sentence' => $this->input->post('sentence'),
				'description' => $this->input->post('description'),
				'icon' => $this->input->post('icon'),
				'email_private' => $this->input->post('email_private'),
				'email_public' => $this->input->post('email_public'),
				'phone' => $this->input->post('phone'),
				'website' => $this->input->post('website'),
				'street' => $this->input->post('street'),
				'postcode' => $this->input->post('postcode'),
				'legal' => $this->input->post('legal'),
				'founding_year' => $this->input->post('founding_year'),
				'registrar' => $this->input->post('registrar'),
				'registered_num' => $this->input->post('registered_num'),
				'members' => $this->input->post('members'),
				'providesa' => $this->input->post('providesa'),
				'providesb' => $this->input->post('providesb'),
				'providesc' => $this->input->post('providesc'),
				'link_to_page' => $this->input->post('link_to_page'),
				'coop_grouping' => $this->input->post('coop_grouping'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude')
							
			);

			return $this->db->insert('coops', $data);
		}
		
}