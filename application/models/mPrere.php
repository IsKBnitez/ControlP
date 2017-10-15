<?php
/**
 *
 */
class Mprere extends CI_Model
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
    $consulta = $this->db->query("select t1.id_pre as id_pre, t1.codigo as codigo, t1.nombre as nombre, t2.nombre as nombre1 from prerequisito t1 inner join carrera t2 on t1.id_ca = t2.id_ca where t1.nombre like '%".$valor."%';");
    return $consulta->result();
  }
  public function modificar($id, $data)
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
    $this->db->where("id_pre", $id);
    $this->db->delete("prerequisito");
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
}
?>
