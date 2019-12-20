<!-- checkout section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="woocommerce cart-checkout-wraper">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout-form-group">

                    <!--SHOW LOGIN FORM IF USER IS NOT LOGGED IN -->
                        <!-- <form action="#" method="post" class="xs-form sign_in_form">
                            <h4 class="xs-title small">Login into your account</h4>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="username" placeholder="User name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password" placeholder="Pasword">
                                    </div>
                                </div>
                            </div>
                            <div class="media justify-content-between">
                                <a href="signup.html" class="simple-btn">Create an account</a>
                                <a href="#" class="btn btn-primary">Sign in</a>
                            </div>
                        </form> -->
                        <!-- END OF LOGIN FORM -->

                        <form action="#" method="POST" class="xs-form billing-form">
                            <h4 class="xs-title small">Billing details</h4>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text"  value="<?= $this->session->userdata('firstname') ?>" disabled class="form-control text-uppercase">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  value="<?= $this->session->userdata('lastname') ?>" disabled class="form-control text-uppercase">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-center" value="<?= $this->session->userdata('email') ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-center" value="<?= $this->session->userdata('phone') ?>" disabled>
                            </div>
                            <!-- <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="apt" placeholder="Apt, suite etc." class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="city" placeholder="City / State" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="country" id="country" class="form-control">
                                            <option selected>Country</option>
                                            <option value="UK">UK</option>
                                            <option value="USA">USA</option>
                                            <option value="Jermany">Jermany</option>
                                        </select>                    
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="zipcode" placeholder="Zip code" class="form-control">
                                    </div>
                                </div>
                            </div> -->

                            <div class="bg-secondary p-3 text-white" style="border-radius: 5px;">
                                <p>Please review your belling details and order summary
                                    before proceeding to checkout. OR <a class="text-warning" href="<?php echo site_url('/dashboard/profile'); ?>">edit profile</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkout_info">
                        <div class="table-responsive cart_table_wraper">
                            <h4 class="xs-title small">Order Summary</h4>
                            <table class="cart_table table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th><strong>Subscription Type</strong></th>
                                        <td>
                                            <strong>Plan</strong>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th><?= $package->p_name ?></th>
                                        <td>
                                            <span class="product-price">1 Year</span>
                                        </td>
                                    </tr>
                                    <tbody>
                                        <tr class="gap">
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal:</th>
                                        <td>
                                            <span class="product-price">‎₦ <?= $package->p_price ?></span>
                                        </td>
                                    </tr>
                                    <tr class="cart-fee">
                                        <th>Setup Fee:</th>
                                        <td>
                                            <span class="product-price">₦ 0.00</span>    
                                        </td>
                                    </tr>
                                    <tr class="cart-fee">
                                        <th>Discount:</th>
                                        <td>
                                            <span class="product-price highlight">-₦ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th><strong>Total:</strong></th>
                                        <td>
                                            <span class="product-price"><strong>‎₦ <?= $package->p_price ?></strong></span>
                                        </td>
                                    </tr>
                                       
                                </tbody>
                            </table>
                        </div>
                        <div class="wc-proceed-to-checkout">
                            <div class="xs-btn-wraper">
                                <input type="submit" class="btn btn-primary" name="update_cart" value="Preceed to Checkout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section>

