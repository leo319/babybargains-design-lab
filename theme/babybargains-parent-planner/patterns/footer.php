<?php
/**
 * Title: Parent Planner footer
 * Slug: babybargains-parent-planner/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 * Description: Navy footer with brand, affiliate disclosure, three link columns and a legal row.
 *
 * @package BabyBargains_Parent_Planner
 */

$bbpp_img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"align":"full","anchor":"about","className":"pp-footer","backgroundColor":"navy","layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull pp-footer has-navy-background-color has-background"><!-- wp:group {"align":"wide","className":"pp-foot-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide pp-foot-grid"><!-- wp:group {"className":"pp-foot-brand","layout":{"type":"default"}} -->
<div class="wp-block-group pp-foot-brand"><!-- wp:group {"className":"pp-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
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

<!-- wp:paragraph {"className":"pp-foot-about"} -->
<p class="pp-foot-about">A decision helper for tracked baby deals. We may earn a commission when you buy through our links; it never changes what we recommend.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group pp-foot-col"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Deals</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="/#edit">Today’s edit</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/#compare">Quick compare</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/#newsletter">Sunday edit</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group pp-foot-col"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Guides</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="/#guides">Monitors</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/#guides">Bassinets</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/#guides">Feeding</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group pp-foot-col"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">About</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="#">How we pick deals</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Affiliate disclosure</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"pp-legal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide pp-legal"><!-- wp:paragraph -->
<p>© 2026 Baby Bargains · baby-bargains.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prices change often — always confirm on the retailer page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
