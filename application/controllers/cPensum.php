<?php
/**
 *
 */
class cPensum extends CI_Controller
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

    $this->load->view('Frontend/vPensum',$data);
    $this->load->view('Marcos/Piepagina');
    
    
   
  }

  

  

  
}
?>
