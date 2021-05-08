@extends('todos.todo')
@section('title', $todo->title . ' todo')

<div class="container">
  <h1 class="mt-5 text-center">{{ $todo->title }}</h1>
  <div class="row pt-5 justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header">
          <span>Details</span>
          <span class="badge bg-warning text-dark float-end">
            {{ boolval($todo->compleate) ? 'Completed' : 'Non Completed' }}
          </span>
        </div>

        <div class="card-body">
          {{ $todo->description }}
        </div>

      </div>
    </div>
  </div>
</div>
