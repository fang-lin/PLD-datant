<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_Cate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->data['__class__'] = strtolower(__CLASS__);
    }

    // app/restaurant_cate/index
    public function index()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }

    // app/restaurant_cate/add
    public function add()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }
}

/* End of file restaurant_cate.php */
/* Location: ./application/controllers/restaurant_cate.php */