<?php

/**
 *
 */
class cdocente extends CI_Controller
{

  function __construct()
   {
     parent::__construct();
     //$this->load->model("mAdmin");
   }

   public function Index()
   {

     $this->load->view('Marcos/Menu2');
     $this->load->view('Frontend/vmdocente');
     $this->load->view('Marcos/Piepagina');
   }

 }


 ?>
