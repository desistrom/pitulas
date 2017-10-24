<div id="login-page">

<!-- Loading Process -->
<div id="loadingDiv"  style="display:none">
    <div><h7>Please wait...</h7></div>
</div>

<section class="section bgw">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="big-title">
                            <h2 class="related-title">
                                <span>LOGIN FORM</span>
                            </h2>
                        </div><!-- end big-title -->
                        <div class="loginform">
                            <form class="row" id="login-form" action="<?=current_url();?>" method="post">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" style="display:none">
                                        <a href="#" class="close" onclick="$('#login-page .alert.alert-danger').hide()">&times;</a>
                                        <span id="ntf_username"></span>
                                        <span id="ntf_password"></span>
                                        <span id="ntf_not_match"></span> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <input type="hidden" id="flag" name="flag" value="1">
                                <input type="text" id="username_txt" name="username_txt" class="form-control" placeholder="Username">
                                <input type="password" id="password_txt" name="password_txt"  class="form-control" placeholder="Password"> 
                                <button type="submit" value="SEND" class="btn btn-primary btn-block btn-lg"> Login Account</button>
                                </div>
                            </form> 
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-12">
                        <div class="big-title">
                            <h2 class="related-title">
                                <span>REGISTER FORM</span>
                            </h2>
                        </div><!-- end big-title -->
                        <div class="loginform">
                            <form class="row" id="register-form" action="<?=current_url();?>" method="post">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" style="display:none">
                                        <a href="#" class="close" onclick="$('#login-page .alert.alert-danger').hide()">&times;</a>
                                        <span id="ntf_email"></span>
                                        <span id="ntf_username"></span>
                                        <span id="ntf_register"></span>
                                        <span id="ntf_password"></span>
                                        <span id="ntf_retype_password"></span>
                                        <span id="ntf_not_match"></span> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <input type="hidden" id="flag" name="flag" value="0">
                                <input type="email" id="email_txt" name="email_txt" class="form-control" placeholder="Email"> 
                                <select name="register_txt" class="form-control">
                                <option value="">-- Register as --</option>
                                <option value="1">Trainer</option>
                                <option value="2">Employ</option>
                                <option value="3">Employer</option>                                
                                </select>
                                <input type="text" id="username_txt" name="username_txt"  class="form-control" placeholder="Username"> 
                                <input type="password" id="password_txt" name="password_txt"  class="form-control" placeholder="Password"> 
                                <input type="password" id="retype_password_txt" name="retype_password_txt"  class="form-control" placeholder="Re-Enter Password"> 
                                <button type="submit" value="SEND" class="btn btn-primary btn-block btn-lg"> Create Account</button>
                                </div>
                            </form> 
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
</div>