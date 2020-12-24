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
      <?php include "pages/table-data-table.php"; ?>
    </main>

    <!-- Load Scripts-->
    <?php include "includes/load_js.php"; ?>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  
  </body>
</html>
