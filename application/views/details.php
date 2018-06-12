<?php
foreach ($value_data as $value) {
	//echo $value->id;
	# code...

?>
<input type="text" name="id" value="<?php echo $value->id;?>"" readonly="readonly">
<input type="text" name="fname" value="<?php echo $value->firstname; ?>">
<input type="text" name="lname" value="<?php echo $value->lastname; ?>">
<input type="text" name="uname" value="<?php echo $value->username; ?>">
<input type="text" name="mail" value="<?php echo $value->email; ?>">
<input type="text" name="pwd" value="<?php echo $value->pass_word; ?>">
<input type="submit" name="update" value="Update">
<input type="submit" name="delete" value="Delete">
<?php
}