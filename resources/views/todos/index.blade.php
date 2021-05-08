@extends('todos.todo')

@section('content')
<div class="container">
  <div class="row pt-3 justify-content-center">
    <div class="card my-3" style="width:50%">
      <div class="card-header text-center">
        <h1>All Todos</h1>
      </div>
      <div class="card-body">
        @if ( session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @elseif(session()->has('delete'))
          <div class="alert alert-danger">{{ session()->get('delete') }}</div>
        @endif
        <ul class="list-group">
          @foreach ($todos as $todo)
              <li class="list-group-item text-muted">
                {{ $todo->title }}
                <span class="float-end me-2">
                  <a href="{{url('/todo/delete/'. $todo->id)}}" >
                    <i class="fa fa-trash-o" style="color: red"></i>
                  </a>
                </span>
                <span class="float-end me-2">
                  <a href="{{url('/todo/edit/'. $todo->id)}}" >
                    <i class="fa fa-edit" style="color: rgb(103, 221, 103)"></i>
                  </a>
                </span>
                <span class="float-end me-2">
                  <a href="{{url('/todo/show/' . $todo->id)}}" >
                    <i class="fa fa-eye" style="color: blue"></i>
                  </a>
                </span>
                @if (!$todo->compleate)
                  <span class="float-end me-2">
                    <a href="{{url('/todo/compleate/' . $todo->id)}}" >
                      <i class="fa fa-check-square" style="color: rgb(22, 224, 181)"></i>
                    </a>
                  </span>
                @endif
                
              </li>
          @endforeach
        </ul>
        <a href="{{url('/todo/create')}}" class="btn btn-primary mt-3 text-center">Add new to do</a>
      </div>
    </div>
  </div>
</div>
@endsection