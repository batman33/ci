<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public $title = 'Home';

    function __construct()
    {
        parent::__construct();

        $this->styles[] = 'home';
    }

    public function index()
    {
    	$this->title .= ' > Index';

    	$this->load->model('user');

    	$aData['aUser'] = $this->user->_getAll();

    	$aData['iUserCountMess'] = $this->countUserMessage(4);

        $this->load->view('welcome_message',$aData);
    }

    public function user()
    {
        $this->load->model('user');

        $iUserID = 4;

        $aData['iUserCountMess'] = $this->countUserMessage($iUserID);

        $aData['oUserState'] = $this->user->getPlace($iUserID);

        $aData['oUser'] = $this->user->_getByID($iUserID);

        $this->load->view('user',$aData);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */