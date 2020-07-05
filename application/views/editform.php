<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Form</title>
  </head>
  <body  style="background-color: #F0FFF0">

    <div id="container">
    <h2>Update</h2>


    <div id="body">
      <?php if ($dataEdit) {
        $id = $dataEdit -> no;
        $staffid = $dataEdit -> staffid;
        $firstname = $dataEdit -> firstname;
        $lastname = $dataEdit -> lastname;
        $icnum = $dataEdit -> icnum;
        $email = $dataEdit -> email;
        $phoneno = $dataEdit -> phoneno;
        $password = $dataEdit -> password;
      } ?>

    <form action="<?php echo site_url('DisplayUser/update/'.$id); ?>" method="POST">
      Staff ID:
      <input type="text" name="staffid" value=" <?php echo $staffid ?> "/>
      <br>
      First Name:
      <input type="text" name="firstname" value="<?php echo $firstname ?>"/>
      <br>
      Last Name:
      <input type="text" name="lastname" value="<?php echo $lastname ?>"/>
      <br>
      IC Number:
      <input type="text" name="icnum" value="<?php echo $icnum ?>"/>
      <br>
      Email:
      <input type="text" name="email" value="<?php echo $email ?>"/>
      <br>
      Phone Number:
      <input type="text" name="phoneno" value="<?php echo $phoneno ?>"/>
      <br>
      Password:
      <input type="password" name="password" value="<?php echo $password ?>"/>
      <br>
      <br>
      <input type="submit" name="submit" value="Update" >
    </form>

      <a href="<?php echo site_url('home') ?>"> Home </a>
    </div>

    </div>


  </body>
</html>
