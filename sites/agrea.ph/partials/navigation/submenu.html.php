<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']]) ?>
<ul x-data="{ isOpen: false }" :aria-expanded="isOpen" class="border border-gray-300 mb-8 rounded">
	<? foreach ($pages as $page) : ?>
		<? foreach($page->getChildren() as $child): ?>
			<? if (strpos(page()->path, $page->path) === 0): ?>
				<? if ($child->getChildren()): ?>
					<li class="hover:bg-gray-100 items-center transition-colors duration-500 ease-in-out rounded-t p-2 flex justify-between relative<?= strpos(page()->path, $child->path) === 0 ? ' bg-gray-100 is-active' : '' ?>">
						<a class="" href="<?= route($child) ?>"><?= $child->name ?></a>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-dark-green-500" :aria-expanded="isOpen" aria-controls="nav-list" :hidden="!isOpen" @click="isOpen = !isOpen">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-dark-green-500" :aria-expanded="isOpen" aria-controls="nav-list" :hidden="isOpen" @click="isOpen = !isOpen">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
						</svg>
					</li>
					<ul :hidden="!isOpen" x-cloak id="nav-list" class="mb- pb-0">
						<? foreach($child->getChildren() as $sub): ?>
							<li class="hover:bg-gray-100 border-t transition-colors duration-500 ease-in-out p-2 pl-6 pr-4 border-t<?= strpos(page()->path, $sub->path) === 0 ? ' bg-gray-100 is-active' : '' ?>">
								<a class="w-full" href="<?= route($sub) ?>"><?= $sub->name ?></a>
							</li>
						<? endforeach ?>
					</ul>
				<? else: ?>
					<li class="hover:bg-gray-100 border-t transition-colors duration-500 ease-in-out p-2<?= strpos(page()->path, $child->path) === 0 ? ' bg-gray-100 is-active' : '' ?> no-children">
						<a class="w-full" href="<?= route($child) ?>"><?= $child->name ?></a>
					</li>
				<? endif; ?>
			<? endif; ?>
		<? endforeach ?>
	<? endforeach ?>
</ul>