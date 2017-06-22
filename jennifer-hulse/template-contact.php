<?php 
/* Template Name: Contact */ 
get_header();
echo "<pre>",print_r($_POST),"</pre>";
if(have_posts()) : while(have_posts()) : the_post();
?>
	<!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_title(); ?></h2>
                        <!-- ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Shortcodes</a>
                            </li>
                            <li class="active">portfolio single gallery</li>
                        </ol -->
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

       <!--body content start-->
        <section class="body-content">
            <div class="page-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-uppercase"><?php echo get_field('contact_heading'); ?></h4>
<?php if(get_field('address') != '') { ?>
                            <p><?php echo get_field('address'); ?></p>
<?php } ?>
                            <address>
<?php if(get_field('phone') != '') { ?>
                                <p>Tel: <?php echo get_field('phone'); ?></p>
<?php } if(get_field('fax') != '') { ?>
                                <p>Fax: <?php echo get_field('fax'); ?></p>
<?php } if(get_field('email') != '') { ?>
								<p>Email: <a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a></p>
<?php } ?>
                            </address>
                        </div>

                        <div class="col-md-8">
                            <h4 class="text-uppercase"><?php echo get_field('contact_form_heading'); ?></h4>
                            <p><?php the_content(); ?></p>

                            <form class="contact-comments m-top-50 js-Mailer" method="post" action="<?php echo get_template_directory_uri().'/mailer/mailer.php'; ?>">

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
<?php 
endwhile;
endif;
get_footer(); ?>