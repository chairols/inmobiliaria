<?php

class Provincias_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        provincias
                                    WHERE 
                                        activo = '1'
                                    ORDER BY
                                        provincia");
        return $query->result_array();
    }
}
?>