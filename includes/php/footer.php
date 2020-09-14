</div>
</div>
</div>

<script src="/scripts/jquery.min.js"></script>
<script src="/scripts/popper.min.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<script src="/includes/lang/ar.js"></script>
<script src="/scripts/functions.js"></script>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>
<?php close_db(); ?>