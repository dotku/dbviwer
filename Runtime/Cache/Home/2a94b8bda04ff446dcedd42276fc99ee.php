<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DBViewer</title>
    <link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/lib/dpatch/dist/css/general-cn.css" rel="stylesheet"/>
    <script src="/lib/angular/angular.js"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>DBViewer</h1>
      <?php  $model = D(); $dbList = $model->db()->getTables(); ?>
      <div class="col-md-3">
      <h2>
        <i class="glyphicon glyphicon-th-list"></i>
        View
      </h2>
      <div class="radio container-fluid">
        <div class="radio">
          <label>
            <input type="radio" name="view" value="data" checked/>
            <i class="glyphicon glyphicon-equalizer"></i> Data
          </label>
        </div>
        <div class="radio disabled" title="this feature is under construction">
          <label >
            <input type="radio" name="view" value="structure" disabled/>
            <i class="glyphicon glyphicon-compressed"></i> Structure
          </label>
        </div>
      </div>
      <h2>
        <i class="glyphicon glyphicon-th"></i>
        Tables
      </h2>
      <ul>
      <?php foreach($dbList as $k => $v) { ?>
        <li><a href="?table=<?php echo $v; ?>"><?php echo $v; ?></a></li>
      <?php } ?>
      </ul>
      <a href="<?php echo U('logout')?>" class="btn btn-default">LOGOUT</a>
      </div>
      <div class="col-md-9">
        <?php  if ($_GET['table'] && D($_GET['table'])) { $model = D($_GET['table']); ?>
          <table class="table">
            <thead>
              <tr>
                <?php foreach($model->getDbFields() as $k => $v) { ?>
                  <th><?php echo $v ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
                <?php foreach($model->select() as $k => $v) { ?>
                  <tr>
                    <?php foreach($v as $key => $val) { ?>
                      <td>
                        <?php echo $val; ?>
                      </td>
                    <?php } ?>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        <?php } else {?>
          Please choose the table from the sidebar.
        <?php } ?>
      </div>
    </div>
 </body>
</html>