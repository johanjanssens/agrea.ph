---
layout: default
name: Self Palayance
title: Self Palayance
summary: Self-Palayance is AGREA’s plan to partner with Marinduque communities to establish complete rice self-sufficiency for the island and as a model for the entire Philippines.
slug: self-palayance
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
			<?= article(146)->excerpt ?>
			<?= article(146)->text ?>
		</ktml:images>
		</div>
		<ktml:images max-width="50%" lazyload="progressive,inline">
		<div class="flex flex-wrap mt-10">
			<div class="sm:w-1/2 mb-10 px-4 border-box">
				<?= import('/partials/articles/image-title-date',[
					'id' => 108,
					'category' => 'news',
				]); ?>
			</div>
			<div class="sm:w-1/2 mb-10 px-4 border-box">
				<?= import('/partials/articles/image-title-date',[
					'id' => 109,
					'category' => 'news',
				]); ?>
			</div>
		</div>
		</ktml:images>
	</article>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

		<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4 leading-tight">Support Self-Palayance</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">To know more about AGREA's Self-Palayance Program, if you have questions, or you would like to lend a helping hand, send us a message by filling-out the form below.</p>
		<?= import('/partials/form/contact'); ?>
	</aside>
</div>
