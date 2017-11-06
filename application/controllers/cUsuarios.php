<?php
/**
 *
 */
class Cusuarios extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
    
    $this->load->model('mUsuario');
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vUsuarios');
    $this->load->view('Marcos/Piepagina');
  }

  public function tipousuario() #combobox
  {
    $result = $this->mUsuario->tipousuario();
    echo json_encode($result);
  }



  public function guardar()
  {
    $this->form_validation->set_rules('usuario','usuario','trim|required|is_unique[usuario.usuario]');

    if($this->form_validation->run()==FALSE)
    {
      echo"Usuario Existente";
    }
    else
    {
      
      $nombre= $this->input->post("usuario");
      $contra=$this->input->post("contra");
      $tipo = $this->input->post("idcb");
      $datos=array(
        'usuario' =>$nombre,
        'contra' =>$contra,
        'id_tpus' =>$tipo,  );
  
        if($this->mUsuario->guardar($datos)==true)
        echo "Registros Guardados";
        else
        echo "Error al Registrar";

    }


    /*if($this->input->is_ajax_request()){
  
    }
    else{
      show_404();
    }*/

    }

  public function consultar()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mUsuario->consultar($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }
  public function consultarB()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mUsuario->consultarB($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function modificar()
  {
    if($this->input->is_ajax_request()){
    $id = $this->input->post("id2");
    $nombre= $this->input->post("usuario2");
    $contra=$this->input->post("contra2");
    $tipo = $this->input->post("idcb2");
    $datos=array(
      'usuario' =>$nombre,
      'contra' =>$contra,
      'id_tpus' =>$tipo,  );
    if($this->mUsuario->modificar($id, $datos)==true)
    echo "Registros Actualizado";
    else
    echo "Error al Actualizar";
  }
  else{
    show_404();
  }
  }

  public function eliminar()
  {
    if($this->input->is_ajax_request()){
    $id = $this->input->post("idajax");

    if($this->mUsuario->eliminar($id)==true)
    echo "Registro Eliminado";
    else
    echo "Error al Eliminar";
  }
  else{
    show_404();
  }
  }

  public function consultarnusuarios()
  {

      $datos = $this->mUsuario->consultarnusuarios();
      echo $datos;

  }

  public function consultarningresos()
  {

      $datos = $this->mUsuario->consultarningresos();
      echo $datos;

  }
}
?>
