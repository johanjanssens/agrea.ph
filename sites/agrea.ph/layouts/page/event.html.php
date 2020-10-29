---
layout: page
header:  []
content: []
---
<!-- Main content -->
<section id="top" class="container mx-auto px-5 py-8 flex-1">
	<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
		<div role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
			<div class="flex flex-wrap w-full mb-10">
				<div class="lg:w-2/3 w-full mb-6 lg:mb-0">
					<h1 class="sm:text-3xl text-2xl font-medium font-title uppercase mb-2 text-gray-900"><?= $title; ?></h1>
					<div class="h-1 w-20 bg-brand rounded"></div>
				</div>
			</div>
			<ktml:content>
		</div>
		<aside role="complementary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">

			<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>

			<?= import('/partials/navigation/submenu',[
				'menuOpen'=>'true',
			]);?>

		</aside>
	</div>
</section>
