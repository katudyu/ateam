@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
リンク削除画面
@endsection

@section('content')
   <form action="/Kanri7_5/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="site_id" value="{{$item->site_id}}">
      <tr><th>サイト名: </th><td>{{$item->site_name}}</td></tr>
      <tr><th>画像: </th><td>{{$item->site_ig}}</td></tr>
      <tr><th>URL: </th><td>{{$item->site_url}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
