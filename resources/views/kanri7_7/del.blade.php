@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
イベント削除画面
@endsection

@section('content')
   <form action="/Kanri7_7/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="event_id" value="{{$item->event_id}}">
      <tr><th>イベント名: </th><td>{{$item->event}}</td></tr>
      <tr><th>開始日: </th><td>{{$item->start_date}}</td></tr>
      <tr><th>終了日: </th><td>{{$item->end_date}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
