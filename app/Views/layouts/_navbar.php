<?php ?>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <i class="fas fa-wallet"></i> MoneyMate
    </a>
    <button class="navbar-toggler animate__animated animate__fadeIn" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-home"></i> Beranda</a>
            </li>
            <?php if (session('isLoggedIn') == true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('transactions'); ?>"><i class="fas fa-exchange-alt"></i> Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('categories'); ?>"><i class="fas fa-list"></i> Kategori</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <?php if (session('isLoggedIn') == true): ?>
                    <a class="nav-link" href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                <?php else: ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                <?php endif; ?>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ml-auto" action="<?= base_url('search'); ?>" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>