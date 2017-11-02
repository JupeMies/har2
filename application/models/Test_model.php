<?php
class Test_model extends CI_Model{
  private $nimet=array(
    array("en"=>'Ville',"sn"=>'Virta'),
    array("en"=>'Kalle',"sn"=>'Virta'),
    array("en"=>'Liisa',"sn"=>'Virta')
  );
  public function hae_nimet(){
    return $this->nimet;
  }
}
