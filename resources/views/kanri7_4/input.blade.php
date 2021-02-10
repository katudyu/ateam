@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
入力エリア
@endsection
@section('content')
<p>{{$msg}}</p>
   <form action="/Kanri7_4/output" method="get">
   <table>
      @csrf
      <tr><th>メールアドレス: </th>
      <td><input type="email" name="mail"></td></tr>
      <tr><th>内容:</th>
      <td><input type="text" name="opinioncontent"></td></tr>
      <tr><th></th><td><input type="submit" value="送信"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection
@section('footer')
copyright 2020 管理者.
@endsection