---
layout: default
name: LEAFlet (Local Event Themes)
title: LEAFlet (Local Event Themes)
summary:  LEAF is a growing force of 400+ agri-leaders from 20 countries. AGREA's five Focus Dialogues (called LEAFlets), gather new generations to act on the biggest issues affecting the agricultural landscape.
slug: leaflet-local-event-themes
---

<div class="flex flex-col sm:flex-row">
	<article class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img class="md:h-36 rounded w-full object-cover object-center" src="images://events/leaf/leaflet/leaflet-1.jpg" data-max-width="50%" data-preload="true">
			</div>
		</div>

		<ktml:images max-width="25%">
		<h3 class="text-gray-900 font-medium font-title my-4">LEAF Focus Dialogues: Right Here, Right Now</h3>
		<p>The Leaders and Entrepreneurs in Agriculture Forum (LEAF) is a community of champions across all sectors uniting as advocates for better agriculture. Launched in September 2018 via the <a href="/events/leaf" target="_blank">“Redefining + Revitalizing Agriculture” conference</a>, LEAF is a growing force of 400+ agri-leaders from 20 countries. AGREA has planned five Focus Dialogues for 2019 (called LEAFlets), gathering new generations to act on the biggest issues affecting the agricultural landscape.</p>
		<div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
			<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 2,
					'category' => 'events',
				]); ?>
			</div>
			<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 1,
					'category' => 'events',
				]); ?>
			</div>
			<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
				<?= import('/partials/articles/image-title-date',[
					'id' => 73,
					'category' => 'events',
				]); ?>
			</div>
		</div>
		</ktml:images>
	</article>
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu',[
			'menuOpen'=>1,
		]);?>

	</aside>
</div>
