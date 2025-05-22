<?= $this->extend('templates/dashboard') ?>

<?= $this->section('title') ?>
Ubah <?= $viewTitle ?>
<?= $this->endSection() ?>

<?= $this->section('contents') ?>
<div class="d-flex gap-4 flex-column">
  <div class="d-flex gap-3 flex-column flex-sm-row align-items-sm-center justify-content-between">
    <div>
      <h1>Ubah <?= $viewTitle ?></h1>
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
            Ubah
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
    <form action="<?= url_to($routeName . '.update', $rack->id) ?>" method="post">
      <div class="mb-3">
        <label for="form-book-floor" class="form-label">
          Lantai
        </label>
        <input name="floor" value="<?= $rack->floor ?>" type="number" class="form-control" id="form-book-floor" placeholder="Masukan lantai rak...">
      </div>
      <div class="mb-3">
        <label for="form-book-name" class="form-label">
          Nama
        </label>
        <input name="name" value="<?= $rack->name ?>" type="text" class="form-control" id="form-book-name" placeholder="Masukan nama rak...">
      </div>
      <div class="d-grid d-sm-flex gap-2 align-items-center">
        <input type="submit" value="Ubah" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>