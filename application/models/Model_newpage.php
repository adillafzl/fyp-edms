<?php
   class Model_newpage extends CI_Model {

      public function insertPage($table_name,$data) {

        $newpage = $this->db->insert($table_name,$data);
        return $data;

      }
   }
?>