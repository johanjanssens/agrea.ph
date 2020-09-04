---
layout: default
route: news/[:slug]
collection:
    extend: news
metadata:
    'og:type': article
visible: false
---

<?= import('/partials/articles/single.html', [
	'article' => collection(),
]); ?>