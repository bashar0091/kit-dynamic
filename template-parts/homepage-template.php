<?php
/**
 * Template Name: Home Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

global $redux_demo;
?>

<!-- BANNER -->
<section class="" style="min-height: 90vh">
    <div class="text-center">
    <h1 class="header-title-xl header-title-md header-title-xm fw-bold title source main-title">
        <?php echo wp_kses($redux_demo['heading1'],true);?>
    </h1>
    <p class="subtitle-xl subtitle-md subtitle-sm source muted">
        <?php echo wp_kses($redux_demo['heading2'],true);?>
    </p>

    <a href="<?php echo wp_kses($redux_demo['button_link1'],true);?>" class="btn roboto btn-dark rounded-0 px-4 mt-60 mb-50 lets">
        <?php echo wp_kses($redux_demo['button_text1'],true);?>
    </a>

    <a href="<?php echo wp_kses($redux_demo['button_link2'],true);?>" class="d-block fs-28 roboto study">
        <?php echo wp_kses($redux_demo['button_text2'],true);?> <img src="<?php echo wp_kses($redux_demo['button_link2_icon']['url'],true);?>" class="img-fluid" alt="icon" />
    </a>
    </div>
</section>
<!-- BANNER -->

<!-- counter -->
<section class="counter pb-3 pb-md-5">
    <div class="container">
    <div class="row">
        <?php 
        $count_num = count($redux_demo['count_title']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <div class="col-md-3 p-3">
        <div class="text-center">
            <h2 class="counter-text"><span class="count-num"><?php echo $redux_demo['count_num'][$x];?></span>+</h2>
            <p class="fs-18"><?php echo $redux_demo['count_title'][$x]; ?></p>
        </div>
        </div>
        <?php } ?>
    </div>
    </div>
</section>
<!-- counter -->

<!-- success story -->
<section class="success py-3 py-md-5">
    <div class="container">
    <div class="text-center">
        <h2 class="header-title-xl header-title-md header-title-sm fw-bold inter"><?php echo wp_kses($redux_demo['success_title'], true);?></h2>
        <p class="muted fs-20"><?php echo wp_kses($redux_demo['success_subtitle'], true);?></p>
        <div
        class="d-flex align-items-center justify-content-between align-items-center flex-wrap success-slide"
        >
            <?php 
            $count_num = count($redux_demo['brand_logo']);
            for ($x = 0; $x < $count_num; $x++) { 
            ?>
                <img src="<?php echo $redux_demo['brand_logo'][$x]['url'];?>" class="img-fluid m-2" alt="" />
            <?php } ?>
            
        </div>
        <div class="mt-4">
        <a href="<?php echo wp_kses($redux_demo['success_btn_link'], true);?>" class="btn btn-orange rounded-0 text-white py-2 px-4">
            <?php echo wp_kses($redux_demo['success_btn_text'], true);?>
        </a>
        </div>
    </div>
    </div>
</section>
<!-- success story -->

<!-- services -->
<section class="services py-3 py-md-5 bg-orange">
    <div class="container">
        <div class="row">
            <div class="col-md-4 px-4 py-2 py-md-4">
            <h2 class="text-white fw-bold header-title-xl header-title-md header-title-sm"><?php echo wp_kses($redux_demo['service_title'], true);?></h2>
            <p class="fw-bold text-white"><?php echo wp_kses($redux_demo['service_subtitle'], true);?></p>
            </div>

            <?php 
            $count_num = count($redux_demo['service_card_title']);
            for ($x = 0; $x < $count_num; $x++) { 
            ?>
            <div class="col-lg-4 col-md-6 px-4 py-2 py-md-4">
            <h2 class="fw-semibold fs-34 fw-semibold text-white pt-3 mb-2 mb-md-5"><?php echo $redux_demo['service_card_title'][$x];?></h2>
            <p class="text-white">
                <?php echo $redux_demo['service_card_des'][$x];?>
            </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- services -->

<!-- help -->
<section class="help py-3 py-md-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6 p-4 border-end">
        <h2 class="fw-bold fs-40 dark1">See how we can help you reach your goals</h2>
        <p class="fs-20 muted">
            Answer three questions to help us match our expertise and software solutions to your sector.
        </p>
        <a href="" class="fs-24 text-orange text-decoration-none fw-bold mt-50 d-inline-block">
            Question 1 of 3
        </a>
        </div>
        <div class="col-md-6 p-4 ps-5">
        <h3 class="fs-30 fw-bold dark1">Pick your industry:</h3>

        <div class="btns mt-4 d-flex flex-wrap">
            <button class="btn btn-inactive px-4 rounded-pill m-2">Logistics</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Fintech</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Retall</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Insurance</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Automotive</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Healthcare</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Agriculture</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Media & Entertainment</button>
            <button class="btn btn-inactive px-4 rounded-pill m-2">Goverment</button>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- help -->

<!-- be with lskit -->
<section class="beWith py-3 py-md-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto p-4">
        <p class="text-orange"><?php echo wp_kses($redux_demo['design_top_title'], true);?></p>
        <h2 class="fs-45 fw-bold dark1"><?php echo wp_kses($redux_demo['design_title'], true);?></h2>
        <p class="muted">
            <?php echo wp_kses($redux_demo['design_subtitle'], true);?>
        </p>
        
        <?php 
        $count_num = count($redux_demo['design_list_text']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <p class="d-flex mt-4 align-items-center fw-semibold">
            <i class="fa fa-check-circle text-orange me-2"></i> <?php echo $redux_demo['design_list_text'][$x];?>
        </p>
        <?php } ?>

        <a href="<?php echo wp_kses($redux_demo['design_btnlink'], true);?>" class="btn btn-orange mt-4 text-white">
            <?php echo wp_kses($redux_demo['design_btntext'], true);?>
        </a>
        </div>
        <div class="col-md-6 p-4">
        <img src="<?php echo wp_kses($redux_demo['design_image']['url'], true);?>" class="img-fluid" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- be with lskit -->

<!-- cards -->
<section class="cards py-3 py-md-5">
    <div class="container">
    <div class="row">
        <?php 
        $count_num = count($redux_demo['card1_title']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <div class="col-md-4 p-3">
        <div class="card shadow border-0 h-100">
            <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-4 p-2">
                <img src="<?php echo wp_kses($redux_demo['card1_icon'][$x]['url'], true);?>" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-8 p-2">
                <p class="fs-22 mb-1">
                    <?php echo $redux_demo['card1_title'][$x];?>
                </p>
                <p class="fs-12 muted"><?php echo $redux_demo['card1_des'][$x];?></p>
                <a href="<?php echo wp_kses($redux_demo['card1_btn_link'], true);?>" class="btn btn-orange fs-12 text-white"><?php echo wp_kses($redux_demo['card1_btn_text'], true);?></a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <?php }?>
    </div>
    </div>
</section>
<!-- cards -->

<!-- working process -->
<section class="working py-3 py-md-5">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 p-3 m-auto">
        <h2 class="fs-45 fw-bold dark1">
            <?php echo wp_kses($redux_demo['working_process_title'], true);?>
        </h2>
        <p class="muted">
            <?php echo wp_kses($redux_demo['working_process_subtitle'], true);?>
        </p>

        <?php 
        $count_num = count($redux_demo['working_process_text']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <p class="d-flex mt-4 align-items-center fw-semibold">
            <i class="fa fa-check-circle text-orange me-2"></i> <?php echo wp_kses($redux_demo['working_process_text'][$x], true);?>
        </p>
        <?php }?>

        <form action="" class="mt-4">
            <div class="input-group">
            <input
                type="text"
                class="form-control me-3 rounded"
                placeholder="Enter you email"
                name=""
                id=""
            />
            <button class="btn btn-orange px-4 text-white rounded">Send Me a Proposal</button>
            </div>
        </form>
        </div>

        <div class="col-lg-6 text-end">
        <img src="<?php echo wp_kses($redux_demo['working_process_img']['url'], true);?>" class="img-fluid w-75" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- working process -->

<!-- cards -->
<section class="cards py-3 py-md-5">
    <div class="container">
    <div class="row">
        <?php 
        $count_num = count($redux_demo['card2_title']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <div class="col-md-4 p-3">
        <div class="card shadow border-0 h-100">
            <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-2 p-2">
                <img src="<?php echo wp_kses($redux_demo['card2_icon'][$x]['url'], true);?>" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-10 p-2">
                <p class="fs-24 fw-bold mb-1"><?php echo wp_kses($redux_demo['card2_title'][$x], true);?></p>
                <p class="fs-12 muted">
                    <?php echo wp_kses($redux_demo['card2_des'][$x], true);?>
                </p>
                <a href="<?php echo wp_kses($redux_demo['card2_btn_link'], true);?>" class="btn btn-orange text-white">
                <?php echo wp_kses($redux_demo['card2_btn_text'], true);?>
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

<!-- figures -->
<section class="figures py-3 py-md-5">
    <div class="container">
    <div class="text-center">
        <h2 class="fs-50 dark1 fw-bold"><?php echo wp_kses($redux_demo['figure_title'], true);?></h2>
        <p class="muted"><?php echo wp_kses($redux_demo['figure_subtitle'], true);?></p>
    </div>
    <div class="row">
        <?php 
        $count_num = count($redux_demo['figure_cardtitle']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <div class="col-md-6 p-3">
        <div class="card shadow border-0">
            <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-2 p-2">
                <img src="<?php echo wp_kses($redux_demo['figure_icon'][$x]['url'], true);?>" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-10 p-2">
                <p class="fs-24 fw-bold mb-1"><?php echo wp_kses($redux_demo['figure_per'][$x], true);?>%</p>
                <p class="fs-18 fw-bold"><?php echo wp_kses($redux_demo['figure_cardtitle'][$x], true);?></p>
                <p class="fs-12 muted">
                    <?php echo wp_kses($redux_demo['figure_des'][$x], true);?>
                </p>
                <a href="<?php echo wp_kses($redux_demo['figure_btn_link'], true);?>" class="btn btn-orange text-white">
                    <?php echo wp_kses($redux_demo['figure_btn_text'], true);?>
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
<!-- figures -->

<!-- ready to grow -->
<section class="ready-to-grow py-3 py-md-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6 p-3">
        <h2 class="fs-50 fw-bold">
            <?php echo wp_kses($redux_demo['ready_grow_title'], true);?>
        </h2>
        <p class="muted">
            <?php echo wp_kses($redux_demo['ready_grow_des'], true);?>
        </p>
        <form action="">
            <input
            type="text"
            class="form-control bg-transparent"
            placeholder="Enter you email"
            name=""
            id=""
            />
            <input
            type="submit"
            class="btn btn-orange w-100 mt-3 text-white"
            value="Send Me a Proposal"
            name=""
            id=""
            />
        </form>
        </div>
        <div class="col-md-6 p-4 text-end">
        <img src="<?php echo wp_kses($redux_demo['ready_grow_img']['url'],true);?>" class="img-fluid" alt="" />
        </div>
    </div>
    </div>
</section>
<!-- ready to grow -->

<!-- OUR PROCESS -->
<section class="process py-3 py-md-5">
    <div class="container">
    <div class="text-center">
        <h2 class="fw-bold fs-50 dark1"><?php echo wp_kses($redux_demo['process_title'], true);?></h2>
        <p class="muted"> <?php echo wp_kses($redux_demo['process_subtitle'], true);?></p>
    </div>
    </div>
</section>
<!-- OUR PROCESS -->

<!-- processes -->
<section class="processes bg-orange py-100">
    <div class="container">
        <div class="text-center">
            <div class="d-flex justify-content-between align-items-center">
                <?php 
                $count_num = count($redux_demo['process_card_title']);
                for ($x = 0; $x < $count_num; $x++) { 
                ?>
                <div class="item">
                    <img src="<?php echo wp_kses($redux_demo['process_card_icon'][$x]['url'], true);?>" class="img-fluid mb-2" alt="" />
                    <h2 class="fs-20 my-3 text-white fw-bold"><?php echo wp_kses($redux_demo['process_card_title'][$x], true);?></h2>
                    <p class="text-white">
                    <?php echo wp_kses($redux_demo['process_card_des'][$x], true);?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- processes -->

<!-- cards -->
<section class="cardds py-100">
    <div class="container">
    <div class="text-center">
        <h2 class="fs-20 text-orange"><?php echo wp_kses($redux_demo['home_card3_toptitle'], true);?></h2>
        <h2 class="fs-45 fw-bold source">
            <?php echo wp_kses($redux_demo['home_card3_title'], true);?></h2>
        </h2>

        <div class="row">
        <?php 
        $count_num = count($redux_demo['card3_title']);
        for ($x = 0; $x < $count_num; $x++) { 
        ?>
        <div class="col-md-4 p-3">
            <div class="card border-0 shadow h-100">
            <div class="card-body text-start p-4">
                <img src="<?php echo wp_kses($redux_demo['card3_icon'][$x]['url'], true);?>" class="img-fluid w-25" alt="" />
                <h2 class="fw-bold fs-30 my-4">
                    <?php echo wp_kses($redux_demo['card3_title'][$x], true);?>
                </h2>
                <p class="muted">
                <?php echo wp_kses($redux_demo['card3_des'][$x], true);?>
                </p>

                <a href="<?php echo wp_kses($redux_demo['card3_btnlink'], true);?>" class="btn btn-orange text-white">
                <?php echo wp_kses($redux_demo['card3_btntext'], true);?>
                </a>
            </div>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>
    </div>
</section>
<!-- cards -->

<?php
    get_footer();
?>