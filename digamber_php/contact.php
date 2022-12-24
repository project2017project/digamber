<?php include 'digamberheader.php'; ?>
<?php include 'popup.php';?>
<!-- ======== banner start ===== -->
<section class="investor-back" style="background-image: url('../images/<?php echo $contactsettings['bannerImage'];?>');"></section>
<!-- ========= banner end ======= -->
<!-- ===== get into touch section start ======= -->
<section class="contact-touch-wrapper mt-4 mb-5">
        <div class="container-fluid main-get-wrapper" id="get-customer">
            <div class="row tabs-career pt-4">
                <div class="col-12">
                    <div class="tabs-wrap pt-4" id="joinus-click-enquiry">
                        <ul class="nav nav-tabs d-none d-lg-flex tabs-design-wrap" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#get-in" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Get In Touch</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#customer-gra" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Customer Grievance</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-main-row mt-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active " id="get-in">
                        <div class="container">
                            <div class="row contact-inner-content-wrap pt-4">
                                <div class="col-lg-5">
                                    <div class="contact-info-wrap">
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Registered Office</h4>
                                                <p><?php echo $contactsettings['bannerHeading']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone-volume"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Call Us</h4>
                                                <p>Ph-<?php echo $contactsettings['bannerSubHeading']; ?></p>
                                                <p>Toll free No. <?php echo $contactsettings['aboutHeading']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Mail Us</h4>
                                                <p><?php echo $contactsettings['popupHeading']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Follow Us On</h4>
                                                <p>
													<a href="<?php echo $contactsettings['loanHeading']; ?>"><i class="fa-brands fa-facebook-f"></i></a>
													<a href="<?php echo $contactsettings['loanSubHeading']; ?>"><i class="fa-brands fa-twitter"></i></a>
													<a href="<?php echo $contactsettings['loanHeading1']; ?>"><i class="fa-brands fa-linkedin-in"></i></a>
													<a href="<?php echo $contactsettings['loanpopupHeading1']; ?>"><i class="fa-brands fa-instagram"></i></a>
												</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-form-wrap">
                                        <div class="contact-text-form">
											<div id="message"><?php 
											if (isset($_GET['status'])) {
												echo "Form successfully Submit";
											} 
											?></div>

                                            <p>A Digamber Finance, We remain committed to server our customers at all times. If you needinformation, want to share feedback or highlight a concern, here's how you can reach us.</p>
                                        </div>
                                        <div class="contact-details-form pt-5">
                                            <form action="contactAction.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
														<input type="hidden" class="form-control" placeholder="Full name" name="type" value="1">
                                                        <input type="text" class="form-control" placeholder="Full name" name="fullname">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="number" class="form-control" placeholder="Phone" name="phonenumber">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="Reason For Enquiry" name="reason">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" placeholder="Message" name="message" rows="5"></textarea>
                                                    </div>
                                                    <div class="detail-submit mt-2">
                                                        <div class="col-12 form-submit-btn-wrap">
															<input type="submit" class="btn" value="Get In Touch" name="git">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="digamber-map-wrap mt-5 mb-5">
                            <div class="iframe-map-wrap pt-3 pb-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.2554084542994!2d75.79420487512469!3d26.863625276676544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5d049c16637%3A0x9ce30820cebcf50!2sDigamber%20Capfin%20Limited!5e0!3m2!1sen!2sin!4v1670489764927!5m2!1sen!2sin"
                                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="customer-gra">
                        <div class="container">
                            <div class="row contact-inner-content-wrap pt-4">
                                <div class="col-lg-5">
                                    <div class="contact-info-wrap">
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-user-tie"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Customer Grievance Officer:</h4>
                                                <p><?php echo $contactsettings['loanHeading2']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone-volume"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Call Us</h4>
                                                <p>Ph-<?php echo $contactsettings['loanpopupHeading2']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-type-wrap mb-3">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-details">
                                                <h4>Mail Us</h4>
                                                <p><?php echo $contactsettings['stakeHeading']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-form-wrap">
                                        <div class="contact-text-form">
                                            <h4>Grievances Redressal</h4>
                                        </div>
                                        <div class="contact-details-form pt-2">
                                            <form action="contactAction.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
														<input type="hidden" class="form-control" placeholder="Full name" name="type" value="2">
                                                        <input type="text" class="form-control" placeholder="Full name" name="fullname">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="number" class="form-control" placeholder="Phone" name="phonenumber">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="Address" name="reason">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" placeholder="Message" rows="5" name="message"></textarea>
                                                    </div>
                                                    <div class="detail-submit mt-2">
                                                        <div class="col-12 form-submit-btn-wrap">
															<input type="submit" class="btn" value="Customer Grievance" name="cg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="digamber-complain-wrap mt-5 mb-5">
                            <div class="container pt-5 pb-5">
                                <div class="row pt-3 pb-5">
                                    <div class="col-lg-5 mb-4">
                                        <div class="english-com-text">
                                            <h4>Written Complain<br> Can send to the following:</h4>
                                            <br>
                                            <p> To,</p>
                                            <br>
                                            <?php echo $contactsettings['aboutMessage']; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mb-4">
                                        <div class="english-com-text">
                                            <h4>लिखित शिकायत <br>निम्नलिखित को भेजी जा सकती है:</h4>
                                            <br>
                                            <p>सेवा मे,</p>
                                            <br>
											<?php echo $contactsettings['popupMessage']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== get into touch section end ======= -->
<?php include 'digamberfooter.php'; ?>
