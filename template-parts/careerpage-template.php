<?php
/**
 * Template Name: Career Page
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

global $redux_demo;
?>

<main>
    <!-- career head -->
    <section class="career-head">
    <div class="container">
        <div class="row career-head-row">
        <div class="col-md-6 my-2">
            <h2 class="text-center page-title"><?php echo wp_kses($redux_demo['career_banner_title'], true);?></h2>
        </div>
        <div class="col-md-6 my-2">
            <p><?php echo wp_kses($redux_demo['career_banner_des'], true);?></p>
            <a class="career-btn" href="<?php echo wp_kses($redux_demo['career_bannerbtn_link'], true);?>">
                <?php echo wp_kses($redux_demo['career_bannerbtn_text'], true);?>
            </a>
        </div>
        </div>
    </div>
    </section>

    <section class="py-5">
    <div class="container">
        <div class="row benefit-row">
        <div class="col-md-6 my-2">
            <div class="text-center">
            <img class="ben-img" src="<?php echo wp_kses($redux_demo['career_whyworking_img']['url'], true);?>" alt="career" />
            </div>
        </div>
        <div class="col-md-6 my-2">
            <h3 class="benefit-title"><?php echo wp_kses($redux_demo['career_whyworking_title'], true);?></h3>

            <?php 
            $count_num = count($redux_demo['career_whyworking_listtitle']);
            for ($x = 0; $x < $count_num; $x++) {
            ?>
            <div class="benefit">
            <div><h6 class="benefit-circle mt-2"><?php echo $x+1;?></h6></div>
            <div class="ms-2">
                <h6><?php echo wp_kses($redux_demo['career_whyworking_listtitle'][$x], true);?></h6>
                <p><?php echo wp_kses($redux_demo['career_whyworking_listdes'][$x], true);?></p>
            </div>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>
    </section>

    <section class="py-5 staff-section">
    <h3 class="title"><?php echo wp_kses($redux_demo['career_stafffeel_title'], true);?></h3>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
            $count_num = count($redux_demo['career_stafffeel_listtitle']);
            for ($x = 0; $x < $count_num; $x++) {
        ?>
        <div class="col">
            <div class="staff">
            <img src="<?php echo wp_kses($redux_demo['career_stafffeel_img'][$x]['url'], true);?>" alt="" />
            <p>
                <?php echo wp_kses($redux_demo['career_stafffeel_des'][$x], true);?>
                <br />
                <br />

                <span class="staf-name"><?php echo wp_kses($redux_demo['career_stafffeel_listtitle'][$x], true);?></span>
                <br />
                <?php echo wp_kses($redux_demo['career_stafffeel_position'][$x], true);?>
            </p>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>
    </section>

    <section class="py-5e open-position" id="job">
    <h3 class="title">Open Position</h3>

    <!-- tab -->
    <div class="container">
        <ul class="position-tab">
        <?php 
            $x = 0;
            $args = array(
                'post_type' => 'job',
                'post_per_page' => -1,
            );
            $query = new WP_Query($args);
            while ($query -> have_posts()){
                $query -> the_post();
                $x++;
        ?>
        <h6><a href="#tab<?php echo $x;?>"><?php echo wp_kses(get_the_title(), true);?></a></h6>
        <?php }?>
    </div>

    <?php
        $i = 0;
        while ($query -> have_posts()){
            $query -> the_post();
            $i++;
            $about_lskit = get_field('about_lskit');
            $about_job = get_field('about_job');
            $working_hours = get_field('working_hours');
            $training_program = get_field('training_program');
            $requirements = get_field('requirements');
    ?>
    <div id="tab<?php echo $i;?>" class="job-description container">
        <div class="position">
        <span class="avatar">
            <i class="fa-solid fa-user avatar-icon"></i>
        </span>
        <div>
            <h3 class="job-role"><?php echo wp_kses(get_the_title(), true);?></h3>
            <p class="type"><?php echo wp_kses(get_field('job_position'), true); ?></p>
        </div>
        </div>

        <div class="topic-container">
            <div class="topic">
                <h5 class="pt-3">About LSKIT</h5>
                <?php if($about_lskit){?>
                <?php echo wp_kses($about_lskit, true); ?>
                <?php } ?>
            </div>
            <div class="topic">
                <h5 class="pt-3">About the job</h5>
                <?php if($about_job){?>
                <?php echo wp_kses($about_job, true); ?>
                <?php } ?>
            </div>
            <div class="topic">
              <h5>Working hours</h5>
              <?php if($working_hours){?>
              <?php echo wp_kses($working_hours, true); ?>
              <?php } ?>
            </div>
            <div class="topic">
              <h5>Training program</h5>
              <?php if($training_program){?>
              <?php echo wp_kses($training_program, true); ?>
              <?php } ?>
            </div>
            <div class="topic">
              <h5>Requirements</h5>
              <?php if($requirements){?>
              <?php echo wp_kses($requirements, true); ?>
              <?php } ?>
            </div>
            <div class="topic">
                <a class="btn-orange" href="<?php echo wp_kses(get_field('apply_link'), true); ?>">Apply Now</a>
            </div>
        </div>
    </div>
    <?php }?>
    </section>
    <!-- try section -->
    <section class="container py-5">
    <div class="try" style="background-image: url(<?php echo wp_kses($redux_demo['career_footer_bg']['url'], true);?>);">
        <div>
        <h2 class="try-title">
            <?php echo wp_kses($redux_demo['career_footer_text'], true);?>
        </h2>
        </div>
        <div>
        <a class="btn-white" href="<?php echo wp_kses($redux_demo['career_footer_btnlink'], true);?>">
            <?php echo wp_kses($redux_demo['career_footer_btn'], true);?>
        </a>
        </div>
    </div>
    </section>
</main>

<script>
    // Show the first tab and hide the rest
    $('.position-tab h6:first-child').addClass('active-tab');
    $('.job-description').hide();
    $('.job-description:first').show();

    // Click function
    $('.position-tab h6').click(function(){
    $('.position-tab h6').removeClass('active-tab');
    $(this).addClass('active-tab');
    $('.job-description').hide();
    
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
    });
</script>
<?php
get_footer();