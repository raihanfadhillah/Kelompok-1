<div class="container pt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="pt-5 pl-1 pr-1 pb-2 text-white">
                                <div>
                                    <h1 class="h4 mb-4">About Us</h1>
                                </div>
                                <div>
                                    <p>Money Manager is a website for making your cashflow structured and will help you savings for the future</p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-md btn-color btn-block text-primary " onclick="window.location.href='<?= base_url('registration/regis'); ?>'">Dont have account? Registration!</button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div>
                                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <form class="user" method="post" action="<?= base_url('login/authlogin'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Name . . .">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password . . .">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                                </form>
                                <hr>
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