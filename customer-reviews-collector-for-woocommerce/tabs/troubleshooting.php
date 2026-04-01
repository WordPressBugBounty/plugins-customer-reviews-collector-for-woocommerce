<?php
defined('ABSPATH') or die('No script kiddies please!');
if ($tiCommand === 're-create') {
check_admin_referer('ti-recreate');
$updateChecked = (float)get_option($pluginManagerInstance->get_option_name('update-version-check'), 0);
$pluginManagerInstance->uninstall();
if ($updateChecked) {
update_option($pluginManagerInstance->get_option_name('update-version-check'), $updateChecked);
}
$pluginManagerInstance->activate();
header('Location: admin.php?page='. $_page);
exit;
}
$yesIcon = '<span class="dashicons dashicons-yes-alt"></span>';
$noIcon = '<span class="dashicons dashicons-dismiss"></span>';
$pluginUpdated = ($pluginManagerInstance->get_plugin_current_version() <= "4.7.4");
?>
<div class="plugin-head"><?php echo esc_html(__('Troubleshooting', 'customer-reviews-collector-for-woocommerce')); ?></div>
<div class="plugin-body">
<div class="card">
<div class="card-body">
<p class="size-16"><strong><?php echo esc_html(__('If you have any problem, you should try these steps:', 'customer-reviews-collector-for-woocommerce')); ?></strong></p>
<ul class="ti-troubleshooting-checklist">
<li>
<?php echo esc_html(__('Trustindex plugin', 'customer-reviews-collector-for-woocommerce')); ?>
<ul>
<li>
<?php echo wp_kses_post(__('Use the latest version:', 'customer-reviews-collector-for-woocommerce') .' '. ($pluginUpdated ? $yesIcon : $noIcon)); ?>
<?php if (!$pluginUpdated): ?>
<a href="/wp-admin/plugins.php"><?php echo esc_html(__('Update', 'customer-reviews-collector-for-woocommerce')); ?></a>
<?php endif; ?>
</li>
<li>
<?php echo esc_html(__('Use automatic plugin update:', 'customer-reviews-collector-for-woocommerce')); ?>
<a href="<?php echo esc_url(admin_url('plugins.php?s='.esc_attr($pluginManagerInstance->get_plugin_slug()))); ?>"><?php echo esc_html(__('Check', 'customer-reviews-collector-for-woocommerce')); ?></a>
<div class="alert alert-sm alert-warning mt-2"><?php echo esc_html(__('You should enable it, to get new features and fixes automatically, right after they published!', 'customer-reviews-collector-for-woocommerce')); ?></div>
</li>
</ul>
</li>
<li>
<?php
$pluginUrl = 'https://wordpress.org/support/plugin/' . $pluginManagerInstance->get_plugin_slug();
$screenshotUrl = 'https://snipboard.io';
$screencastUrl = 'https://streamable.com/upload-video';
$pastebinUrl = 'https://pastebin.com';
/* translators: %s: link html */
echo wp_kses_post(sprintf(__('If the problem/question still exists, please create an issue here: %s', 'customer-reviews-collector-for-woocommerce'), '<a href="'. esc_url($pluginUrl) .'" target="_blank">'. esc_url($pluginUrl) .'</a>'));
?>
<br />
<?php echo esc_html(__('Please help us with some information:', 'customer-reviews-collector-for-woocommerce')); ?>
<ul>
<li><?php echo esc_html(__('Describe your problem', 'customer-reviews-collector-for-woocommerce')); ?></li>
<li><?php
/* translators: %s: link html */
echo wp_kses_post(sprintf(__('You can share a screenshot with %s', 'customer-reviews-collector-for-woocommerce'), '<a href="'. esc_url($screenshotUrl) .'" target="_blank">'. esc_url($screenshotUrl) .'</a>'));
?></li>
<li><?php
/* translators: %s: link html */
echo wp_kses_post(sprintf(__('You can share a screencast video with %s', 'customer-reviews-collector-for-woocommerce'), '<a href="'. esc_url($screencastUrl) .'" target="_blank">'. esc_url($screencastUrl) .'</a>'));
?></li>
<li><?php
/* translators: %s: link html */
echo wp_kses_post(sprintf(__('If you have an (webserver) error log, you can copy it to the issue, or link it with %s', 'customer-reviews-collector-for-woocommerce'), '<a href="'. esc_url($pastebinUrl) .'" target="_blank">'. esc_url($pastebinUrl) .'</a>'));
?></li>
<li><?php echo esc_html(__('And include the information below:', 'customer-reviews-collector-for-woocommerce')); ?></li>
</ul>
</li>
</ul>
<textarea class="ti-troubleshooting-info" readonly><?php include $pluginManagerInstance->get_plugin_dir() . 'include' . DIRECTORY_SEPARATOR . 'troubleshooting.php'; ?></textarea>
<div class="row">
<div class="col justify-content-end d-flex">
<a href=".ti-troubleshooting-info" class="btn btn-primary btn-copy2clipboard ti-pull-right ti-tooltip ti-toggle-tooltip ti-tooltip-left">
<?php echo esc_html(__('Copy to clipboard', 'customer-reviews-collector-for-woocommerce')); ?>
<span class="ti-tooltip-message">
<span style="color: #00ff00; margin-right: 2px">✓</span>
<?php echo esc_html(__('Copied', 'customer-reviews-collector-for-woocommerce')); ?>
</span>
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col plugin-subtitle"><?php echo esc_html(__('Re-create plugin', 'customer-reviews-collector-for-woocommerce')); ?></div>
</div>
<div class="card">
<div class="card-body">
<p class="size-16"><?php echo wp_kses_post(__('Re-create the database tables of the plugin.<br />Please note: this removes all settings and invitations.', 'customer-reviews-collector-for-woocommerce')); ?></p>
<div class="row">
<div class="col justify-content-end d-flex">
<a href="<?php echo esc_url(wp_nonce_url('?page='. $_page .'&tab=troubleshooting&command=re-create', 'ti-recreate')); ?>" class="btn btn-primary ti-btn-loading-on-click"><?php echo esc_html(__('Re-create plugin', 'customer-reviews-collector-for-woocommerce')); ?></a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col plugin-subtitle"><?php echo esc_html(__('Translation', 'customer-reviews-collector-for-woocommerce')); ?></div>
</div>
<div class="card">
<div class="card-body">
<p class="size-16">
<?php echo esc_html(__('If you notice an incorrect translation in the plugin text, please report it here:', 'customer-reviews-collector-for-woocommerce')); ?>
 <a href="mailto:support@trustindex.io">support@trustindex.io</a>
</p>
</div>
</div>
</div>
