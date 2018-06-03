<div style="margin:0px 50px 0px 50px;">
    @if($pages)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Text</th>
                <th>Created At</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $k => $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{!! Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                    <td>{{ $page->alias }}</td>
                    <td>{{ $page->text }}</td>
                    <td>{{ $page->created_at }}</td>
                    <td>
                        {!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'delete') !!}
                        {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>
    @endif

    {!! Html::link(route('pagesAdd'),'Новая страница') !!}

</div>