<? //https://splidejs.com/ ?>
<ktml:style src="https://unpkg.com/@splidejs/splide@2.4.14/dist/css/splide.min.css" as="style" />
<ktml:script src="https://unpkg.com/@splidejs/splide@2.4.14/dist/js/splide.min.js" defer="defer" />

<? if(isset($class)): ?>
  <? $class = 'splide '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'splide' ?>
<? endif ?>

<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  $folder = str_replace('images://', JPATH_PAGES.'/images/', $folder);

  if(is_dir($folder)):

    $images = glob($folder.'/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);
    array_walk($images, function(&$value, $key) {
      $value = str_replace(JPATH_PAGES.'/images/', 'images://', $value);
    });

  endif;

endif ?>

<? /* Shuffle the images */ ?>
<? if(isset($shuffle) && $shuffle):
  shuffle($images);
endif ?>

<div class="<?= $class ?>">
  <div class="splide__track">
    <ul class="splide__list">
      <? foreach((array)$images as $i => $image): ?>
        <li class="splide__slide">
        <? if($i == 0): ?>
          <img class="md:h-36 rounded w-full object-cover object-center tns-lazy" src="<?= $image ?>" data-preload="true">
        <? else : ?>
          <img class="md:h-36 rounded w-full object-cover object-center tns-lazy" data-splide-lazy="<?= helper('image.url', $image) ?>" >
        </li>
        <? endif; ?>
      <? endforeach; ?>
    </ul>
  </div>
</div>

<script>
    document.addEventListener( 'DOMContentLoaded', function () {
      els = document.getElementsByClassName('splide' )
      Array.from(els).forEach((el) => {
          new Splide( el, {
              type: 'fade',
              perPage: 1,
              autoplay: true,
              rewind: true,
              interval: 3000,
              lazyLoad: 'sequential',
              accessibility: true
          }).mount();
       });
    });
</script>
