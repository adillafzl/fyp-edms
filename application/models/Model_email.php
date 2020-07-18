<?php
   class Model_email extends CI_Model {

      public function email($table_name,$data) {
        $insert = $this->db->insert($table_name,$data);
        return $data;

      }
    }