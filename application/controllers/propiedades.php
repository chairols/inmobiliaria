<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedades extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'provincias_model',
            'tipos_propiedad_model',
            'tipos_operacion_model',
            'habitaciones_model',
            'banos_model',
            'cocheras_model',
            'propiedades_model',
            'monedas_model'
        ));
        $this->load->library(array(
            'form_validation',
            'pagination'
        ));
    }
    
    public function index() {
        $data['propiedades'] = $this->propiedades_model->gets();
        
        $config['base_url'] = '/propiedades/index/';
        $config['total_rows'] = count($data['propiedades']);
        $config['per_page'] = '10';
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        
        $config['first_link'] = 'Primero';
        $config['first_tag_open'] = "<li>";
        $config['first_tag_close'] = "</li>";
        
        $config['last_link'] = 'Último';
        $config['last_tag_open'] = "<li>";
        $config['last_tag_close'] = "</li>";
        
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        
        $config['prev_tag_open'] = "<li>";
        $config['prev_tag_close'] = "</li>";
        
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = "</a></li>";
        
        $config['num_tag_open'] = "<li>";
        $config['num_tag_close'] = "</li>";
        
        $this->pagination->initialize($config);
        
        $data['links'] = $this->pagination->create_links();
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('propiedades/index');
        $this->load->view('layout/admin/footer');
    }
    
    public function nueva() {
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('barrio', 'Barrio', 'required');
        $this->form_validation->set_rules('provincia', 'Provincia', 'required|integer');
        $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
        $this->form_validation->set_rules('moneda', 'Moneda', 'required|integer');
        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
        $this->form_validation->set_rules('tipo_propiedad', 'Tipo de Propiedad', 'required|integer');
        $this->form_validation->set_rules('tipo_operacion', 'Tipo de Operación', 'required|integer');
        $this->form_validation->set_rules('habitacion', 'Habitación', 'required|integer');
        $this->form_validation->set_rules('bano', 'Baños', 'required|integer');
        $this->form_validation->set_rules('cochera', 'Cocheras', 'required|integer');
        
        if($this->form_validation->run() == FALSE) { 
            
        } else {
            $datos = array(
                'titulo' => $this->input->post('titulo'),
                'direccion' => $this->input->post('direccion'),
                'barrio' => $this->input->post('barrio'),
                'idprovincia' => $this->input->post('provincia'),
                'descripcion' => $this->input->post('descripcion'),
                'idmoneda' => $this->input->post('moneda'),
                'precio' => $this->input->post('precio'),
                'idtipo_propiedad' => $this->input->post('tipo_propiedad'),
                'idtipo_operacion' => $this->input->post('tipo_operacion'),
                'idhabitacion' => $this->input->post('habitacion'),
                'idbano' => $this->input->post('bano'),
                'idcochera' => $this->input->post('cochera')
            );
            
            $idpropiedad = $this->propiedades_model->set($datos);
        }
        
        $data['provincias'] = $this->provincias_model->gets();
        $data['tipos_propiedad'] = $this->tipos_propiedad_model->gets();
        $data['tipos_operacion'] = $this->tipos_operacion_model->gets();
        $data['habitaciones'] = $this->habitaciones_model->gets();
        $data['banos'] = $this->banos_model->gets();
        $data['cocheras'] = $this->cocheras_model->gets();
        $data['monedas'] = $this->monedas_model->gets();
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('propiedades/nueva');
        $this->load->view('layout/admin/footer');
    }
    
    public function en_venta() {
        $data['propiedades'] = $this->propiedades_model->gets_en_venta();
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('propiedades/en_venta');
        $this->load->view('layout/admin/footer');
    }
    
    public function en_alquiler() {
        $data['propiedades'] = $this->propiedades_model->gets_en_alquiler();
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('propiedades/en_alquiler');
        $this->load->view('layout/admin/footer');
    }
}
 
?>