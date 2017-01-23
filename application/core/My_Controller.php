<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 14.01.2017
 * Time: 23:51
 */

class My_Controller extends CI_Controller {

    public $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
    }
}