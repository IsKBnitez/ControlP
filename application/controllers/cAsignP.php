<?php

class Casignp extends CI_Controller
{

 function __construct()
  {
    parent::__construct();
    $this->load->model("mAsignP");
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vAsignacionpre');
    $this->load->view('Marcos/Piepagina');
  }
/*
  public function consultar1()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar1");
      $datos = $this->mAsignP->consultar1($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }
  public function consultar2()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar2");
      $datos = $this->mAsignP->consultar2($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }
  public function consultar3()
  {
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar3");
      $datos = $this->mAsignP->consultar3($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }*/

  public function consultarMa(){
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mAsignP->consultarM($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function consultarMac(){
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mAsignP->consultarMc($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function consultarPrec(){
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mAsignP->consultarPc($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function consultarpre(){
    if ($this->input->is_ajax_request()) {
      $buscar=$this->input->post("buscar");
      $datos = $this->mAsignP->consultarPre($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }
  public function guardar()
  {
    if($this->input->is_ajax_request()){
      $nombreM=$this->input->post("materia");
      $nombreP=$this->input->post("pre");
    $idmateria = $this->mAsignP->ConsultarIdMate($nombreM);
    $idpre = $this->mAsignP->ConsultarIdPrere($nombreP);

    $datos=array(
      'id_materia' =>$idmateria,
      'id_pre' =>$idpre,);
    if($this->mAsignP->guardar($datos)==true){
    echo "Registros Guardados";
  }
    else{    echo "anda caga";}
  }
  else{
    show_404();
  }
}

public function eliminar()
{
  if($this->input->is_ajax_request()){
  $id = $this->input->post("idajax");

  if($this->mAsignP->eliminar($id)==true)
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
