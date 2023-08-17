<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Surname:</strong>
            {!! Form::text('surname', null, array('placeholder' => 'surname','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Position:</strong>
            {!! Form::text('position', null, array('placeholder' => 'position','class' => 'form-control')) !!}
        </div>

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>