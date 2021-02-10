@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
会員情報更新
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
   <form action="/Kanri7_3/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>名前: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>性別: </th><td><input type="text" name="sex"
         value="{{$item->sex}}"></td></tr>
      <tr><th>体重: </th><td><input type="number" step="0.1" name="weight"
         value="{{$item->weight}}"></td></tr>
         <tr><th>誕生日: </th><td><input type="date" name="birthday"
         value="{{$item->birthday}}"></td></tr>
      <tr><th>住所: </th><td><input type="text" name="address"
         value="{{$item->address}}"></td></tr>
      <tr><th>Eメール: </th><td><input type="text" name="email"
         value="{{$item->email}}"></td></tr>
         <tr><th>郵便番号: </th><td><input type="text" name="postal_code"
         value="{{$items->postal_code}}"></td></tr>
         <tr><th>パスワード: </th><td><input type="password" name="password"
         value="{{$item->password}}"></td></tr>
         <tr><th>コニュニティー: </th><td><input type="text" name="community_id"
         value="{{$item->community_id}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection 
