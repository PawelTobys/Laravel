@extends('welcome')

@section('content')

    <div class="cointaner">
  <div class="row justify-content-center">
    <div>
        <h1>List of products</h1>
    @isset($articles)
        <h2>Total products: {{ count($articles) }}</h2>
        @foreach ($articles as $article)
            <p>{{ $article->id}}. {{ $article->name}}</p>
            <img src="/public/image/articles/{{$article->image}}" alt="image">
            <p>Added on {{ $article->created_at }}</p>
        @endforeach
    @endisset

    </div>
  </div>
</div>

@endsection