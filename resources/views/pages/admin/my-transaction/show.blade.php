@extends('layouts.parent')

@section('title', 'My Transaction')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">My Transaction</h5>

            <nav>
                <ol class="breadcrumb">
                    @if (Auth::user()->role == 'admin')
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    @endif
                    <li class="breadcrumb-item"><a href="#">Transaction</a></li>
                    <li class="breadcrumb-item active">My Transaction</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Transaction</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name Account</th>
                        <td scope="col">
                            {{ auth()->user()->name }}
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Reciever Name</th>
                        <td scope="col">
                            {{ $transaction->name }}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Reciever Email</th>
                        <td>{{ $transaction->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Reciever Phone</th>
                        <td>{{ $transaction->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>{{ $transaction->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Corier</th>
                        <td>{{ $transaction->courier }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Payment</th>
                        <td>{{ $transaction->payment }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Payment URL</th>
                        <td>
                            <a href="{{ $transaction->payment_url }}" target="_blank">
                                {{ $transaction->payment_url }}
                            </a>
                        </td>
                    <tr>
                        <th scope="row">Status</th>
                        <td>
                            @if ($transaction->status == 'EXPIRED')
                                <span class="badge bg-danger text-uppercase">Expired</span>
                            @elseif ($transaction->status == 'PENDING')
                                <span class="badge bg-warning text-uppercase">Pending</span>
                            @elseif ($transaction->status == 'SETTLEMENT')
                                <span class="badge bg-info text-uppercase">Settlement</span>
                            @else
                                <span class="badge bg-success text-uppercase">Success</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Total Price</th>
                        <td>Rp. {{ number_format($transaction->total_price) }}</td>
                    </tr>
                </thead>
            </table>
            <!-- End Table with stripped rows -->   

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List Product</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction->transaction_items as $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->product->name }}</td>
                            <td>Rp. {{ number_format($detail->product->price) }}</td>
                            <td>
                                <img src="{{ $detail->product->product_galleries()->exists() ? url('storage/product/gallery', $detail->product->product_galleries->first()->image) : 'https://via.placeholder.com/100' }}"
                                    width="100">
                            </td>
                            {{-- <td>Rp. {{ number_format($detail->subtotal) }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>

@endsection
