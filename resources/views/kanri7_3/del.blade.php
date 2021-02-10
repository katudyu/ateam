@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
会員情報削除
@endsection

@section('content')
   <form action="/Kanri7_3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>名前: </th><td>{{$item->name}}</td></tr>
      <tr><th>性別: </th><td>{{$item->sex}}</td></tr>
      <tr><th>Eメール: </th><td>{{$item->email}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
