<div style="margin:0px 50px 0px 50px;">
    @if($services)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Text</th>
                <th>Icon</th>
                <th>Spec. word</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $k => $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>  {!! Html::link(route('serviceEdit',['service'=>$service->id]),$service->name,['alt'=>$service->name]) !!}  </td>
                    <td>{{$service->text}}</td>
                    <td> <div class="service_block"> <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $service->icon }}"></i></span> </div> </div></td>
                    <td>{{ $service->icon }}</td>
                    <td>
                        {!! Form::open(['url' => route('serviceEdit',['service'=>$service->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete', ['class' => 'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

    {!! Html::link(route('serviceAdd'),'New Service') !!}
</div>