<?php
class Masignp extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function consultar1($valor)
  {
    $consulta = $this->db->query("select id_materia, nombre  from materia where not exists(select id_materia from asignpre where materia.id_materia=asignpre.id_materia);");
    return $consulta->result();
  }
  public function consultar2($valor)
  {
    $consulta = $this->db->query("select id_pre, nombre from prerequisito");
    return $consulta->result();
  }
  public function consultar3($valor)
  {
    $consulta = $this->db->query("select a.id_aspre as id, b.nombre as n1, c.nombre as n2 from asignpre a inner join materia b on a.id_materia = b.id_materia inner join prerequisito c on a.id_pre = c.id_pre where b.nombre like '%".$valor."%';");
    return $consulta->result();
  }

  public function ConsultarIdMate($value)
  {
    $id="";
    $consulta = $this->db->query("select id_materia from materia where nombre='".$value."';");
    foreach ($consulta->result() as $row)
    {
      $id= $row->id_materia;
    }
    return $id;
  }
  public function ConsultarIdPrere($value)
  {
    $id="";
    $consulta = $this->db->query("select id_pre from prerequisito where nombre='".$value."';");
    foreach ($consulta->result() as $row)
    {
      $id= $row->id_pre;
    }
    return $id;
  }

  public function guardar($data)
  {
    $this->db->insert("asignpre",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function eliminar($id)
  {
    $this->db->where("id_aspre", $id);
    $this->db->delete("asignpre");
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
}
?>
