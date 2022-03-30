
 

        <div class="card m-3">
                <div class="card-header">
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-4 offset-lg-4"> <h3> Sale History </h3></div>
                                        <div class="col-lg-12">
                                        <input type="text" class='form-control' placeholder="Search..." id="myInput">
                                        </div>
                                        <div class="col-lg-12 p-2">
                    <input type="button" id="btnExport" value=" Export Sales Report" class="btn btn-success form-control" />
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
                   <th> Sale Id</th> 
                    <th> Book Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Condition</th>
                    <th>Sales Person</th>
                               
                                        </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   $id = $_SESSION['id'];
                                   $UserName = $_SESSION['name'];
                                   $sql = " SELECT * FROM sales_tb   ";
                                   $result = mysqli_query($con, $sql);
                                   if ($result) {
                                       while ($row = mysqli_fetch_assoc($result)) {
                                           $Title =  $row['Title'];
                                           $Id =  $row['Id'];
                                           $Condition =  $row['Cond'];
                                           $Location =  $row['Location'];
                                           $Price =  $row['Price'];
                                           $Id = $row['Id'];
                                           echo "<tr>";
                                           echo "<td> $Id </td>";
                                           echo "<td> $Title </td>";
                                           echo "<td>$Location </td>";
                                           echo "<td> $Price</td>";
                                           echo "<td>  $Condition </td>";
                                           echo "<td> $UserName</td>";
                                           echo "</tr>";
                                       }
                                   }
                                   ?>
                                </tbody>

                        </table>
                </div>
                </div>
                <!-- /.card-body -->
        </div>
       

<script>

</script>