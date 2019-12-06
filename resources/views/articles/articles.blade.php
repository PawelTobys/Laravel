@extends('welcome')

@section('content')
<div class="row">
  <div class="col-sm-12">
  @isset($articles)
  <h1 class="display-3"> Products on this site: {{ $articles->count() }}</h1> 
  @endisset
      <h2 class="links">
          <a href="{{ route('articles.create') }}">Add products</a>
      </h2>   
    <table class="table table-striped">
      <thead class="thead">
          <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Description</td>
            <td>Added on</td>
            <td colspan="3">Actions</td>
          </tr>
      </thead>
      <tbody class="tbody">
          @foreach($articles as $article)
          <tr>
              <td> <img src="/storage/{{$article->image}}" alt="image" class="img-articles"></td>
              <td>{{$article->name}}</td>
              <td>{{$article->description}}</td>
              <td>{{ $article->created_at }} </td>
              <td>
                  <a href="{{ route('article.article', $article)}}"><button>Comments</button></a>
              </td>
              <td>
                  <a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary"> <button>Edit</button></a>
              </td>
              <td>
                  <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  @endsection