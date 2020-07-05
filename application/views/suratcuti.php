<!DOCTYPE html>
<html>
<head>
	<title>Surat Cuti</title>
</head>
<body>

  <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12">

              <?php echo $this->session->flashdata('tambah');?>

                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Surat Cuti</div>
                  <div class="card-body">

                     
                     <?php
                      ?>
                    

                      <form method="post" action="create">

                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr align="center">
                          <th>Please choose a suitable answer for the questions below:</th>
                        </tr>
                      </thead>
  
                      <tbody>
                      <tr align="center">
                   
                      <td>Who needs to sign this letter?</td>
                      </tr>
                          <tr align="center">
                      <td>
                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="ans" value="Me">Me
                      </div>

                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="ans" value="Others">Others
                      </div>
                    </td>
                         </tr>
                        
                        </tr>
                    

                      </tbody>
   
                    </table>
                    </form>

                    <?php ?>

                    <form method="post" action="create">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr align="center">
                          <th>Please choose a suitable answer for the questions below:</th>
                        </tr>
                      </thead>
  
                      <tbody>
                      <tr align="center">
                   
                      <td>What is the reason for your absence?</td>
                      </tr>
                          <tr align="center">
                      <td>
                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="ans" value="Sick">Sick
                      </div>

                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="ans" value="Death">Death
                      </div>

                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="ans" value="Emergency">Emergency
                      </div>
                    </td>
                    
                        </tr>
                      </tbody>
   
                    </table>
                    </form>

                    <?php ?>

                    <form method="post" action="create">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr align="center">
                        <th>Please choose a suitable answer for the questions if you are sick:</th>
                        </tr>
                    </thead>

                    <tbody>
                    <tr align="center">

                    <td>Did you went to the hospital?</td>
                    </tr>
                        <tr align="center">
                    <td>
                    <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="ans" value="y">Yes
                    </div>

                    <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="ans" value="n">No
                    </div>
                    </td>

                        </tr>
                    </tbody>

                    </table>
                    </form>

                    <?php ?>
                    <form method="post" action="create">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr align="center">
                        <th>Please choose a suitable answer for the questions if you are sick:</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr align="center">
                    <td>Did you get a sick certificate from the doctor?</td>
                    </tr>
                        <tr align="center">
                    <td>
                    <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="ans" value="y">Yes
                    </div>

                    <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="ans" value="n">No
                    </div>
                    </td>

                        </tr>
                    </tbody>

                    </table>

                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="btnSubmit">Submit</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>

        <script>
    
  </script>
</body>
</html>