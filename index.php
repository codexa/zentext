<?php
$title = "Messaging Made Easy";
?>
<!DOCTYPE html>
<html>
  <?php include 'lib/include/head.php'; ?>
  <body onLoad="init()">
    <?php include 'lib/include/header.php'; ?>  
    <main class="page theme-light">
      <img src="//cdn.codexa.org/zentext/assets/img/logo_light.png" alt="logo" height="150" />
      <h1>Zentext Alpha</h1>
      <p>Zentext is a Messaging App</p>
      <p>Please note that this is an alpha release, this means that it is unstable. We do not advise you to use yet and therefore do not take any liability for any harm.</p>
      <p><a href="//zentext.codexa.org/portal/index.php" type="button">Get Started</a></p>
      <div class="sidebar version-container">
        Latest version: <span id="current-version-name" class="version-name"></span>
        <br />Release date: <span id="current-version-date" class="version-date"></span>
        <br />Changes: <a id="current-version-changes" class="version-changes" href="/changelog">See the Changelog.</a>
      </div>
    </main>
    <?php include 'lib/include/footer.php'; ?>
  </body>
</html>
