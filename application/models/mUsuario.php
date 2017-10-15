<?php
/**
 *
 */
class Musuario extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function tipousuario() #combobox
  {
    $r= $this->db->get_where("tipo_usuario", "id_tpus <4");
    return $r->result();
  }

  public function guardar($data)
  {
    $this->db->insert("usuario",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function consultar($valor)
  {
    $consulta = $this->db->query("select t1.id_us, t1.usuario, t1.contra, t2.tipo from usuario t1 inner join tipo_usuario t2 on t1.id_tpus = t2.id_tpus where t1.usuario like '%".$valor."%';");
    return $consulta->result();
  }
  public function consultarB($valor)
  {
    $consulta = $this->db->query("select a.id_bit, b.usuario from bitacora_ingresos a inner join usuario b on a.id_us = b.id_us where a.id_us like '%".$valor."%';");
    return $consulta->result();
  }
  public function consultarnusuarios()
  {

    $consulta = $this->db->query("select * from usuario;");
    return $consulta->num_rows();
  }
  public function consultarningresos()
  {
    
    $consulta = $this->db->query("select * from bitacora_ingresos;");
    return $consulta->num_rows();
  }
  public function modificar($id, $data)
  {
    $this->db->where("id_us", $id);
    $this->db->update("usuario",$data);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
  public function eliminar($id)
  {
    $this->db->where("id_us", $id);
    $this->db->delete("usuario");
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
}
