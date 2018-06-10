<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page_title; ?></title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() . "public/css/bootstrap/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "public/css/style.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "public/css/daterangepicker.css" ?>">
  </head>
  <body>
    <?= $scripts; ?>
    <?= $header; ?>
    <?= $contents; ?>
  </body>
</html>
