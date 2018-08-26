<?php
  include 'header.php';
 ?>
<body>

<br><br><br>
  <div class="card-body">
    <h4 class="display-4">There are 10 questions</h4>
    <div>
      <form  method="post" action="qus_show.php">
        <select class="form-control" id="" name="cat" style="display:none">
        <option value="1" style="display:none;">php</option>
        </select><br>
        <center><button type="submit" value="Start" class="btn btn-primary" /><span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>

    <span class="btn-inner--text">START</span></button></center>
      </form>
    </div>
  </div>

<?php
  include 'footer.php';
 ?>
