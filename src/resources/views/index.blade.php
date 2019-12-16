<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>submit</title>
</head>

<body>
  <h1>電卓</h1>
  <form  action="testform" method="post">
    @csrf
    <p>{{Form::input('number', 'first')}}
    <label >1つ目の数</label></p>
    <p>{{Form::input('number', 'second')}}
    <label>2つ目の数</label></p>
    <p>
      <input type="submit" value="足し算" name="operator">
      <input type="submit" value="引き算" name="operator">
      <input type="submit" value="掛け算" name="operator">
      <input type="submit" value="割り算" name="operator">
      {{Form::submit('Click Me!')}}
    </form>
  </body>

</html>
