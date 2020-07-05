<?php
   class Model_registerc extends CI_Model {

      public function insertData($table_name,$data) {
        $insert = $this->db->insert($table_name,$data);
        return $data;




      }

   }
?>
