@extends('layouts.contact')

<button class="click1" onclick="location.href='./top'">戻る</button><br>

<h1>お問合せフォーム</h1>


<form action="/confirm" method="POST">
    <br>
    <textarea class="form" name="message" rows="5" cols="30"　size="100" value="コメント"></textarea>
 
    </form>

    <br>
    
    <input class="click2" type="button" onclick="location.href='./confirm'" value="確認"><br>
</form>

</body>
</html>