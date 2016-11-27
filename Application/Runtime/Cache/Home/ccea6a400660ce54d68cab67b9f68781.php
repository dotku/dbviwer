<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/lib/dpatch/dist/css/general-cn.css" rel="stylesheet"/>
    <script src="/lib/angular/angular.js"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container col-md-4 col-md-offset-4">
      <h1>LOGIN</h1>
      <form method="post" class="form-inline">
        <div class="form-group">
          <label>PIN</label>
          <input class="form-control" name="pin">
        </div>
        <button type="submit" class="btn btn-primary">login</button>

      </form>
    </div>
  </body>
</html>