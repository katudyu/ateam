@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
新規登録画面
@endsection

@section('content')
   <form action="/Kanri7_6/create" method="post">
   <table>
      @csrf
      <tr><th>会社名: </th><td><input type="text" name="company_name"></td></tr>
      <tr><th>担当者名: </th><td><input type="text" name="name"></td></tr>
      <tr><th>電話番号: </th><td><input type="text" name="phone_number"></td></tr>
      <tr><th>Eメール: </th><td><input type="text" name="email"></td></tr>
      <tr><th>パスワード: </th><td><input type="password" name="password"></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
