
<?php if (isset($datos)) {?>

    <?php $mes = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];?>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawColColors);

        function drawColColors() {

            var data = google.visualization.arrayToDataTable([
                ['Mes', 'Clientes'],

                @foreach ($datos as $dato)
                    ['{{ $mes[$dato->num_mes - 1] }}', {{ $dato->clientes_mes}}],
                @endforeach
            ]);

            var options = {

            };

            var chart = new google.visualization.ColumnChart(document.getElementById('grafica'));
            chart.draw(data, options);
            }
    </script>

<?php }?>