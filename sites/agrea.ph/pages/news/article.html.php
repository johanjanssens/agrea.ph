---
layout: default
route: news/[:slug]
collection:
    extend: news
metadata:
    'og:type': article
visible: false
---

<article itemscope itemtype="http://schema.org/Article">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<main role="main">
		<?= import('/partials/articles/single.html', [
			'article' => collection(),
		]); ?>
	</main>
</article>