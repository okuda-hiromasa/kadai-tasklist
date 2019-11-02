@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id: {{ $task->id}}のタスク編集ページ</h1>
<div class="row">
    <div class="col-6 ">
    {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put'])!!}    
     
<table class="table table-stiped">
    <tr>
        <th>{!! Form::label('content','内容:')!!}</th>
        <td> {!! Form::text('content',null,['class'=>'btn btn-primay'])!!}</td>
    </tr>
    
</table>
 {!! Form::submit('更新',['class' => 'btn btn-primary'])!!}
    {!! Form::close()!!}
</div>
@endsection