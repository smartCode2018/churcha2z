<!-- pricing section -->
<section class="pricing-section xs-section-padding xs-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Pricing Plans</h2>
                    <h3 class="heading-title">SELECT <span>BEST PLAN</span></h3>
                </div><!-- .xs-heading END -->
            </div> 
        </div><!-- .row END -->
        <div class="pricing-matrix pricing-expand wow fadeIn">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <div class="pricing-matrix-item">
                        <div class="d-lg-block d-md-none d-none">
                            <div class="pricing-image">
                                <img src="assets/images/pricing/pricing-feature.svg" alt="pricing image">
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Attendance Management</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Converts</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Home Church </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Classes</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Members</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Imported SSL</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">24/7 phone support </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Consultative onboarding </span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Dev, Stage, Prod </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Transferable Sites  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Multisite ready </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">PHP 7 ready </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">LargeFS </span>    
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Global CDN  </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Page Performance  </span>     
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">SSL certificates  </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">GeoTarget  </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Content Performance </span>    
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Imported SSL  </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Readiness assessment  </span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Success management  </span>    
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Application Performance</span>    
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">High availability  </span>
                            </div>
                        </div>
                    </div><!-- .pricing-matrix-item END -->
                </div>
                <div class="col-lg-9">
                    <div class="pricing-matrix-slider owl-carousel">
                        <?php foreach ($package as $key) : ?>
                        <div class="pricing-matrix-item">
                            <div class="pricing-feature-group">
                                <h4 class="xs-title"><?= $key['p_name'] ?></h4>
                                <div class="pricing-body">
                                    <p>The High performance cloud platform ever</p>
                                    <div class="pricing-price">
                                        <h2><sup>‎₦</sup><?= $key['p_price'] ?></h2>
                                    </div>
                                    <!--SUBSCRIBE TO AND REGISTER-->
                                    <a href="<?=site_url('checkout')?>/<?php echo urlencode(base64_encode($key['p_name']))?>" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <?php if($key['p_name'] == 'Regular'){ ?>
                                <div class="pricing-feature-item">
                                    <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                    <div class="pricing-feature">Up to 25000 </div>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                    <span class="pricing-feature">1</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                    <span class="pricing-feature">Shared</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                    <span class="pricing-feature">50 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                    <span class="pricing-feature">256 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                    <span class="pricing-feature">Add On</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                    <span class="pricing-feature"></span>
                                </div>
                            <?php }
                                elseif ($key['p_name'] == 'Standard') {?>
                                <div class="pricing-feature-item">
                                    <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                    <div class="pricing-feature">Up to 25000 </div>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                    <span class="pricing-feature">1</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                    <span class="pricing-feature">Shared</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                    <span class="pricing-feature">50 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                    <span class="pricing-feature">256 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                    <span class="pricing-feature">Add On</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                    <span class="pricing-feature"></span>
                                </div>
                            <?php }elseif($key['p_name']){?>
                                <div class="pricing-feature-item">
                                    <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                    <div class="pricing-feature">Up to 25000 </div>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                    <span class="pricing-feature">1</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                    <span class="pricing-feature">Shared</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                    <span class="pricing-feature">50 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                    <span class="pricing-feature">256 GB</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                    <span class="pricing-feature">Add On</span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                    <span class="pricing-feature"></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="gap"></div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                    <span class="pricing-feature"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="pricing-feature-item">
                                    <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                    <span class="pricing-feature"></span>
                                </div>
                            <?php } ?>
                        </div><!-- .pricing-matrix-item END -->
                        <?php endforeach; ?>
                        
                </div>
            </div>
        </div><!-- .pricing-matrix pricing-expand END -->
    </div><!-- .container END -->
</section><!-- END pricing section -->