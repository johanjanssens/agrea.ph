---
layout: index
header:  []
content: []
---
<!-- Main content -->
<section class="text-gray-700 body-font">
	<div class="container px-5 py-24 mx-auto leading-relaxed text-base">
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
				
				<?= import('/partials/navigation/submenu');?>
				
			</div>
		</div>
	</div>
</section>