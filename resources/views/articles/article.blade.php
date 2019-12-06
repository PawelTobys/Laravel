@extends('layouts.app')

@section('content')
<div class="content">
    <div style="text-align:center">
        <div class="col-sm-12">
         <img src="/storage/{{$article->image}}" alt="image" class="img-article">
    </div>
    <div>
        <h1>{{$article->name}}</h2>
        <p>{{$article->description}}</p>
        <p>{{ $article->created_at }}</p>
    </div>
        @foreach ($comments as $comment)
         <div style="align-content:center">
            <ul style="list-style-type: none">
            <li>{{$comment->commment}}</li>
            </ul>
        </div>
        @endforeach
        <div>
            <a href="{{ route('article.article', $article)}}"><button>Comments</button></a>
        </div> 
    </div>
</div>
@endsection