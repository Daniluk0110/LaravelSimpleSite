<div class="wrapper container-fluid">

    {!! Form::open(['url' => route('serviceAdd'),'class'=>'form-horizontal','method'=>'POST']) !!}

    <div class="form-group">
        {!! Form::label('name','Name',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Input Service Name'])!!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Text:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input Service Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('icon', 'Icon:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('icon', old('icon'), ['class' => 'form-control','placeholder'=>'Select Service Icon']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace('editor');
    </script>

</div>