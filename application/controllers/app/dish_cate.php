<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dish_Cate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->data['__class__'] = strtolower(__CLASS__);
    }

    // app/Dish_Cate/index
    public function index()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }

    // app/Dish_Cate/add
    public function add()
    {
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }
}

/* End of file Dish_Cate.php */
/* Location: ./application/controllers/app/Dish_Cate.php */