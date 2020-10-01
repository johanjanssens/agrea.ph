---
layout: default
name: About Us
title: About AGREA
summary: AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.
---
<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
	<div class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<ktml:images max-width="33%">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
		</div>
		About AGREA info to go here
		</ktml:images>
	</div>
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ktml:images max-width="25%">
		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<div  x-data="{ isOpen: false }">
			<?= import('/partials/navigation/submenu');?>
		</div>
	</aside>
</div>
