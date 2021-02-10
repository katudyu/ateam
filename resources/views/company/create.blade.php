@extends('layouts.helloapp3')

<button class="click1" onclick="location.href='/top'">戻る</button><br>

@section('content')

<form action="confirm" method="post">
  <table>
    <tr><th>品番</th><td>{{ $data{ 'goods_id' } }}</td></tr>
    <tr><th>品名</th><td>{{ $data{ 'goods_name' } }}</td></tr>
    <tr><th>値段</th><td>{{ $data{ 'price' } }}</td></tr>
    <tr><th>サイズ</th><td>{{ $data{ 'size' } }}</td></tr>
    <tr><th>カテゴリー1</th><td>{{ $data{ 'category1' } }}</td></tr>
    <tr><th>カテゴリー2</th><td>{{ $data{ 'category2' } }}</td></tr>
    <tr><th>カラー</th><td>{{ $data{ 'color' } }}</td></tr>
    <tr><th>性別</th><td>{{ $data{ 'sex' } }}</td></tr>
    <tr><th>企業ID</th><td>{{ $data{ 'company_id' } }}</td></tr>
    <tr><th>写真</th><td>{{ $data{ 'temp_path' } }}</td></tr>
  </table>
<tr><td><input type="submit" value="登録"></td></tr>

@endsection