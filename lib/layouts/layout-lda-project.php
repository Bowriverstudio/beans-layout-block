<?php



$full_width_image = include 'full-width-image.php';
$full_left_1_3_1_3 = include 'full-left-1-3-image-1-3-image-1-3-text.php';
$full_right_1_3_1_3 = include 'full-right-1-3-text-1-3-image-1-3-image.php';



$content = <<<CONTENT

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
<!-- /wp:paragraph -->

<!-- wp:lda/size-area {"area":"Kitchen \u0026 Dining","size":"800"} -->
<div class="has-xsmall-font-size"><span class="uk-text-bolder">Size - </span><span>800 Sq.Ft</span><span class="uk-text-bolder uk-margin-medium-left">AREA - </span><span>Kitchen &amp; Dining</span></div>
<!-- /wp:lda/size-area -->


$full_width_image

$full_left_1_3_1_3

$full_right_1_3_1_3

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
<!-- /wp:paragraph -->

$full_width_image


CONTENT;

return  $content;


