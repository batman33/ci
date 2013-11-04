<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $title = '';
    
    // The template will use this to include default.css by default
    public $styles = array('default');

    function __construct()
    {
        parent::__construct();
    }

    function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo($this->load->view('layout/base', $data, true));
    }

	public function countUserMessage($id)
	{

		if(!isset($id))
			return false;
		if(!is_integer($id))
			return false;

		$this->load->model('messages');

		return $this->messages->getCountUserMessage($id);
	}

}

/* End of file MY_Controller.php */
/* Location: .//C/server/apache/localhost/www/ci/MY_Controller.php */