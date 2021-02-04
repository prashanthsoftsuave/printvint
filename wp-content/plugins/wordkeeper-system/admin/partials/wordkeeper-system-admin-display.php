<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wordkeeper.com
 * @since      1.0.0
 *
 * @package    WordKeeper_System
 * @subpackage WordKeeper_System/admin/partials
 */
?>
<br />
<br />
<?php if(!empty($message)): ?>
<div class="message">
		<?php echo htmlentities($message); ?>
</div>
<?php endif; ?>
<br />
<div id="wordkeeper-system-main" class="wks-main wordkeeper">
	<div class="nav-tab-wrapper wk-nav-tab">
		<?php
			$tab = (!empty($_POST['form']))? esc_attr($_POST['form']) : 'purge-form';
			$css_display_block = 'style="display:block";';
			$css_display_none  = 'style="display:none";';
		?>
		<?php if(current_user_can('publish_posts') || current_user_can('publish_pages')) : ?>
		<a class="nav-tab <?php if($tab == 'purge-form'):?> nav-tab-active <?php endif; ?>" href="?page=wordkeeper-system&tab=caching">
            Caching
      	</a>
   		<?php endif; ?>


   		<?php if( current_user_can('manage_options')): ?>
        <a class="nav-tab <?php if($tab == 'settings-form'):?> nav-tab-active <?php endif; ?>" href="?page=wordkeeper-system&tab=settings">
            Settings
        </a>
    	<?php endif; ?>

	</div>

<div id="sections">
	<?php if(current_user_can('publish_posts') || current_user_can('publish_pages')) : ?>
	<section class="section" <?php if($tab == 'purge-form') { echo $css_display_block; } else { echo $css_display_none; }?> >
			<h2>Caching</h2>
			<form enctype="application/x-www-form-urlencoded" method="post" id="purge-form" name="purge-form">
				<input name="purge-all" type="button" class="button button-primary button-large" id="purge-all" value="Purge All Caches" />
				<input type="hidden" name="purge" id="purge" value="" />
				<input type="hidden" name="form" value="purge-form" />
			</form>
	</section>

	<?php endif; ?>
	<?php if( current_user_can('manage_options')): ?>
	<section class="section" <?php if($tab == 'settings-form') { echo $css_display_block; } else { echo $css_display_none; }?> >
		<form enctype="application/x-www-form-urlencoded" method="post" id="settings-form" name="settings-form">
			<h2>Settings</h2>
			<input type="checkbox" name="query-strings" id="query-strings" value="query-strings"<?php echo ($settings['query-strings'] === true) ? ' checked' : ''; ?> />Remove Query Strings from Static Files
			<br />
			<input type="checkbox" name="protocol-agnostic" id="protocol-agnostic" value="protocol-agnostic"<?php echo ($settings['protocol-agnostic'] === true) ? ' checked' : ''; ?> />Fix SSL Mixed Content Problems<br />
			<input type="checkbox" name="defer-javascript" id="defer-javascript" value="defer-javascript"<?php echo ($settings['defer-javascript'] === true) ? ' checked' : ''; ?> />Defer JavaScript<br />
			<label>Heartbeat Frequency</label><br />
			<select name="heartbeat-frequency" id="heartbeat-frequency">
				<?php foreach($options['heartbeat-frequency'] as $value => $name): ?>
				<option value="<?php echo $value; ?>"<?php echo ($settings['heartbeat-frequency'] == $value) ? ' selected' : ''; ?>><?php echo $name; ?></option>
				<?php endforeach; ?>
			</select><br />
			<label>Heartbeat Limitations</label><br />
			<select name="heartbeat-permission" id="heartbeat-permission">
				<?php foreach($options['heartbeat-permission'] as $value => $name): ?>
				<option value="<?php echo $value; ?>"<?php echo ($settings['heartbeat-permission'] == $value) ? ' selected' : ''; ?>><?php echo $name; ?></option>
				<?php endforeach; ?>
			</select><br /><br />
			<input type="hidden" name="form" value="settings-form" />
			<input name="save" type="button" class="button button-primary button-large" id="settings-submit" value="Save" />
		</form>
	</section>
	<?php endif;?>

</div>
</div>
