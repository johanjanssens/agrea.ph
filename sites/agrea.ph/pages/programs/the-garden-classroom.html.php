---
layout: default
name: The Garden Classroom
title: The Garden Classroom
summary: The easy to use page generator for Joomla
slug: the-garden-classroom
---
<ktml:style src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css" rel="preload" as="style" />
<ktml:script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer="defer" />

<article class="flex flex-col sm:flex-row">
	<div class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img alt="<?= $title ?>" class="rounded object-cover object-center" src="/images/programs/garden-classroom/garden-classroom-1.jpg">
			</div>
		</div>
		<?= article(7)->excerpt ?>
		<?= article(7)->text ?>
	</div>
	<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ul class="border border-gray-300 mb-8 rounded">
			<li class="p-2 border-b hover:bg-gray-100 transition-colors duration-500 ease-in-out">
				<a class="block" href="/programs/agrea-1000-strong">Agrea 1000 Strong</a>
			</li>
			<li class="p-2 border-b hover:bg-gray-100 transition-colors duration-500 ease-in-out">
				<a class="block" href="/programs/agrea-farm-estate">Agrea Farm Estate</a>
			</li>
			<li class="p-2 border-b hover:bg-gray-100 transition-colors duration-500 ease-in-out">
				<a class="block" href="/programs/self-palayance">Self Palayance</a>
			</li>
			<li class="p-2 hover:bg-gray-100 transition-colors duration-500 ease-in-out">
				<a class="block" href="/programs/the-garden-classroom">The Garden Classroom</a>
			</li>
		</ul>
		<h3 class="text-base text-gray-900 font-medium font-title my-4 leading-tight">TGC by the Numbers</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<img alt="Be a 1000Strong Volunteer" class="rounded w-full my-6" src="/images/programs/garden-classroom/tgc-sidebar.jpg" />
		<h3 class="text-base text-gray-900 font-medium font-title my-4 leading-tight">Support The Garden Classroom</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p class="text-base text-gray-900 my-4">To know more about AGREA's School Garden Program, if you have questions, or you would like to lend a helping hand, send us an email through agreaph@gmail.com or fill-out the form below.</p>
		<?= import('/partials/contact-form'); ?>
	</div>
</article>
