<?= $this->extend('templates/dashboard') ?>

<?= $this->section('title') ?>
Ubah <?= $viewName ?>
<?= $this->endSection() ?>

<?= $this->section('contents') ?>
<div class="d-flex gap-4 flex-column">
  <div class="d-flex gap-3 flex-column flex-sm-row align-items-sm-center justify-content-between">
    <div>
      <h1>Ubah <?= $viewName ?></h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= url_to('dashboard') ?>">
              Dasbor
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= url_to($routeName . '.index') ?>">
              <?= $viewName ?>
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
    <form action="" method="post">
      <div class="mb-3">
        <label for="form-book-title" class="form-label">
          Judul Buku
        </label>
        <input name="title" type="text" class="form-control" id="form-book-title" placeholder="Masukan judul buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-isbn" class="form-label">
          ISBN
        </label>
        <input name="isbn" type="text" class="form-control" id="form-book-isbn" placeholder="Masukan ISBN buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-publisher" class="form-label">
          Penerbit
        </label>
        <input name="publisher" type="text" class="form-control" id="form-book-publisher" placeholder="Masukan penerbit buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-publisher" class="form-label">
          Tahun Terbit
        </label>
        <input name="year" type="text" class="form-control" id="form-book-publisher" placeholder="Masukan tahun terbit buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-publisher" class="form-label">
          Sampul Buku
        </label>
        <input name="book_cover" type="file" accept="image/*" class="form-control" id="form-book-publisher" placeholder="Masukan tahun terbit buku...">
      </div>
      <div class="d-grid d-sm-flex gap-2 align-items-center">
        <input type="button" value="Tambah" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-outline-dark">
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>