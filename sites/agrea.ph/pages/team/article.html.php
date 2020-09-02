---
layout: default
route: team/[:slug]
collection:
    extend: team
metadata:
    'og:type': article
visible: false
---
<?= import('/partials/articles/single.html', [
	'article' => collection(),
]); ?>

<div class="max-w-4xl m-auto mt-8">
	<p>The following is a full list of all the jobs alphabetically.</p>
	<?= import('/partials/articles/list.html', [
		'categoryID' => ['13',], // farm-school
		'categorySlug' => 'careers',
		'limit' => '6',
	]); ?>
</div>
