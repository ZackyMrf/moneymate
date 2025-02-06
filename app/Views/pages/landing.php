<?= $this->extend('/layout'); ?>
<?= $this->section('content'); ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    main {
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url('https://img.freepik.com/premium-vector/smiling-people-study-together-with-book-using-computer_140689-3541.jpg?w=2000') no-repeat center center;
        background-size: cover;
    }
    .jumbotron {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 2rem;
    }
    .display-4 {
        font-weight: bold;
        font-size: 3rem;
        animation: fadeInDown 1s;
    }
    .lead {
        font-size: 1.5rem;
        animation: fadeInUp 1s;
    }
    .bg-gradient-primary {
        background-image: linear-gradient(to right, #4e73df, #224abe);
    }
    .text-white {
        color: #fff !important;
    }
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="jumbotron bg-gradient-primary text-white text-center animate__animated animate__fadeIn">
                <h1 class="display-4 animate__animated animate__fadeInDown">Selamat Datang di MoneyMate</h1>
                <hr class="my-4">
                <p class="lead animate__animated animate__fadeInUp">MoneyMate adalah aplikasi pencatatan keuangan yang membantu Anda mengelola keuangan dengan mudah dan efisien. Catat pemasukan, pengeluaran, dan pantau saldo Anda dalam satu tempat.</p>
                <p class="animate__animated animate__fadeInUp">Dengan MoneyMate, Anda dapat:</p>
                <ul class="list-unstyled animate__animated animate__fadeInUp">
                    <li><i class="fas fa-check-circle"></i> Mencatat pemasukan dan pengeluaran dengan cepat</li>
                    <li><i class="fas fa-check-circle"></i> Melihat laporan keuangan secara real-time</li>
                    <li><i class="fas fa-check-circle"></i> Mengelola kategori keuangan sesuai kebutuhan Anda</li>
                    <li><i class="fas fa-check-circle"></i> Mengatur anggaran dan mencapai tujuan keuangan Anda</li>
                </ul>
                <a class="btn btn-light btn-lg animate__animated animate__fadeInUp" href="<?= base_url('register'); ?>" role="button">Mulai Sekarang</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

