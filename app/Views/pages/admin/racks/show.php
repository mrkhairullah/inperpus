<?= $this->extend('templates/dashboard') ?>

<?= $this->section('title') ?>
Tambah <?= $viewTitle ?>
<?= $this->endSection() ?>

<?= $this->section('contents') ?>
<div class="d-flex gap-4 flex-column">
  <div class="d-flex gap-3 flex-column flex-sm-row align-items-sm-center justify-content-between">
    <div>
      <h1>Tambah <?= $viewTitle ?></h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= url_to('dashboard') ?>">
              Dasbor
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= url_to($routeName . '.index') ?>">
              <?= $viewTitle ?>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Tambah
          </li>
        </ol>
      </nav>
    </div>
    <div class="d-flex flex-wrap gap-2 align-items-center">
      <a href="<?= url_to($routeName . '.new') ?>" class="btn btn-primary">
        Tambah
      </a>
    </div>
  </div>
  <div class="mb-4">
    <form action="<?= url_to($routeName . '.create') ?>" method="post">
      <div class="mb-3">
        <label for="form-book-floor" class="form-label">
          Lantai
        </label>
        <div class="form-control">
          <?= $rack->floor; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="form-book-name" class="form-label">
          Nama
        </label>
        <div class="form-control">
          <?= $rack->name; ?>
        </div>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>