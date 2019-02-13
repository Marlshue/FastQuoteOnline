<?php
class model1 extends CI_Model {

        public function getall()
        {
               $q=$this->db->get('first_table');
if($q->num_rows() > 0){
               foreach($q->result() as $row)
               {
               	$data[]=$row;
               }
               return $data;
               }
        }
}