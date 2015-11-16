<?php

class Tipos_propiedad_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        tipos_propiedad
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        tipo_propiedad");
        return $query->result_array();
    }
}
?>