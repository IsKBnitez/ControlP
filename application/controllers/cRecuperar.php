<?php
/**
 *
 */
class Crecuperar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model('mRlogin');
  }

  public function Index()
  {
    $this->load->view('Frontend/vRecuperar');
  }

  public function sendMailGmail()
  {
  //cargamos la libreria email de ci
  $this->load->library("email");
  
  //configuracion para gmail
  $configGmail = array(
    //SSL HOST INFINITY FREE
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.gmail.com',
  'smtp_port' => 465,
  'smtp_user' => 'landos112@gmail.com',
  'smtp_pass' => 'slayer0963',
  'mailtype' => 'html',
  'charset' => 'utf-8',
  'newline' => '\r\n'
  );    
  
  //cargamos la configuración para enviar con gmail
  $this->email->initialize($configGmail);
  
  $this->email->from('landos112@gmail.com');
  $this->email->to("gordoositoayuda@gmail.com");
  $this->email->subject('Bienvenido/a a uno-de-piera.com');
  $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog');
  if($this->email->send()){
    echo "Enviado";
  }
  else{
    echo "Problema SSL";
    //var_dump($this->email->print_debugger());
  }
  //con esto podemos ver el resultado

  }

  public function sendMailYahoo()
  {
  //cargamos la libreria email de ci
  $this->load->library("email");
  
  //configuracion para yahoo
  $configYahoo = array(
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.mail.yahoo.com',
  'smtp_port' => 587,
  'smtp_crypto' => 'tls',
  'smtp_user' => 'emaildeyahoo',
  'smtp_pass' => 'password',
  'mailtype' => 'html',
  'charset' => 'utf-8',
  'newline' => '\r\n'
  ); 
  
  //cargamos la configuración para enviar con yahoo
  $this->email->initialize($configYahoo);
  
  $this->email->from('correo que envia los emails');//correo de yahoo o no funcionará
  $this->email->to("correo que recibe el email");
  $this->email->subject('Bienvenido/a a uno-de-piera.com');
  $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de yahoo</h2><hr><br> Bienvenido al blog');
  $this->email->send();
  //con esto podemos ver el resultado
  var_dump($this->email->print_debugger());
  
  }
}
 ?>
