@if($judges[$i]==1)
<h4>第{{$i+1}}題： </h4>
@else
<h4 class="text-danger">第{{$i+1}}題：</h4>
@endif
<p><strong>題目：&nbsp;&nbsp;</strong>{!! $parsedown->text($questions[$i]['title'])!!}</p>
@foreach(explode("\r\n",$questions[$i]['options']) as $option)
        <p>{{ $option}}</p>
@endforeach

@if($judges[$i]==1||$questions[$i]['qtype_id']==5)
<p><strong>您的答案: &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;</strong>{!! nl2br($useranswer[$questionids[$i+1]]) !!}</p>
@endif

