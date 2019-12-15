<!-- sign up form section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Sign up</h2>
                    <h3 class="heading-title">CREATE <span>ACCOUNT</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->  
        <form action="#" method="post" class="xs-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        <!-- <input type="text" class="form-control" name="company-name" placeholder="Company name"> -->
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <input type="text" class="form-control" name="address1" placeholder="Address 1">
                        <input type="text" class="form-control" name="city" placeholder="City">
                        <input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
                        <input type="number" class="form-control" name="phone-number" placeholder="Phone number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" name="email-address" class="form-control" placeholder="Email address">
                        <input type="password" name="confirm-password" class="form-control" placeholder="Confirm password">
                        <input type="text" name="address2" class="form-control" placeholder="Address 2">
                        <input type="text" name="site" class="form-control" placeholder="State/Region">
                        <select name="country" id="country" class="form-control">
                            <option selected>Country</option>
                            <option value="UK">UK</option>
                            <option value="USA">USA</option>
                            <option value="Jermany">Jermany</option>
                        </select>
                        <input type="text" name="last-name" class="form-control" placeholder="Username">
                    </div>
                </div>
            </div><!-- .row END -->
            <div class="xs-btn-wraper">
                <input type="submit" class="btn btn-primary" value="Sign up">
            </div>
            <p class="form-info">Already have account,<a href="<?=site_url('login')?>">sign in now</a></p>
        </form>
    </div><!-- .container END -->
</section><!-- END sign up form section -->
