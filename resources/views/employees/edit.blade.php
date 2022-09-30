@extends('employees.layout')

@section('content')

    <div class=row>
        <div class="col-lg-12">
            <h2 class="text-center">Edit employee</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>    
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Employee Name:</strong>
                    <input type="text" name="employee_name" value="{{ $employee->employee_name }}" class="form-control" placeholder="employee Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emlpoyee Email:</strong>
                    <textarea class="form-control" name="employee_email" style="height: 150px" placeholder="employee email">{{ $employee->employee_email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Employee Address</strong>
                    <input type="text" name="employee_address" value="{{ $employee->employee_address }}" class="form-control" placeholder="employee address" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Employee Phone</strong>
                    <input type="text" name="employee_phone" value="{{ $employee->employee_phone }}" class="form-control" placeholder="employee phone" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Employee Salary</strong>
                    <input type="text" name="employee_salary" value="{{ $employee->employee_salary }}" class="form-control" placeholder="employee salary" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection