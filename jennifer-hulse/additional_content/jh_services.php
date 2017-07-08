
            <section class="body-content page-content">
                <div class="container">
                    <div class="row">

                        <!--feature box outline start-->

                        <div class="heading-title text-center">
                            <h3 class="text-uppercase"><?php echo $block['section_title']; ?></h3>
<?php if($block['section_intro']) { ?>
                            <span class="text-uppercase"><?php echo $block['section_intro']; ?></span>
<?php } ?>
                        </div>

<?php foreach($block['services'] as $service) { ?>
                        <div class="col-md-6">
                            <div class="featured-item feature-outline m-bot-100">
                                <div class="title text-uppercase">
                                    <h4><?php echo $service['services_title']; ?></h4>
                                </div>
                                <div class="desc">
                                    <?php echo $service['service_description']; ?>
                                </div>
                            </div>
                        </div>
<?php } ?>

                    </div>
                    <!--feature box outline end-->
                </div>
            </section>
