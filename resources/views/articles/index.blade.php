
@extends('layouts.main')

@section('header')
  <h1 class="mt-5">Tutti gli articoli</h1>
@endsection

@section('content')

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titolo</th>
        <th>Sottotitolo</th>
        <th>Autore</th>
        <th>Testo</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->subtitle }}</td>
        <td>{{ $article->author }}</td>
        <td>{{ $article->text }}</td>

        <td class="text-center">
          <a href="" class="btn btn-outline-info">MOSTRA</a>
        </td>
        <td class="text-center">
          <a href="" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
        </td>
        <td>
          <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection

@section('footer')
  
@endsection