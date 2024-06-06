@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-end">
                <a href="{{route('create')}}" class="btn btn-primary">TODO EKLE</a>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
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
