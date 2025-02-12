<?= $this->extend('/layout'); ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Daftar Kategori</h2>
    <a href="<?= base_url('categories/create') ?>" class="btn btn-primary mb-3 animate__animated animate__fadeIn"><i class="fas fa-plus"></i> Tambah Kategori</a>

    <?= view('layouts/elements/_message_block') ?>

    <table class="table table-bordered text-center table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($categories as $category): ?>
                <tr>
                    <th scope="row" class="align-middle"><?= $no++ ?></th>
                    <td class="align-middle"><?= $category['name'] ?></td>
                    <td>
                        <button class="btn btn-danger btn-delete animate__animated animate__fadeIn" data-id="<?= $category['id']; ?>" data-toggle="modal"
                            data-target="#deleteModal"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= view('layouts/elements/_modal') ?>


<script>
    let deleteId = null; // Variabel untuk menyimpan ID transaksi yang akan dihapus
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                deleteId = this.getAttribute("data-id"); // Simpan ID transaksi

                // Tampilkan konfirmasi SweetAlert2
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan bisa mengembalikan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika dikonfirmasi, kirim permintaan penghapusan
                        fetch('<?= base_url('/categories/delete') ?>', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                '<?= csrf_header() ?>': '<?= csrf_hash() ?>'
                            },
                            body: JSON.stringify({ id: deleteId })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!',
                                    'Transaksi berhasil dihapus.',
                                    'success'
                                ).then(() => {
                                    location.reload(); // Refresh halaman
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!',
                                    'Transaksi tidak bisa dihapus.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });

        // Filter transactions
        document.getElementById('transactionFilter').addEventListener('change', function () {
            const filterValue = this.value;
            const rows = document.querySelectorAll('#transactionTableBody tr');
            rows.forEach(row => {
                if (filterValue === '' || row.getAttribute('data-type') === filterValue) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>