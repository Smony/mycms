<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 15.01.2017
 * Time: 0:35
 */
class Migration extends Admin_Controller {


    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        $this->load->library('migration');

        if ( ! $this->migration->current())
        {
            show_error($this->migration->error_string());
        }
        else {
            echo 'Migration worked..';
        }
    }
}