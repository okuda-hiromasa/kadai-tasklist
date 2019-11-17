@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>内容</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                {{-- 複数のタスク（束）から一つひとつ取出す。--}}
                @foreach ($tasks as $task)
                <tr>
                    {{-- 作成したユーザーidと同じタスクである処理 --}}
                    @if (\Auth::id() == $task->user_id)
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
   {!!link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
@endsection
