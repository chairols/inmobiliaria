<?php

class Habitaciones_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        habitaciones
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        habitacion");
        return $query->result_array();
    }
}
?>