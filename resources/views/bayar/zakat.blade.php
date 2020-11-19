@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">

    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

<form action="{{ route('bayar.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number</strong>
                <input type="number" name="phone_number" class="form-control" placeholder="+62xxxxxxxxxxxx">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount of Zakat</strong>
                <input type="text" name="zakat_amount" class="form-control" placeholder="10000">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zakat Description</strong>
                <p>Please put "-" if you don't want to add Description on your zakat.
                <input type="text" name="zakat_desc" class="form-control" placeholder="Text Here">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="status" class="form-control" value="0">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
