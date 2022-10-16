@extends('layouts.dashboard')
@section('content')


    <div class="my-chart-contain row overflow-auto">
        <div class="col">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = <?php echo json_encode(array_reverse($time_stamp));?>
      
        const data = {
          labels: labels,
          datasets: [
            {
                label: 'Statistiche ordini ricevuti',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($orders);?>,
            },
            {
                label: 'Statistiche entrate ricevute',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($revenues);?>,
            }
        ]

        };
      
        const config = {
          type: 'bar',
          data: data,
          options: {
            maintainAspectRadio:false,
        }
        };
      
        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script>

    <style scoped >
        .my-chart-contain{
            width: 100%;
            aspect-ratio: auto;
        }
    </style>
@endsection