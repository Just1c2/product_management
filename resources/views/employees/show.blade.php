@extends('employees.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show employee</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px; margin-bottom: 10px">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name : </strong>
                {{ $employee->employee_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Email : </strong>
                {{ $employee->employee_email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Address: </strong>
                {{ $employee->employee_address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Phone: </strong>
                {{ $employee->employee_phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Salary: </strong>
                {{ $employee->employee_salary }}
            </div>
        </div>
    </div>
@endsection