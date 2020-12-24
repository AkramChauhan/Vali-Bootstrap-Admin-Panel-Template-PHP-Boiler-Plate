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
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="lock-box"><img class="rounded-circle user-image" src="https://avatars2.githubusercontent.com/u/13075784?s=460&u=f7dc296db848c3f39d893d7e6aa95acd5a771bd5&v=4">
        <h4 class="text-center user-name">Akram Chauhan</h4>
        <p class="text-center text-muted">Account Locked</p>
        <form class="unlock-form" action="index.php">
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>UNLOCK </button>
          </div>
        </form>
        <p><a href="page-login.php">Not John ? Login Here.</a></p>
      </div>
    </section>
    <!-- Load Scripts-->
    <?php include "includes/load_js.php"; ?>
  </body>
</html>
