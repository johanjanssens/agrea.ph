---
layout: default
name: Agrea 1000 Strong
title: Agrea 1000 Strong
summary: 'AGREA 1000 Strong is an innovative and inclusive community of volunteers with a big heart: male and female youth leaders, teachers and educators, mothers, senior citizens, Overseas Filipino Workers, members of the LGBT+ community, and farming and fisherfolk leaders.'
slug: agrea-1000-strong
---

<div class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<article role="main" itemscope itemtype="http://schema.org/Article" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title uppercase mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
		<div class="h-1 w-20 bg-brand rounded mb-10"></div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%" lazyload="progressive,inline">

			<?= article(148)->excerpt ?>
			<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/1000strong', 'max_width' => '80%']); ?>
			<?= article(148)->text ?>

			<img alt="Be a 1000Strong Volunteer" class="rounded w-full my-6" src="images://programs/1000strong/1000strong-5.jpg" />
			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4 leading-tight">Be an AGREA 1000 Strong Volunteer</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
			<p class="text-gray-900 my-4">Fill-out and submit the form below to receive updates and other opportunities available for AGREA 1000 Strong volunteers.</p>
			<?= import('/partials/form/volunteer') ?>
		</ktml:images>
		</div>
	</article>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
	<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/arborday', 'max_width' => '25%']); ?>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4 leading-tight">Appreciating our volunteers</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">We always take the time to recognize our volunteers for their hard work and dedication whenever we can. The bigger, and humbling, picture is:</p>
		<blockquote class="text-gray-900 my-4">"Our volunteers do not necessarily have the time, they just have the heart"</blockquote>
		<p><a href="https://www.facebook.com/agreaph/photos/a.1580538318877949.1073741827.1573291842935930/2070931923171917/?type=3&theater" target="_blank"><img class="md:min-h-36 rounded w-full object-cover object-center bg-center" src="images://programs/1000strong/arborday-3.jpg"></a></p>
	</ktml:images>
	</aside>
</div>
