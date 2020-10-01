---
layout: default
name: Team
title: AGREA Team
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
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach (data('team') as $member) : ?>
			<? if ($member->slug !== ""): ?>
			<a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 hover:text-dark-green-500 p-6 rounded-lg" href="/about/team/<?= $member->slug; ?>">
			<? else: ?>
			<div class="h-full bg-gray-100 text-gray-900 p-6 rounded-lg">
			<? endif; ?>
				<img class="h-40 rounded w-full object-cover object-center mb-6" src="images://team/<?= $member->avatar ?>" alt="<?= $member->name; ?>">
				<h2 class="text-lg font-medium font-title leading-tight">
					<span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
						<span itemprop="name"><?= $member->name; ?></span>
					</span>
				</h2>
				<p class="text-sm"><?= $member->position; ?></p>
			<? if ($member->slug == ""): ?>
			</div>
			<? else: ?>
			</a>
			<? endif; ?>
			<? endforeach; ?>
		</div>
		</ktml:images>
	</div>
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ktml:images max-width="25%">
        <h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
        <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
        <div  x-data="{ isOpen: false }">
            <?= import('/partials/navigation/submenu');?>
        </div>
        <p><img class="rounded w-full" src="images://consultancy/atilano.jpg" /></p>
        <p>Founded by multi-awarded Filipina entrepreneur Cherrie Atilano, AGREA is a Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.</p>
        <h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Consult with AGREA</h3>
        <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
        <dl itemscope itemtype="https://schema.org/Organization">
            <link itemprop="url" href="https://www.agrea.ph">
            <dt>Email Address:</dt>
            <span itemprop="email"><a href="mailto:consultancy@agrea.ph">consultancy@agrea.ph</a></span>
            <dt>Tel:</dt>
            <dd itemprop="telephone"><a href="tel:+63632240521">+63 2 240 521</a></dd>
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <dt>Address:</dt>
                <dd itemprop="streetAddress">Suite 318A, 3/F LRI Design Plaza, 210 Nicanor Garcia, Makati City,</dd>
                <dd itemprop="postalCode">1209,</dd>
                <dd itemprop="addressLocality">Metro Manila, Philippines</dd>
            </div>
        </dl>
    	</ktml:images>
	</aside>
</div>
