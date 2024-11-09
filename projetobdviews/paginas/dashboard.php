<?php

    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/produtos.php';

    $dados = gerarDadosGrafico();
?>

<main class="container">
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <!-- Div onde o gráfico será renderizado -->
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>

    <!-- Inclusão da biblioteca Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Carregar a biblioteca do Google Charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Array de dados que será usado no gráfico
            var data = google.visualization.arrayToDataTable([
                ['Produto', 'Estoque Comprado', { role: 'style' }],
                <?php foreach ($dados as $d): ?>
                    ['<?= $d['nome'] ?>', <?= $d['estoque'] ?>, 'magenta'],
                <?php endforeach; ?>
            ]);

            // Opções de customização do gráfico
            var options = {
                title: 'Estoque de Produtos Comprados',
                hAxis: {title: 'Produtos',  titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0},
                chartArea: {width: '70%', height: '70%'}
            };

            // Renderizar o gráfico na div com id 'chart_div'
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</main>

<?php require_once 'rodape.php'; ?>
