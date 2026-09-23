<?php
/**
 * Title: The Edit: magazine feature grid (1 large + 2 stacked)
 * Slug: babybargains-parent-planner/feature-grid
 * Categories: babybargains, featured
 * Keywords: editors picks, feature, magazine, deals
 * Description: Editors' picks with one large feature deal and two stacked mini deals. CTA links are placeholders (#) — swap in tracked retailer links.
 *
 * @package BabyBargains_Parent_Planner
 */

$bbpp_img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"wide","anchor":"edit","className":"pp-sec","layout":{"type":"default"}} -->
<section id="edit" class="wp-block-group alignwide pp-sec"><!-- wp:group {"className":"pp-sec-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group pp-sec-head"><!-- wp:group {"className":"pp-sec-titles","layout":{"type":"default"}} -->
<div class="wp-block-group pp-sec-titles"><!-- wp:paragraph {"className":"pp-eyebrow"} -->
<p class="pp-eyebrow">The Edit</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This week’s best-value picks</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"pp-more"} -->
<p class="pp-more"><a href="#compare">All 6 deals →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-mag","layout":{"type":"default"}} -->
<div class="wp-block-group pp-mag"><!-- wp:group {"tagName":"article","className":"is-style-pp-card pp-feature","layout":{"type":"default"}} -->
<article class="wp-block-group is-style-pp-card pp-feature"><!-- wp:group {"className":"pp-art","layout":{"type":"default"}} -->
<div class="wp-block-group pp-art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbpp_img . 'dune.svg' ); ?>" alt="Silver Cross Dune / Reef bassinet illustration"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pp-pct"} -->
<p class="pp-pct">71% off</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group pp-card-body"><!-- wp:paragraph {"className":"pp-eyebrow"} -->
<p class="pp-eyebrow">Nursery <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-muted-color">· Best for travel</mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#">Silver Cross’s Dune / Reef bassinet is 71% off — the deepest cut on our board</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pp-dek"} -->
<p class="pp-dek">A fold-flat bassinet that earns its keep at grandma’s house. At $99.99 it undercuts most no-name basics; confirm the Reef colorway and ship date on the retailer page before you check out.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pp-price pp-price-xl","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-price pp-price-xl"><!-- wp:paragraph {"className":"pp-now"} -->
<p class="pp-now">$99.99</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-was"} -->
<p class="pp-was"><s>$349.99</s></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-save"} -->
<p class="pp-save">Save $250.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Compare price</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-pp-ghost pp-btn-plus"} -->
<div class="wp-block-button is-style-pp-ghost pp-btn-plus"><a class="wp-block-button__link wp-element-button" href="#compare">Add to compare</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group pp-stack"><!-- wp:group {"tagName":"article","className":"is-style-pp-card pp-mini","layout":{"type":"default"}} -->
<article class="wp-block-group is-style-pp-card pp-mini"><!-- wp:group {"className":"pp-art","layout":{"type":"default"}} -->
<div class="wp-block-group pp-art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbpp_img . 'wave.svg' ); ?>" alt="Silver Cross Wave additional bassinet illustration"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pp-pct"} -->
<p class="pp-pct">50% off</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group pp-card-body"><!-- wp:paragraph {"className":"pp-eyebrow"} -->
<p class="pp-eyebrow">Silver Cross</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#">Wave Additional Bassinet</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pp-dek"} -->
<p class="pp-dek">Turns a Wave stroller into a twin-ready setup.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pp-price","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-price"><!-- wp:paragraph {"className":"pp-now"} -->
<p class="pp-now">$199.99</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-was"} -->
<p class="pp-was"><s>$399.99</s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"pp-textlink"} -->
<p class="pp-textlink"><a href="#">Compare price</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"is-style-pp-card pp-mini","layout":{"type":"default"}} -->
<article class="wp-block-group is-style-pp-card pp-mini"><!-- wp:group {"className":"pp-art","layout":{"type":"default"}} -->
<div class="wp-block-group pp-art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbpp_img . 'mat.svg' ); ?>" alt="Costway foam play mat illustration"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pp-pct"} -->
<p class="pp-pct">46% off</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group pp-card-body"><!-- wp:paragraph {"className":"pp-eyebrow"} -->
<p class="pp-eyebrow">Best Buy</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#">Costway Foam Play Mat</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pp-dek"} -->
<p class="pp-dek">Our budget pick for tummy-time floors.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pp-price","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group pp-price"><!-- wp:paragraph {"className":"pp-now"} -->
<p class="pp-now">$69.99</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pp-was"} -->
<p class="pp-was"><s>$129.99</s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"pp-textlink"} -->
<p class="pp-textlink"><a href="#">Compare price</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
