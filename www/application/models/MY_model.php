<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_model extends CI_Model {

	public function _getAll()
	{
		if (!isset($this->table))
			return 'The error in the model is not specified table';

		$query = $this->db->get($this->table);

		return $query->result();

	}

	public function _getByID($id)
	{
		if (!is_integer($id))
			return 'Wrong ID';

		$query = $this->db->get_where($this->table, array('id' => $id));

		return $query->row();		
	}

	public function _insert($data)
	{
		if (!isset($this->table))
			return 'The error in the model is not specified table';

		return $this->db->insert($this->table, $data);

	}

	public function _delete($id)
	{
		if (!is_integer($id))
			return 'Wrong ID';

		if (!isset($this->table))
			return 'The error in the model is not specified table';

		return $this->db->delete($this->table,array('id' => $id));

	}

	public function _update($id, $data)
	{
		if (!is_integer($id))
			return 'Wrong ID';

		if (!isset($this->table))
			return 'The error in the model is not specified table';

		$this->db->where('id', $id);
	
		return $this->db->update($this->table, $data);
		
	}


}

/* End of file MY_model.php */
/* Location: ./application/models/MY_model.php */