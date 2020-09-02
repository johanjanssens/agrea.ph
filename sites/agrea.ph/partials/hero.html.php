<section class="<?= $class ?>">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <? 
    $articles = collection('ext:joomla.model.articles', [
      'published' => 1,
      'category' => '11', // news
      'sort' => 'date',
      'order' => 'desc',
      'limit' => 1,
    ]); ?>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" src="<?= $articles->image->url ?>" alt="<?= $articles->title; ?>">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="font-title sm:text-6xl text-4xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><?= $articles->title ?>
      </h1>
      <p class="mb-4 text-dark-green-800 text-opacity-50"><?= $articles->excerpt ?></p>
      <div class="flex justify-center">
        <form action="<?= route(page('news/article'), ['slug' => $articles->slug]) ?>">
          <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Read More</button>
        </form>
      </div>
    </div>
  </div>
</section>