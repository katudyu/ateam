@extends('layouts.kanri0')

@section('title', 'Kanri')
@section('menu_title')
会員情報検索結果
@endsection
@section('content')
<table>
   <tr><th>ID</th><th>名前</th><th>Eメール</th><th>詳細</th><th>更新</th><th>削除</th></tr>
   <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td><a href="/Kanri7_3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/Kanri7_3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/Kanri7_3/del?id={{$item->id}}">削除</a></td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
