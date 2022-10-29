<?php
/**
 * Template Name: Solution Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<link rel="stylesheet" href="style.css">
  <!-- hero -->
  <section class="hero py-100" style="background-color: #f15a46;">
        <div class="container">
            <div class="text-center">
                <h2 class="text-white fw-bold fs-50">Solution Page</h2>
            </div>
        </div>
    </section>
    <!-- hero -->

    <?php 
        $count_num = count($redux_demo['solution_section_title']);
        for ($x = 0; $x < $count_num; $x++) { 
    ?>
    <!-- mission -->
    <section class="mission py-5">
        <div class="container">
            <div class="row">
                    <div 
                    class="
                    col-md-6 p-3 m-auto
                    <?php if($redux_demo['solution_button_set'][$x] == 2){echo 'order-2';} ?>
                    "
                    >
                    <h2 class="fs-50 fw-bold source">
                        <?php echo $redux_demo['solution_section_title'][$x];?>
                    </h2>
                    <p>
                        <?php echo $redux_demo['solution_section_des'][$x];?>
                    </p>
                    <a href="<?php echo $redux_demo['solution_section_btnlink'][$x];?>" class="btn btn-orange text-white px-3 mt-4">
                        <?php echo $redux_demo['solution_section_btntext'][$x];?>
                    </a>
                </div>
                <div 
                    class="
                        col-md-6 p-3 m-auto 
                        <?php 
                            if($redux_demo['solution_button_set'][$x] == 1){echo 'text-end';} 
                            if($redux_demo['solution_button_set'][$x] == 2){echo 'order-1';} 
                        ?>
                    "
                >
                    <img src="<?php echo $redux_demo['solution_section_img'][$x]['url'];?>" class="img-fluid w-75" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- mission -->
    <?php } ?>


<?php
    get_footer();
?>