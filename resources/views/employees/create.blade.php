@extends('employees.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Add employee</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top: 10px, margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('employees.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach($error->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                <input type="text" name="employee_name" class="form-control" placeholder="employee name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Email:</strong>
                <textarea class="form-control" style="height: 150px" name="employee_email" placeholder="employee email"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Address</strong>
                <textarea name="employee_address" class="form-control" placeholder="employee address" style="height: 150px"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Phone</strong>
                <input type="text" name="employee_phone" class="form-control" placeholder="employee phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Salary</strong>
                <input type="text" name="employee_salary" class="form-control" placeholder="employee salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection