<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_Dish extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->data['__class__'] = strtolower(__CLASS__);
    }

    // app/Restaurant_Dish/index
    public function index(){
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }

    // app/Restaurant_Dish/add
    public function add(){
        $this->data['__function__'] = strtolower(__FUNCTION__);
        $this->load->view('app/master.php', $this->data);
    }

}

/* End of file Restaurant_Dish.php */
/* Location: ./application/controllers/app/Restaurant_Dish.php */