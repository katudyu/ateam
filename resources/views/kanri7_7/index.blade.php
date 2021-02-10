@extends('layouts.kanri7')
<style>
.pagination { font-size:10pt; }
.pagination li { display:inline-block }
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Kanri')

@section('menu_title')
イベント一覧
@endsection<h1><a href="Kanri7_2">管理者ページ</a></h1>
@section('content')
<h3><a href="Kanri7_7/add">新規登録</a></h3>
   <table>
   <tr><th><a href="Kanri7_7?sort=event_id">ID</th><th>イベント名</th><th>開始日</th><th>終了日</th><th>詳細</th><th>変更</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->event_id}}</td>
           <td>{{$item->event}}</td>
           <td>{{$item->start_date}}</td>
           <td>{{$item->end_date}}</td>
           <td><a href="/Kanri7_7/show?event_id={{$item->event_id}}">詳細</a></td>
           <td><a href="/Kanri7_7/edit?event_id={{$item->event_id}}">変更</a></td>
           <td><a href="/Kanri7_7/del?event_id={{$item->event_id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection