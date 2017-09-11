@extends('layouts.frontend')

@push('plugin_css')
<style>
    .shopping-cart .cart-ship-info label {
        margin-bottom: 0px;
    }
    .m_20{
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>TRANSAKSI</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">My Account</a></li>
                    <li class="active">TRANSAKSI</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Durasi</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($model as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ date('d F Y',strtotime($row->created_at)) }}</td>
                                            <td>{{ $row->durasi }} Hari</td>
                                            <td>IDR {{ number_format($row->total,0,',','.') }}</td>
                                            <td>{{ $row->getStatus() }}</td>
                                            <td><a href="{{ route('member.transaction.show',$row->id) }}">Detail</a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('plugin_scripts')

@endpush

@push('scripts')
@endpush