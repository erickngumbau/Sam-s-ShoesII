<?php

use yii\helpers\Url;
?>
<div>
 
    <div class="container top">
        <h2>MEN SHOES</h2>

    <div class="scrollmenuII">


    <?php
      $url = Yii::$app->db->createCommand("SELECT url FROM item WHERE gender='male'")
        ->queryAll();
      ?>


      <?php foreach ($url as $value) : ?>
        <div class="card h-100">
        <div class="card-body">
        <img src="<?= Yii::$app->request->baseUrl ?>/images/<?= implode($value) ?>.jpg" class="img-fluid imageheightIII" alt="Responsive image">
        </div>
          <h5 class="card-title">Adapt BB Nike</h5>
          <h3 class="card-text">KSh. 4,500</h3>
          <a class="btn btn-sm btn-info" href="<?= Url::to(['site/cart'])?>" role="button">Add To Cart</a>
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