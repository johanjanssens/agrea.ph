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
          <h1 class="font-title sm:text-5xl text-3xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><?= $articles->title ?></h1>
          <div class="mb-4 text-dark-green-800 text-opacity-50"><?= $articles->excerpt ?></div>
          <div class="flex justify-center">
              <a href="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>" class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Read More</a>
          </div>
        </div>
      </div>
      <div class="hero-image mb-16 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-2/5">
        <img class="rounded lg:h-full lg:object-cover lg:object-right" src="<?= $articles->image->url ?>" alt="<?= $articles->title; ?>">
      </div>
    </div>
  </div>
</section>