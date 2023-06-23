@section('body')
    <div class="row">
        @php
            use App\Models\PivotBideurEnchere;
            $i=0;
        @endphp

        @foreach($users as $user)
            @if(Cache::has('user-is-online-' . $user->id))
                @php
                $i = $i + 1 ;
                @endphp

            @endif
        @endforeach

    <div class="col-md-6" >
        <div class="card card-passe full-height">
            <div class="card-body">
                <canvas id="userChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6" >
        <div class="card card-article full-height">
            <div class="card-body">
                <canvas id="articleChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6" >
        <div class="card card-article full-height">
            <div class="card-body">
                <canvas id="paymentSystemsChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6" >
        <div class="card card-article full-height">
            <div class="card-body">
                <canvas id="paymentCountryChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        var ctx = document.getElementById('userChart').getContext('2d');
        var ctx1 = document.getElementById('paymentSystemsChart').getContext('2d');
        var ctx3 = document.getElementById('paymentCountryChart').getContext('2d');
        var ctx2 = document.getElementById('articleChart').getContext('2d');
        var userChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Utilisateurs {{count($users)}}  ', 'Connecté {{$i}}', 'Inactifs {{count($users) - $i}}'],
                datasets: [{
                    label: 'Nombre d\'utilisateurs',
                    data: [{{ count($users) }}, {{ $i }}, {{ count($users) - $i }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(54, 255, 235, 0.4)',
                        'rgba(255, 206, 86, 0.4)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 255, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: '#333',
                        fontSize: 14,
                        boxWidth: 20,
                        padding: 20
                    }
                },
                title: {
                    display: true,
                    text: 'Répartition des utilisateurs',
                    fontColor: '#333',
                    fontSize: 18,
                    padding: 20
                }
            }
        });
        var paymentSystemsChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['M-pesa', 'Airtel money', 'Orange Money'],
                datasets: [{
                    label: 'Nombre d\'utilisateurs',
                    data: [500, 700, 300],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(54, 255, 235, 0.4)',
                        'rgba(255, 206, 86, 0.4)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 255, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Répartition des systèmes de paiement',
                    fontColor: '#333',
                    fontSize: 18,
                    padding: 20
                }
            }
        });
        var paymentCountryChart = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['M-pesa', 'Airtel money', 'Orange money'],
                datasets: [{
                    label: 'RDC',
                    data: [500, 700, 300],
                    backgroundColor: 'rgba(255, 99, 132, 0.4)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }, {
                    label: 'Congo',
                    data: [200, 400, 100],
                    backgroundColor: 'rgba(54, 255, 235, 0.4)',
                    borderColor: 'rgba(54, 255, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Cameroun',
                    data: [300, 500, 200],
                    backgroundColor: 'rgba(255, 206, 86, 0.4)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'bottom'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Répartition des systèmes de paiement par pays',
                    fontColor: '#333',
                    fontSize: 18,
                    padding: 20
                }
            }
        });
        var articleChart = new Chart(ctx2, {
            type: 'doughnut', // Type de charte (bar, line, pie, etc.)
            data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
            datasets: [{
                label: 'Ventes mensuelles',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(75, 192, 192, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                'rgba(255, 159, 64, 0.4)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 255, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true
                }
                }]
            }
            }
        });
    };
</script>
@endsection
