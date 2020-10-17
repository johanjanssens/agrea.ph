---
layout:
    path: default
    footer:
        image: images://background/farmer-couple.jpg
name: Career opportunities at AGREA
slug: careers
title: Career opportunities at AGREA
summary: AGREA is an innovative inclusive social enterprise with a fun, committed, and dynamic team. We are growing, and we are looking for new people to join us in making farming cool, smart, sexy and humane.
collection:
    model: ext:joomla.model.articles
    state:
        limit: 0
        published: 1
        category: [10]
        sort: date
        order: desc
---
<div class="flex flex-col sm:flex-row">
	<div role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
	<ktml:images max-width="33%" lazyload="progressive,inline">
		<div class="flex flex-wrap w-full mb-10">
			<article class="w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-brand rounded mb-6"></div>
				<p>AGREA is an innovative inclusive social enterprise with a fun, committed, and dynamic team. <br />We are growing, and we are looking for new people to join us in making farming cool, smart, sexy and humane. </p>
			</article>
		</div>
		<div role="grid" class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): ?>
			<a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="<?= route(page('/about/careers/article'), ['slug' => $article->slug]) ?>">
				<aside role="gridcell">
					<span class="hidden"><?= config()->site->name ?></span>
					<img class="rounded w-full object-contain object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
					<p class="leading-relaxed text-xs font-medium mb-2 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date($article->published_date, 'd M, Y'); ?>
					</p>
					<h2 role="heading" aria-level="2" class="text-lg font-medium font-title mb-4 leading-tight" ><?= $article->title; ?></h2>
					<p class="text-xs">
						Posted by: <?= $article->getAuthor()->getName(); ?>
					</p>
				</aside>
			</a>
			<? endforeach; ?>
		</div>
    </ktml:images>
	</div>
	<aside role="complementary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
  	<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<div  x-data="{ isOpen: false }">
			<?= import('/partials/navigation/submenu');?>
		</div>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">Be Part of the AGREA Team</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<img class="md:h-32 rounded w-full object-cover object-center" src="images://careers/careers-sidebar.jpg" alt="" />
		<p>AGREA is an innovative inclusive social enterprise with a fun, committed, and dynamic team.</p>
		<p>We are growing, and we are looking for new people to join us in making farming cool, smart, sexy and humane.</p>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">Apply now!</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<p>For interested applicants, please fill in the form below:</p>
		<?= import('/partials/form/apply'); ?>
  	</ktml:images>
	</aside>
</div>
