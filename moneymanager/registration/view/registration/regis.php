<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="p-5 ">
                                <div>
                                    <h1 class="h4 mb-4">About Us</h1>
                                </div>
                                <div>
                                    <p>Money Manager is a website for making your cashflow structured and will help you savings for the future</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div>
                                    <h1 class="h4 text-gray-900 mb-4">Create Account!</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('registration/regis'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name . . .">
                                        <?= form_error('Name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username . . .">
                                        <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address...">
                                        <?= form_error('Email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>

</html>