@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a product</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('articles.update', $articles->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $articles->name }} />
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" value={{ $articles->description }} />
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" name="image" value={{ $articles->image }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection