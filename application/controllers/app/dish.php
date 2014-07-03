<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dish extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->data['__class__'] = strtolower(__CLASS__);
    }

    // app/Dish/index
    public function index()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }

    // app/Dish/add
    public function add()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }
}

/* End of file Dish.php */
/* Location: ./application/controllers/Dish.php */