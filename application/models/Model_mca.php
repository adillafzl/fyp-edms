<?php
   class Model_mca extends CI_Model {

      public function insertData($table_name,$data) {

        $insert = $this->db->insert($table_name,$data);
        return $data;

      }

      public function join($table,$tbljoin,$join){
         
         $this->db->where($id);
         return $this->db->get($table);
      }
      
   }
?>