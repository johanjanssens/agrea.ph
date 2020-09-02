<section class="<?= $class ?>">
  <div class="flex md:flex-row flex-col">
    <? 
    $articles = collection('ext:joomla.model.articles', [
      'published' => 1,
      'category' => '11', // news
      'sort' => 'date',
      'order' => 'desc',
      'limit' => 1,
    ]); ?>
    <div class="flex items-center text-center md:text-left px-8 md:px-12 md:w-1/2">
        <div class="py-24 sm:py-36 md:py-42">
            <div class="md:hidden mb-4">
              <img class="object-cover object-center rounded" src="<?= $articles->image->url ?>" alt="<?= $articles->title; ?>">
            </div>
            <h1 class="font-title sm:text-6xl text-4xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><?= $articles->title ?></h1>
            <div class="mb-4 text-dark-green-800 text-opacity-50"><?= $articles->excerpt ?></div>
            <div class="flex justify-center">
              <form action="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>">
                <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Read More</button>
              </form>
            </div>
        </div>
    </div>

    <div class="hero-image hidden md:block md:w-1/2">
        <div class="h-full object-cover" style="background-image: url(<?= $articles->image->url ?>);">
            <div class="h-full bg-gray-900 opacity-25"></div>
        </div>
    </div>
  </div>
</section>