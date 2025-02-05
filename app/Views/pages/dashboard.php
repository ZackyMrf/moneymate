<?= $this->extend('/layout'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2 class="mb-4">Dashboard Keuangan</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-arrow-up"></i> Total Pemasukan</h5>
                    <h3 id="totalIncome">Rp 0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3 animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-arrow-down"></i> Total Pengeluaran</h5>
                    <h3 id="totalExpense">Rp 0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-wallet"></i> Total Saldo</h5>
                    <h3 id="totalBalance">Rp 0</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <canvas id="donutChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch('/api/data')
            .then(response => response.json())
            .then(data => {
                document.getElementById('totalIncome').innerText = 'Rp ' + data.total_income;
                document.getElementById('totalExpense').innerText = 'Rp ' + data.total_expense;
                document.getElementById('totalBalance').innerText = 'Rp ' + data.total_balance;

                new Chart(document.getElementById("donutChart"), {
                    type: 'doughnut',
                    data: {
                        labels: ["Pemasukan", "Pengeluaran"],
                        datasets: [{
                            data: [data.total_income, data.total_expense],
                            backgroundColor: ['#28a745', '#dc3545']
                        }]
                    },
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var label = data.labels[tooltipItem.index] || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += 'Rp ' + data.datasets[0].data[tooltipItem.index].toLocaleString();
                                    return label;
                                }
                            }
                        }
                    }
                });

                new Chart(document.getElementById("lineChart"), {
                    type: 'line',
                    data: {
                        labels: data.dates,
                        datasets: [{
                            label: "Pemasukan",
                            data: data.income_data,
                            borderColor: "#28a745",
                            fill: false
                        }, {
                            label: "Pengeluaran",
                            data: data.expense_data,
                            borderColor: "#dc3545",
                            fill: false
                        }]
                    },
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += 'Rp ' + tooltipItem.yLabel.toLocaleString();
                                    return label;
                                }
                            }
                        }
                    }
                });
            });
    });
</script>
<?= $this->endSection(); ?>
