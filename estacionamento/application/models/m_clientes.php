<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_clientes extends CI_model {
    /*
     * Recupero todos os clientes do cadastro.
     * Se for passado o parâmetro ID do cliente, então recupero somente um cliente
     */

    public function clientes($idcliente = null) {

        if ($idcliente != null) {
            $this->db->where("idcliente", $idcliente);
        }

        $this->db->order_by("nome");
        return $this->db->get("cliente");
    }

    /*
     * A função abaixo simplesmente salva os dados do cliente na tabela.
     * Para utilizá-la, é preciso passar o id do cliente e também os dados do cliente já formatados. Veja no controller estes dados.
     */

    public function salvar($idcliente = null, $dados_cliente = null) {

        if ($this->db->where("idcliente", $idcliente)->update("cliente", $dados_cliente))
            return true;
        else
            return false;
    }

}
