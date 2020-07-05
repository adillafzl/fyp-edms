<?php
   class Model_displayuser extends CI_Model {

      public function getUser($table_name) {

        $get_user = $this -> db -> get($table_name);
        return $get_user -> result_array();
      }

      public function deleteUser($table_name,$id) {

        $this -> db -> where('no',$id);
        $delete_user = $this -> db -> delete($table_name);
        redirect ('displayuser');
      }

      public function dataEdit($table_name,$id) {

        $this -> db -> where('no',$id);
        $get_user = $this -> db -> get($table_name);
        return $get_user -> row();

      }

      public function editUser($table_name,$data,$id) {

        $this -> db -> where('no',$id);
        $this -> db -> update('register',$data);
        $edit_user = $this -> db -> update($table_name,$data,$id);
        return $edit_user;

      }

   }
?>
