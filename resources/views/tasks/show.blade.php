@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{$task -> id }}のタスク詳細ページ</h1>
<table class="table table-stiped">
    <tr>
        <th>id</th>
        <td>{{ $task -> id}}</td>
    <tr>
        <th>内容</th>
        <td>{{ $task -> content}}</td>
    <tr>
        <th>ステータス</th>
        <td>{{ $task -> status}}</td>
    </tr>
    
</table>
{!! link_to_route('tasks.edit','このタスクを編集',['id'=>$task->id],['class'=>'btn btn-primary mb-3'])!!}
{!! Form::model($task,['route'=> ['tasks.destroy',$task->id],'method'=>'delete']) !!}
  {!! Form::submit('削除',['class'=>'btn btn-danger'])!!}
{!! Form::close()!!}
@endsection