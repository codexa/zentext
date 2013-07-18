<?php
$title = "Messaging Made Easy";
?>
<!DOCTYPE html>
<html>
  <?php include 'lib/include/head.php'; ?>
  <body onLoad="init()">
    <?php include 'lib/include/header.php'; ?>  
    <main class="page theme-light">
      <img src="/lib/img/logo_light.png" alt="logo" height="150" />
      <h1>Welcome to Zentext!</h1>
      <p>Welcome to the Zentext webpage!</p>
      <p>Come here to <a href="http://portal.testserver.bugs3.com/">use the app,</a> and to read about the planed updates/bug fixes, and to see the latest version!</p>
      <div class="sidebar version-container">
        Latest version: <span id="current-version-name" class="version-name"></span>
        <br />Release date: <span id="current-version-date" class="version-date"></span>
        <br />Changes: <a id="current-version-changes" class="version-changes" href="/Change%20Log">See the Changelog.</a>
      </div>
    </main>
  </body>
</html>
