<?php 

    get_header();



    while(have_posts()) {

        the_post(); ?>
       
        <div id="main" class="container-fluid main-section">
      <div class="row main">
        <div id="particles-js" class="col-md-4 col-xxl-5 particles">
          <div class="custom-row">
            <div id="animContainer" class="col wizard-animation"></div>
            <div id="image-container" class="col images-slide">
              <img src="<?php echo get_theme_file_uri('/images/slider-images/Code.png'); ?>" class="active" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/node.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/React.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/Elementor.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/stack.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/Figma.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/wordpress.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/php.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/adobe.png'); ?>" />
              <img src="<?php echo get_theme_file_uri('/images/slider-images/woocommerce.png'); ?>" />
            </div>
          </div>
        </div>
        <div
          class="col-md-8 col-xxl-7 half-bg d-flex align-items-center justify-content-end text-light pe-5"
        >
          <div class="p-2 my-5 rtl">
            <h1 class="custom-gradient text-center text-md-end">פיתוח ועיצוב אתרים בקסם </h1>
            <ul class="main-text list-unstyled d-flex flex-column gap-1 gap-3">
              <li class="bi bi-magic d-flex gap-2"><p> עיצוב מותאם אישית אשר מביא לייחודיות והבידול שלך ממתחרים. </p></li>
              <li class="bi bi-magic d-flex gap-2"><p> פיתוח אתר בטכנולוגיות מתקדמות שגם מאפשרת לך לשנות את התוכן ללא
                מאמץ</p>
                
              </li>
              <li class="bi bi-magic d-flex gap-2"><p>                התאמה ואופטימיזציה למנועי החיפוש של גוגל, תצוגה בפייסבוק והרשתות 
                החברתיות</p>
              </li>
            </ul>
            <div class="d-flex justify-content-center justify-content-md-start">
              <a href="#projects">
              <button
                class="btn btn-outline-primary me-md-2 rounded-1 custom-btns"
                type="button"
              >לפרויקטים
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="services" class="container services-card my-5">
      <div class="row">
        <h2 class="d-flex justify-content-center pb-5">השירותים שלי</h2>
      </div>
      <div class="row g-3">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem">
            <div class="card-body text-end  d-flex flex-column justify-content-around"> 
              <div class="d-flex justify-content-center  justify-content-md-end">
              <img
                src="<?php echo get_theme_file_uri('/images/design-services.png'); ?>"
                alt="design-icon"
                class="service-icon my-3"
              />
              </div>
              <h2 class="card-title text-center text-md-end h3 pb-3">עיצוב אתרים</h2>
              <ul class="services-list list-unstyled rtl d-flex flex-column gap-1 gap-3">
               <li class="bi bi-magic d-flex gap-2"><p> אפיון וחוויית משתמש UI/UX</p></li>
               <li class="bi bi-magic d-flex gap-2"><p> הנפשות</p></li>
               <li class="bi bi-magic d-flex gap-2"><p> עיצוב אייקונים ולוגואים</p></li>
              </ul>
              <div class="d-flex justify-content-center justify-content-md-end">
              <a href="#projects" class="card-link">      <button
                class="btn btn-outline-primary me-md-2 rounded-1 custom-btns-blue"
                type="button"
              >לפרויקטים
              </button></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem">
            <div class="card-body text-end  d-flex flex-column justify-content-around">
            <div class="d-flex justify-content-center  justify-content-md-end">
              <img
                src="<?php echo get_theme_file_uri('/images/web-services.png'); ?>"
                alt="dev-icon"
                class="service-icon my-3"
              />
            </div>
              <h2 class="card-title text-center text-md-end h3 pb-3">פיתוח אתרים</h2>
              <ul class="services-list list-unstyled rtl lh-1 d-flex flex-column gap-1 gap-3">
               <li class="bi bi-magic d-flex gap-2"><p> בניית אתרים באלמנטור</p></li>
               <li class="bi bi-magic d-flex gap-2"><p> פיתוח אתרים ואפליקציות ב <code>HTML, CSS, SASS, JavaScript, React, Php, Node</code></p></li>
               <li class="bi bi-magic d-flex gap-2"><p> התממשקות האתר לוורדפרס</p></li>
              </ul>
              <div class="d-flex justify-content-center justify-content-md-end">
              <a href="#projects" class="card-link"><button
                class="btn btn-outline-primary me-md-2 rounded-1 custom-btns-blue"
                type="button"
              >לפרויקטים
              </button></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem">
            <div class="card-body text-end  d-flex flex-column justify-content-around">
            <div class="d-flex justify-content-center  justify-content-md-end">
              <img
                src="<?php echo get_theme_file_uri('/images/seo-services.png'); ?>"
                alt="seo-icon"
                class="service-icon my-3"
              />
            </div>
              <h2 class="card-title text-center text-md-end h3 pb-3">קידום</h2>
              <ul class="services-list list-unstyled rtl lh-1 d-flex flex-column gap-1 gap-3">
               <li class="bi bi-magic d-flex gap-2"><p> אופטימיזציה למנוע החיפוש של גוגל</p></li>
               <li class="bi bi-magic d-flex gap-2"><p> אופטימיזציה וחיבור של האתר לפייסבוק ואינסטגרם</p></li>
               <li class="bi bi-magic d-flex gap-2"><p> חיבור לWhatsapp ולצ'אט</p></li>
              </ul>
              <div class="d-flex justify-content-center justify-content-md-end">
              <a href="#projects" class="card-link"><button
                class="btn btn-outline-primary me-md-2 rounded-1 custom-btns-blue"
                type="button"
              >לפרויקטים
              </button></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="projects" class="container-fluid projects">
      <h2 class="d-flex justify-content-center mt-5 pt-5 projects-title">
        פרויקטים אחרונים
      </h2>

      
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/demo3-theme-leveratetech.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">Leverate Project</h3>
                <a href="https://demo3-theme.leveratetech.com/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="עיצוב ופיתוח האתר"
                data-bs-placement="bottom"
                data-bs-content="עיצוב בתוכנות Figma, Illustrator, ופיתוח האתר באמצעות אלמנטור וCSS"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/42Studio.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">42 Studio project</h3>
              <a href="https://ronch77.ronchdigital.com/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="פיתוח האתר"
                data-bs-placement="bottom"
                data-bs-content="פיתוח האתר מעיצוב Figma, באמצעות HTML, SASS, JavaScript, Php ואפשרות לתת ללקוח את האופציה לשנות את התוכן ללא צורך בקוד"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/leverate-ron-dayan-homepage.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">Leverate Project</h3>
              <a href="#" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="עיצוב ופיתוח האתר"
                data-bs-placement="bottom"
                data-bs-content="עיצוב האתר באמצעות XD, Illustrator, כולל אילוסטרציות ובניית האתר באלמנטור."
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/om-finance.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">OM-Finance</h3>
              <a href="https://om-finance.com/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="עיצוב ופיתוח האתר"
                data-bs-placement="bottom"
                data-bs-content="עיצוב האתר בXD, בניית האתר באמצעות אלמנטור וCSS"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/easy-english.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">Easy English</h3>
              <a href="http://www.easy-english.co.il/landing-page/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="עיצוב ובניית דף נחיתה"
                data-bs-placement="bottom"
                data-bs-content="בניית דף נחיתה באלמנטור ועיצובים שונים לאתר דרך Canva"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/ac-rec.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">AC-REC</h3>
              <a href="http://ac-rec.com/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="בניית האתר ואופטימיזציה למובייל"
                data-bs-placement="bottom"
                data-bs-content="בניית האתר באלמנטור, שיפור מהירות והתאמה רספונסיבית למובייל"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/kingofpuh.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">King Of Puh</h3>
              <a href="https://kingofpuh.co.il/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="פיתוח אתר ווקומרס"
                data-bs-placement="bottom"
                data-bs-content="פיתוח אתר חנות באמצעות אלמנטור, CSS, ועיצוב חלקים שונים באתר"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-3">
          <div class="scrollable-container">
            <div>
              <img
                src="<?php echo get_theme_file_uri('/images/projects/fufinka-website.png'); ?>"
                class="scrollable-image"
              />
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <h3 class="h1 py-3 project-title">Fufinka</h3>
              <a href="https://ronch78.ronchdigital.com/" target="_blank">
              <button
                type="button"
                class="btn btn-outline-primary btn-lg rounded-1 custom-btns"
              >
                לצפייה באתר
              </button>
              </a>
              <button
                type="button"
                class="btn btn-lg info-btn"
                data-bs-toggle="popover"
                title="עיצוב ובניית אתר ווקומרס"
                data-bs-placement="bottom"
                data-bs-content="עיצוב האתר בXD, עיצוב הלוגו, בניית האתר באלמנטור וCSS"
              >
                <i class="bi bi-info-square"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      
      
      <div class="generate-projects"></div>
    </div>

    <div id="about" class="container-fluid">
      <div class="row about-me text-center d-flex align-items-center pb-5">
        <div class="col-md-6 me">
          <img src="<?php echo get_theme_file_uri('/images/Ron.png'); ?>" alt="me" />
        </div>
        <div class="col-md-6 p-5">
          <h2 class="text-end">ww<span style="color: #3B4996; font-weight: 600;">Wizard</span> - קוסם דיגיטלי</h2>
          <p class="text-end rtl">
            <br>כבר מבית ספר היסודי אהבתי לבנות אתרי אינטרנט
            ההבנה שאפשר לפרוץ את המגבלות של המציאות ולבטא את היצירתיות ולהעביר את זה הלאה לגולשים גרם לי לאהוב את זה ולהתחבר לזה באופן מיידי וטבעי שכבר אז הוביל לאתר להצלחה ואהדה רבה לאתר האינטרנט הראשון שבניתי.<br>
            את תחילת דרכי התחלתי מלמידת קוד בשפת Python, המשכתי ללמידת עיצוב גרפי, יסודות העיצוב, שיווק דיגיטלי עד שהגעתי מחדש לבניית אתרים ששוב פעם גרם לי להתאהב בתחום מחדש  ולרצות לבנות את האתרים ברמה הגבוהה ביותר.
            התחלתי מאלמנטור, והמשכתי והעמקתי בפיתוח של וורדפרס עצמו, ואף למדתי צד שרת ולקוח בJavascript, Node ו React.

            הרעיון לקוסם הדיגיטלי הגיע מלפני כמעט 3 שנים, מתוך הרצון לבטא את היצירתיות, לצאת מהקופסא, לתת לכל גולש את החוויה שיש כאן אתר שונה ומיוחד
            ואיך אפשר בעצם לבטא את היצירתיות הזאת לתוך האתר. 

            אני מאמין שלכל אחד יש את היצירתיות בה הוא ניחן, ולשם זה אני כאן בשביל להיות הקוסם הדיגיטלי שלכם, שיבטא ויעביר את היחודיות שלכם לתוך העיצוב והאתר לעסק/פורטפוליו/בלוג/אפליקציה שלכם.
          </p>
          
          <div class="accordion rtl" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button
                  class="accordion-button  d-flex justify-content-end"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne"
                  aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne"
                >
                  למה בעצם למדת מעל יכולת אחת ולא התמקדת רק בה?
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne"
              >
                <div class="accordion-body">
                  <strong>אני יודע לעשות קסמים.</strong> <br>
                  <p>טוב, לפחות באינטרנט. הידע שלי הוא רחב ואני יודע ומכיר יותר מרק יכולת אחת
                  בשל העולם העצום של האינטרנט, ומעצם היותי בן אדם מעמיק, למדתי והעמקתי יותר מנושא אחד, בין אם זה עיצוב גרפי, UI UX, בניית אתרים בקוד פתוח (לדוגמא אלמנטור), פיתוח אתרים בקוד (כן, עם האפשרות לתת לכם בעצמכם לשנות את התכנים בלי ידע קודם) ועוד. 
                  כל זה בשביל לתת את המענה הטוב ביותר לפיתוח הנדרש לצרכים שלכם.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button
                  class="accordion-button  d-flex justify-content-end collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo"
                >
                  מה הנסיון המעשי שלך?
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo"
              >
                <div class="accordion-body">
                  <strong>3 שנים של למידה ונסיון מעשי</strong> 
                  עבדתי ואני עובד בפרילנס, עבדתי כשנה וחצי בחברה במפתח אתרים, עיצבתי אתרים ולוגואים, פיתחתי אתרים באלמנטור ופיתחתי אתרים ואפליקציות בקוד.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button
                  class="accordion-button  d-flex justify-content-end collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseThree"
                >
                  יצירתיות
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree"
              >
                <div class="accordion-body">
                  <strong>אני לא רק רוצה לסיים את העבודה</strong>
                  המטרה שלי היא לתת המענה הטוב, המתאים והיצירתי ביותר בשבילכם
                  בין אם זה שזה יהיה עיצוב ופיתוח מותאם אישית
                  או שזה יקרה באופן המהיר ביותר
                  המטרה שלי היא לא רק לסיים, אלא לתת את המוצר הטוב והמתאים ביותר.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="container contact d-flex justify-content-center align-items-end py-5">
      <form class="rtl">
       
        <div class="mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="שם מלא"
          />
        </div>
        <div class="mb-3">
          <input
            type="email"
            placeholder="אימייל"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            לעולם לא נפרסם את האימייל שלך לגורמים זרים
          </div>
        </div>
        <div class="mb-3">
          <textarea
            type="text"
            class="form-control"
            placeholder="שם מלא"
          ></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="reCAPTCHA_site_key">שלח פרטים</button>
      </form>

      <img
        class="wizard-hat"
        src="<?php echo get_theme_file_uri('/images/wizard-hat.png'); ?>"
        alt="wizard-hat"
      />
    </div>
    <?php }

    get_footer();

?>


