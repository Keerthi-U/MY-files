<?php
include_once('header.php');
?>

<h1>home</h1>
<form role="form">
  <!-- <input type="text" name="number"  maxlength="10"  required onKeyDown="if(this.value.length>9) return false;"> -->
  <input type="text" minlength=10 maxlength=10>
  <button type="submit">submit</button>
</form>