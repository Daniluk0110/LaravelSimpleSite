<div class="wrapper container-fluid">

    {!! Form::open(['url' => route('portfolioAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name', old('name'), ['class' => 'form-control','placeholder'=>'Input Portfolio Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('filter', 'Filter:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('filter', old('filter'), ['class' => 'form-control','placeholder'=>'Input Portfolio Filter']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Select Image','data-buttonName'=>"btn-primary",'data-placeholder'=>"No File Selected"]) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}

</div>