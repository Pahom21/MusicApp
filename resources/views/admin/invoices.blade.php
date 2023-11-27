

@include('admin.layouts.headsection')
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Vooze Admin</span>
            </a>
            {{--Side Bar Section--}}
            <ul class="side-menu top">
                <li>
                    <a href="{{route('admin.dashboard')}}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                    </a>
              </li>
              <li>
                <a href="{{route('music.dashboard')}}">
                  <i class='bx bxl-deezer'></i>
                  <span class="text">Music Operations</span>
                </a>
              </li>
              <li>
                <a href="#">
                   <li class="active">
                  <i class='bx bxs-bank'></i>
                  <span class="text">Invoices</span>
                </a>
              </li>
              <li>
                <a href="{{route('admin.analytics')}}">
                  <i class='bx bxs-analyse'></i>
                  <span class="text">Analytics</span>
                </a>
              </li>
            </ul>
            @include('admin.layouts.navsection')

          {{--Main Section--}}
          <main>
            @if ($message = Session::get('success'))
                <div class = "alert alert-success">
                    <p><i class='bx bx-check-circle'></i> {{ $message }}</p>
                </div>
            @elseif ($message = Session::get('error'))
                <div>
                    <p><i class='bx bx-x-circle'></i> {{ $message }}</p>
                </div>
            @endif
            <div class="head-title">
				<div class="left">
					<h1>Invoicing Dash</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="{{route('invoice.create')}}" class="btn-download">
					<i class='bx bx-plus'></i>
					<span class="text">Create Invoice</span>
				</a>
				<a href="{{route('invoice.pdf')}}" id="downloadPdf" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-dollar-circle'></i>
                        <span class="text">
                        <h3>{{\App\Models\Invoice::distinct('invoicesId')->count()}}</h3>
                        <p>Total Invoices</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-dollar-circle'></i>
                        <span class="text">
                        <h3>{{\App\Models\Invoice::where('status','pending')->count()}}</h3>
                        <p>Invoices Pending</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-dollar-circle'></i>
                        <span class="text">
                        <h3>{{\App\Models\Invoice::where('status','paid')->count()}}</h3>
                        <p>Invoices Paid</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Invoices</h3>
                            {{-- <a href=""><i class='bx bx-search' ></i></a>
                            <i class='bx bx-filter' ></i> --}}
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
		    </main>
          {{--End Of Main Section--}}
        </section>


        <!-- Include the jsPDF library -->

        <!-- Include the latest version of jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Include the latest version of jsPDF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#downloadPdf').click(function () {
                    // Create a new jsPDF instance
                    var pdf = new jsPDF();

                    // Get the HTML content of the article
                    var content = $('#invoiceContent')[0];

                    // Use jsPDF's fromHTML to add HTML content to the PDF
                    pdf.fromHTML(content, 15, 15);

                    // Save the PDF with the name 'invoice.pdf'
                    pdf.save('invoice.pdf');
                });
            });
        </script>
        {{--End Of Content Section--}}
        @include('admin.layouts.tailsection')



