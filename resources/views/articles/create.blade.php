@extends('layouts.app')

@section('content')
<div class="cointaner">
        <div class="row justify-content-center">
<form action="{{ route('addArticle') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div>
        <p class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
        </p>
        <p class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Enter description" required>
        </p>
        <p class="input-group">
          <p class="custom-file">
            <label for="image" class="custom-file-input" >Choose file</label>
            <input type="file" name="image" class="form-control" required>
          </p>
        </p>

        <input type="submit" class="btn btn-primary" value="Add product">
        <button class="btn btn-primary"><a href="{{ url('/') }}" style="color:white">Home</a></button>
    </div>	
</form>
        </div>
</div>  
@endsection