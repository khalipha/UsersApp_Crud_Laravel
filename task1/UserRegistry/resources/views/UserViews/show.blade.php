
@extends('layouts.app')

@section('content')

@section('title','View User Details')

<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2> User details</h2>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>

</div>
</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>
        {{ $user->name}}
    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">
  <div class="form-group">
        <strong>Surname:</strong>
        {{ $user->surname}}
        </div>

        <div class="form-group">
        <strong>Email:</strong>
        {{ $user->email}}
        </div>

        <div class="form-group">
        <strong>Position:</strong>
        {{ $user->position}}
        </div>
       </div>

</div>
@endsection