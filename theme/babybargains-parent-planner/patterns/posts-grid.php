<?php
/**
 * Title: Posts grid (templates)
 * Slug: babybargains-parent-planner/posts-grid
 * Inserter: no
 * Description: Card grid for the blog index, archives and search results. Follows the main query.
 *
 * @package BabyBargains_Parent_Planner
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"pp-posts"} -->
<div class="wp-block-query alignwide pp-posts"><!-- wp:post-template {"className":"pp-grid-3","layout":{"type":"default"}} -->
<!-- wp:group {"tagName":"article","className":"is-style-pp-card pp-post-card","layout":{"type":"default"}} -->
<article class="wp-block-group is-style-pp-card pp-post-card"><!-- wp:post-featured-image {"isLink":true,"className":"pp-art"} /-->

<!-- wp:group {"className":"pp-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group pp-card-body"><!-- wp:post-terms {"term":"category","className":"pp-eyebrow"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"pp-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"pp-dek"} -->
<p class="pp-dek">Nothing here yet — check back after the next price sweep.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
