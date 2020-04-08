<?php
$page = "contact";
$title = "Contact";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?>">
    <main>
      <?php require "nav.php"; ?>

      <div class="content">
        <h2>Reach Out</h2>
      </div>

      <div class="container" id="contact-wrap">
        <div class="content">
          <div id="form-messages"></div>
          <div class="content-form">
            <form class="contact-form" action="mail.php" id="contact-form" method="post">
              <div class="form-group">
                <label for="name">Name<span class="required">*</span></label>
                <input type="text" name="name" placeholder="" required>
              </div>
              <div class="form-group full-width">
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" name="email" placeholder="" required>
              </div>
              <div class="form-group full-width">
                <label for="subject">Subject</label>
                <input type="text" name="subject" placeholder="">
              </div>
              <div class="form-group message">
                <label for="name">Message<span class="required">*</span></label>
                <textarea name="details" rows="8" cols="80" placeholder="" required></textarea>
              </div>
              <div class="form-group submit">
                <button class="btn" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="content-image"></div>
      </div>

      <?php require "footer.php"; ?>
    </main>
  </body>

  <script src="assets/js/bundle.min.js?v=<?php echo filemtime('assets/js/bundle.min.js'); ?>" charset="utf-8"></script>

</html>
