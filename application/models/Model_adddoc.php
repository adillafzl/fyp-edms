<?php
   class Model_adddoc extends CI_Model {

      public function insertData($table_name,$data) {
        $insert = $this->db->insert($table_name,$data);
        return $data;

      }
      
      public function deleteDoc($table_name,$id) {
        $this -> db -> where('docid',$id);
        $delete_doc = $this -> db -> delete($table_name);
        redirect ('deletepage');
      }

      public function getDoc($table_name) {
        $get_doc = $this -> db -> get($table_name);
        return $get_doc -> result_array();
      }

   }
?>
