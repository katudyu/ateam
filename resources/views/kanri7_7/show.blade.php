@extends('layouts.kanri0')
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
詳細画面

@endsection
@section('content')
<table>
   <tr><th>ID</th><th>イベント名</th><th>開始日</th><th>終了日</th></tr>
       <tr>
           <td>{{$item->event_id}}</td>
           <td>{{$item->event}}</td>
           <td>{{$item->start_date}}</td>
           <td>{{$item->end_date}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
