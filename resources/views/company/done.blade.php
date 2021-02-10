@extends('layouts.contact')

<button class="click1" onclick="location.href='./contact'">戻る</button><br>

<h1>送信内容確認</h1>


<form action="/contact" method="POST">
    <br>
    <textarea class="contact" name="Comment" rows="5"cols="30"　size="100" value="コメント"></textarea>
    <br>
    
    <input class="click2" type="button" onclick="location.href='./confirm1'" value="送信"><br>
</form>

</body>
</html>