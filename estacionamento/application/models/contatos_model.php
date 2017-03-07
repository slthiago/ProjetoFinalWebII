<?php

class Contatos_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = 'cliente';
    }

    /**
     * Formata os contatos para exibição dos dados na home
     *
     * @param array $cliente Lista dos contatos a serem formatados
     *
     * @return array
     */
    function Formatar($cliente) {
        if ($cliente) {
            for ($i = 0; $i < count($cliente); $i++) {
                $cliente[$i]['editar_url'] = base_url('editar') . "/" . $cliente[$i]['idcliente'];
                $cliente[$i]['excluir_url'] = base_url('excluir') . "/" . $cliente[$i]['idcliente'];
            }
            return $cliente;
        } else {
            return false;
        }
    }

}
