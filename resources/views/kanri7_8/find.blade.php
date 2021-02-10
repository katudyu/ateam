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
   <tr><th>ID</th><th>管理者名</th><th>Eメール</th><th>詳細</th><th>更新</th><th>削除</th></tr>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td><a href="/Kanri7_8/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/Kanri7_8/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/Kanri7_8/del?id={{$item->id}}">削除</a></td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>@endsection

@section('footer')
copyright 2020 管理者
@endsection
