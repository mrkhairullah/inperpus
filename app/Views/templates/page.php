<?= $this->extend('templates/root') ?>

<?= $this->section('root_head') ?>
<?= $this->renderSection('template_head') ?>
<?= $this->endSection() ?>

<?= $this->section('page') ?>
<main>
  <?= $this->renderSection('contents') ?>
</main>
<?= $this->endSection() ?>

<?= $this->section('root_body') ?>
<?= $this->renderSection('template_body') ?>
<?= $this->endSection() ?>