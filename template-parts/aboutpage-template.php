<?php
/**
 * Template Name: About Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

global $redux_demon;

?>
 
<!-- hero -->
<section class="hero py-100" style="background-color: #f15a46">
    <div class="container">
        <div class="text-center">
            <h2 class="text-white fw-bold fs-50">About Us</h2>
        </div>
    </div>
</section>
<!-- hero -->

<?php 
    $count_num = count($redux_demo['about_section_title']);
    for ($x = 0; $x < $count_num; $x++) { 
 ?>
<!-- mission -->
<section class="mission py-5">
    <div class="container">
    <div class="row">
        <div 
        class="
        col-md-6 p-3 m-auto
        <?php if($redux_demo['button-set-single'][$x] == 2){echo 'order-2';} ?>
        "
        >
        <h2 class="fs-50 fw-bold source"><?php echo $redux_demo['about_section_title'][$x];?></span></h2>
        <p>
        <?php echo $redux_demo['about_section_des'][$x];?>
        </p>
        </div>
        <div 
            class="
                col-md-6 p-3 m-auto 
                <?php 
                    if($redux_demo['button-set-single'][$x] == 1){echo 'text-end';} 
                    if($redux_demo['button-set-single'][$x] == 2){echo 'order-1';} 
                ?>
            "
        >
        <img src="<?php echo $redux_demo['about_section_img'][$x]['url'];?>" class="img-fluid w-75" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- mission -->
<?php } ?>


<!-- cards -->
<section class="cards py-5">
    <div class="container">
        <div class="row">
        <?php 
            $count_num = count($redux_demo['aboutpagecard_title']);
            for ($x = 0; $x < $count_num; $x++) { 
        ?>
            <div class="col-md-4 p-3">
                <div class="card shadow border-0 h-100">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-2 p-2">
                                <img src="<?php echo $redux_demo['aboutpagecard_icon'][$x]['url'];?>" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-10 p-2">
                                <p class="fs-24 fw-bold mb-1">
                                    <?php echo $redux_demo['aboutpagecard_title'][$x];?>
                                </p>
                                <p class="fs-12 muted">
                                    <?php echo $redux_demo['aboutpagecard_des'][$x];?>
                                </p>
                                <a href="<?php echo $redux_demo['aboutpagecard_btn_link'];?>" class="btn btn-orange text-white">
                                    <?php echo $redux_demo['aboutpagecard_btn_text'];?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<!-- cards -->
<?php
    get_footer();
?>