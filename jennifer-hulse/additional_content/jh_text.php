<?php
	$colspan = 12 / sizeof($block['copy_columns']);
?>
            <section class="body-content">
                <div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3><?php echo $block['section_title']; ?></h3>
                        </div>

<?php foreach($block['copy_columns'] as $copy) { ?>
                        <div class="col-md-<?php echo $colspan; ?>">
                            <div class="">
<?php echo $copy['copy']; ?>
                            </div>
                        </div>
<?php } ?>
                    </div>

                </div>
<?php if(is_array($block['bottom_image'])) { ?>
                <div class="text-center responsive-img p-top-50">
                    <img src="<?php echo $block['bottom_image']['sizes']['Blog Listing']; ?>" alt="" />
                </div>
<?php } ?>
            </section>