<?php
/**
 *
 */
class Cinscria extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mInscriA');
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vInscriA');
    $this->load->view('Marcos/Piepagina');
  }

  public function carrera() #combobox
  {
    $result = $this->mInscriA->carrera();
    echo json_encode($result);
  }

  public function consultarA()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar1");
      $datos = $this->mInscriA->consultarA($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function consultarIdCb()
  {
    if ($this->input->is_ajax_request()) {
      $buscar = $this->input->post("idajax");
      $datos = $this->mInscriA->consultarIdCb($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function guardar()
  {
    if($this->input->is_ajax_request()){
    $nombre= $this->input->post("alumno");
    $alumno = $this->mInscriA->valordelid($nombre);
    $tipo = $this->input->post("idcb");
    $datos=array(
      'id_alumno' =>$alumno,
      'id_ca' =>$tipo,  );
    if($this->mInscriA->guardar($datos)==true)
    echo "Registros Guardados";
    else
    echo "Error al Registrar";
    }
    else{
    show_404();
    }
  }
}
?>
