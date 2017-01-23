<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 15.01.2017
 * Time: 2:34
 */
class Page extends Frontend_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index(){
        $pages = $this->page_m->get();
        var_dump($pages);
    }

    public function save(){
        $data = array(

            'order' => '1',

        );
        $id = $this->page_m->save($data, 1);
        var_dump($id);
    }

    public function delete()
    {
        $this->page_m->delete(2);
    }
}