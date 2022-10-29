<?php
/**
 * Template Name: Service Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

global $redux_demo;

?>
<section class="service-hero" style="background-image: radial-gradient(177.08% 1629.15% at 153.33% 61.28%, #373636 0%, rgba(83, 83, 83, 0.489583) 44.7%, rgba(89, 88, 88, 0) 100%),url(<?php echo wp_kses($redux_demo['service_banner_bg']['url'], true);?>)">
  <div class="">
  <h1 class="text-center t-white px-3 px-md-0">
    <?php echo wp_kses($redux_demo['service_banner_title'], true);?>
  </h1>
  <p class="text-center t-white px-3 px-md-0 py-2">
    <?php echo wp_kses($redux_demo['service_banner_subtitle'], true);?>
  </p>
  <div class="serv">
    <div class="container t-white px-3 px-md-0">
      <div class="row">
          <?php 
            $count_num = count($redux_demo['service_banner_itemtitle']);
            for ($x = 0; $x < $count_num; $x++) { 
          ?>
          <div class="col-12 col-md-3 d-flex align-items-center justify-content-center py-3">
            <img class="d-block me-3" src="<?php echo wp_kses($redux_demo['service_banner_itemIcon'][$x]['url'], true);?>" alt="icon">
            <h6 class="fw-semibold fz-15"><?php echo wp_kses($redux_demo['service_banner_itemtitle'][$x], true);?></h6>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
  <div class="text-center pt-4">
    <a href="<?php echo wp_kses($redux_demo['service_banner_btnlink'], true);?>" class="btn-orange">
      <?php echo wp_kses($redux_demo['service_banner_btntext'], true);?>
    </a>
  </div>
  </div>
</section>

<section class="commitment sec-space">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <!-- <div class="commitment-img">
          <h2>LSKIT</h2>
        </div> -->
        <img src="<?php echo wp_kses($redux_demo['service_imgtext_img']['url'], true);?>" alt="">
      </div>
      <div class="col-md-6 commitment-desc">
        <?php echo wp_kses($redux_demo['service_imgtext_text'], true);?>
      </div>
    </div>
  </div>
</section>

<section class="services-service sec-space">
  <div class="container">
    <img src="<?php echo wp_kses($redux_demo['service_flowchart_img']['url'], true);?>" alt="" />
  </div>
</section>

<!-- terms section -->
<section class="terms sec-space">
  <div class="container">
    <h3 class="sec-title"><?php echo wp_kses($redux_demo['service_term_title'], true);?></h3>
    <div class="row">
      <?php 
        $count_num = count($redux_demo['service_term_cardtitle']);
        for ($x = 0; $x < $count_num; $x++) { 
      ?>
      <div class="col-md-4">
        <div class="others h-100">
          <img src="<?php echo wp_kses($redux_demo['service_term_cardicon'][$x]['url'], true);?>" alt="fit" />
          <h3><?php echo wp_kses($redux_demo['service_term_cardtitle'][$x], true);?></h3>
          <p>
            <?php echo wp_kses($redux_demo['service_term_carddes'][$x], true);?>
          </p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="testimonials sec-space py-5" style="background: #fef7f6">
  <h3 class="sec-title">Trust tried and reviewed experts</h3>
  <div class="reviews">
    <div class="review">
      <div class="d-flex align-items-center py-2">
        <img src="http://localhost/lskit/wp-content/uploads/2022/10/Ellipse-7.jpg" alt="fit" />
        <p class="fw-bold fs-18 mb-0 ms-2">Volage New Media Inc</p>
      </div>
      <div class="pt-1">
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
      </div>
      <p class="muted pb-1 fs-16">
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
      </p>
      <p class="fw-bold" style="font-size: 10px">SOMN HOME</p>
      <p class="muted" style="font-size: 12px">Feb 6,2022</p>
    </div>
    <div class="review">
      <div class="d-flex align-items-center py-2">
        <img src="http://localhost/lskit/wp-content/uploads/2022/10/Ellipse-7.jpg" alt="fit" />
        <p class="fw-bold fs-18 mb-0 ms-2">Volage New Media Inc</p>
      </div>
      <div class="pt-1">
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
      </div>
      <p class="muted pb-1 fs-16">
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
      </p>
      <p class="fw-bold" style="font-size: 10px">SOMN HOME</p>
      <p class="muted" style="font-size: 12px">Feb 6,2022</p>
    </div>
    <div class="review">
      <div class="d-flex align-items-center py-2">
        <img src="http://localhost/lskit/wp-content/uploads/2022/10/Ellipse-7.jpg" alt="fit" />
        <p class="fw-bold fs-18 mb-0 ms-2">Volage New Media Inc</p>
      </div>
      <div class="pt-1">
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
      </div>
      <p class="muted pb-1 fs-16">
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
      </p>
      <p class="fw-bold" style="font-size: 10px">SOMN HOME</p>
      <p class="muted" style="font-size: 12px">Feb 6,2022</p>
    </div>
    <div class="review">
      <div class="d-flex align-items-center py-2">
        <img src="http://localhost/lskit/wp-content/uploads/2022/10/Ellipse-7.jpg" alt="fit" />
        <p class="fw-bold fs-18 mb-0 ms-2">Volage New Media Inc</p>
      </div>
      <div class="pt-1">
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
      </div>
      <p class="muted pb-1 fs-16">
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
      </p>
      <p class="fw-bold" style="font-size: 10px">SOMN HOME</p>
      <p class="muted" style="font-size: 12px">Feb 6,2022</p>
    </div>
    <div class="review">
      <div class="d-flex align-items-center py-2">
        <img src="http://localhost/lskit/wp-content/uploads/2022/10/Ellipse-7.jpg" alt="fit" />
        <p class="fw-bold fs-18 mb-0 ms-2">Volage New Media Inc</p>
      </div>
      <div class="pt-1">
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
        <span class="star"><i class="fa-solid fa-star"></i></span>
      </div>
      <p class="muted pb-1 fs-16">
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
      </p>
      <p class="fw-bold" style="font-size: 10px">SOMN HOME</p>
      <p class="muted" style="font-size: 12px">Feb 6,2022</p>
    </div>
  </div>
  <section class="partners mt-3 pt-3  my-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4>Shopify experts help thousands of businesses each year</h4>
      </div>
      <div class="col-md-9 partner">
        <div>
          <img src="http://localhost/lskit/wp-content/uploads/2022/10/pngwing.com-2022-08-23T133241-1.jpg" alt="" />
        </div>
        <div>
          <img src="http://localhost/lskit/wp-content/uploads/2022/10/pngwing.com-2022-08-23T133241-1.jpg" alt="" />
        </div>
        <div>
          <img src="http://localhost/lskit/wp-content/uploads/2022/10/pngwing.com-2022-08-23T133241-1.jpg" alt="" />
        </div>
        <div class="text-end">
          <img src="http://localhost/lskit/wp-content/uploads/2022/10/pngwing.com-2022-08-23T133241-1.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
</section>

<section class="sec-space">
  <div class="container">
    <div class="row dev">
      <div class="col-md-6">
        <?php echo wp_kses($redux_demo['service_store_text'], true);?>
      </div>
      <div class="col-md-6 dev-box">
        <img src="<?php echo wp_kses($redux_demo['service_store_img']['url'], true);?>" alt="" />
      </div>
    </div>
  </div>
</section>

<?php
    get_footer();
?>