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
   <tr><th>ID</th><th>会社名</th><th>担当者名</th><th>電話番号</th><th>Eメール</th><th>パスワード</th></tr>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->phone_number}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
