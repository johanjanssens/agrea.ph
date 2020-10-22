<?
$articles = collection('ext:joomla.model.articles', [
  'published' => 1,
  'category' => $categoryID, // farm school
  'limit' => $limit,
]); ?>
<ul>
	<? foreach($articles as $article) : ?>
	<li>
    <a class="text-green-500 hover:text-green-400" href="<?= route(page($categorySlug.'/article'), ['slug' => $article->slug]) ?>">
      <?= $article->title ?>
    </a>
  </li>
	<? endforeach ?>
</ul>
