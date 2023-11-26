<!DOCTYPE html>
<html data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invoices Trial</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
        <link rel="stylesheet" href="{{ asset('css/admdash.css')}}">
    </head>
    <body>
        <article>
            <header>
                <h3>{{ $title }}</h3>
                <p>{{ $date }}</p>
            </header>
            <table role="grid">
                <thead>
                    <tr>
                        <th>Invoice Id</th>
                        <th>User</th>
                        <th>Amount Owed</th>
                        <th>Status</th>
                        <th>Date Created</th>

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
            <footer>
                <hgroup>
                    <h3>Total Amount</h3>
                    <h3>{{ $invoices->sum('amount')}}</h3>
                  </hgroup>
            </footer>
        </article>
    </body>
</html>
