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
  <?php echo form_open('hello/create'); ?>
    <label for="name">name</label>
    <input type="input" name="name" /><br />
    <input type="submit" name="submit" value="create member" />
  </form>
</body>
</html>