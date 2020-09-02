<? $pages = collection('pages',  ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true',  'filter' => ['visible' => 'gte:0']])  ?>
<ul class="list-none m-0 p-0">
    <? foreach ($pages as $page) : ?>
    	<? foreach($page->getChildren() as $child): ?>
		    <li class="border-b<?= strpos(page()->path, $child->path) === 0 ? ' is-active' : '' ?>">
		        <a class="block m-0 py-2 px-6" href="<?= route($child) ?>"><?= $child->name ?></a>
		            <? if ($child->getChildren()): ?>
		                <ul class="list-none m-0 p-0">
		                    <? foreach($child->getChildren() as $sub): ?>
		                        <li class="border-b pb-2<?= strpos(page()->path, $page->path) === 0 ? ' is-active' : '' ?>">
		                            <a class="block m-0 py-2 px-6" href="<?= route($sub) ?>"><?= $sub->name ?></a>
		                        </li>
		                    <? endforeach ?>
		                </ul>
		            <? endif ?>
		    </li>
		<? endforeach ?>
    <? endforeach ?>
</ul>