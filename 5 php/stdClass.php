<?php /*PHP Error: Cannot use object of type stdClass as array*/ ?>

<?php
     $event_type = get_object_vars($content['field_event_type']['#items']['0']['taxonomy_term']);
      print_r($event_type['name']);
 ?>


<?php if(isset($content['field_event_type']['#items']['0']['taxonomy_term'])): ?>
  <?php
    $event_type = get_object_vars($content['field_event_type']['#items']['0']['taxonomy_term']);
  ?>
<?php endif; ?>

<?php if(!($event_type['name'] == 'Signature')): ?>
  <?php print render($content['field_date']); ?>
<?php endif; ?>