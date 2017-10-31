<?php

  $loggedIn = false;
  $arr = [1,2,3,4,5];

  /*
  if($loggedIn){
    echo 'logged in';
  }
  else{
    echo 'not logged in';
  }
  */

  echo ($loggedIn) ? 'logged in' : 'not logged in';

?>

<div> 
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
  <?php } else { ?>
    <h1>Welcome Guest</h1>
  <?php } ?>
</div>

<div> <!-- this do the same but it's kinda less confusing -->
  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>

<!-- you can use shorthands for loops also -->

<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<div>
<?php for($i = 0;$i < 10;$i++): ?>
	<li><?php echo $i; ?></li>
<?php endfor; ?>
</div>