<?php include 'header.php' ?>

<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li>Reservation</li>
            </ul>
            <h3>Reservation</h3>
        </div>
    </div>
</div>

<div class="about-area pb-70 mt-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
    <div class="container">
        <form action="backend/reservation_enquiry.php" method="POST">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                        <h3 class="title"> Reservation Information Details</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Country <span class="required">*</span></label>
                                    <div class="select-box">
                                        <select class="form-control" name="country" style="display: none;">
                                            <option value="1">India</option>
                                            <option value="2">Out of India</option>
                                        </select>
                                        <div class="nice-select form-control" tabindex="0">
                                            <span class="current">India</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">India</li>
                                                <li data-value="2" class="option">Out of India</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="arrival-date">Arrival Date <span class="required">*</span></label>
                                    <input type="date" name="arrival-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="departure-date">Departure Date<span class="required">*</span></label>
                                    <input type="date" name="departure-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="adults">Adults</label>
                                    <input type="text" name="adults" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="total-persons">Total Number Of Persons</label>
                                    <input type="text" name="total-persons" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="number-of-room">Number of Room</label>
                                    <input type="text" name="number-of-room" class="form-control">
                                </div>
                            </div>

                            <h3 class="title mt-4 mb-4"> Personal Information Details</h3>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">First Name <span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="last-name">Last Name <span class="required">*</span></label>
                                    <input type="text" name="last-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="phone">Mobile Number <span class="required">*</span></label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="your-city">City <span class="required">*</span></label>
                                    <input type="text" name="your-city" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="address">Current Address <span class="required">*</span></label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-4 col-md-4">
                                <button type="submit" name="submit" class="default-btn btn-bg-one border-radius-5">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




<?php include 'footer.php' ?>