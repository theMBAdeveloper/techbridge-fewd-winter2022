  <section class="cont" >
      <div class="container" data-aos="fade-up">

        

          <div class="container mt-5 ">
              <div class="row mt-5">
                  <div class="col-md-4 offset-md-4 form">
                      <form action="index.php?PageName=Forgot" class="text-light php-form" method="POST" autocomplete="">
                          <h2 class="text-center">Forgot Password</h2>

                          <?php
                            if (count($errors) > 0) {
                            ?>
                              <div class="alert alert-danger text-center">
                                  <?php
                                    foreach ($errors as $error) {
                                        echo $error;
                                    }
                                    ?>
                              </div>
                          <?php
                            }
                            ?>
                          <div class="form-group p-2">
                              <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                          </div>
                          <div class="form-group p-2 mb-5 pb-5">
                              <input class="form-control button  bg-dark text-light" type="submit" name="#" value="Continue">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>