<?php
/**
 *
 */
class Mlogin extends CI_Model
{

    public function ingresar($resivir)
    {
      $this->db->select('id_us, usuario, id_tpus, contra');
      $this->db->from('usuario');
      $this->db->where('usuario',$resivir['usuario']);
      $this->db->where('contra',$resivir['contra']);
      $resultado= $this->db->get();
      if($resultado->num_rows() == 1){
        $datos = $resultado->row();
          $session_us = array(
            'id_us' => $datos->id_us,
            'usuario' => $datos->usuario,
            'id_tpus' => $datos->id_tpus,
            'contra' => $datos->contra
           );
           $this->session->set_userdata($session_us);
           //hacer cambios
           return 1;
      }else {
          return 0;
      }
    }
    public function guardar($data)
    {
      $this->db->insert("bitacora_ingresos",$data);
      if($this->db->affected_rows()>0){
        return true;
      }
      else{
        return false;
      }
    }
}


 ?>
