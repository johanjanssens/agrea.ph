---
layout: default
route: programs/[:slug]
collection:
    model: ext:joomla.model.articles
    state:
        limit: 12
        published: 1
        category: [14]
        sort: date
        order: desc
metadata:
    'og:type': article
visible: false
---

<article role="main" itemscope itemtype="http://schema.org/Article">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<?= import('/partials/articles/single.html', [
		'article' => collection(),
	]); ?>
</article>