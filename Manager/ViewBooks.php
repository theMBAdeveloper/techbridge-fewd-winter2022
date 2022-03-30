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
                    <h3> Rare Bookstore </h3>
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
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Location</th>
                        <th>Publlish Year</th>
                        <th>Purchasing Price</th>
                        <th>Listing Price</th>
                        <th>Condition</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <?php

                        $sql = " SELECT * FROM book_tb  ";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $Title =  $row['Title'];
                            $Author =  $row['Author'];
                            $Edition =  $row['Edition'];
                            $Location =  $row['Location'];
                            $PublishYear =  $row['PublishYear'];
                            $ListingPrice =  $row['ListingPrice'];
                            $PurchasingPrice =  $row['PurchasePrice'];
                            $Condition =  $row['Cond'];


                            echo "<tr>";
                            echo "<td> $Title </td>";
                            echo "<td>  $Author </td>";
                            echo "<td>$Edition </td>";
                            echo "<td> $Location</td>";
                            echo "<td>  $PublishYear </td>";
                            echo "<td>$ListingPrice </td>";
                            echo "<td>  $PurchasingPrice </td>";
                            echo "<td>$Condition </td>";
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