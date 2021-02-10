@extends('layouts.kanri3_2')

@section('title', 'Kanri')
@section('menu_title')
会員情報詳細

@endsection
@section('content')
<table>
   <tr><th>ID</th><th>名前</th><th>性別</th><th>体重</th><th>生年月日</th><th>住所</th><th>Eメール</th><th>郵便番号</th><th>コミュニティID</th></tr>
   <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->sex}}</td>
           <td>{{$item->weight}}</td>
           <td>{{$item->birthday}}</td>
           <td>{{$item->addr11}}</td>
           <td>{{$item->email}}</td>
           <td>{{$items->zip11}}</td>
           <td>{{$item->community_id}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
