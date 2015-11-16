<?php

class Tipos_operacion_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        tipos_operacion
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        tipo_operacion");
        return $query->result_array();
    }
}
?>