<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dishes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->data['__class__'] = strtolower(__CLASS__);
    }

    // app/Dishes/index
    public function index()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }
}

/* End of file Dishes.php */
/* Location: ./application/controllers/Dishes.php */