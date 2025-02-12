<?= $this->extend('/layout'); ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4">Daftar Transaksi</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="<?= base_url('transactions/create') ?>" class="btn btn-primary animate__animated animate__fadeIn"><i class="fas fa-plus"></i> Tambah Transaksi</a>
        <div>
            <select id="transactionFilter" class="form-control">
                <option value="">Semua Transaksi</option>
                <option value="debit">Transaksi Masuk</option>
                <option value="kredit">Transaksi Keluar</option>
            </select>
        </div>
    </div>

    <?= view('layouts/elements/_message_block') ?>

    <table class="table table-bordered table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Debit</th>
                <th scope="col">Kredit</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="transactionTableBody">
            <?php $no = 1;
            foreach ($transactions as $transaction): ?>
                <tr data-type="<?= $transaction['type'] ?>">
                    <th scope="row" class="align-middle"><?= $no++ ?></th>
                    <td class="align-middle"><?= $transaction['category_name'] ?></td>
                    <td class="align-middle">
                        <span class="badge <?= ($transaction['type'] == 'debit') ? 'badge-success' : 'badge-secondary' ?>">
                            <?= ($transaction['type'] == 'debit') ? ucfirst($transaction['type']) : '-' ?>
                        </span>
                    </td>
                    <td class="align-middle">
                        <span class="badge <?= ($transaction['type'] == 'kredit') ? 'badge-danger' : 'badge-secondary' ?>">
                            <?= ($transaction['type'] == 'kredit') ? ucfirst($transaction['type']) : '-' ?>
                        </span>
                    </td>
                    <td class="align-middle">Rp. <?= number_format($transaction['amount'], 2, ',', '.') ?></td>
                    <td class="align-middle"><?= $transaction['transaction_date'] ?></td>
                    <td class="align-middle"><?= $transaction['description'] ?></td>
                    <td>
                        <button class="btn btn-danger btn-delete animate__animated animate__fadeIn" data-id="<?= $transaction['id']; ?>">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

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
                        fetch('<?= base_url('transactions/delete') ?>', {
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