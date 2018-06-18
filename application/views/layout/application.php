<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page_title; ?></title>
    <?= $stylesheets; ?>
    <script>
        sessionStorage.baseUrl='<?php echo base_url() ?>';
    </script>
  </head>
  <body>
    <?= $header; ?>
    <?= $contents; ?>
    <?= $scripts; ?>
  </body>
</html>
