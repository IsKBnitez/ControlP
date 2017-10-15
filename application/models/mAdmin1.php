<?php
class Madmin1 extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function guardar($data)
  {
    $this->db->insert('usuarios1',$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function consultaruuss()
  {
    $id="";
    $uss="";

    $consulta = $this->db->query("select  t1.id_us  from usuarios1 t1 inner join usuario t2 on t1.id_us = t2.id_us where t2.id_tpus=2;");
    foreach ($consulta->result() as $row)
    {
      $id= $row->id_us;
    }
    if($id==""){

      $consulta = $this->db->query("select usuario  from usuario where id_tpus=2 order by id_us limit 1;");
      foreach ($consulta->result() as $row)
      {
        $uss= $row->usuario;
      }
    }
    else{
      $consulta = $this->db->query("select usuario  from usuario where id_tpus=2 and id_us>".$id." order by id_us  limit 1;");
      foreach ($consulta->result() as $row)
      {
        $uss= $row->usuario;
      }
    }
    return $uss;

  }

  public function modificar($id, $data)
  {
    $this->db->where("id_usuario", $id);
    $this->db->update("usuarios1",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }

  public function Nimagen ($id){
    $consulta = $this->db->query("select foto as 'foto' from usuarios1 where id_usuario=".$id.";");
    foreach ($consulta->result() as $row)
    {
      $foto= $row->foto;
      return $foto;
    }
  }



  public function valordelid($usuario)
  {
    $consulta = $this->db->query("select id_us as 'id' from usuario where usuario='".$usuario."';");
    foreach ($consulta->result() as $row)
    {
      $uss= $row->id;
      return $uss;
    }

  }
  public function consultar($valor)
  {
    $consulta = $this->db->query("select t1.id_usuario, t1.nombre, t1.apellido, t1.foto, t1.sexo, t1.edad, t1.numero_tel,t1.email_usua, t2.usuario  from usuarios1 t1 inner join usuario t2 on t1.id_us = t2.id_us where id_usuario like '%".$valor."%';");
    return $consulta->result();
  }

  public function eliminar($id)
  {
    $this->db->where("id_usuario", $id);
    $this->db->delete("usuarios1");
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }


}





 ?>
