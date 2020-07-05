<?php
   class Model_suratcuti extends CI_Model {

      public function insertData($table_name,$data) {
        $insert = $this->db->insert($table_name,$data);
        return $data;
      }

      public function getData($table_name) {
        $get_data = $this -> db -> get($table_name);
        return $get_data -> result_array();
      }

   }
?>
