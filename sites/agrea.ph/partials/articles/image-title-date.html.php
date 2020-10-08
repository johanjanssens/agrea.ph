<div class="rounded-lg h-64 overflow-hidden">
	<a href="<?= route(page($category . '/article'), ['slug' => article($id)->slug]) ?>">
		<img alt="<?= article($id)->title ?>" class="object-cover object-center h-full w-full" src="<?= article($id)->image->url ?>">
	</a>
</div>
<h3 role="heading" aria-level="3" class="font-medium text-gray-900 mt-6 mb-3">
	<a href="<?= route(page($category . '/article'), ['slug' => article($id)->slug]) ?>">
		<?= article($id)->title ?>
	</a>
</h3>
<p class="leading-relaxed text-xs flex items-center">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
	  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
	</svg> <?= date(article($id)->published_date, 'd M, Y'); ?>
</p>
