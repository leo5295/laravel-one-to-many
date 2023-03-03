@extends('layouts.admin')

@section('content')
<div>
    <a href="{{route('admin.projects.index')}}">
        <button class="btn btn-secondary m-3">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
    </a>
  </div>
<div class="container-fluid">
    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Modifica title</label>
          <input value="{{ old('title') ?? $project['title'] }}" type="text" class="form-control" id="" aria-describedby="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modifica descrizione</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="content">{{old('content') ?? $project['content']}}</textarea>
        </div>
    
        <div class="form-group">
    
            <button type="submit" class="btn btn-primary">Modifica progetto</button>
        </div>
      </form>
</div>
@endsection