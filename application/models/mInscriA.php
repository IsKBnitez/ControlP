<?php
/**
 *
 */
class Minscria extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function carrera() #combobox
  {
    $r= $this->db->get_where("carrera", "id_ca < 4");
    return $r->result();
  }

  public function consultarIdCb($valor)
  {
    $consulta = $this->db->query("select id_ca from carrera where nombre='".$valor."';");
    return $consulta->result();
  }

  public function consultarA($valor)
  {

    $consulta = $this->db->query("select nombre as n  from usuarios where not exists(select id_alumno from inscrip where usuarios.id_alumno=inscrip.id_alumno) limit 1;");
    foreach ($consulta->result() as $row)
    {
      $id= $row->n;
    }
    return $id;
  }

  public function guardar($data)
  {
    $this->db->insert("inscrip",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }

  public function valordelid($usuario)
  {
    $consulta = $this->db->query("select id_alumno as 'id' from usuarios where nombre='".$usuario."';");
    foreach ($consulta->result() as $row)
    {
      $uss= $row->id;
      return $uss;
    }

  }

}
?>
