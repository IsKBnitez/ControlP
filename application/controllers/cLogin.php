<?php
/**
 *
 */
class Clogin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model('mLogin');
  }

  public function Index()
  {
    $this->load->view('Frontend/vLogin');
  }

  public function Ingresar()
  {
    $envio['usuario']= $this->input->post('uss');
    $envio['contra']= $this->input->post('contra');

    $resp=$this->mLogin->ingresar($envio);
    if($this->session->userdata('id_tpus')=="1"){
      if ($resp==1) {
        $this->GuardarBitacora();
        $mensaje['men']="Bienvenido ".$this->session->userdata('usuario');
        redirect(base_url()."cIndex");
      }
      else{
        $mensaje['men']="Verifique sus datos";
        $this->load->view('Frontend/vLogin', $mensaje);
      }
    }
    else if($this->session->userdata('id_tpus')=="2"){
      if ($resp==1) {
        $this->GuardarBitacora();
        $mensaje['men']="Bienvenido ".$this->session->userdata('usuario');
        redirect(base_url()."cIndex");
        //$this->session->sess_destroy();
      }
      else{
        $mensaje['men']="Verifique sus datos";
        $this->load->view('Frontend/vLogin', $mensaje);
      }
    }
    else if($this->session->userdata('id_tpus')=="3"){
      if ($resp==1) {
        $this->GuardarBitacora();
        $mensaje['men']="Bienvenido ".$this->session->userdata('usuario');
        redirect(base_url()."calumno");
        //$this->session->sess_destroy();
      }
      else{
        $mensaje['men']="Verifique sus datos";
        $this->load->view('Frontend/vLogin', $mensaje);
      }
    }
    else{
      $mensaje['men']="Verifique sus datos";
      $this->load->view('Frontend/vLogin', $mensaje);
    }

  }
  public function GuardarBitacora()
  {
    $idpersona = $this->session->userdata('id_us');
    $datos=array(
      'id_us' =>$idpersona
    );
    if($this->mLogin->guardar($datos)==true);
}

public function salir(){

$this->session->sess_destroy();
redirect(base_url());
}


}

 ?>
