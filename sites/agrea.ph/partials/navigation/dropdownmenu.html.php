<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']])  ?>
<ul class="list-none px-1 py-2">
    <? foreach ($pages as $page) : ?>
        <li class="inline-block px-2 py-1<?= strpos(page()->path, $page->path) === 0 ? ' is-active rounded-sm' : '' ?>">
            <a class="hover:text-gray-900" href="<?= route($page); ?>"><?= $page->name; ?></a>
                <? if ($page->getChildren()): ?>
                    <ul class="list-none p-4 pb-2">
                        <? foreach($page->getChildren() as $child): ?>
                            <li class="block pb-2<?= strpos(page()->path, $child->path) === 0 ? ' is-active' : '' ?>">
                                <a class="block m-0 p-0 text-white hover:text-white-900 text-xs" href="<?= route($child) ?>"><?= $child->name ?></a>
                                    <? if ($child->getChildren()): ?>
                                        <ul class="list-none p-4 pb-2">
                                            <? foreach($child->getChildren() as $sub): ?>
                                                <li class="block pb-2<?= strpos(page()->path, $page->path) === 0 ? ' is-active' : '' ?>">
                                                    <a class="block m-0 p-0 text-white hover:text-white-900 text-xs" href="<?= route($sub) ?>"><?= $sub->name ?></a>
                                                </li>
                                            <? endforeach ?>
                                        </ul>
                                    <? endif ?>
                            </li>
                        <? endforeach ?>
                    </ul>
                <? endif ?>
        </li>
    <? endforeach ?>
</ul>