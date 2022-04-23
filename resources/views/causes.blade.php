@extends('base')
    @section('content')
        <!-- Start Nav Backed Header -->
        <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Causes Grid</li>
                </ol>
                </div>
            </div>
            </div>
        </div>
        <!-- End Nav Backed Header --> 
        <!-- Start Page Header -->
        <div class="page-header">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>Causes Grid</h1>
                </div>
            </div>
            </div>
        </div>
        <!-- End Page Header --> 
        <!-- Start Content -->
        <div class="main" role="main">
            <div id="content" class="content full">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <ul class="grid-holder col-3 causes-grid">
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img5.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Refugee's Restoration Hope</a></h3>
                            <div class="progress-label">
                                90% Donated of <span>$2000000</span>
                                <label class="cause-days-togo label label-default pull-right">45 days to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-success" data-appear-progress-animation="90%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img1.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Green Revolution</a></h3>
                            <div class="progress-label">
                                60% Donated of <span>$20000</span>
                                <label class="cause-days-togo label label-default pull-right">2 months to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-warning" data-appear-progress-animation="60%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img2.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Education for Masai children</a></h3>
                            <div class="progress-label">
                                80% Donated of <span>$200000</span>
                                <label class="cause-days-togo label label-default pull-right">15 days to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img3.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Stop Child Labour</a></h3>
                            <div class="progress-label">
                                30% Donated of <span>$110000</span>
                                <label class="cause-days-togo label label-default pull-right">3 months to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-danger" data-appear-progress-animation="30%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img4.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Africa's thirst</a></h3>
                            <div class="progress-label">
                                55% Donated of <span>$6200000</span>
                                <label class="cause-days-togo label label-default pull-right">27 days to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-warning" data-appear-progress-animation="55%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="grid-item cause-item format-standard">
                        <div class="grid-item-inner">
                        <a href="single-cause.html" class="media-box"> <img src="images/cause-img6.jpg" alt=""> </a>
                        <div class="grid-content">
                            <h3><a href="single-cause.html">Food to Africa</a></h3>
                            <div class="progress-label">
                                65% Donated of <span>$100000</span>
                                <label class="cause-days-togo label label-default pull-right">25 days to go</label>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-warning" data-appear-progress-animation="65%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus...</p>
                            <a href="#" class="btn btn-default donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                        </div>
                        </div>
                    </li>
                    </ul>
                    <!-- Payment Modal Window -->
                    <div class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Donate to: <span class="accent-color payment-to-cause"></span></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>How much would you like to donate?</label>
                                        <div class="input-group margin-20">
                                            <span class="input-group-addon">$</span>
                                            <select name="donation amount" class="form-control">
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="Custom">100+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 custom-donate-amount">
                                        <label>Enter custom donation amount</label>
                                        <div class="input-group margin-20">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" name="Custom Donation Amount" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="phone" name="phone" class="form-control" placeholder="Your phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea rows="3" cols="5" class="form-control" placeholder="Additional Notes"></textarea>
                                    </div>
                                </div>
                                <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Donate Now">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p class="small short">If you would prefer to call in your donation, please call 1800.785.876</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Pagination -->
                    <ul class="pager pull-right">
                    <li><a href="#">&larr; Older</a></li>
                    <li><a href="#">Newer &rarr;</a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endsection