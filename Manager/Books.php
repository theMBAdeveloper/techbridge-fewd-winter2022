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
                    <h3> Books Table </h3>
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
                      <tr class="h5">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Location</th>
                        <th>Listing Price</th>
                        <th>Condition</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <?php

                        $sql = " SELECT * FROM book_tb  ";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $Id =  $row['Id'];
                            $Title =  $row['Title'];
                            $Author =  $row['Author'];
                            $Edition =  $row['Edition'];
                            $Location =  $row['Location'];
                         
                            $ListingPrice =  $row['ListingPrice'];
                           
                            $Condition =  $row['Cond'];


                            echo "<tr>";
                            echo "<td> $Title </td>";
                            echo "<td>  $Author </td>";
                            echo "<td>$Edition </td>";
                            echo "<td> $Location</td>";
                           
                            echo "<td>$ListingPrice </td>";
                         
                            echo "<td>$Condition </td>";
                            
                            ?>
                            <td>
                                <div class="btn btn-light"> <a href="Manager.php?PageName=EditBooks&EId=<?php echo $Id; ?>" class="text-dark">Edit</a> </div>
                                <div class="btn btn-light "> <a href="Manager.php?PageName=Books&DId=<?php echo $Id; ?>" class="text-dark">Delete</a> </div>
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
  </section>