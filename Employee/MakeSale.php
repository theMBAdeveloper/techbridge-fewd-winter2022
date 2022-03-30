<div class="card m-3">
    <div class="card-header">
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


    </div>
    <div class="table-responsive">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="myTable" class="table table-bordered  text-center table-striped bg-dark">
                <thead>
                    <tr>

                        <th> Book Title</th>
                        <th> Condition</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php
                        $id =1;
                        $sql = " SELECT * FROM book_tb  ";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Title =  $row['Title'];
                                $Condition =  $row['Cond'];
                                $Location =  $row['Location'];
                                $Price =  $row['ListingPrice'];
                                $Id = $row['Id'];

                                echo "<tr>";
                                echo "<td> $Title </td>";
                                echo "<td>  $Condition </td>";
                                echo "<td>$Location </td>";
                                echo "<td> $Price</td>";
                             
                              
                                ?>
                        <td>
                            <div class="btn btn-light"> <a href="Employee.php?PageName=AddSale&Id=<?php echo $Id; ?>" class="text-dark">Mark As Sold</a> </div>
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
    <!-- /.card-body -->
</div>


<script>

</script>