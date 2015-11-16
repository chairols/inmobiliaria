<?php

class Banos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        banos
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        bano");
        return $query->result_array();
    }
}
?>