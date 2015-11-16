<?php

class Cocheras_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        cocheras
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        cochera");
        return $query->result_array();
    }
}
?>