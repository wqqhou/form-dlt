@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3>測試結果</h3>
            
                <h4>感謝您的填寫!!</h4>
                
                <a class="text-warning" href={{"/test/$test_id/alldetails"}}>點擊查看答題詳情</a>
                <a class="text-warning" href={{"/test"}}>繼續填答下一份</a>
            
        </div>
    </div>
@endsection

