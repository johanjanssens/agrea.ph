<section class="relative hero-alt mb-12 <?= $class ?>">
  <div class="container px-5 py-12 md:py-24 mx-auto">
    <?
    $articles = collection('ext:joomla.model.articles', [
      'published' => 1,
      'category' => '11', // news
      'sort' => 'date',
      'order' => 'desc',
      'limit' => 1,
    ]); ?>
    <div class="flex flex-col-reverse lg:flex-row">
      <div class="lg:w-3/5">
        <div class="hero-text">
          <h1 class="font-title uppercase sm:text-5xl text-3xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><a class="leading-none" href="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>" title="Read the full story: <?= $articles->title ?>"><?= $articles->title ?></a></h1>
          <div class="my-4 text-lg text-dark-green-800 text-opacity-50"><?= $articles->excerpt ?></div>
        </div>
      </div>
      <div class="hero-image mb-16 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-2/5">
        <a class="" href="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>" title="Read the full story: <?= $articles->title ?>">
          <img class="rounded lg:h-full lg:object-cover lg:object-right lg:bg-right" src="<?= $articles->image->url ?>" alt="<?= $articles->title; ?>" data-max-width="800" data-lazyload="progressive,inline">
        </a>
      </div>
    </div>
  </div>
</section>
