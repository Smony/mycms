<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 15.01.2017
 * Time: 0:08
 */

class Admin_Controller extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['text'] = 'text';
    }
}