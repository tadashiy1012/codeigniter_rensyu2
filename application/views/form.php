<?php echo validation_errors(); ?>
<form action="/~vagrant/codeigniter_rensyu2/index.php/hello/create" method="post" accept-charset="utf-8">
  <label for="name">name</label>
  <input type="input" name="name" /><br />
  <input type="submit" name="submit" value="create member" />
</form>