<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>電卓</title>
</head>

<form action="" method="POST">
  {{ csrf_field() }}
  <div>
    ユーザー：<input type="text" name="user">
  </div>
  <div>パスワード：<input type="password" name="pass"></div>
  <div><button ログイン type="submit" name="login">ログイン</button></div>
</form>
