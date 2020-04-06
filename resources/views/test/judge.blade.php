@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3>測試結果</h3>
            @if($point==100)
                <h4>感謝您的填寫!!</h4>
            @elseif($point>=85)
                <h4>Great!您得了{{$point}}分！</h4>
            @elseif($point>=60)
                <h4>Good!您得了{{$point}}分！</h4>
            @else
                <h4>繼續努力!您得了{{$point}}分！</h4>
            @endif

            @if($point==100)
                <a class="text-warning" href={{"/test/$test_id/alldetails"}}>點擊查看答題詳情</a>
            @else
                <a class="text-danger" href={{"/test/$test_id/details"}}>點擊查看錯題詳情</a>
            @endif
        </div>
    </div>
@endsection

