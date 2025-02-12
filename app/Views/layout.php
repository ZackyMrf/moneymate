<!doctype html>
<html lang="en">

<head>
    <?= $this->include('layouts/_header'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?= $this->include('layouts/_navbar'); ?>
    <main role="main" class="container-fluid">
        <div class="starter-template">
            <?= $this->renderSection('content'); ?>
        </div>
    </main>
    <?= $this->include('layouts/_footer'); ?>
</body>

</html>