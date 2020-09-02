<ul class="list-none px-1 py-2">
    <? foreach (collection('pages', ['filter' => ['visible' => 'true']]) as $page) : ?>
        <li class="inline-block px-2 py-1">
            <a class="inline-block text-white" href="<?= route($page); ?>"><?= $page->name; ?></a>
        </li>
    <? endforeach ?>
</ul>