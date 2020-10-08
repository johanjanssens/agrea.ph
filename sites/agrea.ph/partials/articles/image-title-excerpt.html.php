<div class="rounded-lg h-32 overflow-hidden my-4">
	<a href="<?= route(page($category . '/article'), ['slug' => article($id)->slug]) ?>">
		<img alt="<?= article($id)->title ?>" class="h-40 rounded w-full object-cover object-center mb-6" src="<?= article($id)->image->url ?>" data-max-width="50%">
	</a>
</div>
<h3 role="heading" aria-level="3" class="font-medium text-gray-900 mb-4">
	<a class="text-gray-900 hover:text-gray-600" href="<?= route(page($category . '/article'), ['slug' => article($id)->slug]) ?>">
		<?= article($id)->title ?>
	</a>
</h3>
<div class="mb-4"><?= article($id)->excerpt ?></div>
