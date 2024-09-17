<?php
defined('BASEPATH') or exit('No direct script access allowed');

class producto_model extends CI_Model
{

    // public function __construct() {
    //     parent::__construct();
    // }

    public function listaproducto()
    {
        $this->db->select('*');
        $this->db->from('productos');
        return $this->db->get(); 
    }
}