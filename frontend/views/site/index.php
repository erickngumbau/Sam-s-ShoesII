<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Sam Shoes';
?>
<!DOCTYPE html>
<html lang="en">
<body>

  <div>
    <p w3-include-html="nav.html"></p>
    <script>w3.includeHTML();</script>
  </div>
  
    <div class="container top txtcenter">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 ">
            <br><br><br><br><br>
            <h1 >BUILT FOR <br>FLIGHT</h1>
            <h6>Introducing product name.Our lightest shoe ever.</h6>
            <a class="btn btn-lg btn-info top" href="<?= Url::to(['site/all'])?>" role="button">Shop Now</a>
        </div>
            <div class="shadow-sm p-3 mb-5 bg-white rounded ">
                <div class="col-lg-8 col-md-8 col-sm-8 ">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                      <img src="<?= Yii::$app->request->baseUrl ?>/images/5.l.jpg" class="img-fluid imgtop" alt="Responsive image">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <img src="<?= Yii::$app->request->baseUrl ?>/images/5.r.jpg" class="img-fluid imgtop" alt="Responsive image">
                              </div>
                    </div>
                  </div>
            </div>      
    </div>    
  </div> 
  

  <div class="container top txtcenter">
    <div class="row ">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card h-100 text-center">
                <div class="card-header">
                  <h4>Women</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special treatment</h5>
                  <p class="card-text">Best Ladies' Footwear.</p>
                  <img src="<?= Yii::$app->request->baseUrl ?>/images/60.jpg" class="img-fluid imageheight" alt="Responsive image"><br><br>
                </div>
                <div class="card-footer text-muted">
                <a class="btn btn-lg btn-info top" href="<?= Url::to(['site/ladies'])?>" role="button">Shop Now</a>
                </div>
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card h-100 text-center">
                <div class="card-header">
                    <h4>Men</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special treatment</h5>
                  <p class="card-text">Best Of Men's Footwear.</p>
                  <img src="<?= Yii::$app->request->baseUrl ?>/images/1.jpg" class="img-fluid imageheight" alt="Responsive image"><br><br>
                </div>
                <div class="card-footer text-muted">
                <a class="btn btn-lg btn-info top" href="<?= Url::to(['site/men'])?>" role="button">Shop Now</a>
                </div>
              </div>
        </div>
    </div>
  </div>

  <div>
    <div class="container top">
        <h2>New Releases</h2>

    <div class="scrollmenu">

    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/1.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div> 
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/3.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/60.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/4.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/5.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/6.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/59.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/57.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>

    </div>
</div>
  </div>

  <div>
    <div class="container top">
        <h2>Top Kicks</h2>

    <div class="scrollmenu">

    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/1.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div> 
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/3.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/60.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/4.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/5.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/6.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/59.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/57.jpg" class="img-fluid imageheightII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
                <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
    </div>
    

    </div>
</div>
  </div>

  <div class="txtcenter top">
      <h2>Never Miss A Drop</h2>
      <h6>Receive updates about new products and promotions</h6>
      <button type="button" class="btn btn-info">JOIN MAILING LIST</button>
  </div>



  <div style="margin-top: 20px;">
    <p w3-include-html="footer.html"></p>
    <script>w3.includeHTML();</script>
  </div>

</body>
</html>