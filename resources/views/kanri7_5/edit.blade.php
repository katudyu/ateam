@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
リンク編集
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/Kanri7_5/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="site_id" value="{{$item->site_id}}">
      <tr><th>サイト名: </th><td><input type="text" name="site_name" value="{{$item->site_name}}"></td></tr>
      <tr><th>画像: </th><td><input type="text" name="site_ig" value="{{$item->site_ig}}"></td></tr>
      <tr><th>Url: </th><td><input type="text" name="site_url" value="{{$item->site_url}}"></td></tr>
      <tr><th></th><td><input type="submit" value="変更"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection 
