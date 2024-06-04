@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-end">
                <a href="{{route('create')}}" class="btn btn-primary">TODO EKLE</a>
            </div>
        </div>
    <table class="table table-striped ">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BAŞLIK</th>
            <th scope="col">AÇIKLAMA</th>
            <th scope="col">YAPILDI MI?</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $key=> $todo)
        <tr>
            <th>{{$key+1}}</th>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->completed}}</td>
            <td>
                <a href="{{route('show',$todo->id)}}" class="btn btn-info">GÖSTER</a>
                <a href="{{route('edit',$todo->id)}}" class="btn btn-warning">DÜZENLE</a>
                <a href="{{route('destroy',$todo->id)}}" class="btn btn-danger">SİL</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
