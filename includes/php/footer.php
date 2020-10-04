</div>
</div>
</div>

<script src="/scripts/jquery.min.js"></script>
<script src="/scripts/popper.min.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
<script>
      // Wait for the window to load
      document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
      //Hide the spinner and loadbackground after the window is load
         document.getElementById('spinner').style.visibility="hidden";
         document.getElementById('loadbackground').style.visibility="hidden";
      },1000);
  }
}
    </script>
</body>
</html>
<?php close_db(); ?>