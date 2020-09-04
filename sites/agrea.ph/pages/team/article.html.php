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
