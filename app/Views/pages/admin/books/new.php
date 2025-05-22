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
        <label for="form-book-authors" class="form-label">
          Penulis
        </label>
        <input name="authors" type="text" class="form-control" id="form-book-authors" placeholder="Masukan penulis buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-categories" class="form-label">
          Kategori
        </label>
        <input name="categories" type="text" class="form-control" id="form-book-categories" placeholder="Masukan kategori buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-year" class="form-label">
          Tahun Terbit
        </label>
        <input name="year" type="text" class="form-control" id="form-book-year" placeholder="Masukan tahun terbit buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-stock" class="form-label">
          Stok
        </label>
        <input name="stock" type="number" class="form-control" id="form-book-stock" placeholder="Masukan stok buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-rack" class="form-label">
          Rak
        </label>
        <input name="rack_id" type="number" class="form-control" id="form-book-rack" placeholder="Masukan rak buku...">
      </div>
      <div class="mb-3">
        <label for="form-book-cover" class="form-label">
          Sampul Buku
        </label>
        <input name="book_cover" type="file" accept="image/*" class="form-control" id="form-book-cover">
      </div>
      <div class="d-grid d-sm-flex gap-2 align-items-center">
        <input type="submit" value="Tambah" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-outline-dark">
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>