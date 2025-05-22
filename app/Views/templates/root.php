<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= esc($this->renderSection('title', true)) ?>
  </title>
  <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/tabler-icons/tabler-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
  <?= $this->renderSection('root_head', true) ?>
</head>

<body>
  <?= $this->renderSection('page') ?>
  <script src="<?= base_url('assets/vendors/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendors/sweetalert/sweetalert2@11.js') ?>"></script>
  <?= $this->renderSection('root_body', true) ?>
</body>

</html>