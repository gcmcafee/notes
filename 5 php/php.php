<?php/*
*/?>


<?php print render($title_prefix); ?>
<pre>
  <? print_r(array_keys($content)); ?>
</pre>
<pre>
  <? print_r(array($content)); ?>
</pre>
<pre>
  <?php print render($content['body']); ?>
</pre>

Alternative Syntax for Control Structures
<?php if ($a == 5):  ?>
<?php elseif ($a == 6): ?>
<?php else: ?>
<?php endif; ?>

<?php while: ?><?php endwhile; ?>
<?php for: ?><?php endfor; ?>
<?php foreach: ?><?php endforeach; ?>
<?php switch: ?><?php or endswitch; ?>

<?php
if ($a == 5):
    echo "a equals 5";
    echo "...";
elseif ($a == 6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
?>

<?php/*
======================
START -  "My company & My Name" to "my-company-my-name"
======================
*/?>

<?php 
  function kebab($string) {
    //Decode HTML
    $str = html_entity_decode($str);
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);

    return $string;
  }
  $kebab_title = kebab($title);
?>

<?php print $kebab_title; ?>

<?php/*
======================
END -  "My company & My Name" to "my-company-my-name"
======================
*/?>

<?=preg_replace("/[\s_]/", "-", preg_replace("/[\s-]+/", " ", preg_replace("/[^a-z0-9_\s-]/", "", strtolower($title))))?>