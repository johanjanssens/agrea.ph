---
layout: default
route: farm-school/[:slug]
collection:
    extend: farm-school
metadata:
    'og:type': article
visible: false
---

<?= import('/partials/articles/single.html', [
	'article' => collection(),
]); ?>