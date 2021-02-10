@extends('layouts.kanri')

@section('title', 'Kanri')

@section('menu_title')
送信完了ページ
@endsection
@section('content')
<p>送信しました。</p>
   <form action="/Kanri7_4/reply" method="post">
   @csrf
   <div><input type="submit" value="確認"></div>
   </form>
@endsection