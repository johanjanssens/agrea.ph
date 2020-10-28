---
layout: default
name: Meet the AGREA team
slug: team
title: AGREA Team
summary: AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.
---
<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
	<main role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<ktml:images max-width="33%" lazyload="progressive,inline">
		<h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
		<div class="h-1 w-20 bg-brand rounded mb-10"></div>
		<div role="grid" class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach (data('team') as $member) : ?>
				<? if ($member->slug !== ""): ?>
				<a class="bg-gradient-to-b from-gray-50 to-gray-100 hover:from-lime-400 hover:to-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="/about/team/<?= $member->slug; ?>">
					<aside role="gridcell">
				<? else: ?>
					<aside role="gridcell" class="h-full bg-gray-100 text-gray-900 dark:text-gray-100 p-6 rounded-lg">
					<? endif; ?>
						<img class="h-40 rounded w-full object-cover object-center mb-6" src="images://team/<?= $member->avatar ?>" alt="<?= $member->name; ?>">
						<h2 role="heading" aria-level="2" class="text-lg font-medium font-title leading-tight">
							<span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
								<span itemprop="name"><?= $member->name; ?></span>
							</span>
						</h2>
						<p class="text-sm"><?= $member->position; ?></p>
					<? if ($member->slug == ""): ?>
					</aside>
				<? else: ?>
					</aside>
				</a>
				<? endif; ?>
			</aside>
			<? endforeach; ?>
		</div>
		</ktml:images>
	</main>
	<aside role="complementary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<ktml:images max-width="25%">
        <h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
        <div  x-data="{ isOpen: false }">
            <?= import('/partials/navigation/submenu');?>
        </div>
        <aside>
	        <p><img class="rounded w-full" src="images://consultancy/atilano.jpg" /></p>
	        <p>Founded by multi-awarded Filipina entrepreneur Cherrie Atilano, AGREA is a Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.</p>
	        <h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg leading-tight">Consult with AGREA</h3>
	        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
	        <p>Find more about our <a href="/consultancy">consultancy services</a> or <a href="/about/contact">contact us</a> and send us a message.</p>
	    </aside>
    	</ktml:images>
	</aside>
</div>
