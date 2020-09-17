---
layout: default
name: Events
title: Events
summary: Operating since November 2014, AGREA has already organised and implemented a number of successful major national and international events.
collection:
    model: ext:joomla.model.articles
    state:
        limit: 12
        published: 1
        category: [8]
        sort: date
        order: desc
---

<div class="flex flex-col sm:flex-row">
	<div class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
        		<?= import('/partials/slider', ['folder' => 'images://slider/farm-school', 'max_width' => '50%']); ?>
			</div>
		</div>
    	<ktml:images max-width="25%">
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): ?>
			<div class="bg-gray-100 hover:bg-green-100 p-6 rounded-lg">
				<a class="text-gray-900 hover:text-gray-600" href="<?= route('events/article', ['slug' => $article->slug]) ?>">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
					<p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-2 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date($article->published_date, 'd M, Y'); ?>
					</p>
					<h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><?= $article->title; ?></h2>
					<div class=""><?= $article->excerpt; ?></div>
					<p class="text-xs mt-2">
						Written by: <?= $article->getEditor()->getName(); ?>
					</p>
				</a>
			</div>
			<? endforeach; ?>
		</div>
    	</ktml:images>
    <?= helper('paginator.pagination') ?>
	</div>
  	<ktml:images max-width="25%">
	<div class="sm:w-1/4 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

		<div  x-data="{ isOpen: false }">
			<?= import('/partials/navigation/submenu');?>
		</div>

		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">Partner Events</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p><a href="https://www.facebook.com/agreaph/photos/a.1580538318877949/2390153167916456/?type=3&amp;theater&amp;_rdc=1&amp;_rdr"><img class="rounded w-full" src="images://events/partner-events/magna-carta-of-rural-women.jpg" alt="Magna Carta of Rural Women: Round Table on Gender Equity &amp; Empowerment" /></a></p>
		<p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-2">Tue, September 17, 2019</p>
		<h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><a class="text-gray-900 hover:text-gray-600" href="https://www.facebook.com/agreaph/photos/a.1580538318877949/2390153167916456/?type=3&amp;theater&amp;_rdc=1&amp;_rdr">Magna Carta of Rural Women: Round Table on Gender Equity &amp; Empowerment</a></h2>
		<p><a href="https://web.facebook.com/agreaph/photos/a.1580538318877949.1073741827.1573291842935930/2119894528275656/?type=3&amp;theater"><img class="rounded w-full" src="images://events/partner-events/balar-flea-market-2018.jpg" alt="Balar Weekend Flea Market" /></a></p>
		<p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-2">Thu, August 9, 2018</p>
		<h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><a class="text-gray-900 hover:text-gray-600" href="https://web.facebook.com/agreaph/photos/a.1580538318877949.1073741827.1573291842935930/2119894528275656/?type=3&amp;theater">Balar Weekend Flea Market</a></h2>
	</div>
  </ktml:images>
</div>
