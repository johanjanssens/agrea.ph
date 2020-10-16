---
layout: default
name: News
title: New Sprouts
summary: All the latest news and fresh picks from the AGREA farm
collection:
    model: ext:joomla.model.articles
    state:
        limit: 12
        published: 1
        category: [8,11,12]
        sort: date
        order: desc
---

<div class="flex flex-col sm:flex-row">
	<div role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
	<ktml:images max-width="33%" lazyload="progressive,inline">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-brand rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
        <?= import('/partials/slider', ['folder' => 'images://slider/farm-school', 'max_width' => '50%']); ?>
			</div>
		</div>
		<div role="grid" class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): ?>
			<a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="<?= route('news/article', ['slug' => $article->slug]) ?>">
				<aside role="gridcell">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
					<p class="leading-relaxed text-xs font-medium mb-2 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date($article->published_date, 'd M, Y'); ?>
					</p>
					<h2 role="heading" aria-level="2" class="text-lg font-medium font-title mb-4 leading-tight"><?= $article->title; ?></h2>
					<div class=""><?= $article->excerpt; ?></div>
					<p class="text-xs mt-2">
						Written by: <?= $article->getAuthor()->getName(); ?>
					</p>
				</aside>
			</a>
			<? endforeach; ?>
		</div>
		<?= helper('paginator.pagination') ?>
    </ktml:images>
	</div>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>

		<div class="flex flex-col justify-start">
			<h2 role="heading" aria-level="2" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg leading-tight">Fresh picks from the AGREA Farm</h2>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-10"></div>
		</div>
		<?
            $freshPicks = collection('ext:joomla.model.articles', [
            'published' => 1,
            'category' => ['12'], // fresh picks
            'sort' => 'date',
            'order' => 'desc',
            'limit' => 6,
        ]); ?>
        <? foreach($freshPicks as $freshPick) :?>
    	<aside class="flex flex-col justify-start mb-10">
    		<a href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>">
    			<img class="md:h-36 rounded w-full object-cover object-center" src="<?= $freshPick->image->url ?>" alt="<?= $freshPick->title; ?>">
    		</a>
    		<p class=" text-gray-600 mt-2">
    			<a class="text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300" href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>"><?= $freshPick->title; ?></a>
    		</p>
    		<p class="leading-relaxed text-gray-500 text-xs flex items-center">
    			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
    				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg> <?= date($freshPick->published_date, 'd M, Y'); ?>
			</p>
		</aside>
        <? endforeach ?>
	</ktml:images>
	</aside>
</div>
