
@extends('layouts.app')

@section('content')

@section('title','View Student Details')

<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2> Student details</h2>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
    </div>

</div>
</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>

        {{ $students->name}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

 

        <div class="form-group">

        <strong>Surname:</strong>

        {{ $students->surname}}

        </div>

        <div class="form-group">

        <strong>Email:</strong>

        {{ $students->email}}

        </div>

        <div class="form-group">

        <strong>Position:</strong>

        {{ $students->position}}

        </div>

       </div>

</div>
@endsection