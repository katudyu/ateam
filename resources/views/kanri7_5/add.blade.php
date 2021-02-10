@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
新規登録画面
@endsection

@section('content')
   <form action="/Kanri7_5/create" method="post">
   <table>
      @csrf
      <tr><th>サイト名: </th><td><input type="text" name="site_name"></td></tr>
      <tr><th>画像: </th><td><input type="text" name="site_ig"></td></tr>
      <tr><th>URL: </th><td><input type="text" name="site_url"></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
