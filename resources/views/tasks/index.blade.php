@extends('layout.master')
@section('content')

<div class="row mt-5">
<div class="col-md-6">
@if(session()->has('msg'))
<div class="alert alert-success">
{{session()->get('msg')}}
</div>
@endif
<div class="card">

<div class="card-header">
Add Task
 </div>

<div class="card-body">
<form action ="{{ route('task.create') }}" method="post">
{{csrf_field()}}

<div>
<label for="task">Task </label>
<input type="text" name="title" id="title" placeholder="Task" class="form-control"/>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary">
</div>
</form>
</div>


<div class="card">

<div class="card-header">
View Tasks  </div>

<div class="card-body">
<table class="table table-bordered">
<tr>
<th>Task</th>
<th>Action</th>
</tr>
<tr>
@foreach ($tasks as $task )
<td>{{$task->title}}</td>
<td>

<a href="{{ route('task.destroy' , $task->id)   }}"><button class="btn btn-danger">Delete a Task</button> </a></td>
</tr>
@endforeach
</table>
</div>

</div>
</div>
</div>
@endsection