<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model {

    // Variável que define o nome da tabela
    var $table = "";

    /**
     * Método Construtor
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * Insere um registro na tabela
     *
     * @param array $data Dados a serem inseridos
     *
     * @return boolean
     */
    function Inserir($data) {
        if (!isset($data))
            return false;
        return $this->db->insert($this->table, $data);
    }

    /**
     * Recupera um registro a partir de um ID
     *
     * @param integer $idcliente ID do registro a ser recuperado
     *
     * @return array
     */
    function GetById($idcliente) {
        if (is_null($idcliente))
            return false;
        $this->db->where('idcliente', $idcliente);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    /**
     * Lista todos os registros da tabela
     *
     * @param string $sort Campo para ordenação dos registros
     *
     * @param string $order Tipo de ordenação: ASC ou DESC
     *
     * @return array
     */
    function GetAll($sort = 'idcliente', $order = 'asc') {
        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }

    /**
     * Atualiza um registro na tabela
     *
     * @param integer $int idcliente do registro a ser atualizado
     *
     * @param array $data Dados a serem inseridos
     *
     * @return boolean
     */
    function Atualizar($idcliente, $data) {
        if (is_null($idcliente) || !isset($data))
            return false;
        $this->db->where('idcliente', $idcliente);
        return $this->db->update($this->table, $data);
    }

    /**
     * Remove um registro na tabela
     *
     * @param integer $int idcliente do registro a ser removido
     *
     *
     * @return boolean
     */
    function Excluir($idcliente) {
        if (is_null($idcliente))
            return false;
        $this->db->where('idcliente', $idcliente);
        return $this->db->delete($this->table);
    }

}

/* End of file */

