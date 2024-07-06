<?php include 'header.php' ?>



<style>
    .error {
        color: red;
        font-size: 12px !important;
        margin-top: 10px;
    }
</style>
<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li>Contact</li>
            </ul>
            <h3>Contact Us</h3>
        </div>
    </div>
</div>


<div class="gallery-area ptb-70">
    <div class="container">

        <div class="text-center section-title mb-2" data-aos="fade-right" data-aos-duration="4000">
            <span>Contact Person</span>
            <h3>Mr. Vivek Kumar</h3>
        </div>

        <div class="row mb-4" data-aos="fade-right">
            <div class="col-lg-4 col-sm-12 mb-2">
                <div class="contact-item choose-card" data-aos="fade-right" data-aos-duration="4000">
                    <ul>
                        <li>
                            <i class="bx bx-home-alt"></i>
                            <div class="content">
                                <span>Shivalik Nagar, BHEL, Ranipur, Haridwar, Uttrakhand,249403 </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-2">
                <div class="contact-item choose-card" data-aos="fade-right" data-aos-duration="4000">
                    <ul>
                        <li>
                            <i class="bx bx-phone-call"></i>
                            <div class="content">
                                <span>+91 7310867890</span>
                                <span>+91 9718013001</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-2">
                <div class="contact-item choose-card" data-aos="fade-right" data-aos-duration="3000">
                    <ul>
                        <li>
                            <i class="bx bx-envelope"></i>
                            <div class="content">
                                <span><a href="mailto:theheightshwr@gmail.com">theheightshwr@gmail.com</a></span>
                                <span>&nbsp;</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="about-area pb-70 pt-45" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <h2>Give Us a Message and Contact With Us</h2>
                        </div>
                        <div class="contact-img">
                            <img src="images/contact-img1.jpg" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <!-- <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group checkbox-option">
                                        <input type="checkbox" id="chb2">
                                        <p>
                                            Accept <a href="terms-condition.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three disabled" style="pointer-events: all; cursor: pointer;">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form> -->

                        <form id="contactForm" novalidate="true">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group checkbox-option">
                                        <input type="checkbox" id="chb2">
                                        <p>
                                            Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Custom email regex
        $.validator.addMethod("customEmail", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(value);
        }, "Please enter a valid email address.");

        // Validate form
        $("#contactForm").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    customEmail: true
                },
                phone_number: {
                    required: true
                },
                msg_subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please enter your name"
                },
                email: {
                    required: "Please enter your email",
                    customEmail: "Please enter a valid email address"
                },
                phone_number: {
                    required: "Please enter your phone number"
                },
                msg_subject: {
                    required: "Please enter your subject"
                },
                message: {
                    required: "Please enter your message"
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo(element.next('.help-block'));
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // Blur and focus events for form fields
        $('input, textarea').on('blur', function() {
            $(this).valid();
        }).on('focus', function() {
            $(this).closest('.form-group').removeClass('has-error');
        });
    });
</script>

<?php include 'footer.php' ?>