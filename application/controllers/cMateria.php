<?php
/**
 *
 */
class Cmateria extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mMateria');
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vMateria');
    $this->load->view('Marcos/Piepagina');
  }

  public function carrera() #combobox
  {
    $result = $this->mMateria->facultad();
    echo json_encode($result);
  }
  public function guardar()
  {
    if($this->input->is_ajax_request()){
    $codigo= $this->input->post("codigo");
    $nombre=$this->input->post("nombre");
    $uv=$this->input->post("uv");
    $tipo = $this->input->post("idcb");
    $datos=array(
      'codigo' =>$codigo,
      'nombre' =>$nombre,
      'uv' =>$uv,
      'id_facultad' =>$tipo, );
      /*$datos1=array(
        'codigo' =>$codigo,
        'nombre' =>$nombre,
        'id_ca' =>$tipo, );*/
    if($this->mMateria->guardar($datos)==true){
        //if($this->mMateria->guardar1($datos1)==true){
          echo "Registros Guardados";
        }
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
    $datos = $this->mMateria->consultarIdCb($buscar);
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
      $datos = $this->mMateria->consultar($buscar);
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
    $uv=$this->input->post("uv2");
    $tipo = $this->input->post("idcb2");
    $datos=array(
      'codigo' =>$codigo,
      'nombre' =>$nombre,
      'uv' =>$uv,
      'id_ca' =>$tipo, );
    $datos1=array(
      'codigo' =>$codigo,
      'nombre' =>$nombre,
      'id_ca' =>$tipo, );
      $id1=$this->mMateria->ConsultarIDPre($codigo,$nombre);
    if($this->mMateria->modificar($id, $datos)==true){
          if($this->mMateria->modificar1($id1, $datos1)==true){
            echo "Registros Actualizado";
          }
        }
    else{
        echo "Error al Actualizar";
    }
  }
  else{
    show_404();
  }
  }


  public function eliminar()
  {
    if($this->input->is_ajax_request()){
    $id = $this->input->post("idajax");

    if($this->mMateria->eliminar($id)==true)
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
