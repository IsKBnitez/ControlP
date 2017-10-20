<?php
/**
 *
 */
class cnMateria extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mnMaterias');
  }

  public function Index()
  {

    $data = array (
      'materia' => $this->mnMaterias->consultarmaterias(),
      'facultad' => $this->mnMaterias->consultarfacultad() ,
      'materiasv' => $this->mnMaterias->consultarmateriasv(),
      'materiasf' => $this->mnMaterias->consultarmateriasf(),
    );

  
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vnMateria',$data);
    $this->load->view('Marcos/Piepagina');
  }

  public function guardar(){

    $codigo = $this->input->post("codigo");
    $nombre = $this->input->post("nombre");
    $uv = $this->input->post("uv");
    $facultad = $this->input->post("tp");

    $data = array(
      'codigo' => $codigo,
      'nombre' => $nombre,
      'uv' => $uv,
      'id_facultad' => $facultad,
      'estado ' => "1"
    );

    if ($this->mnMaterias->guardar($data)== true) {
      $this->session->set_flashdata("Done","Informacion registrada correctamente");
      redirect(base_url()."cnMateria");

    }
    else{
      $this->session->set_flashdata("Error","No se pudo guardar la informacion");
      redirect(base_url()."cnMateria");
    }
  }

  public function edit($id){

    $data = array(
      'materia' => $this->mnMaterias->actualizarmaterias($id),
      'facultad' => $this->mnMaterias->consultarfacultad() ,
     );
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vnMateriae',$data);
    $this->load->view('Marcos/Piepagina');

  }

  public function actualizar(){
    $id = $this->input->post("id2");
    $codigo = $this->input->post("codigo2");
    $nombre = $this->input->post("nombre2");
    $uv = $this->input->post("uv");
    $facultad = $this->input->post("tp");

    $data = array(
      'codigo' => $codigo,
      'nombre' => $nombre,
      'uv' => $uv,
      'id_facultad' => $facultad,
      
    );

    if ($this->mnMaterias->update($id,$data)== true) {
      $this->session->set_flashdata("Done","Informacion actualizada correctamente");
      redirect(base_url()."cnMateria");

    }
    else{
      $this->session->set_flashdata("Error","No se pudo actualizar la informacion");
      redirect(base_url()."cnMateria/vnMateriae".$id);
    }



  }

  public function delete($id){
    $data = array(
      'estado' => "0" , 
    );
    if($this->mnMaterias->update($id,$data) == true)
    {
      redirect(base_url()."cnMateria");
    }
    
  }

  public function mostrar($id){
    $data = array(
      'estado' => "1" , 
    );
    if($this->mnMaterias->update($id,$data)==true){
      redirect(base_url()."cnMateria");
    }
    
  }

  

  
}
?>
