<?php 
/* Template Name: Contact */ 
get_header();
?>
       <!--body content start-->
        <section class="body-content">
            <div class="page-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-uppercase">Office Location</h4>
                            <p>Upper Level, Overseas Passenger Terminal, The Rocks, Sydney 2000</p>
                            <address>
                                <p>Telp: +62 500 800 123 </p>
                                <p>Fax: +62 500 800 112 </p>
                                <p>Email: testmail@yourdomain.com</p>
                            </address>
                        </div>

                        <div class="col-md-8">
                            <h4 class="text-uppercase">have you a question?</h4>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>

                            <form class="contact-comments m-top-50 js-Mailer" method="post">

                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label for="form-field-name">Name *</label>
                                        <!-- Name -->
                                        <input type="text" name="name" id="form-field-name" class="form-control" maxlength="100" required data-error="You must enter name">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="form-field-email">Email *</label>
                                        <!-- Email -->
                                        <input type="email" name="email" id="form-field-email" class="form-control" maxlength="100" required data-error="Invalid email address!">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="form-field-phone">Phone</label>
                                        <!-- Phone -->
                                        <input type="text" name="phone" id="form-field-phone" class="form-control" maxlength="100">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="form-field-subject">Subject</label>
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="form-field-subject" class="form-control" maxlength="100">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="form-field-comments">Comments</label>
                                        <!-- Comment -->
                                        <textarea name="comments" id="form-field-comments" class="cmnt-text form-control" rows="6" maxlength="400"></textarea>
                                    </div>

                                    <!-- Send Button -->
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-small btn-dark-solid ">Send Message</button>
                                    </div>

                                </div>
                                <input type="hidden" name="id" value="FORM_ALT">

                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </section>
        <!--body content end-->
<?php get_footer(); ?>