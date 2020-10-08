---
layout: default
name: About Us
title: About AGREA
summary: AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.
---
<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
	<div class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<ktml:images max-width="33%" lazyload="progressive,inline">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
		</div>

		<blockquote>AGREA is an innovative, inclusive, for purpose, agri-business that is founded on sustainable agriculture, fair-trade,
				and replicable model of an agri-based economy.</blockquote>

		<p>We are in the most essential business – feeding people. Rich or poor, young or old: everyone needs to eat. Food is essen- tial to
			life on Earth. Hence, dignifying all the stakeholders in agricultural systems, more importantly the farmers is the core of our work.
			Many farmers create vibrant livelihoods out of food production, while others struggle to get ahead. AGREA is a small player but a
			quality player. We founded our business on <span class="text-gray-700 font-bold">Ecology of Dignity</span> as agriculture is the
			only industry that takes care of all living things on earth: plants, animals and humans.</p>

		<p>We are focused on making the Philippine archipelago to be agriculturally sustainable built on the <span class="text-gray-700 font-bold">One
			Island Economy</span> model guided by three major goals: <span class="text-gray-700 font-bold">Zero Hunger, Zero Waste and Zero Insufficiency.</span>
			We believe that Filipino Farmers are world class. They are the point of change in the food system. We also continue nourishing every
			Filipino family. Investing in human capi- tal through nutrition is considered a sustainable economic investment. Nutritious and safe food
			allows for healthy and productive lives. It’s as important as the air we breathe and the water we drink.</p>

		<p>Healthy human capital is the backbone of our economy. Taking good care of our only planet is integrated in our business. Environmental
			impact is a key consideration in all our business operations.	Our approach is transformational, we make sure every transaction made
			with AGREA from producing to bringing food to the consumers is contributing to impactful changes in every point of the supply chain.</p>
		</ktml:images>
	</div>
	<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<div  x-data="{ isOpen: false }">
			<?= import('/partials/navigation/submenu');?>
		</div>
	</div>
</div>
