<?php
class Places_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_places() {
			$this->db->select('*')->from('places');
			$query = $this->db->get();
			return $query->result_array();
		}

		
		public function set_places()
		{
			$this->load->helper('url');

			$data = array(
				'place_name' => $this->input->post('place_name'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'kurdish_name' => $this->input->post('kurdish_name'),
				'syriac_name' => $this->input->post('syriac_name'),
				'arabic_name' => $this->input->post('arabic_name'),
				'other_name' => $this->input->post('other_name')
			);

			return $this->db->insert('places', $data);
		}
		
}