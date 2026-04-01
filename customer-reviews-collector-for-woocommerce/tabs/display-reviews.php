<?php
defined('ABSPATH') or die('No script kiddies please!');
wp_enqueue_script('trustindex-js', 'https://cdn.trustindex.io/loader.js', [], true, true);
?>
<div class="plugin-body">
<div class="card">
<div class="card-header card-header-lg"><?php echo esc_html(__('Skyrocket Your Sales with Customer Reviews', 'customer-reviews-collector-for-woocommerce')); ?></div>
<div class="card-body">
<p class="size-18"><?php
/* translators: %s: 900.000 */
echo esc_html(sprintf(__('%s+ businesses use Trustindex to collect and embed reviews easily.', 'customer-reviews-collector-for-woocommerce'), '900.000')
.' '.
__('Increase SEO, trust and sales using customer reviews.', 'customer-reviews-collector-for-woocommerce'));
?></p>
<p class="size-18"><?php
echo esc_html(__('Display your reviews with our beautiful, easy-to-integrate and mobile responsive widgets.', 'customer-reviews-collector-for-woocommerce')
.' '.
/* translators: 1: 40, 2: 25 */
sprintf(__('Choose from %1$d layouts and %2$d pre-designed styles.', 'customer-reviews-collector-for-woocommerce'), 40, 25));
?></p>
<a class="btn btn-primary" href="https://www.trustindex.io/ti-redirect.php?a=sys&c=wc-collect-2" target="_blank"><?php echo esc_html(__('Create a free Trustindex account', 'customer-reviews-collector-for-woocommerce')); ?></a>
</div>
</div>
<div class="row">
<div class="col plugin-subtitle"><?php echo esc_html(__('The 5 most popular Google widgets', 'customer-reviews-collector-for-woocommerce')); ?></div>
</div>
<div class="card card-widget">
<div class="card-header card-header-sm">Slider I.</div>
<div class="card-body">
<div src='https://cdn.trustindex.io/loader.js?2a4cd0457ad0305e99461f72977'></div>
</div>
</div>
<div class="card card-widget">
<div class="card-header card-header-sm">Slider I. - with header</div>
<div class="card-body">
<div src='https://cdn.trustindex.io/loader.js?dab4bb957ae23058609672800fa'></div>
</div>
</div>
<div class="card card-widget">
<div class="card-header card-header-sm">Slider II.</div>
<div class="card-body">
<div src='https://cdn.trustindex.io/loader.js?e88d40457f59306e6c06a038738'></div>
</div>
</div>
<div class="card card-widget">
<div class="card-header card-header-sm">Mansonry grid - with header</div>
<div class="card-body">
<div src='https://cdn.trustindex.io/loader.js?c6bfe305720030601d36e8adcfb'></div>
</div>
</div>
<div class="card card-widget">
<div class="card-header card-header-sm">Top Rated Badge VIII.</div>
<div class="card-body">
<div src='https://cdn.trustindex.io/loader.js?68670a657918306eb546c011616'></div>
</div>
</div>
<div class="row">
<div class="col plugin-subtitle text-center"><?php echo esc_html(__('Embed review widgets to your website!', 'customer-reviews-collector-for-woocommerce')); ?></div>
</div>
<div class="btn-container center">
<a href="https://www.trustindex.io/ti-redirect.php?a=sys&c=wc-collect-3" target="_blank" class="btn btn-primary"><?php echo esc_html(__('Create a free Trustindex account', 'customer-reviews-collector-for-woocommerce')); ?></a>
</div>
</div>
