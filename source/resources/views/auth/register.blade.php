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
                <h4>REGISTER</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">REGISTER</li>
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
                            <div class="col-sm-6 col-sm-offset-3">
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <ul class="row">
                                        <li class="col-md-12 m_20">
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="col-md-4 control-label">NAMA LENGKAP</label>

                                                <div class="col-md-12">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-12 m_20">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">ALAMAT EMAIL</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-12 m_20">
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">PASSWORD</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-12 m_20">
                                            <div class="form-group">
                                                <label for="password-confirm" class="col-md-4 control-label">CONFIRM PASSWORD</label>

                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-12 m_20">
                                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                <label for="address" class="col-md-4 control-label">ALAMAT</label>

                                                <div class="col-md-12">
                                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                                    @if ($errors->has('address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-12 m_20">
                                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <label for="phone" class="col-md-4 control-label">NO HP</label>

                                                <div class="col-md-12">
                                                    <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-small btn-dark pull-right">
                                        REGISTER
                                    </button>
                                </form>
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

