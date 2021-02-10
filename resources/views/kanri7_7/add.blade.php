@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
新規登録画面
@endsection

@section('content')
   <form action="/Kanri7_7/create" method="post">
   <table>
      @csrf
      <tr><th>イベント名: </th><td><input type="text" name="event"></td></tr>
      <tr><th>開始日: </th><td><input type="date" name="start_date"></td></tr>
      <tr><th>終了日: </th><td><input type="date" name="end_date"></td></tr>
      <tr><th>作成日: </th><td><input type="date" name="create_day"></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
