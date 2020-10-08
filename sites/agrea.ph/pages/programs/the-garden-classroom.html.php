---
layout: default
name: The Garden Classroom
title: The Garden Classroom
summary: The easy to use page generator for Joomla
slug: the-garden-classroom
---

<div class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<article role="main" itemscope itemtype="http://schema.org/Article" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img alt="<?= $title ?>" class="rounded object-cover object-center" src="images://programs/garden-classroom/garden-classroom-1.jpg" data-max-width="50%" data-lazyload="progressive,inline">
			</div>
		</div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%" lazyload="progressive,inline">
			<?= article(145)->excerpt ?>
			<?= article(145)->text ?>
		</ktml:images>
		</div>
	</article>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

		<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4 leading-tight">TGC by the Numbers</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<ktml:images max-width="25%" lazyload="progressive,inline">
		<img alt="Be a 1000Strong Volunteer" class="rounded w-full my-6" src="images://programs/garden-classroom/tgc-sidebar.jpg" />
		</ktml:images>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4 leading-tight">Support The Garden Classroom</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">To know more about AGREA's School Garden Program, if you have questions, or you would like to lend a helping hand, send us a message by filling-out the form below.</p>
		<?= import('/partials/form/contact'); ?>
	</aside>
</div>
