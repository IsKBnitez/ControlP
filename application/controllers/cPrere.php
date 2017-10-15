<?php
 class Cprere extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mPrere');
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vPrere');
    $this->load->view('Marcos/Piepagina');
  }

  public function carrera() #combobox
  {
    $result = $this->mPrere->carrera();
    echo json_encode($result);
  }
  public function guardar()
  {
    if($this->input->is_ajax_request()){
    $codigo= $this->input->post("codigo");
    $nombre=$this->input->post("nombre");
    $tipo = $this->input->post("idcb");
    $datos=array(
      'codigo' =>$codigo,
      'nombre' =>$nombre,
      'id_ca' =>$tipo, );
    if($this->mPrere->guardar($datos)==true)
    echo "Registros Guardados";
    else
    echo "Error al Registrar";
  }
  else{
    show_404();
  }
}
public function consultarIdCb()
{
  if ($this->input->is_ajax_request()) {
    $buscar = $this->input->post("idajax");
    $datos = $this->mPrere->consultarIdCb($buscar);
    echo json_encode($datos);
  }
  else {
    show_404();
  }
}
  public function consultar()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mPrere->consultar($buscar);
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
    $codigo= $this->input->post("codigo2");
    $nombre=$this->input->post("nombre2");
    $tipo = $this->input->post("idcb2");
    $datos=array(
      'codigo' =>$codigo,
      'nombre' =>$nombre,
      'id_ca' =>$tipo, );
    if($this->mPrere->modificar($id, $datos)==true)
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

    if($this->mPrere->eliminar($id)==true)
    echo "Registro Eliminado";
    else
    echo "Error al Eliminar";
  }
  else{
    show_404();
  }
  }
}
?>
