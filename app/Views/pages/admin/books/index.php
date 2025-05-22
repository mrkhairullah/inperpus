<?= $this->extend('templates/dashboard') ?>

<?= $this->section('title') ?>
Daftar <?= $viewTitle ?>
<?= $this->endSection() ?>

<?= $this->section('contents') ?>
<div class="d-flex gap-4 flex-column">
  <div class="d-flex gap-3 flex-column flex-sm-row align-items-sm-center justify-content-between">
    <div>
      <h1>Daftar <?= $viewTitle ?></h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= base_url('admin') ?>">
              Dasbor
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= url_to($routeName . '.index') ?>">
              <?= $viewTitle ?>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Daftar
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
  <?= $this->include('components/search') ?>
  <div class="table-responsive">
    <table class="table">
      <thead class="bg-primary-subtle">
        <tr>
          <th>Kode</th>
          <th>Slug</th>
          <th>Judul</th>
          <th>ISBN</th>
          <th>Penerbit</th>
          <th>Penulis</th>
          <th>Kategori</th>
          <th>Tahun</th>
          <th>Stok</th>
          <th>Cover</th>
          <th>Rak</th>
          <th>Dibuat Pada</th>
          <th>Diperbarui Pada</th>
          <th>Dihapus Pada</th>
        </tr>
      </thead>
      <tbody>
        <?php if (! empty($books)): ?>
          <?php foreach ($books as $book): ?>
            <tr>
              <td><?= $book->id; ?></td>
              <td><?= $book->slug; ?></td>
              <td><?= $book->title; ?></td>
              <td><?= $book->isbn; ?></td>
              <td><?= $book->publisher; ?></td>
              <td><?= $book->authors; ?></td>
              <td><?= $book->categories; ?></td>
              <td><?= $book->year; ?></td>
              <td><?= $book->stock; ?></td>
              <td><?= $book->book_cover; ?></td>
              <td><?= $book->rack_id; ?></td>
              <td><?= $book->created_at; ?></td>
              <td><?= $book->updated_at; ?></td>
              <td><?= $book->deleted_at; ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="14" class="text-center">Tidak ada data</td>
          </tr>
        <?php endif; ?>
      </tbody>
      <tfoot class="bg-primary-subtle">
        <tr>
          <th>Kode</th>
          <th>Slug</th>
          <th>Judul</th>
          <th>ISBN</th>
          <th>Penerbit</th>
          <th>Penulis</th>
          <th>Kategori</th>
          <th>Tahun</th>
          <th>Stok</th>
          <th>Cover</th>
          <th>Rak</th>
          <th>Dibuat Pada</th>
          <th>Diperbarui Pada</th>
          <th>Dihapus Pada</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<?= $this->endSection() ?>