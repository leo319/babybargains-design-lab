<?php
/**
 * Title: Parent Planner header
 * Slug: babybargains-parent-planner/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 * Description: Sticky white header with logo, primary navigation (hamburger on mobile) and the Sunday edit CTA.
 *
 * @package BabyBargains_Parent_Planner
 */

$bbpp_img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"align":"full","className":"pp-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pp-header"><!-- wp:group {"align":"wide","className":"pp-header-in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide pp-header-in"><!-- wp:group {"className":"pp-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-brand"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"pp-brand-logo"} -->
<figure class="wp-block-image size-full pp-brand-logo"><a href="/"><img src="<?php echo esc_url( $bbpp_img . 'logo.svg' ); ?>" alt="Baby Bargains home"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"pp-brand-text","layout":{"type":"default"}} -->
<div class="wp-block-group pp-brand-text"><!-- wp:site-title {"level":0,"className":"pp-brand-name"} /-->

<!-- wp:paragraph {"className":"pp-brand-tag"} -->
<p class="pp-brand-tag">The Parent Planner</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-header-nav","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-header-nav"><!-- wp:navigation {"overlayMenu":"mobile","className":"pp-nav","overlayBackgroundColor":"white","overlayTextColor":"navy","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Deals","url":"/#edit","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Compare","url":"/#compare","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Guides","url":"/#guides","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"About","url":"/#about","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Get the Sunday edit","url":"/#newsletter","kind":"custom","className":"pp-nav-sub"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"pp-header-cta"} -->
<div class="wp-block-buttons pp-header-cta"><!-- wp:button {"className":"is-style-pp-ghost"} -->
<div class="wp-block-button is-style-pp-ghost"><a class="wp-block-button__link wp-element-button" href="/#newsletter">Get the Sunday edit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
