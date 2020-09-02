---
layout: default
route: events/[:slug]
collection:
    extend: events
metadata:
    'og:type': article
visible: false
---

<?= import('/partials/articles/single.html', [
	'article' => collection(),
]); ?>