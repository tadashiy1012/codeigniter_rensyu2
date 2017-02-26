<ul>
<?php foreach($db as $item) { ?>
<li>
  <a href="./read/<?php echo $item['id']; ?>">
    <?php echo $item['name']; ?>
  </a>
  <a href="./delete/<?php echo $item['id']; ?>">
    [delete]
  </a>
</li>
<?php } ?>
</ul>