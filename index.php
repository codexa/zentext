<!DOCTYPE html>
<html>
  <?php include 'lib/head.php'; ?>    
  <title>Messaging Made Easy | {name}</title>
  <body onLoad="init()">
    <?php include 'lib/header.php'; ?>  
    <main class="page theme-light">
      <img src="/style/assets/logo_light.png" alt="logo" height="150" />
      <h1>Welcome to Zentext!</h1>
      <p style="font-family:Calibri;">Welcome to the Zentext webpage!
      <p style="font-family:Calibri;">Come here to use the app, and to read about the planed updates/bug fixes, and to see the latest version!
      <div class="sidebar version-container">
        Latest version: <span id="current-version-name" class="version-name"></span>
        <br />Release date: <span id="current-version-date" class="version-date"></span>
        <br />Changes: <a id="current-version-changes" class="version-changes" href="">See the Changelog.</a>
      </div>
    </main>
  </body>
</html>
