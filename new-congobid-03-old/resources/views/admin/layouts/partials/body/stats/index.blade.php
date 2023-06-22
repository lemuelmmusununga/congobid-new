@section('body')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des salons</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('stats.search') }}">
                    @csrf
                    <div class="col-md-6">
                        <label for="date" class="mb-2">Sélectionnez une date :</label>
                        <input type="date" class="form-control my-2" name="date" id="date" value="{{ $selectedDate }}">
                        <button type="submit" class="btn btn-success">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-passe full-height">
            <div class="col-md-3">
                <h6>Nombres d'utilisateurs : {{json_encode($users) ?? 0}} </h6>
            </div>
            <div class="card-body">
                <canvas id="userChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <script>
        window.onload = function(){
            var ctx = document.getElementById('userChart').getContext('2d');

            var userChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode(array_keys($users)); ?>,
                    datasets: [{
                        label: 'Utilisateurs connectés par heure',
                        data: <?php echo json_encode(array_values($users)); ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: 'Nombre d\'utilisateurs connectés par heure'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    </script>
@endsection
