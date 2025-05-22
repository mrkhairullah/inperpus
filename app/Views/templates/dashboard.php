<?= $this->extend('templates/root') ?>

<?= $this->section('root_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/vendors/apexcharts/apexcharts.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendors/modernize/styles.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendors/simplebar/simplebar.min.css') ?>">
<?= $this->renderSection('template_head') ?>
<?= $this->endSection() ?>

<?= $this->section('page') ?>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

  <!-- Sidebar Start -->
  <?= $this->include('components/sidebar') ?>
  <!--  Sidebar End -->

  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    <?= $this->include('components/header') ?>
    <!--  Header End -->
    <div class="container-fluid">
      <?= $this->renderSection('contents') ?>
      <?= $this->include('components/footer') ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('root_body') ?>
<script src="<?= base_url('assets/vendors/modernize/sidebarmenu.js') ?>"></script>
<script src="<?= base_url('assets/vendors/modernize/app.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/simplebar/simplebar.min.js') ?>"></script>
<?= $this->renderSection('template_body') ?>
<?= $this->endSection() ?>