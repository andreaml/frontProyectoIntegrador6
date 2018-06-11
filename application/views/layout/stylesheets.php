<?php if (is_array($stylesheets)): ?>
	<?php foreach($stylesheets as $stylesheet) { ?>
		<link rel="stylesheet" href="<?= base_url() . "public/css/{$stylesheet}" ?>">
	<?php } ?>
<?php endif; ?>
