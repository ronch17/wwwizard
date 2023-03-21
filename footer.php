<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wwWizard
 */

?>

<footer class="d-flex align-items-center">
      <div class="container-fluid pt-5">
        <div class="row pt-5 d-flex justify-content-center text-center">
          <div class="col-sm-4">
            <img class="logo" src="<?php echo get_theme_file_uri("/images/white-logo.png"); ?>" alt="logo" />
          </div>
          <div class="col-sm-4">
            <ul class="nav p-0 flex-column flex-md-row justify-content-center rtl">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#main"
                  >ראשי</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">השירותים שלי</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">יצירות אחרונות</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">אודות</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">צרו קשר</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 d-flex gap-2 justify-content-center text-light h2">
            <i class="bi bi-linkedin"></i><i class="bi bi-github"></i
            ><i class="bi bi-facebook"></i>
          </div>
        </div>
        <div class="row text-center pt-5 d-flex justify-content-center text-light">
          <h4>© כל הזכויות שמורות</h4>
          <img
            class="wizard-icon"
            src="<?php echo get_theme_file_uri("/images/wizard-icon.png"); ?>"
            alt="wizard-icon"
          />
        </div>
      </div>
      <div class="elfsight-app-4d7a7f9b-a609-46a3-95fc-536cbc792fea"></div>
    </footer>
   

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
