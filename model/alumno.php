<?php
require_once 'config/cn.php';

class Alumno extends cn {
  public function __construct()
  {
    parent::__construct();
  }

  public function get_alumno($carn)
  {
    $sql = "SELECT apellido FROM alumno WHERE carnet = '$carn'";
    return $this->consulta($sql);
  }
}
?>