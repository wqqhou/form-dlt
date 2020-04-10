@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>測驗</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6q7GjSCKPW0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>準備好了嗎~開始答題吧！(請完成填答所有下拉選單～填答完成共約需時5分鐘)</p>
            {!! Form::open(['url' => '/test']) !!}
            <div class="row form-horizontal">
                {!! Form::label('tag_list','請選擇範圍：',['class'=>'col-lg-2 control-label ']) !!}
                <div class="col-lg-2" >
                    @if (!$tags)
                    <label class='control-label'>沒有選項</label>
                    @else
                    {!! Form::select('tag_list', $tags, 0, ['id'=>'totalnumber','class' => 'form-control']) !!}
                    @endif
                </div>

             

                {!! Form::label('testtype','開始測驗：',['class'=>'col-lg-2 control-label ']) !!}
                <div class="col-lg-2" >
                        {!! Form::submit('START', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            <br/>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

