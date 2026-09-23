<?php
/**
 * Title: Navy hero with lead deal
 * Slug: babybargains-parent-planner/hero
 * Categories: babybargains, banner
 * Keywords: hero, header, navy, lead deal
 * Description: Full-bleed navy hero with serif H1, primary CTA, deals-desk byline, and a lead-deal cover card.
 *
 * @package BabyBargains_Parent_Planner
 */

$bbpp_img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"pp-hero","backgroundColor":"navy","textColor":"white","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull pp-hero has-white-color has-navy-background-color has-text-color has-background"><!-- wp:group {"align":"wide","className":"pp-hero-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide pp-hero-grid"><!-- wp:group {"className":"pp-hero-copy","layout":{"type":"default"}} -->
<div class="wp-block-group pp-hero-copy"><!-- wp:paragraph {"className":"pp-kicker"} -->
<p class="pp-kicker">Parent Planner <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color">· Issue 38 · Wednesday, Sept. 23</mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"pp-hero-title"} -->
<h1 class="wp-block-heading pp-hero-title">Find the right gear <em>for less.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pp-lede"} -->
<p class="pp-lede">We track prices on the baby gear parents actually research, then tell you which deals are worth the click. A decision helper — not a coupon dump.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pp-hero-actions","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-hero-actions"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"pp-btn-arrow"} -->
<div class="wp-block-button pp-btn-arrow"><a class="wp-block-button__link wp-element-button" href="#edit">See today’s top discounts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"pp-link-light"} -->
<p class="pp-link-light"><a href="#about">How we pick deals</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-byline","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-byline"><!-- wp:group {"className":"pp-avatars","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pp-avatars"><!-- wp:paragraph -->
<p>JM</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>AR</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>KT</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Edited by the <strong>Baby Bargains deals desk</strong> · Prices checked 9:02 AM ET</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-cover","layout":{"type":"default"}} -->
<div class="wp-block-group pp-cover"><!-- wp:group {"className":"pp-cover-art","layout":{"type":"default"}} -->
<div class="wp-block-group pp-cover-art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbpp_img . 'dune.svg' ); ?>" alt="Silver Cross Dune / Reef bassinet illustration"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pp-cover-tag"} -->
<p class="pp-cover-tag">Today’s lead</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-cover-pct"} -->
<p class="pp-cover-pct"><strong>71%</strong> off</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-cover-body","layout":{"type":"default"}} -->
<div class="wp-block-group pp-cover-body"><!-- wp:paragraph {"className":"pp-eyebrow"} -->
<p class="pp-eyebrow">Silver Cross <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-muted-color">· Nursery</mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"pp-cover-title"} -->
<h2 class="wp-block-heading pp-cover-title"><a href="#edit">Dune / Reef Bassinet</a></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"pp-price pp-price-lg","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-price pp-price-lg"><!-- wp:paragraph {"className":"pp-now"} -->
<p class="pp-now">$99.99</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-was"} -->
<p class="pp-was"><s>$349.99</s></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-save"} -->
<p class="pp-save">Save $250</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
