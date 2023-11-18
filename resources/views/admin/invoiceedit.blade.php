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
                <a href="{{route('invoice.dash')}}">
                  <li class="active">
                  <i class='bx bxs-bank'></i>
                  <span class="text">Invoices</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class='bx bxs-analyse'></i>
                  <span class="text">Analytics</span>
                </a>
              </li>
            </ul>
            @include('admin.layouts.navsection')

          {{--Main Section--}}
          <main>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="head-title">
				<div class="left">
					<h1>Invoices Dash</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Create</a>
						</li>
					</ul>
				</div>
			</div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-dollar-circle'></i>
                        <span class="text">
                        <h3>{{\App\Models\Invoice::distinct('invoicesId')->count()}}</h3>
                        <p>Total Invoices Created</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-dollar-circle'></i>
                        <span class="text">
                        <h3>{{\App\Models\Invoice::where('status','pending')->count()}}</h3>
                        <p>Pending Invoices</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <form class="row g-3" action={{ route('invoice.update', ['invoicesId' => $invoice->invoicesId]) }} method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="user_id" class="form-label">Client</label>
                                <select name="user_id" id="user_id" class="form-control" required>
                                    @foreach ($users as $user)
                                        <option value = "{{$user->id}}" {{ $user->id == $invoice->user_id ? 'selected' : '' }}>
                                            {{$user->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <p style="background: red">
                                    @if ($errors->has('user_id'))
                                    {{ $errors->first('user_id')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount" required value="{{ $invoice->amount }}">
                                <p style="background: red">
                                    @if ($errors->has('amount'))
                                    {{ $errors->first('amount')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="pending" {{ $invoice->status == 'pending' ? 'selected' : '' }} >Pending</option>
                                    <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }} >Paid</option>
                                </select>
                                <p style="background: red">
                                    @if ($errors->has('status'))
                                    {{ $errors->first('status')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Invoice</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
          {{--End Of Main Section--}}
        </section>

        {{--End Of Content Section--}}
        @include('admin.layouts.tailsection')



