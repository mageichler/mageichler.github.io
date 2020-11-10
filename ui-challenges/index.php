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
                <h1>UI challenges</h1>
            </div>
        </div>
       
        <div class="row">
           
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
