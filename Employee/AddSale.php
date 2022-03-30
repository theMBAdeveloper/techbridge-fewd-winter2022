<?php
 $Title=$Price=$Condition =$Location=$Id=NULL;
if(isset($_GET['Id'])){
    $id = $_GET['Id'];
    $sql = " SELECT * FROM book_tb where Id= '$id'  ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            $Title =  $row['Title'];
            $Condition =  $row['Cond'];
            $Location =  $row['Location'];
            $Price =  $row['ListingPrice'];
            $Id = $row['Id'];
        }
        else
        echo "<script>   window.history.back(); </script>";
    }
   
} else {
      echo "<script>   window.history.back(); </script>";
    }
?>
                    
 
<div class="container">
        <div class="row">
                <div class="col-lg-8">
                <div class="card m-3">
                <div class="card-header ">
                        <h3> Selling Book Form </h3>
                    
                </div>
               
                 
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
<div class="container"></div>
                <form method="post" class="">
                <div class="row ">
                            <div class="col-lg-12 col-md-6  form-group">
                                <?php
                                if (count($errors) > 0) {
                                ?>
                                    <div class="alert alert-danger text-center p-2">
                                        <?php
                                        foreach ($errors as $showerror) {
                                            echo $showerror;
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

<?php
                                if (isset($success['success'])) {
                                ?>
                                    <div class="alert alert-success text-center p-2">
                                        <?php
                                        echo $success['success'];
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
<div class="row">
  


    
    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for="">Book Title</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="number" name="Id" value="<?php echo $Id; ?>" hidden>
        <input type="text" name="Title" value="<?php echo $Title; ?>"   class="form-control" required>
    </div>

    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for="">Condition</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="text" name="Cond"   value="<?php echo $Condition; ?>" class="form-control" required>
    </div>

    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for="">Location</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="text" name="Location"  value="<?php echo $Location; ?>"  class="form-control" required>
    </div>
   
    
   

    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for="">Price</label>
    </div>
    <div class="col-lg-8  form-group">
    <input type="number" name="Price" value="<?php echo $Price; ?>" class="form-control" required>
    </div>
  

</div>

<div class="row">
<div class="col-lg-4">
       </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-dark " type="submit"  name="submitSaleForm" value="Make Sale" required>
    </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-outline-danger " type="reset" value="Reset" required>
    </div>
</div>

</form>
                </div>

                </div>
                </div>
                <!-- /.card-body -->
        </div>
       


                </div>
        </div>
</div>
