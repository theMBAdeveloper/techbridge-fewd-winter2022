<!-- Main content -->
<section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title h3 text-center">Add New Books Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post">
                  <div class="card-body">

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
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="Location" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Date</label>
                              <input type="date" name="Date" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="Title" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                       
                      </div>
                    
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="Author" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Edition</label>
                              <input type="text" name="Edition" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Publisher</label>
                              <input type="text" name="Publisher" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                       
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Publish Year</label>
                            <input type="text"name="PublishYear" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Binding</label>
                              <input type="text" name="Binding" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Genre</label>
                              <input type="text" name="Genre" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                       
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Purchase Price</label>
                            <input type="text" name="PurchasePrice" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Listing Price</label>
                              <input type="text" name="ListingPrice" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Condition</label>
                              <input type="text" name="Cond" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio1" name="Status">
                              <label for="customRadio1" class="custom-control-label">Rare</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio1" name="Status">
                              <label for="customRadio1" class="custom-control-label">Sold</label>
                            </div>
                          </div>
                          
                       
                      </div>
       
                 
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <input type="submit" name="submitBookForm" value="Add" class="btn btn-primary form-control"></input>
                  </div>
                </form>
              </div>
              <!-- /.card -->



              </div>
            </div>
        </section>