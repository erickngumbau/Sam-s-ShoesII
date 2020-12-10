<?php

use yii\helpers\Url;
?>
<div class="container top bottom">
  <div class=" row txtcenter">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <b class="">ITEM</b>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <b>QUANTITY</b>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <b>UNIT PRICE</b>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <b>SUBTOTAL</b>
    </div>
  </div>
  <div class="container crd">


  <?php
      $cart = Yii::$app->db->createCommand('SELECT * FROM cart')->queryAll();
      ?>

      <?php foreach ($cart as $value) : ?>
            <div class="row shadow-sm txtcenter top2">
          <div class="col-lg-6 col-md-6 col-sm-6 row">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/<?= ($value['url']) ?>.jpg" class="img-fluid  imageheightIV" alt="Responsive image">
            <p style="margin-left: 10px;" class="top2"><?= ($value['name']) ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 top2">
            <p>1</p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 top2">
            <p><?= 'KSh. '.($value['price']) ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 top2">
            <p><?= 'KSh. '.($value['price']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>

    <div class="row shadow-lg top2 totals">
      <div class="col-lg-6 col-md-6 col-sm-6 row"></div>
      <div class="col-lg-6 col-md-6 col-sm-6 top2 txtcenter">
        <b>
          <hr></b>
        <div class="col-lg-6 col-md-6 col-sm-6 row"></div>
        <p class="left font_sz">Total :<span style="margin-right: 30px;"></span> KSh. 14,542 </p>
        <p class="left">
          <a href="<?= Url::to(['site/all']) ?>" class="btn btn-primary" role="button" aria-pressed="true">CONTINUE SHOPPING</a>
          <span style="margin-right: 30px;"></span>
          <a href="<?= Url::to(['site/checkout']) ?>" class="btn btn-info" role="button" aria-pressed="true">PROCEED TO CHECKOUT</a>
        </p>

      </div>
    </div>

  </div>
</div>