---
layout: index
header:  []
content: []
---
<!-- Main content -->
<section class="container px-5 py-8 mx-auto leading-relaxed text-base text-gray-700 body-font flex-1 bg-white">
	<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
		<div class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
			<div class="flex flex-wrap w-full mb-20">
				<div class="lg:w-2/3 w-full mb-6 lg:mb-0">
					<h1 class="sm:text-3xl text-2xl font-medium font-title mb-2 text-gray-900"><?= $title; ?></h1>
					<div class="h-1 w-20 bg-green-500 rounded"></div>
				</div>
			</div>
			<ktml:content>
		</div>
		<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
			
			<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
			<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
			
			<div  x-data="{ isOpen: true }">
				<?= import('/partials/navigation/submenu');?>
			</div>
			
		</div>
	</div>
</section>