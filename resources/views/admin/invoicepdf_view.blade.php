<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invoices Trial</title>
        <link rel="stylesheet" href="{{ asset('css/admdash.css')}}">
    </head>
    <body>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>{{ $title }}</h3>
                    <p>{{ $date }}</p>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Invoice Id</th>
                            <th>User</th>
                            <th>Amount Owed</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>
                                <p>{{$invoice->invoicesId}}</p>
                            </td>
                            <td>
                                <p>{{$invoice->user->name}}</p>
                            </td>
                            <td>
                                <p>{{$invoice->amount}}</p>
                            </td>
                            <td>
                                @if($invoice->status=='pending')
                                    <span class="status Admin">Pending</span>
                                @elseif($invoice->status=='paid')
                                    <span class="status User">Paid</span>
                                @endif

                            </td>
                            <td>
                                <p>{{$invoice->created_at}}</p>
                            </td>
                            <td>
                                <a href="{{ route('invoice.edit', ['invoicesId' => $invoice->invoicesId]) }}"><i class='bx bx-edit-alt'></i></a>

                                &nbsp;
                                <span class="text">
                                    <a href="" onclick="return confirm('Are you sure you want to delete this record?')">
                                        <i class='bx bx-folder-minus'></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
