<?php

use yii\helpers\Url;
?>
<div>

  <div class="container top">
    <h2>SAM'S SHOES FOR LADIES AND MEN </h2>

    <div class="scrollmenuII">

      <?php
      $all = Yii::$app->db->createCommand('SELECT * FROM item')->queryAll();
      ?>

      <?php foreach ($all as $value) : ?>
        <div class="card h-100">
          <div class="card-body">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/<?= ($value['url']) ?>.jpg" class="img-fluid imageheightIII" alt="Responsive image">
          </div>
          <h5 class="card-title"><?= ($value['name']) ?></h5>
          <h3 class="card-text"><?= ($value['price']) ?></h3>
          <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart']) ?>" role="button">Add To Cart</a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<div class="pg_down">

  <nav aria-label="Page navigation example">
    <ul class="pagination pg_down1">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>

</div>