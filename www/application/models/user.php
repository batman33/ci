<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_model {

	public $table = 'users';
	
	public function getPlace($id)
	{
		if (!is_integer($id))
			return 'Wrong ID';

		$this->db->select('u.city as city_id, c.city_name_ru, c.city_name_en, r.id as region_id, r.region_name_ru, r.region_name_en, ct.id as country_id, ct.country_name_ru, ct.country_name_en');
		$this->db->where('u.id', $id);
		$this->db->join('city as c', 'c.id = u.city', 'left');
		$this->db->join('region as r', 'r.id = c.id_region', 'left');
		$this->db->join('country as ct', 'ct.id = c.id_country', 'left');
		$this->db->from('users as u');

		$result = $this->db->get();

		return $result->row();
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */