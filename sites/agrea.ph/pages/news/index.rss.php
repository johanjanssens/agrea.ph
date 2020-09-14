---
title: AAgrea - Ecology of Dignity
summary: There's lots happening at Agrea, our news sprouts will keep you up-to-date.
collection:
    extend: news
    state:
        limit: 20
visible: false
---

<rss version="2.0"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
     xmlns:media="http://search.yahoo.com/mrss/">

    <channel>
        <title><?= page()->title ?></title>
        <? if($description = page()->metadata->get('description')) : ?>
            <description><?= $description ?></description>
        <? endif; ?>
        <link><?= route(page()) ?></link>
        <? if ($url = page()->image->url): ?>
            <image>
                <url><?= url($url) ?></url>
                <title><?= page()->image->alt ?  page()->image->alt  : page()->title ?></title>
                <link><?= route(page()->path) ?></link>
                <? if($description = page()->image->caption) : ?>
                    <description><?= $description ?></description>
                <? endif ?>
            </image>
        <? endif; ?>
        <lastBuildDate><?= count(collection()) ? collection()->top()->date->format(DateTime::RSS) : '' ?></lastBuildDate>
        <atom:link href="<?=  url() ?>" rel="self" type="application/rss+xml"/>
        <language><?= language() ?></language>
        <sy:updatePeriod><?= page()->get('update_period', $update_period) ?></sy:updatePeriod>
        <sy:updateFrequency><?= page()->get('update_frequency', $update_frequency) ?></sy:updateFrequency>

        <?foreach(collection() as $item):?>
            <item>
                <title><?= escape($item->title); ?></title>
                <link><?= route(page('news/article'), ['slug' => $item->slug]); ?></link>
                <guid isPermaLink="true"><?= route(page('news/article'), ['slug' => $item->slug]); ?></guid>
                <? if($url = $item->image->url): ?>
                    <media:content medium="image" url="<?= url($url) ?>" />
                <? endif ?>
                <description><?=  escape($item->summary) ?></description>
                <? if($item->category): ?>
                    <? $category = $item->category instanceof ComPagesModelEntityInterface ? $item->category->title : $item->category ?>
                    <category><?= escape((string) $category) ?></category>
                <? endif; ?>
                <pubDate><?= $item->date->format(DateTime::RSS) ?></pubDate>
            </item>
        <?endforeach?>
    </channel>
</rss>
