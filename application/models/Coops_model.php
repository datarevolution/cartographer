<?php
class Coops_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_places() {
			$this->db->select('*')->from('places');
			$query = $this->db->get();
			return $query->result_array();
		}

		
		public function get_coops($place_id)
		{

			$this->db->select('*')->from('coops');
			//$this->db->join('places', 'places.place_id = coops.place_id');
			$this->db->where('place_id', $place_id);
			$query = $this->db->get();
			return $query->result_array();
				

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
				'founding_year' => $this->input->post('founding_year'),
				'members' => $this->input->post('members'),
				'providesa' => $this->input->post('providesa'),
				'providesb' => $this->input->post('providesb'),
				'providesc' => $this->input->post('providesc'),
				'link_to_page' => $this->input->post('link_to_page'),
				'coop_grouping' => $this->input->post('coop_grouping'),
				'place_id' => $this->input->post('place_id')
							
			);

			return $this->db->insert('coops', $data);
		}
		
}