---
layout: default
route: about/careers/[:slug]
collection:
    extend: about/careers
metadata:
    'og:type': article
visible: false
---

<div itemscope itemtype="http://schema.org/JobPosting" class="flex flex-col sm:flex-row">
	<article class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
	<ktml:images max-width="80%">
		<div class="flex flex-wrap w-full mb-10">
			<div class="w-full mb-6 lg:mb-0">
				<h1 itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= collection()->title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded mb-6"></div>
				<img itemprop="image" class="rounded w-full mb-6" src="<?= collection()->image->url ?>" alt="<?= collection()->title; ?>">
				<p class="mt-2 text-xs font-medium flex flex-row justify-between">
					<span itemprop="author" itemscope itemtype="http://schema.org/Person">
						<span itemprop="name"><?//= collection()->getAuthor()->getName() ?></span>
					</span>
					<span class="leading-relaxed text-dark-green-500 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date(collection()->published_date, 'd M, Y'); ?>
					</span>
				</p>
				<div class="mt-2" itemprop="articleBody" content="<?= collection()->text ?>"><?= collection()->text ?></div>
			</div>
		</div>
	</ktml:images>
	</article>
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
        <h2 class="font-title font-medium text-gray-900 tracking-widest mb-3">Apply Now!</h2>
        <div class="h-1 w-10 bg-green-500 rounded mb-3"></div>
		<?= import('/partials/form/contact'); ?>
	</aside>
</div>
