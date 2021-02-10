@extends('layouts.kanri3_1')

@section('title', 'Kanri')

@section('menu_title')
新規登録
@endsection

@section('content')
   <form action="/Kanri7_3/create" method="post">
   <table>
      @csrf
      <tr><th>名前: </th><td><input type="text" name="name"></td></tr>
      <tr><th>性別: </th><td><input type="text" name="sex"></td></tr>
      <tr><th>体重: </th><td><input type="number" step="0.1" name="weight"></td></tr>
      <tr><th>誕生日: </th><td><input type="date" name="birthday"></td></tr>
      <tr><th>住所: </th><td><input type="text" name="address"></td></tr>
      <tr><th>Eメール: </th><td><input type="text" name="email"></td></tr>
      <tr><th>郵便番号: </th><td><input type="text" name="postal_code"></td></tr>
      <tr><th>パスワード: </th><td><input type="password" name="password"></td></tr>
      <tr><th>コニュニティー: </th><td><input type="text" name="community_id"></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection