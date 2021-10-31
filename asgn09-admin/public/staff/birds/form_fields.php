<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('/staff/birds/index.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?php echo h($bird->common_name); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>" /></dd>
</dl>

<dl>
  <dt>Conservation Level</dt>
  <dd>
    <select name="bird[conservation_id]">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION as $cons_id => $cons_level) { ?>
      <option value="<?php echo $cons_id; ?>" <?php if($bird->conservation_id == $cons_id) { echo 'selected';} ?>><?php echo $cons_level; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><textarea name="bird[backyard_tips]" rows="10" cols=30><?php echo h($bird->backyard_tips); ?></textarea></dd>
</dl>
