<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $redux_demo;

$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'echo' => false,
	'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0 custom-nav">%3$s</ul>',
	'container' => false,
	'walker' => new bootstrap_5_wp_nav_menu_walker(),
] );
?>

<!-- HEADER -->
<header class="header py-2" id="top">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
			<!-- logo  -->
			<a class="navbar-brand" href="/">
				<img src="<?php echo wp_kses($redux_demo['logoupload']['url'], true);?>" class="img-fluid logo" alt="logo">
			</a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php echo $header_nav_menu;?>
            </div>
			<a class="fw-bold btn btn-orange text-white rounded-0 px-4 py-2" href="#" data-bs-toggle="modal" data-bs-target="#proposalModal">
				<?php echo wp_kses($redux_demo['header_btn_text'], true);?>
			</a>
        </div>
    </nav>
</header>
<!-- HEADER -->


<div
	class="modal fade"
	id="proposalModal"
	tabindex="-1"
	aria-labelledby="proposalModalLabel"
	aria-hidden="true"
>
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-head">
		<div></div>
		<h3 class="modal-title" id="proposalModalLabel">Request a Proposal</h3>
		<button type="button" class="close-btn ms-1" data-bs-dismiss="modal" aria-label="Close">
			<img src="assets/icon/close.png" alt="" />
		</button>
		</div>
		<div class="modal-body">
		<p class="direction">Fill Out Our Form & We’ll be in Touch Shortly</p>

		<!-- form -->
		<div class="form-space">
			<form action="">
			<p class="require">"*" indicates required fields</p>
			<div class="row">
				<div class="col-md-6 my-2">
				<input
					class="form-control"
					type="text"
					name="first-name"
					id="firstName"
					placeholder="First Name*"
				/>
				</div>
				<div class="col-md-6 my-2">
				<input
					class="form-control"
					type="text"
					name="last-name"
					id="lastName"
					placeholder="First Name*"
				/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 my-2">
				<input class="form-control" type="email" name="email" id="email" placeholder="Email*" />
				</div>
				<div class="col-md-6 my-2">
				<input class="form-control" type="tel" name="number" id="number" placeholder="Number*" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 my-2">
				<input
					class="form-control"
					type="text"
					name="company"
					id="company"
					placeholder="Company*"
				/>
				</div>
				<div class="col-md-6 my-2">
				<select class="form-select" aria-label="Default select example">
					<option selected value="0">How did you hear about...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
				</div>
			</div>
			<div>
				<h4 class="project-type">Type of Project*</h4>
				<div class="row">
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="webSite" checked />
					<label class="form-check-label" for="webSite"> Web site </label>
					</div>
				</div>
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="branding" />
					<label class="form-check-label" for="branding"> Branding </label>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="marketing" />
					<label class="form-check-label" for="marketing"> Marketing Automation </label>
					</div>
				</div>
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="mobileApp" />
					<label class="form-check-label" for="mobileApp"> Mobile App </label>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="SEO" />
					<label class="form-check-label" for="SEO"> SEO Audti </label>
					</div>
				</div>
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="socialMedia" />
					<label class="form-check-label" for="socialMedia"> Social Media </label>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="emailMarketing" />
					<label class="form-check-label" for="emailMarketing"> Email Marketing </label>
					</div>
				</div>
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="PPC" />
					<label class="form-check-label" for="PPC"> PPC </label>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="Amazon" />
					<label class="form-check-label" for="Amazon"> Amazon </label>
					</div>
				</div>
				<div class="col-md-6 my-2">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="Marketing-Other" />
					<label class="form-check-label" for="Marketing-Other"> Marketing-Other </label>
					</div>
				</div>
				</div>

				<div class="my-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="confirmation" />
					<label class="form-check-label" for="confirmation">
					Yes-I want to learn how lounge lizard can fund my ecom brand to help scate sales.
					</label>
				</div>
				</div>

				<div>
				<textarea
					style="height: 100px"
					class="form-control"
					placeholder="Project Details*"
					id="floatingTextarea"
				></textarea>
				</div>

				<div class="my-2">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="agre" checked />
					<label class="form-check-label" for="confiagrermation">
					Sign up for lounge lizard libation Get monthly marketing, web, mobiletips and insight.
					</label>
				</div>
				</div>
				<div>
				<a class="proposal-submit-btn" href="#">SUBMIT</a>
				</div>
			</div>
			</form>
		</div>
		</div>
		<div class="proposel-footer form-space">
		<hr />
		<div class="address-section">
			<p class="address-title">
			PH: 1-888-444-0110 <br />
			Sales: Ext. 101
			</p>

			<div class="row addres-box">
			<div class="col-md-7 address">
				<h5>New York City</h5>
				<p>
				112 West 34th Street
				<br />
				18th Floor <br />
				New York, NY 10120
				</p>
			</div>
			<div class="col-md-5 address">
				<h5>Long Island</h5>
				<p>
				991 Main St.
				<br />
				Suite 200 <br />
				Holbrook, NY 11741
				</p>
			</div>
			</div>
			<div class="row addres-box">
			<div class="col-md-7 address">
				<h5>Washington D.C.</h5>
				<p>
				1101 Connecticut Avenue NW
				<br />
				Suite 450 <br />
				New York, NY 10120 Washington, DC 20036
				</p>
			</div>
			<div class="col-md-5 address">
				<h5>Nashville</h5>
				<p>
				424 Church St
				<br />
				St Suite 2000
				<br />
				Nashville, TN 37219
				</p>
			</div>
			</div>
			<div class="row addres-box">
			<div class="col-md-7 address">
				<h5>Los Angeles</h5>
				<p>
				1100 Glendon Avenue
				<br />
				17th Floor <br />
				Pleasantville, CA 90024
				</p>
			</div>
			<div class="col-md-5 address">
				<h5>Miami</h5>
				<p>
				1221 Brickell Ave
				<br />
				Suite 900 <br />
				Miami, FL 33131
				</p>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>