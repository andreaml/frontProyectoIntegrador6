<?php if (is_array($libraries)): ?>
  <?php foreach($libraries as $library) { ?>
    <script src="<?= base_url() . "public/js/{$library}" ?>"></script>
  <?php } ?>
<?php endif; ?>
