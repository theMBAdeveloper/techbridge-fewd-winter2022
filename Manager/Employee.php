  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">

              <div class="container">
                <div class="row">
                  <div class="col-lg-4 offset-lg-4">
                    <h3> Employee Table </h3>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class='form-control' placeholder="Search..." id="myInput">
                  </div>
                  <div class="col-lg-12 p-2">
                  </div>

                </div>
              </div>
              <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                    <thead>
                      <tr >
                         <th>User Id</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <?php

                        $sql = " SELECT * FROM users_tb where UserType ='Employee'  ";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $UserName =  $row['UserName'];
                            $UserEmail =  $row['UserEmail'];
                           
                            $Id =  $row['UserId'];
                          
                            echo "<tr>";
                            echo "<td> $Id </td>";
                            echo "<td> $UserName </td>";
                            echo "<td>  $UserEmail </td>";
                         
                            ?>
                            <td>
                               
                                <div class="btn btn-light "> <a href="Manager.php?PageName=Employee&DelEmpId=<?php echo $Id; ?>" class="text-dark">Delete</a> </div>
                            </td>
                                    <?php
                                      echo "</tr>";
                                }
                            }
                            ?>

                      </tr>

                    </tbody>

                  </table>
                </div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>>