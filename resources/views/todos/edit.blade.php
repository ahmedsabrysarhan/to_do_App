@extends('todos.todo')

@section('title' , 'Edit Todo')
    
<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center" style="color: rgb(95, 94, 94)">Edit Todo</h1>
        </div>
        <div class="card-body ">
          <form action="{{url('/todo/edit/'. $todo->id)}}" method="POST">
            @csrf
            {{-- @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif --}}
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="" value="{{$todo->title}}">
              @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group mt-3">
              <textarea name="description" cols="10" rows="3" class="form-control">
                {{$todo->description}}
              </textarea>
              @error('description')
              <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="form-group text-center">
              <button type="submit" class="btn btn-success mt-3 col-md-4"> Update </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

