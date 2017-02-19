<html>
<head>
<title><?php echo $data['title']; ?></title>
</head>
<body>
  <h1><?php echo $data['message']; ?></h1>
  <code>
    <?php var_dump($db); ?>
  </code>
  <hr />
  <?php echo validation_errors(); ?>
  <form action="/~vagrant/codeigniter_rensyu2/index.php/hello/create" method="post" accept-charset="utf-8">
    <label for="name">name</label>
    <input type="input" name="name" /><br />
    <input type="submit" name="submit" value="create member" />
  </form>
</body>
</html>