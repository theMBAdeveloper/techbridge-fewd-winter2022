<!-- ======= User Signup ======= -->

<section class="cont">
  <div class="container " data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6  offset-lg-3 form login-form">
        <form method="POST">
          <h2 class="text-center"> Registeration</h2>
          <h5 class="text-center">Employee Form </h5>
          <?php
          if (count($errors) > 0) {
          ?>
            <div class="alert alert-danger text-center p-2">
              <?php
               echo " Please enter valid information..!";
              ?>
            </div>

          <?php
          }
          else{
?>

              <?php
                if(isset($success['success']))
                {
                  echo '<div class="alert alert-success text-center p-2">';
                  echo $success['success'];
                  echo ' </div>';
                }
               
              
              ?>
           
<?php
          }
          ?>
 <div class="form-group p-2">
          <input type="text" name="UserName" class="form-control" id="UserName" placeholder="UserName" required>
          <div class=" text-danger"> <small> <?php
                                              if (isset($errors['UserName']))
                                                echo $errors['UserName']
                                              ?></small>
          </div>
 </div>
            <div class="form-group p-2">
  
              <input type="email" class="form-control" name="UserEmail" id="UserEmail" placeholder="Email" required>
          <div class=" text-danger"> <small>  <?php 
          if(isset($errors['Email']))
               echo $errors['Email']
          ?></small> </div>
            </div>

              <div class="form-group p-2">
                <select class="form-control " name="UserType" id="UserType" data-msg="Account Type">
                  <option selected value="Employee">Select Account Type</option>
                  <option value="Employee">Employee </option>
                
                </select>
              </div>

              <div class="form-group p-2">
                <input type="password" class="form-control" name="UserPassword" id="UserPassword" placeholder="Password" min='8' required>
                <div class=" text-danger"> <small> <?php
                                                    if (isset($errors['UserPassword']))
                                                      echo $errors['UserPassword']
                                                    ?></small> </div>
              </div>

              <div class="form-group p-2">
                <input type="password" class="form-control" name="ConfirmUserPassword" id="ConfirmUserPassword" placeholder="Confirm Password" min='8' required>
              </div>
              <div class="form-group p-2 mx-5 ">
                <input class="form-control text-center bg-dark text-light mb-2" style="width:100%;" type="submit" name="Add User" value="Signup">
              </div>
           
        </form>
      </div>
    </div>


  </div>
</section>
