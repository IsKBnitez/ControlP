<?php
/**
 *
 */
class mnmaterias extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function consultarmaterias(){
    //$resultados = $this->db->query("select  id_materia,codigo,nombre,uv,nombre_f,estado FROM materia INNER JOIN facultad WHERE materia.'id_facultad' = facultad.'id_facultad'");
    //$this->db->where("estado", "0");
    $resultados = $this->db->get("materia");
    return $resultados->result();
  }

  public function consultarfacultad(){
      $facultades=$this->db->get_where("facultad","id_facultad < 10");
      return $facultades->result();
  }

  public function consultarmateriasv(){
    $this->db->select('*');
    $this->db->from('materia');
    $this->db->join('facultad', 'materia.id_facultad = facultad.id_facultad');
    $this->db->where("estado","1");
    $materiasv = $this->db->get();
    return $materiasv->result();
  }

  public function consultarmateriasf(){
      $this->db->select('*');
      $this->db->from('materia');
      $this->db->join('facultad', 'materia.id_facultad = facultad.id_facultad');
      $materias = $this->db->get();
      return $materias->result();
  }

  public function guardar($data){
      return $this->db->insert("materia",$data);

  }

  public function actualizarmaterias($id){
    $this->db->where("id_materia",$id);
    $resultados =  $this->db->get("materia");
    return $resultados->row(); 
  }

  public function update($id,$data){
    $this->db->where("id_materia",$id);
   return $this->db->update("materia",$data);


  }

   
}
?>
