<?php

if (!defined('BASEPATH'))
    exit('No direct script access
allowed');

class CRUD extends CI_Controller {

    public function index() {
        $dados = array(
            'titulo' => 'CRUD com CodeIgniter',
            'tela' => '',
        );
        $this->load - view('crud', $dados);
        $this->load->helper('url');
    }

}
