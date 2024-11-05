
<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content custom-modal" id="loginmodal">
            <div class="modal-header">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" id="loginTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="logint" data-bs-toggle="tab"
                                data-bs-target="#logint-pane" type="button" role="tab" aria-controls="logint-pane"
                                aria-selected="true">Sign In
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signupt" data-bs-toggle="tab" data-bs-target="#signupt-pane"
                                type="button" role="tab" aria-controls="signupt-pane" aria-selected="false">Sign Up
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="loginTabContent">

                    <!-- Login Content -->
                    <div class="tab-pane fade show active" id="logint-pane" role="tabpanel" aria-labelledby="logint"
                         tabindex="0">
                        <div class="loginForm">

                            <div class="form-group">
                                <label>User or Email</label>
                                <input type="text" class="form-control" placeholder="Enter User or Email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <div class="forgetWrap">
                                <div class="modal-flex-first">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="savepassword"
                                               value="option1">
                                        <label class="form-check-label" for="savepassword">Save Password</label>
                                    </div>
                                </div>
                                <div class="modal-flex-last">
                                    <a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget
                                        Password?</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary submitButton">Sign In</button>
                            </div>

                            <div class="prixer">
                                <div class="devider-wraps position-relative">
                                    <div class="devider-text text-muted-2 text-md">Or signin with email</div>
                                </div>
                            </div>

                            <div class="socialAuth">
                                <ul>
                                    <li><a href="#" class="loginBtn facebook"><img src="assets/front/img/emp-8.png"
                                                                                   class="img-fluid" alt="Google">Continue
                                            with Google</a></li>
                                    <li><a href="#" class="loginBtn google"><img src="assets/front/img/linkedin.png"
                                                                                 class="img-fluid" alt="LinkedIn">Continue
                                            with LinkedIn</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- SignUp Content -->
                    <div class="tab-pane fade" id="signupt-pane" role="tabpanel" aria-labelledby="signupt"
                         tabindex="0">
                        <div class="loginForm">

                            <div class="optionFlex full">

                                <div class="flex-fill">
                                    <div class="form-checks">
                                        <input type="radio" class="btn-check" name="signas" id="candidate" checked>
                                        <label class="btn btn-light-primary" for="candidate"><i
                                                class="bi bi-person"></i>Candidate</label>
                                    </div>
                                </div>

                                <div class="flex-fill">
                                    <div class="form-checks">
                                        <input type="radio" class="btn-check" name="signas" id="employer">
                                        <label class="btn btn-light-primary" for="employer"><i
                                                class="bi bi-briefcase"></i>Employer</label>
                                    </div>
                                </div>

                            </div>

                            <div class="nameWrap">
                                <div class="row gx-4">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="Your First Name">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Your Last Name">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary submitButton">Create Account</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Search Modal -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content custom-modal" id="searchmodal">
            <div class="modal-header">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
            </div>
            <div class="modal-body p-4">

                <div class="searchForm">

                    <div class="optionFlex">

                        <div class="flex-fill">
                            <div class="form-checks">
                                <input type="radio" class="btn-check" name="chooseOption" id="fjob" checked>
                                <label class="btn btn-light-primary" for="fjob"><i class="bi bi-briefcase"></i>Find
                                    Jobs</label>
                            </div>
                        </div>

                        <div class="flex-fill">
                            <div class="form-checks">
                                <input type="radio" class="btn-check" name="chooseOption" id="ffreelancers">
                                <label class="btn btn-light-primary" for="ffreelancers"><i class="bi bi-person"></i>Find
                                    Talents</label>
                            </div>
                        </div>

                    </div>

                    <div class="formField icons mb-4">
                        <input type="text" class="form-control lights" placeholder="Job Title or Keyword..">
                        <i class="icon bi bi-search"></i>
                    </div>

                    <div class="formField icons right mb-4">
                        <input type="text" class="form-control lights" placeholder="City, Country or zip">
                        <i class="icon bi bi-crosshair"></i>
                    </div>

                    <div class="formField lights mb-4">
                        <select class="select form-control">
                            <option value="all">All Categories</option>
                            <option value="it">IT & Software</option>
                            <option value="hlt">Healthcare</option>
                            <option value="ban">Bankings</option>
                            <option value="dm">Digital Marketing</option>
                            <option value="in">Insurence</option>
                            <option value="gp">Graphic Design</option>
                            <option value="cv">Video Promotion</option>
                        </select>
                    </div>

                    <div class="formField icons right">
                        <button type="button" class="btn btn-dark">Submit & Search</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
