<?php
include("class/users.php");

$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
/* echo"<pre>";
print_r($qus->qus); */
?>
<?php
include("header.php");
 ?>

<body onload="timeout()" >
  <br><br><br><br>
  <div class="container">
  	<div class="col-sm-2"></div>
  		  <h2>Quiz php
  		  <script type="text/javascript">
  		  var timeLeft=2*60*60;

  		  </script>

  		  <div id="time"style="float:right">timeout</div></h2>
  		<?php
  		$i=1;
  		foreach($qus->qus as $qust) {?>
  		<form method="post" id="form1" action="answer.php">
  		  <table class="table table-bordered">
  			<thead>
  			  <tr class="danger">
  				<th><?php echo $i;?> . <?php echo $qust['question'];?>  </th>
  			  </tr>
  			</thead>

  			<tbody>
  			<?php if(isset($qust['ans1'])){?>
  			  <tr class="info">
  				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?> </td>
  			  </tr>
  			<?php }?>
  			<?php if(isset($qust['ans2'])){?>
  			  <tr class="info">
  				<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
  			  </tr>
  			  <?php }?>
  			  <?php if(isset($qust['ans3'])){?>
  			  <tr class="info">
  				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
  			  </tr>
  			  <?php }?>
  			  <?php if(isset($qust['ans4'])){?>
  			  	<tr class="info">
  				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
  			  </tr>
  			  <?php }?>
  			<tr class="info">
  				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
  			  </tr>
  			</tbody>

    		  </table>
    		<?php $i++;}?>
    	     <center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
        </form>

<div class="col-sm-2"></div>
</div>

<?php
  include 'footer.php';
 ?>
