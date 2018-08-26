
  <!-- Core -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/argon.min.js"></script>

<script type="text/javascript">

function timeout()
{
  var hours=Math.floor(timeLeft/3600);
  var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
  var second=timeLeft%60;
  var hrs=checktime(hours);
  var mint=checktime(minute);
  var sec=checktime(second);
  if(timeLeft<=0)
  {
    clearTimeout(tm);
    document.getElementById("form1").submit();
  }
  else
  {

    document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
  }
  timeLeft--;
  var tm= setTimeout(function(){timeout()},1000);
}
function checktime(msg)
{
  if(msg<10)
  {
    msg="0"+msg;
  }
  return msg;
}
</script>
</body>
</html>
