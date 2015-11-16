<?php

class Propiedades_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('propiedades', $datos);
        return $this->db->insert_id();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        propiedades p,
                                        tipos_propiedad tp,
                                        tipos_operacion top,
                                        monedas m
                                    WHERE
                                        p.idtipo_propiedad = tp.idtipo_propiedad AND
                                        p.idtipo_operacion = top.idtipo_operacion AND
                                        p.idmoneda = m.idmoneda AND
                                        p.activo = '1' 
                                    ORDER BY
                                        p.idpropiedad DESC");
        return $query->result_array();
    }
    
    public function gets_en_venta() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        propiedades p,
                                        tipos_propiedad tp,
                                        tipos_operacion top,
                                        monedas m
                                    WHERE
                                        p.idtipo_propiedad = tp.idtipo_propiedad AND
                                        p.idtipo_operacion = top.idtipo_operacion AND
                                        p.idmoneda = m.idmoneda AND
                                        p.activo = '1' AND
                                        top.tipo_operacion = 'Venta'
                                    ORDER BY
                                        p.idpropiedad DESC");
        return $query->result_array();
    }
    
    public function gets_en_alquiler() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        propiedades p,
                                        tipos_propiedad tp,
                                        tipos_operacion top,
                                        monedas m
                                    WHERE
                                        p.idtipo_propiedad = tp.idtipo_propiedad AND
                                        p.idtipo_operacion = top.idtipo_operacion AND
                                        p.idmoneda = m.idmoneda AND
                                        p.activo = '1' AND
                                        top.tipo_operacion = 'Alquiler'
                                    ORDER BY
                                        p.idpropiedad DESC");
        return $query->result_array();
    }
}
?>