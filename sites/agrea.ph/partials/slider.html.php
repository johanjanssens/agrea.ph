<? //https://splidejs.com/ ?>

<? if(isset($class)): ?>
  <? $class = 'lazyload splide '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload splide' ?>
<? endif ?>

<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  $folder = str_replace('images://', KPATH_PAGES.'/images/', $folder);

  if(is_dir($folder)):

    $images = glob($folder.'/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);
    array_walk($images, function(&$value, $key) {
      $value = str_replace(KPATH_PAGES.'/images/', 'images://', $value);
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
          <img class="rounded w-full object-cover object-center bg-center tns-lazy" src="<?= $image ?>" data-lazyload="progressive,inline" alt="Slider image">
        <? else : ?>
          <img class="rounded w-full object-cover object-center bg-center tns-lazy" data-splide-lazy="<?= helper('image.url', $image) ?>" alt="Slider image">
        </li>
        <? endif; ?>
      <? endforeach; ?>
    </ul>
  </div>
</div>

<script>
document.addEventListener('lazyloaded', (e) =>
{
    //Do not enable the slider for slow connection or if save-data is enabled
    if ('connection' in navigator && (navigator.connection.saveData === true || navigator.connection.effectiveType.includes('2g'))) {
        return;
    }

    if((typeof Splide == 'undefined') && e.target.matches('.splide'))
    {
        var style = document.createElement('link');
        style.rel = 'stylesheet'
        style.href = 'https://unpkg.com/@splidejs/splide@2.4.14/dist/css/splide.min.css'
        document.head.appendChild(style)

        var script = document.createElement('script')
        script.async = false
        script.src   = 'https://unpkg.com/@splidejs/splide@2.4.14/dist/js/splide.min.js'
        document.head.appendChild(script)

        script.addEventListener('load', () =>
        {
            els = document.getElementsByClassName('splide')
            Array.from(els).forEach((el) => {
                new Splide( el, {
                    type: 'fade',
                    ease: false,
                    perPage: 1,
                    autoplay: true,
                    rewind: true,
                    interval: 3000,
                    lazyLoad: 'nearby',
                    accessibility: true
                }).mount();
            });
        })
    }
})
</script>
