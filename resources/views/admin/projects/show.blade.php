@extends('layouts.admin')

@section('content')
<div>
    <a href="{{route('admin.projects.index')}}">
        <button class="btn btn-secondary m-3">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
    </a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Slug</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$project->title}}</td>
          <td>{{$project->content}}</td>
          <td>{{$project->slug}}</td>
        </tr>  
    </tbody>
  </table>
@endsection