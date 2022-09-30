@extends('books.layout')

@section('content')

    <div class=row>
        <div class="col-lg-12">
            <h2 class="text-center">Edit employee</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>    
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

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author ID:</strong>
                    <input type="number" name="authorid" value="{{ $book->authorid }}" class="form-control" placeholder="Author ID">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <textarea class="form-control" name="title" style="height: 150px" placeholder="Title">{{ $book->title }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ISBN: </strong>
                    <input type="text" name="ISBN" value="{{ $book->ISBN }}" class="form-control" placeholder="ISBN" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Publish Year: </strong>
                    <input type="number" name="pub_year" value="{{ $book->pub_year }}" class="form-control" placeholder="publish year" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Available</strong>
                    <input type="number" name="available" value="{{ $book->available }}" class="form-control" placeholder="available" style="height:150px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection