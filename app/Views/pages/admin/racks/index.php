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
          <th>No</th>
          <th>Kode</th>
          <th>Lantai</th>
          <th>Nama</th>
          <th>Dibuat Pada</th>
          <th>Diperbarui Pada</th>
          <th>Dihapus Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (! empty($racks)): ?>
          <?php foreach ($racks as $index => $rack): ?>
            <tr>
              <td><?= $index + 1; ?></td>
              <td><?= $rack->id; ?></td>
              <td><?= $rack->floor; ?></td>
              <td><?= $rack->name; ?></td>
              <td><?= $rack->created_at ?? '-'; ?></td>
              <td><?= $rack->updated_at ?? '-'; ?></td>
              <td><?= $rack->deleted_at ?? '-'; ?></td>
              <td>
                <div class="d-flex gap-2 align-items-center">
                  <a href="<?= url_to($routeName . '.show', $rack->id) ?>" type="button" class="btn btn-outline-primary">Lihat</a>
                  <a href="<?= url_to($routeName . '.edit', $rack->id) ?>" type="button" class="btn btn-outline-warning">Ubah</a>
                  <button data-id="<?= $rack->id; ?>" data-button="delete" type="button" class="btn btn-outline-danger">Hapus</button>
                </div>
              </td>
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
          <th>No</th>
          <th>Kode</th>
          <th>Lantai</th>
          <th>Nama</th>
          <th>Dibuat Pada</th>
          <th>Diperbarui Pada</th>
          <th>Dihapus Pada</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="d-none">
    <form id="form-delete" method="post">
      <?= csrf_field() ?>
    </form>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('template_body') ?>
<script>
  $(document).on('click', '[data-button="delete"]', function() {
    const id = $(this).data('id');

    Swal.fire({
      title: 'Apakah kamu yakin?',
      text: "Data akan dihapus secara permanen!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        const form = $('#form-delete');
        const action = '<?= url_to($routeName . '.delete', '__ID__') ?>';

        form.attr('action', action.replace('__ID__', id))
        form.submit();
      }
    });
  });
</script>

<?= $this->endSection() ?>