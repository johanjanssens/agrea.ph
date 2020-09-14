<section class="relative hero-alt <?= $class ?>">
  <div class="container m-auto">
    <? 
    $articles = collection('ext:joomla.model.articles', [
      'published' => 1,
      'category' => '11', // news
      'sort' => 'date',
      'order' => 'desc',
      'limit' => 1,
    ]); ?>
    <div class="relative z-10 md:flex md:justify-center md:w-3/5 py-24 sm:py-36 md:py-42 md:mx-0 mx-8">
        <div class="md:hidden mb-4">
          <img class="object-cover object-center rounded" src="<?= $articles->image->url ?>" alt="<?= $articles->title; ?>">
        </div>
        <div class="hero-text">
          <h1 class="font-title sm:text-5xl text-3xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><?= $articles->title ?></h1>
          <div class="mb-4 text-dark-green-800 text-opacity-50"><?= $articles->excerpt ?></div>
          <div class="flex justify-center">
              <a href="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>" class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Read More</a>
          </div>
        </div>
    </div>
  </div>
  <div class="hero-image hidden md:block absolute top-0 right-0 z-10 h-full w-2/5">
      <div style="background-image: url(<?= $articles->image->url ?>);" class="h-full object-cover">
          <div class="h-full bg-gray-900 opacity-25"></div>
      </div>
  </div>
</section>