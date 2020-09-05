---
layout: default
name: Archives
title: News Archives
summary: An archive of the news items on the AGREA website
collection:
    model: ext:joomla.model.articles
    state:
        limit: 12
        published: 1
        category: [8,10,11,12,13]
        sort: date
        order: desc
process:
    filters: [plugins]
---

<div class="flex flex-col sm:flex-row">
	<div class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<div class="archives-slider">
					<div><img class="md:h-36 rounded w-full object-cover object-center" src="images://slider/farm-school/farm-school.jpg"></div>
					<div><img class="md:h-36 rounded w-full object-cover object-center" src="images://slider/farm-school/tesda-scholar.jpg"></div>
				</div>
				<script>
					window.addEventListener('load', function(){
						var slider = tns({
							container: '.archives-slider',
							mode: 'gallery',
							controlsPosition: 'bottom',
							items: 1,
							autoplay: true,
							autoplayText: ["",""],
						});
					}) 
				</script>
			</div>
		</div>
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): 
				$category_slug = (
					(strpos($article->category->slug,'prouts') == true)
					|| (strpos($article->category->slug,'icks') == true))
					? 'news'
					: $article->category->slug;
			?>
			<div class="bg-gray-100 hover:bg-green-100 p-6 rounded-lg">
				<a class="text-gray-900 hover:text-gray-600" href="<?= route('news/article', ['slug' => $article->slug]) ?>">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
					<p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-2 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date($article->published_date, 'd M, Y'); ?>
					</p>
					<p><a href="<?= route(page($category_slug.'/article'), ['slug' => $article->slug]) ?>"><?= $article->category->name; ?></a></p>
					<h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><?= $article->title; ?></h2>
					<div class="mb-2"><?= $article->excerpt; ?></div>
					<p class="text-xs mt-2">
						Written by: <?= $article->getEditor()->getName(); ?>
					</p>
				</a>
			</div>
			<? endforeach; ?>
		</div>
		<?= helper('paginator.pagination') ?>
	</div>
	<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		
		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		
		<h3 class="text-gray-900 font-medium font-title my-4">Subscribe to AGREA</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p>Get the latest news and updates from the AGREA Team.</p>
		<?= import('/partials/subscription-form'); ?>
	</div>
</div>

