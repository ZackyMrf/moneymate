<?php

$categoriesList = '';
foreach ($categories as $category) {
    $categoriesList .= '<li class="list-group-item">' . esc($category['name']) . '</li>';
}

$transactionsList = '';
foreach ($transactions as $transaction) {
    $transactionsList .= '<li class="list-group-item">' . esc($transaction['description']) . '</li>';
}

$usersList = '';
foreach ($users as $user) {
    $usersList .= '<li class="list-group-item">' . esc($user['username']) . '</li>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Search Results for "<?= esc($query) ?>"</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Categories</h2>
            </div>
            <ul class="list-group list-group-flush">
                <?= $categoriesList ?>
            </ul>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Transactions</h2>
            </div>
            <ul class="list-group list-group-flush">
                <?= $transactionsList ?>
            </ul>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Users</h2>
            </div>
            <ul class="list-group list-group-flush">
                <?= $usersList ?>
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
