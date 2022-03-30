
<section class="cont">
    <div class="container " data-aos="fade-up">

        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form text-light">
                <form  method="POST">
                    <h2 class="text-center">Manager Login </h2>
                    <p class="text-center">Login with your email and password.</p>
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
                    <div class="form-group p-2">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group p-2">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="mt-1 link forget-pass text-left"><a href="index.php?PageName=Forgot" class="text-secondary">Forgot password?</a></div>
                    <div class="form-group p-2 ">
                        <input class="form-control  bg-dark text-light text-center mb-2" style="width:100%;" type="submit" name="ManagerLogin" value="Login">
                    </div>
                    <div class="link login-link text-center ">Not yet a member? <a href="index.php?PageName=Register" class="text-secondary">Signup now</a></div>
                </form>
            </div>
        </div>


    </div>
</section>
