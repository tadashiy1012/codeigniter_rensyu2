<ul>
<?php foreach($db as $item) { ?>
<li>
  <a href="./read/<?php echo $item['id']; ?>">
    <?php echo $item['name']; ?>
  </a>
</li>
<?php } ?>
</ul>