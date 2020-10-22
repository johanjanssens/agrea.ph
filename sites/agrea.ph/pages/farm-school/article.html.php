---
layout: default
route: farm-school/[:slug]
collection:
    extend: farm-school
metadata:
    'og:type': article
visible: false
---

<article itemscope itemtype="http://schema.org/Article">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<?= import('/partials/articles/single.html', [
		'article' => collection(),
	]); ?>
</article>