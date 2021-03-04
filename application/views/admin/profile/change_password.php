  <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Profile</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="<?php site_url();?>"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php site_url();?>">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><?=$page_title;?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
               

                <!-- Form wizard with icon tabs section start -->
				<section id="basic-horizontal-layouts">
                    <div class="row match-height">
                       <div class="col-md-10 col-12">
                            <div class="card" style="height: 392.688px;">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form with Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>First Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group ">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="fname-icon" class="form-control" name="fname-icon" placeholder="First Name">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="email" id="email-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-mail-send"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Mobile</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="number" id="contact-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-mobile"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="password" id="pass-icon" class="form-control" name="contact-icon" placeholder="Password">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-8 offset-md-4">
                                                        <fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                                <label for="checkbox2">Remember me</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end ">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <!-- Form wizard with icon tabs section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->