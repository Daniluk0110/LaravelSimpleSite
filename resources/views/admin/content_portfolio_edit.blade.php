<div class="wrapper container-fluid">

    {!! Form::open(['url' => route('portfolioEdit',['portfolios'=>$data['id']]),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input Portfolio Name']) !!}
        </div>
    </div>
    {!! Form::hidden('id', $data['id']) !!}
    <div class="form-group">
        {!! Form::label('filter', 'Filter:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('filter', $data['filter'], ['class' => 'form-control','placeholder'=>'Input Filter Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('old_images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-offset-2 col-xs-10">
            {!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
            {!! Form::hidden('old_images', $data['images']) !!}
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