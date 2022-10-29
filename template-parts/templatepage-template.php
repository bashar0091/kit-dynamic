<?php
/**
 * Template Name: Template Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

global $redux_demo;
?>
    <!-- bootstrap js -->
    <main>
      <!-- filter section -->
      <section class="filter-section">
        <div class="container">
          <h2 class="page-title">
            <?php echo wp_kses($redux_demo['template_page_title'], true);?>
          </h2>

          <div class="filter-box">
            <ul class="filter-container">
              <li><a class="active-color" href="#">Most Popular</a></li>
              <li><a class="in-active-color" href="#">Online Store</a></li>
              <li>
                <div class="dropdown">
                  <a
                    class="dropdown-toggle drop-button"
                    href="#"
                    role="button"
                    id="dropdownMenuLink"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Business & Services
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <a
                    class="dropdown-toggle drop-button"
                    href="#"
                    role="button"
                    id="dropdownMenuLink"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Creative
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <a
                    class="dropdown-toggle drop-button"
                    href="#"
                    role="button"
                    id="dropdownMenuLink"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Community
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
              </li>
              <li><a class="in-active-color" href="#">All Templates</a></li>

              <li><a class="customBtn" href="#">PICK YOUR PLAN</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- templates -->
      <section class="templates">
        <div class="container">
          <h2 class="template-title">Most Popular</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
              $args = array(
                'post_type' => 'product_template',
                'post_per_page' => -1
              );
              $query = new WP_Query( $args );

              while ($query -> have_posts()){
                $query -> the_post();
            ?>
            <div class="col">
              <div class="template">
                <div class="">
                  <img src="<?php echo wp_kses(get_the_post_thumbnail_url(), true);?>" alt="" />
                </div>
                <div>
                  <h3><?php echo wp_kses(get_the_title(), true);?></h3>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </section>
      <!-- build -->
      <section class="build">
        <h3><?php echo wp_kses($redux_demo['template_page_bottom_title'], true);?></h3>
        <p><?php echo wp_kses($redux_demo['template_page_bottom_subtitle'], true);?></p>
        <a href="<?php echo wp_kses($redux_demo['template_page_bottom_btnlink'], true);?>">
          <?php echo wp_kses($redux_demo['template_page_bottom_btntext'], true);?>
        </a>
      </section>
    </main>
    
<?php
    get_footer();
?>