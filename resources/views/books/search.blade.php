@extends('books.layout')

@section('content')

<table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Author ID</th>
                <th>Title</th>
                <th>ISBN</th>
                <th>Publish Year</th>
                <th>Available</th>
                <th width="280px">More</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$book->authorid}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->pub_year}}</td>
                    <td>{{$book->available}}</td>
                    <td>
                        <form action="{{route('books.destroy',$book->id)}}" method="POST">
                            <a class="btn btn-info" href="{{route('books.show',$book->id)}}">Show</a>
                            <a class="btn btn-primary" href="{{route('books.edit',$book->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

@endsection