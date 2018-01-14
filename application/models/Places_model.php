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

		public function get_place($place_id)
		{
			$this->db->select('*')->from('places');
			$this->db->where('place_id', $place_id);
			$query = $this->db->get();
			return $query->row_array();
		}
		
		
		public function set_places($id=0)
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
		
			
			if ($id == 0) {
				return $this->db->insert('places', $data);
			} else {
				$this->db->where('place_id', $id);
				return $this->db->update('places', $data);
			}
		}
		
		
	public function delete_place($id)
    {
        $this->db->where('place_id', $id);
        return $this->db->delete('places');
    }
		
		
}