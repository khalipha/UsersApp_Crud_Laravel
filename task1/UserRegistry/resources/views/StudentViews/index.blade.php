@extends('layouts.app')

@section('content')

@section('title','View Student')

<!--  -->
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>User Listing</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-success" href="{{ route('students.create') }}"> Create New user</a>

    </div>

</div>

</div>


<table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    <th>Position</th>
    <th width="280px">Action</th>
</tr>

@foreach ($students as $student)

<tr>
<td>{{ ++$i }}</td>
<td>{{ $student->id }}</td>
<td>{{ $student->name}}</td>
<td>{{ $student->surname}}</td>
<td>{{ $student->email}}</td>
<td>{{ $student->position}}</td>

<td>

    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

  

    <!-- {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}

    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!} -->

    <button class="btn btn-danger" data-mystudentid={{$student->id}} data-toggle="modal" data-target="#delete">Delete</button>

</td>

</tr>

@endforeach

</table>

<!-- START MODEL -->


<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('students.destroy',$student->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="student_id" id="u_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- END MODEL -->



@endsection
