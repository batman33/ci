<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends MY_model {

	public $table = 'messages';
	
	public function getCountUserMessage($id)
	{

		$aWhere = array('to' => $id, 'status' => 1);

		$this->db->where($aWhere); 

		$this->db->from($this->table);

		return $this->db->count_all_results();
	
	}	

}

/* End of file messages.php */
/* Location: ./application/models/messages.php */