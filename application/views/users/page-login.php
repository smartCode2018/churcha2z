
<!-- login form section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Sign in</h2>
                    <h3 class="heading-title">ACCOUNT <span>LOGIN</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->        
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="xs-form-group form-style-2 wow fadeInUp">
                <?php echo validation_errors(); ?>
                
                <?php echo form_open_multipart('sign_in'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="media justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="tenInch">
                                <label class="custom-control-label" for="tenInch">Remember me</label>
                            </div><!-- .custom-control custom-checkbox END -->
                            <div class="forgot-password-wraper">
                                <a href="forgot-password.html">Forgot password?</a>
                            </div>
                        </div>
                        <div class="xs-btn-wraper">
                            <input type="submit" class="btn btn-primary" value="Sign in">
                        </div>
                        <p class="form-info">Not registered yet,  <a href="<?=site_url('/sign_up')?>">Register</a></p>
                    </form>
                </div>
            </div>        
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END login form section -->

