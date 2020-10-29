---
layout: default
name: LEAFlet (Local Event Themes)
title: LEAFlet (Local Event Themes)
summary:  LEAF is a growing force of 400+ agri-leaders from 20 countries. AGREA's five Focus Dialogues (called LEAFlets), gather new generations to act on the biggest issues affecting the agricultural landscape.
slug: leaflet-local-event-themes
---

<div class="flex flex-col sm:flex-row">
	<article role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
	<ktml:images max-width="33%" lazyload="progressive,inline">
		<h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title uppercase mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
		<div class="h-1 w-20 bg-brand rounded mb-10"></div>
		<h3 role="heading" aria-level="3" class="font-title uppercase text-2xl text-gray-900 dark:text-gray-100 leading-tight mb-3">LEAF Focus Dialogues: Right Here, Right Now</h3>
		<p>The Leaders and Entrepreneurs in Agriculture Forum (LEAF) is a community of champions across all sectors uniting as advocates for better agriculture. Launched in September 2018 via the <a href="/events/leaf" target="_blank">“Redefining + Revitalizing Agriculture” conference</a>, LEAF is a growing force of 400+ agri-leaders from 20 countries. AGREA has planned five Focus Dialogues for 2019 (called LEAFlets), gathering new generations to act on the biggest issues affecting the agricultural landscape.</p>
		<div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
			<aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 2,
					'category' => 'events',
				]); ?>
			</aside>
			<aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 1,
					'category' => 'events',
				]); ?>
			</aside>
			<aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 73,
					'category' => 'news',
				]); ?>
			</aside>
		</div>
	</ktml:images>
	</article>
	<aside role="complementary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

		<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu',[
			'menuOpen'=>'true',
		]);?>

	</aside>
</div>
