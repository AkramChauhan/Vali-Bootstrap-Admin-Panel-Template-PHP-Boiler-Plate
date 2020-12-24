<!DOCTYPE html>
<html lang="en">
  <head>
    <?php   
      //load Meta Tags
      include "includes/meta.php";
      //load CSS Files
      include "includes/load_css.php";
    ?>
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include "includes/header.php"; ?>

    <!-- Page Conte t -->
    <main class="app-content">
      <?php include "pages/form-custom.php"; ?>
    </main>

    <!-- Load Scripts-->
		<?php include "includes/load_js.php"; ?>
		
		<!-- Page specific javascripts-->
		<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="js/plugins/select2.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript">
			$('#sl').click(function () {
				$('#tl').loadingBtn();
				$('#tb').loadingBtn({ text: "Signing In" });
			});

			$('#el').click(function () {
				$('#tl').loadingBtnComplete();
				$('#tb').loadingBtnComplete({ html: "Sign In" });
			});

			$('#demoDate').datepicker({
				format: "dd/mm/yyyy",
				autoclose: true,
				todayHighlight: true
			});

			$('#demoSelect').select2();
		</script>
  </body>
</html>
