<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 15.01.2017
 * Time: 2:32
 */
class Page_m extends My_Model{
    protected $_table_name = 'pages';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'order';
    protected $_rules = array();
    protected $_timestamps = FALSE;

}