<section class="photos container">
  <h2 class="section-title">Некоторые мои работы</h2>
  <?php foreach($works as $work): ?>
    <figure>
    <img src="<?= $work['gif'] ?>" width="285" height="146" alt="<?= $work['title'] ?>">
    <figcaption> <?= $work['title'] ?> </figcaption>
  </figure>
  <?php endforeach; ?>
</section>
