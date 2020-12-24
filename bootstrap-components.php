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
      <?php include "pages/bootstrap-components.php"; ?>
    </main>

    <!-- Load Scripts-->
    <?php include "includes/load_js.php"; ?>

    <!-- Page Specific JS -->
    <!-- Page specific javascripts-->
    <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
    </script>
    
  </body>
</html>
