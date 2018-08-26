<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
include 'header.php';
?>

<body>
	<br><br><br><br>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		  <h2>Your Quiz results</h2>
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Total number of Questions</th>
		        <th><?php echo $total_qus; ?></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Right answer </td>
		        <td><?php echo $answer['right'];?></td>
		      </tr>
		      <tr>
		        <td>Wrong answer</td>
		        <td><?php echo $answer['wrong'];?></td>
		      </tr>
		    </tbody>
		  </table></div>
  <div class="col-sm-2"></div>
</div>
<?php
	include 'footer.php';
 ?>
