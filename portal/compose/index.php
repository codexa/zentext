<?php
$title = "Compose";
?>

<!DOCTYPE html>
<html>
<?php include '../lib/include/head.php'; ?>
<body onLoad="init()" class="compose-page">
  <header class="theme-dark">
    <div class="container">
      <a href="/" class="logo"><img alt="Zentext" src="//cdn.codexa.org/zentext/assets/img/logo_white_little.png" /></a>
      <a href="/portal/compose" class="button-right" id="nav_compose"><img alt="Compose" src="//cdn.codexa.org/zentext/assets/img/pen.png" /></a>
       <span class="header-box">
        <input type="text" id="subject-box" placeholder="Subject" />
      </span>
    </div>    
  </header>  
  <main class="page theme-light">
    <table class="emails-list parentItem" id="message-header" data-enter="addEmailField" data-click="addEmailField">
      <tr>
        <td>
          <ul class="types">
            <li>
              <select>
                <option value="to" selected>to</option>
                <option value="cc">cc</option>
                <option value="bcc">bcc</option>
                <option value="reply-to">reply to</option>
              </select>:
            </li>
          </ul>        
        </td>
        <td>
          <ul class="emails">
            <li><input type="email" placeholder="example@example.com" /></li>
          </ul>
        </td>
      </tr>
    </table>
    <div id="message-content" contentEditable></div>
  </main>
  <script type="text/javascript" src="../lib/scripts/compose.js"></script>
  <?php include '../lib/include/footer.php'; ?>
</body>
</html>
