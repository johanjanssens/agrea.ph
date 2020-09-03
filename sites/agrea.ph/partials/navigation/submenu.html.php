<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']]) ?>
<ul x-data="{ isOpen: false }" :aria-expanded="isOpen" class="border border-gray-300 mb-8 rounded">
	<? foreach ($pages as $page) : ?>
		<? foreach($page->getChildren() as $child): ?>
			<? if (strpos(page()->path, $page->path) === 0): ?>
				<? if ($child->getChildren()): ?>
					<li class="hover:bg-gray-100 items-center transition-colors duration-500 ease-in-out rounded-t p-2 flex justify-between relative<?= strpos(page()->path, $child->path) === 0 ? ' bg-gray-100 is-active' : '' ?>">
						<a class="" href="<?= route($child) ?>"><?= $child->name ?></a>
						<svg id="closedMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-600" :aria-expanded="isOpen" aria-controls="nav-list" @click="isOpen = !isOpen">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						</svg>
					</li>
					<ul :hidden="<?= isset ($menuOpen) ? '' : '!' ;?>isOpen" x-cloak id="nav-list" class="mb- pb-0">
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