---
layout: default
route: about/careers/[:slug]
collection:
    extend: about/careers
metadata:
    'og:type': article
visible: false
---

<div itemscope itemtype="http://schema.org/JobPosting" class="flex flex-col sm:flex-row">
	<article role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
	<ktml:images max-width="80%" lazyload="progressive,inline">
		<div class="flex flex-wrap w-full mb-10">
			<div class="w-full mb-6 lg:mb-0">
				<h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title uppercase mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= collection()->title ?></h1>
				<div class="h-1 w-20 bg-brand rounded mb-6"></div>
				<img itemprop="image" class="rounded w-full mb-6" src="<?= collection()->image->url ?>" alt="<?= collection()->title; ?>">
				<p class="mt-2 text-xs font-medium flex flex-row justify-between">
					<span itemprop="author" itemscope itemtype="http://schema.org/Person">
						<span itemprop="name"><?//= collection()->getAuthor()->getName() ?></span>
					</span>
					<span class="leading-relaxed text-dark-green-500 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date(collection()->published_date, 'd M, Y'); ?>
					</span>
				</p>
				<div class="mt-2" itemprop="articleBody" content="<?= escape(strip_tags(collection()->excerpt.collection()->text)) ?>"><?= collection()->excerpt.collection()->text ?></div>
			</div>
		</div>
		<a id="backButton" class="hidden inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" href="javascript:history.back()">Back</a>
		<div id="moreLikeThis" class="hidden my-4">
			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">More open vacancies</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
			<ul>
				<?
				$relatedArticles = collection('ext:joomla.model.articles', [
				'published' => 1,
				'category' => [collection()->category->id], // new sprouts
				//'sort' => 'date',
				'order' => 'shuffle',
				'limit' => 3,
				]); ?>

				<? foreach($relatedArticles as $relatedArticle) :?>
				<li>
					<a href="<?= route(page('about/careers/article'), ['slug' => $relatedArticle->slug]) ?>">
						<?= $relatedArticle->title; ?>
					</a>
				</li>
				<? endforeach ?>
	      	</ul>
			<a class="inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" href="/about/careers">Discover even more</a>
		</div>
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
	</ktml:images>
	</article>
	<aside role="complementary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
        <h2 role="heading" aria-level="2" class="font-title uppercase font-medium text-gray-900 dark:text-gray-100 tracking-widest mb-3">Apply Now!</h2>
        <div class="h-1 w-10 bg-brand rounded mb-3"></div>
		<?= import('/partials/form/application'); ?>
	</aside>
</div>
