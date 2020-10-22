---
layout: default
route: news/[:slug]
collection:
    extend: news
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