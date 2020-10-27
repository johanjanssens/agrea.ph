<?
$category_slug = (strpos($article->category->slug,'prouts') || strpos($article->category->slug,'icks')) ? '/news' : '/'.$article->category->slug;
$category_slug = ($article->category->slug == 'careers') ? '/about'.$category_slug : $category_slug;
?>
<ktml:images max-width="80%" lazyload="progressive,inline">
<div class="max-w-4xl m-auto mt-8">
	<h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $article->title ?></h1>
	<div class="h-1 w-20 bg-brand rounded mb-6"></div>
	<div class="mb-6">
		<img itemprop="image" class="featured-image rounded object-cover object-left-top w-full" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
	</div>
	<p class="mt-2 text-xs font-medium flex flex-row justify-between">
		<span itemprop="author" itemscope itemtype="http://schema.org/Person">
			<span itemprop="name"><?//= $article->getAuthor()->getName() ?></span>
		</span>
		<span class="leading-relaxed text-dark-green-500 flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg> <?= date($article->published_date, 'd M, Y'); ?>
		</span>
	</p>
	<div class="mt-2" itemprop="articleBody" content="<?= escape(strip_tags($article->excerpt.$article->text)) ?>"><?= $article->excerpt.$article->text ?></div>
	<a id="backButton" class="hidden inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" href="javascript:history.back()">Back</a>
	<div id="moreLikeThis" class="hidden my-4">
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">More <?= $article->category->name ?> stories</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<div class="grid sm:grid-cols-3 gap-4 mb-4">
			<?
			$relatedArticles = collection('ext:joomla.model.articles', [
			'published' => 1,
			'category' => [$article->category->id], // new sprouts
			//'sort' => 'date',
			'order' => 'shuffle',
			'limit' => 3,
			]); ?>

			<? foreach($relatedArticles as $relatedArticle) :?>
			<a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="<?= route(page('news/article'), ['slug' => $relatedArticle->slug]) ?>">
				<aside>
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $relatedArticle->image->url ?>" alt="<?= $relatedArticle->title; ?>">
					<p class="text-xs flex items-center mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date($relatedArticle->published_date, 'd M, Y'); ?>
					</p>
					<h3 role="heading" aria-level="3" class="text-lg font-medium font-title mb-4 leading-tight"><?= $relatedArticle->title; ?></h3>
				</aside>
			</a>
			<? endforeach ?>
      	</div>
		<a class="inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" href="<?= $category_slug ?>">Discover even more <?= $article->category->name ?> stories</a>
	</div>
</div>
</ktml:images>
<script>
document.addEventListener("DOMContentLoaded", () => {
	if (document.referrer.indexOf(window.location.host) !== -1) { 
		document.getElementById("backButton").classList.toggle('hidden');
	}
	if (document.referrer.indexOf(window.location.host) === -1) {
		document.getElementById("moreLikeThis").classList.toggle('hidden');
	}
});
</script>