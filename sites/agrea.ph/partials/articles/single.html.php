<div class="max-w-4xl m-auto mt-8">
	<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $article->title ?></h1>
	<div class="h-1 w-20 bg-green-500 rounded mb-6"></div>
	<img class="rounded w-full mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
	<div class="mt-2"><?= $article->text ?></div>
</article>
