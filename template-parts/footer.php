<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

global $redux_demo;

?>

<!-- strategy -->
<section class="strategy py-5">
    <div class="container">
    <div class="text-center">
        <h2 class="fs-50 text-white fw-bold"><?php echo wp_kses($redux_demo['meeting_title'], true);?></h2>
        <a href="<?php echo wp_kses($redux_demo['meeting_btnlink'], true);?>" class="btn btn-light mt-4 py-3 px-5 fs-24 text-orange">
        <?php echo wp_kses($redux_demo['meeting_btntext'], true);?>
        </a>
    </div>
    </div>
</section>
<!-- strategy -->

<!-- slider -->
<section class="sliderSection">
    <div class="container-fluid px-0">
    <div class="row">
        <div class="col-md-6 p-0 bg-orange py-3 py-md-5">
        <div class="card border-0 bg-transparent">
            <div class="card-body p-5">
            <div class="row">
                <div class="col-md-3 p-2 m-auto">
                <img src="<?php echo wp_kses($redux_demo['footer_client_img']['url'], true);?>" class="img-fluid" alt="" />
                </div>
                <div class="col-md-9">
                <h2 class="fw-bold text-white">We’ve driven over</h2>
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <span class="text-orange bg-white">6</span>
                    <span class="text-orange bg-white">2</span>
                    <span class="text-orange bg-white">8</span>
                    <span class="text-orange bg-white">9</span>
                    <span class="text-orange bg-white">7</span>
                    <span class="text-orange bg-white">0</span>
                    <span class="text-orange bg-white">1</span>
                </div>
                <h2 class="fw-bold text-white">Leads for clients.</h2>
                <p class="text-white fw-bold">Discover how we can help your business grow</p>

                <div class="input-group bg-white rounded-3 p-2 justify-content-between">
                    <input
                    type="text"
                    class="form-control border-0 bg-transparent"
                    placeholder="Enter Your Email"
                    name=""
                    id=""
                    />
                    <input
                    type="submit"
                    class="btn btn-orange text-white rounded"
                    value="Send Me a Proposal"
                    name=""
                    id=""
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-6 p-0 bg-orange-1">
        <div class="card border-0 bg-transparent h-100">
            <div class="card-body p-5 h-100">
            <div>
                <div class="sliderr">
                <div class="slide p-4">
                    <p class="fs-30 text-white fw-semibold mb-5">
                    LSKIT did everything they said they would do you and did it on time! The whole process
                    was very easy!
                    </p>
                    <p class="fs-40 text-white fw-bold mb-0">CEO</p>
                    <p class="fs-20 text-white">John</p>
                </div>
                <div class="slide p-4">
                    <p class="fs-30 text-white fw-semibold mb-5">
                    LSKIT did everything they said they would do you and did it on time! The whole process
                    was very easy!
                    </p>
                    <p class="fs-40 text-white fw-bold mb-0">CEO</p>
                    <p class="fs-20 text-white">John</p>
                </div>
                <div class="slide p-4">
                    <p class="fs-30 text-white fw-semibold mb-5">
                    LSKIT did everything they said they would do you and did it on time! The whole process
                    was very easy!
                    </p>
                    <p class="fs-40 text-white fw-bold mb-0">CEO</p>
                    <p class="fs-20 text-white">John</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- slider -->

<!-- footer -->
<section class="footer pt-5 bg-orange">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-3">
        <div class="d-flex align-content-center">
            <img src="<?php echo wp_kses($redux_demo['expert_img']['url'], true);?>" class="img-fluid avatar" alt="" />
            <div class="content ps-4">
            <p class="text-white mb-0"><?php echo wp_kses($redux_demo['expert_title'], true);?></p>
            <a href="tel: <?php echo wp_kses($redux_demo['expert_num'], true);?>" class="fs-50 text-white fw-bold text-decoration-none">
                <?php echo wp_kses($redux_demo['expert_num'], true);?>
            </a>
            </div>
        </div>
        </div>
        <div class="col-md-6 p-3 m-auto">
        <div class="d-flex align-content-center justify-content-between">
            <div class="item p-3 text-center">
            <h4 class="text-white fw-bold">1.6 million</h4>
            <p class="text-white">Hours of Expertise</p>
            </div>
            <div class="item p-3 text-center">
            <h4 class="text-white fw-bold">450+</h4>
            <p class="text-white">Digital Marketing Masters On Staff</p>
            </div>
            <div class="item p-3 text-center">
            <h4 class="text-white fw-bold">1,128</h4>
            <p class="text-white">Websites Launched</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- footer -->

<div class="container">
    <p class="text-center my-2">© 2022 Unified Infotech Inc. All rights reserved.</p>
</div>

<!-- whatsapp -->
<div class="whatsapp">
    <a href="https://wa.me/<?php echo wp_kses($redux_demo['whatsapp_num'], true);?>" target="_blank">
    <img src="<?php echo wp_kses($redux_demo['whatsapp_icon']['url'], true);?>" class="img-fluid" alt="" />
    </a>
</div>
<!-- whatsapp -->

<!-- back to top -->
<div class="back-to-top" id="scrollBtn">
    <a href="#top">
    <img src="<?php echo wp_kses($redux_demo['back_top_icon']['url'], true);?>" alt="" />
    </a>
</div>
