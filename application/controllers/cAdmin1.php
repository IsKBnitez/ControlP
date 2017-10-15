<?php
/**
 *
 */
class CAdmin1 extends CI_Controller
{

 function __construct()
  {
    parent::__construct();
    $this->load->model("mAdmin1");
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vAdmin1');
    $this->load->view('Marcos/Piepagina');
  }

  public function consultaruuss()
  {
    if ($this->input->is_ajax_request()) {
      $datos = $this->mAdmin1->consultaruuss();
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
      $datos = $this->mAdmin1->consultar($buscar);
      echo json_encode($datos);
    }
    else {
      show_404();
    }
  }

  public function guardar()
  {

    $nombre= $this->input->post("nombre");
    $apellido=$this->input->post("apellido");
    $sexo= $_POST["sexo"];
    $edad=$this->input->post("edad");
    $tel = $this->input->post("tel");
    $email=$this->input->post("ema");
    $usuario = $this->mAdmin1->valordelid($this->input->post("uss"));

    $config =
    [
      "upload_path" => "./img/docente",
      'allowed_types' => "png|jpg"
    ];
    $this->load->library("upload",$config);

    if($this->upload->do_upload('fotos'))
    {
      $datos1 = array(
        "upload_data" => $this->upload->data()

      );
      $datos=array(
        'nombre' =>$nombre,
        'apellido' =>$apellido,
        'foto' => $datos1["upload_data"]["file_name"],
        'sexo' =>$sexo,
        'edad' =>$edad,
        'numero_tel' =>$tel,
        'email_usua' =>$email,
        'id_us' =>$usuario);
      if($this->mAdmin1->guardar($datos)==true){
      echo "Registros Guardados";
    }
      else{
    echo $usuario;

    }
    }
    else {
      echo $this->upload->display_errors();
    }


}

public function modificar()
{
  $id = $this->input->post("id2");
  $nombre= $this->input->post("nombre2");
  $apellido=$this->input->post("apellido2");
  $sexo= $_POST["sexo2"];
  $foto= $this->input->post("fotoante");
  $edad=$this->input->post("edad2");
  $tel = $this->input->post("tel2");
  $email=$this->input->post("ema2");
  $usuario = $this->mAdmin1->valordelid($this->input->post("uss2"));

  $config =
  [
    "upload_path" => "./img/docente",
    'allowed_types' => "png|jpg"
  ];
  $this->load->library("upload",$config);

  if($this->upload->do_upload('fotos2'))
  {
    $datos1 = array(
      "upload_data" => $this->upload->data()
    );
    $datos=array(
      'nombre' =>$nombre,
      'apellido' =>$apellido,
      'foto' => $datos1["upload_data"]["file_name"],
      'sexo' =>$sexo,
      'edad' =>$edad,
      'numero_tel' =>$tel,
      'email_usua' =>$email,
      'id_us' =>$usuario);
    if($this->mAdmin1->modificar($id,$datos)==true){
    echo "Registros Actualizado";
    }
    else{
      echo "Error al Actualizar";
    }
  }
  else {
    $datos=array(
      'nombre' =>$nombre,
      'apellido' =>$apellido,
      'foto' => $foto,
      'sexo' =>$sexo,
      'edad' =>$edad,
      'numero_tel' =>$tel,
      'email_usua' =>$email,
      'id_us' =>$usuario);
    if($this->mAdmin1->modificar($id,$datos)==true){
    echo "Registros Actualizado";
    }
    else{
      echo "Error al Actualizar";
    }

  }

}

public function eliminar(){
  if ($this->input->is_ajax_request()) {
    $id = $this->input->post("idajax");
    $registro = $this->mAdmin1->Nimagen($id);
    unlink("./img/docente/".$registro);
    if ($this->mAdmin1->eliminar($id)==true) {
      echo "Registro Eliminado";
    }
    else {
      echo "Error al eliminar el registro";
    }

  }

}



}



 ?>
