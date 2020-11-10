<!doctype html>
<html lang="en">
    <?php
    $path = '../';
    include_once '../res/head.php';
    ?>
  <body>

    <?php
    include_once '../res/nav.php'
    ?>
  
    <div class="container subpage">
      <main role="main">

       <div class="row small-nav">
            <div class="col-md-6">
                    <a href="../"><< Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>About me</h1>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <p>
                    My name is Magdalena Eichler and I'm a self-taught aspiring UX designer. 
                </p>
                <p>
                    I have a background in graphic design creating promotional materials for my company and previous jobs. I've prepared tones of WordPress event pages which gave me an interesting experience. 
                </p>
                <p>
                    All of this led me to the path I want to follow: to be a part of the process of creating the best possible user experience with digital interfaces. 
                </p>
                <p><strong>
                    I'm ready to start my new career path and thanks to my previous experience and actual knowledge, I can be a valuable part of the UX designers' team. 
                </strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h4>I'm curious and I like to go deep </h4>
                <p>
                    If I do something for pandas, I will find <a href="https://link.springer.com/content/pdf/10.3758/BF03193191.pdf" target="_blank" rel="noopener">scientific articles</a> about pandas abilities to distinguish between colours and zoologists reports about their natural habitats. 
                </p>
                <p>
                    I want to know people (creatures?) I'm designing for, who they are, what they desire, what they thought. How scientists describe the group I'm learning about, what researchers found. I want to know as much as possible.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h4>I love learning new things </h4>
                <p>
                    Learning Figma or Adobe XD was pleasant. Creating <a href="" target="_blank">interactive prototype</a> and giving it to potential users to test without coding them was an experience. As a self-taught Jira administrator in my small company, I had difficult moments, but I always say that nothing is impossible we just don't have enough time. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h4>Coding isn't something new for me</h4>
                <p>
                    I've coded <a href="https://github.com/mageichler/mageichler.github.io" target="blank">this page</a> by myself - pure HTML and CSS, based on Bootstrap 4 files. In the past, I also started to learn programming languages: PHP, Java, JavaScript and the last one I liked the most. 
                </p>
                <p>
                    My future goal is to become a unicorn - UX, UI and front-end developer in one person. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h4>
                    After work
                </h4>
                <p>
                    I read too much YAF (Young Adult Fantasy) books, try rule the world in Civilisation VI and constantly feed three chinchillas: Henry The Fluff, Richard Lively and Kazimierz The Great. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid me-img" src="henry.png" alt="Photo of chinchilla Henry The Fluff" data-toggle="tooltip" data-placement="bottom" title="Henry The Fluff">
            </div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid me-img" src="rysiu.png" alt="Photo of chinchilla Richard Lively" data-toggle="tooltip" data-placement="bottom" title="Richard Lively">
            </div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid me-img" src="kazik.png" alt="Photo of chinchilla Kazimierz The Great" data-toggle="tooltip" data-placement="bottom" title="Kazimierz The Great">
            </div>
        </div>

        <div class="row small-nav">
            <div class="col-md-6">
                    <a href="../"><< Back</a>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="divider"></div>
        </div>
        </div>
        
        <?php
        include_once '../res/thanks.php';
        ?>
      
    </main>
    <?php
      include_once '../res/footer.php';
      ?>
 </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
