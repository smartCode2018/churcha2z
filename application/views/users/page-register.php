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
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                        <!-- <input type="text" class="form-control" name="company-name" placeholder="Company name"> -->
                        
                        <input type="text" class="form-control" name="address" placeholder="Address">
                        <input type="text" class="form-control" name="city" placeholder="City">
                        <input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
                        <input type="number" class="form-control" name="phone-number" placeholder="Phone number" required>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                        
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="text" name="site" class="form-control" placeholder="State/Region">
                        <select name="country" id="country" class="form-control">
                            <option value="Nigeria" selected>Nigeria</option>
                            <option value="UK">UK</option>
                            <option value="USA">USA</option>
                            <option value="Jermany">Germany</option>
                        </select>
                        <input type="text" name="church" class="form-control" placeholder="Church Name">
                        <input type="password" name="confirm-password" class="form-control" placeholder="Confirm password" required>
                        
                    </div>
                </div>
            </div><!-- .row END -->
            <div class="xs-btn-wraper">
                <input type="submit" class="btn btn-primary" value="Sign up">
            </div>
            <p class="form-info">Already have account,<a href="<?=site_url('sign_in')?>">sign in now</a></p>
        </form>
    </div><!-- .container END -->
</section><!-- END sign up form section -->
