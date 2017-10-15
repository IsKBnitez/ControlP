<?php
/**
 *
 */
class Mmateria extends CI_Model
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
  public function guardar($data)
  {
    $this->db->insert("materia",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function ConsultarIDPre($value, $value2)
  {
    $id="";
    $consulta = $this->db->query("select id_pre from prerequisito where prerequisito.codigo='".$value."' or prerequisito.nombre='".$value2."';");
    foreach ($consulta->result() as $row)
    {
      $id= $row->id_pre;
    }
    return $id;
  }
  public function guardar1($data)
  {
    $this->db->insert("prerequisito",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function consultar($valor)
  {
    $consulta = $this->db->query("select t1.id_materia as id_materia, t1.codigo as codigo, t1.nombre as nombre, t1.uv as uv, t2.nombre as nombre1 from materia t1 inner join carrera t2 on t1.id_ca = t2.id_ca where t1.nombre like '%".$valor."%';");
    return $consulta->result();
  }
  public function modificar($id, $data)
  {
    $this->db->where("id_materia", $id);
    $this->db->update("materia",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function modificar1($id, $data)
  {
    $this->db->where("id_pre", $id);
    $this->db->update("prerequisito",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function eliminar($id)
  {
    $this->db->where("id_materia", $id);
    $this->db->delete("materia");
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
}
?>
