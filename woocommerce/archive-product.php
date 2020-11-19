<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body>

  <article class="archive-product">
    <?php
    __template('index-description');
    ?>

    <section class="archive-product__category">
      <ul class="archive-product__category-list">
        <li class="archive-product__category-element">
          <?php __template('product', false); ?>
        </li>
        <li class="archive-product__category-element">
          <?php __template('product', false); ?>
        </li>
        <li class="archive-product__category-element">
          <?php __template('product', false); ?>
        </li>
        <li class="archive-product__category-element">
          <?php __template('product', false); ?>
        </li>
        <li class="archive-product__category-element">
          <?php __template('product', false); ?>
        </li>
      </ul>

      <div class="archive-product__see-more-button">
        <?php
        __template('button');
        ?>
      </div>

    </section>

  </article>
  <?php get_footer(); ?>
</body>

</html>