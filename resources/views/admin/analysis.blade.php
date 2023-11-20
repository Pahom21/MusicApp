@include('admin.layouts.headsection')
<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-smile'></i>
            <span class="text">Vooze Admin</span>
        </a>
        {{--Side Bar Section--}}
        <ul class="side-menu top">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('music.dashboard') }}">
                    <i class='bx bxl-deezer'></i>
                    <span class="text">Music Operations</span>
                </a>
            </li>
            <li>
                <a href="{{ route('invoice.dash') }}">
                    <i class='bx bxs-bank'></i>
                    <span class="text">Invoices</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('admin.analytics') }}">
                    <i class='bx bxs-analyse'></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
        </ul>
        @include('admin.layouts.navsection')

        {{--Main Section--}}
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Analytics</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Analysis</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bx-user'></i>
                    <span class="text">
                        <h3>{{ \App\Models\User::distinct('email')->count() }}</h3>
                        <p>Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-library'></i>
                    <span class="text">
                        <h3>{{ \App\Models\Song::distinct('title')->count() }}</h3>
                        <p>Songs</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-dollar-circle'></i>
                    <span class="text">
                        <h3>{{ \App\Models\Invoice::distinct('InvoicesId')->count() }}</h3>
                        <p>Invoices</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">

                <div class="graph-container">
                    <div class="head">
                        <h3>User Registrations Per Month</h3>
                    </div>
                    <canvas id="userChart"></canvas>
                </div>
                <div class="graph-container">
                    <div class="head">
                        <h3>Invoices paid per month</h3>
                    </div>
                    <canvas id="invoiceChart"></canvas>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Users</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scnddata as $user)
                                <tr>
                                    <td>
                                        <p>{{ $user->name }}</p>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role == 'Admin')
                                            <span class="status Admin">Admin</span>
                                        @elseif ($user->role == 'User')
                                            <span class="status User">User</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        {{--End Of Main Section--}}
    </section>

        {{--End Of Content Section--}}

     <script src="{{ asset('js/script.js') }}"></script>

        <script>
            // User Registrations per month
            var userCtx = document.getElementById('userChart').getContext('2d');
            var userChart = new Chart(userCtx, {
                type: 'pie',
                data: {
                    labels: {!! $graphData['userRegistrations']->pluck('month') !!},
                    datasets: [{
                        data: {!! $graphData['userRegistrations']->pluck('count') !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                        ],
                    }],
                },
            });

            // Invoices Paid and Unpaid (overall)
var invoiceCtx = document.getElementById('invoiceChart').getContext('2d');
var invoiceChart = new Chart(invoiceCtx, {
    type: 'pie',
    data: {
        labels: ['Paid', 'Unpaid'],
        datasets: [{
            label: 'Paid And Unpaid Invoices',
            data: [
                {!! $graphData['invoicesPaid']['paidSum'] ?? 0 !!}, // Total count of paid invoices
                {!! $graphData['invoicesPaid']['unpaidSum'] ?? 0 !!}, // Total count of unpaid invoices
            ],
            backgroundColor: [
                'rgba(0, 123, 255, 0.7)', // Blue for Paid
                'rgba(255, 99, 132, 0.7)', // Red for Unpaid
            ],
        }],
    },
});

    </script>
</body>
</html>
