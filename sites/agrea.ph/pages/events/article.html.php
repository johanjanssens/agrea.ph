---
layout: default
route: events/[:slug]
collection:
    extend: events
metadata:
    'og:type': article
visible: false
---
<article  itemscope itemtype="http://schema.org/Event">
	<?= import('/partials/articles/single.html', [
		'article' => collection(),
	]); ?>
</article>

