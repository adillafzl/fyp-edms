<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_account extends CI_Model
{

    function login($staffid, $password)
    {
        return $staffid == '2017696464' && $password == 'demo';
    }

}