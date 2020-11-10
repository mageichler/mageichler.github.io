<!doctype html>
<html lang="en">

<?php
$path = '';
include_once 'res/head.php';
?>

  <body>

    <?php
    include_once 'res/nav.php'
    ?>

    <div class="container">
      <main role="main">
        <h1>Hello!</h1>

        <div class="row">
            <div class="col-md-6">
                <p>
                  I'm Magdalena Eichler, a UX designer based in Gdansk, PL. <br>I believe that everything starts from a story.
                </p>
                <p>
                  <strong>mail:</strong> <a href="mailto:mageichler@gmail.com" class="hidden-link">mageichler@gmail.com</a>
                  <br>
                  <strong>phone:</strong> +48 726 11 40 11
                  <br>
                  <a class="icon-link" href="https://www.linkedin.com/in/mageichler/" target="_blank">
                    <svg class="icon" height="1.5rem" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13 1H0.996875C0.446875 1 0 1.45313 0 2.00938V13.9906C0 14.5469 0.446875 15 0.996875 15H13C13.55 15 14 14.5469 14 13.9906V2.00938C14 1.45313 13.55 1 13 1ZM4.23125 13H2.15625V6.31875H4.23438V13H4.23125ZM3.19375 5.40625C2.52812 5.40625 1.99063 4.86563 1.99063 4.20312C1.99063 3.54062 2.52812 3 3.19375 3C3.85625 3 4.39687 3.54062 4.39687 4.20312C4.39687 4.86875 3.85937 5.40625 3.19375 5.40625V5.40625ZM12.0094 13H9.93437V9.75C9.93437 8.975 9.91875 7.97813 8.85625 7.97813C7.775 7.97813 7.60938 8.82188 7.60938 9.69375V13H5.53438V6.31875H7.525V7.23125H7.55312C7.83125 6.70625 8.50938 6.15312 9.51875 6.15312C11.6188 6.15312 12.0094 7.5375 12.0094 9.3375V13V13Z" fill="var(--dark)"/>
                      </svg>                      
                  </a>
                </p>
                <p>
                  <a href="about-me/">More about me >></a>
                </p>
              </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <h2>My projects</h2>
          </div>
        </div>

        <div class="row project">
          <div class="col-md-6">
            <h4>Programming school webpage</h4>
            <span class="tags">real project, usability and technical problem solving</span>
            <p>Redesign of programming school’s page. </p>
            <p>I was responsible for gathering data from both internal and external users, creating propositions of potential solutions and prototyping, working with graphic designer in creating new layouts and designing new components after first version of page design was finished. </p>
            <p><a href="programming-school/">Read more >></a>
            </p>
          </div>
          <div class="col-md-6">
              <img src="img/cme_page.png" class="img-fluid me-img" alt="Hand drawn website mockups.">
          </div>
        </div>

        <div class="row project">
          <div class="col-md-6">
            <h4>Web app for courses enrolment</h4>
            <span class="tags">real project, from scrach to (still working!) prototype</span>
            <p>The basic assumption was to automate manual repeating work, e.g. issuing invoices or putting names on certificates. </p>
            <p>My tasks: gathering data from team what is needed the most, preparing concept of potential solutions and creating fully working prototype to test with both internal and external users in everyday work.</p>
            <p><a href="web-app-prototype/">Read more >></a>
            </p>
          </div>
          <div class="col-md-6">
              <img src="img/web-app-prototype.png" class="img-fluid me-img" alt="Hand drawn website mockups.">
          </div>
        </div>

        <div class="row project">
          <div class="col-md-6">
            <h4>Shop for pandas</h4>
            <span class="tags">fun project, desktop app for big screens</span>
            <p>Every day bamboo forests in Asia are cut for new fields and human homes. Because of that potential habitats and sources of food for giant panda are decreasing.</p>
            <p>For training, I’ve decided to design an online shop for hungry pandas to make their life a little bit easier. Of course every panda ca read and is familiar with touch screens, right?</p>
            <p><a href="pandas-shop/">Read more >></a>
            </p>
          </div>
          <div class="col-md-6 ">
              <img src="img/pandas_shop.png" class="img-fluid me-img" alt="Main page of an online shop for pandas.">
          </div>
        </div>

        <div class="row project">
          <div class="col-md-6">
            <h4>UI challenges</h4>
            <span class="tags">training project, web and mobileapp design</span>
            <p>Practice projects based on short briefs from Natalia Bienias on her blog zebza.net. 
            </p>
            <p>My propositions of main page for interior designer and one screen of mobile app for dentists and their patients.
            </p>
            <p><a href="ui-challenges/">Read more >></a>
            </p>
          </div>
          <div class="col-md-6">
              <img src="img/designer_page.png" class="img-fluid me-img" alt="Interior designer portfolio - main page.">
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-12">
            <div class="divider"></div>
          </div>
        </div>
        
        <?php
        include_once 'res/thanks.php';
        ?>
      </main>
      <?php
      include_once 'res/footer.php';
      ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script></body>
</html>
