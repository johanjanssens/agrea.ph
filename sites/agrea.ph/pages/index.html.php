---
layout: home
name: Home
title: Agrea - Ecology of Dignity
---

<style type="text/css">
    section[class*="bg-"]:not(.bg-white){
        background-image: url(<?= helper('image.url', 'images://background/hero-bg.jpg?auto=compress&q=50&w=1500') ?>);
    }

    .save-data section {
        background-image: none !important;
    }
</style>

<?= import('/partials/hero-alt',['class' => 'bg-lime-500']);?>

<section class="text-gray-700">
  <ktml:images max-width="33%" lazyload="progressive,inline">
  <div class="container px-5 pt-12 pb-24 mx-auto">
    <div class="flex flex-wrap w-full mb-10">
      <div class="w-full mb-6 lg:mb-0">
        <h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none">We are <span class="sm:text-4xl text-3xl font-agrea">Agrea</span></h1>
        <div class="h-1 w-20 bg-brand rounded"></div>
      </div>
    </div>
    <div class="grid lg:grid-cols-2 gap-4">
      <div role="main">
        <h2 role="heading" aria-level="2" class="text-lg text-gray-900 dark:text-gray-100 font-medium font-title mb-4 leading-tight">Championing a new narrative for agriculture</h2>
        <p>We believe that Filipino Farmers are world class. They are the point of change in our food system. In living our mission we strive for an <span class="text-gray-700 font-bold">Ecology of Dignity</span> of all the stakeholders involved in bringing food on our tables. Rich or poor, young or old: everyone needs to eat!</p>
        <p>We are focused on making the Philippine archipelago agriculturally sustainable by building on the <span class="text-gray-700 font-bold">One Island Economy</span> model guided by three major goals: <span class="text-gray-700 font-bold">Zero Hunger</span>, <span class="text-gray-700 font-bold">Zero Waste</span> and <span class="text-gray-700 font-bold">Zero Insufficiency</span>.</p>
        <p>In all our work environmental local impact is a key consideration, by using a transformational approach, we make sure every transaction made with AGREA from producing to bringing food to consumers is contributing to impactful changes in every point along the way.</p>
      </div>
      <div class="">
          <?= import('/partials/slider', ['folder' => 'images://slider/farming-is', 'shuffle' => true]); ?>
      </div>
    </div>
  </div>
  </ktml:images>
</section>

<section class="text-gray-700 mb-24">
  <ktml:images max-width="25%" lazyload="progressive,inline">
  <div role="complimentary" class="container px-5 py-12 mx-auto bg-dark-green-200 rounded">
    <div class="flex flex-wrap w-full mb-10">
      <div class="w-full mb-6 lg:mb-0">
        <h2 role="heading" aria-level="2" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none">Latest News Sprouts</h2>
        <div class="h-1 w-20 bg-brand rounded"></div>
      </div>
    </div>
    <div class="grid xl:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <?
          $newSprouts = collection('ext:joomla.model.articles', [
          'published' => 1,
          'category' => ['11'], // new sprouts
          'sort' => 'date',
          'order' => 'desc',
          'limit' => 8,
      ]); ?>

      <? foreach($newSprouts as $newSprout) :?>
      <a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="<?= route(page('news/article'), ['slug' => $newSprout->slug]) ?>">
        <aside>
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $newSprout->image->url ?>" alt="<?= $newSprout->title; ?>">
          <p class="text-xs flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> <?= date($newSprout->published_date, 'd M, Y'); ?>
          </p>
          <h3 role="heading" aria-level="3" class="text-lg font-medium font-title mb-4 leading-tight"><?= $newSprout->title; ?></h3>
        </aside>
      </a>
      <? endforeach ?>
    </div>
    <div class="flex justify-center mt-12">
        <a role="button" href="/news" class="inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Discover More News Sprouts</a>
    </div>
  </div>
  </ktml:images>
</section>

<section class="text-gray-700">
  <ktml:images max-width="33%" lazyload="progressive">
  <div class="container px-5 pb-24 mx-auto">
  <div class="flex flex-wrap w-full mb-10">
    <div class="w-full mb-6 lg:mb-0">
      <h2 role="heading" aria-level="2" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none">Farm schools, fora and reports</h2>
      <div class="h-1 w-20 bg-brand rounded"></div>
    </div>
  </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <a href="/farm-school"><img alt="content" class="object-cover object-center h-full w-full" src="images://farm-school/agrea-farm-school-scholarship-program-50pax.jpg" alt="AGREA Farm School Scholarship Program header"></a>
        </div>
        <h3 role="heading" aria-level="3" class="text-xl font-medium font-title text-gray-900 dark:text-gray-100 mt-5">Learn organic farming the AGREA way</h3>
        <p class=" mt-2">AGREA Farm School is <a href="/farm-school/enroll-now-organic-agriculture-production-ncii">now accepting applications</a> for admission in Organic Agriculture Production (OAP NC II). This 232-hour program includes hands-on training on producing organic concoctions, extracts and fertilizers, as well as producing organic vegetables, and raising organic chickens and hogs.</p>
        <a href="/farm-school" class="text-green-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </aside>
      <aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <a href="/events/leaf"><img class="object-cover object-center h-full w-full" src="images://events/leaf/leaf-2018-get-your-free-copy-now.jpg" alt="Leaders and Entrepreneurs in Agriculture Forum"></a>
        </div>
        <h3 role="heading" aria-level="3" class="text-xl font-medium font-title text-gray-900 dark:text-gray-100 mt-5">Leaders and Entrepreneurs in Agriculture Forum</h3>
        <p class=" mt-2">LEAF is a global community of champions uniting as advocates across different sectors for better agriculture. Through mentorship and inclusive dialogue, delegates help to develop new generations of agricultural practitioners and allies.</p>
        <a href="/events/leaf" class="text-green-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </aside>
      <aside class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full"  src="images://events/leaf/leaf-report.png" alt="LEAF 2018 Terminal Report">
        </div>
        <h3 role="heading" aria-level="3" class="text-xl font-medium font-title text-gray-900 dark:text-gray-100 mt-5">LEAF 2018 Terminal Report</h3>
        <p class=" mt-2">Agriculture is changing, in step with a changing world. AGREA organized its inaugural LEAF Forum in 2018 as a venue to discuss the various challenges and opportunities for agricultural practitioners, with a focus on three specific areas: <span class="text-gray-700 font-bold">agripreneurship</span>, <span class="text-gray-700 font-bold">agritechnology</span>, <span class="text-gray-700 font-bold">and agritourism</span>.</p>
        Download the report <a href="https://drive.google.com/file/d/1NDrii6VzmPu-8e5GvHQHOjtpQp6dN7rF/view?usp=sharing" class="text-green-500 inline-flex items-center mt-3">here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </aside>
    </div>
  </div>
  </ktml:images>
</section>

<section class="text-gray-200 bg-dark-green-500">
  <ktml:images max-width="50%" lazyload="progressive">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-dark-green-500 rounded overflow-hidden">
        <div class="w-24 h-full bg-lime-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h2 role="heading" aria-level="2" class="sm:text-5xl sm:mb-0 text-4xl font-medium font-title mb-2 text-gray-200 leading-tight">In focus</h2>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <aside class="md:w-1/2 mb-10 px-4">
        <div class="flex flex-col justify-between">
          <div class="rounded-lg md:mb-10">
            <img alt="content" class="rounded-lg object-cover object-center h-auto w-full" src="images://programs/1000strong/volunteer_programs.jpg" alt="Volunteer programs">
          </div>
          <div class="mt-10">
            <h3 role="heading" aria-level="3" class="font-title text-2xl font-medium text-lime-500 mb-3">Be a #AGREA1000Strong Volunteer</h3>
            <p class="mx-auto">AGREA 1000 Strong is an innovative and inclusive community of volunteers with a big heart: male and female youth leaders, teachers and educators, mothers, senior citizens, Overseas Filipino Workers, members of the LGBT+ community, and farming and fisherfolk leaders</p>
            <a href="/programs/agrea-1000-strong" class="inline-block mt-6 text-white bg-brand border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">Learn more</a>
          </div>
        </div>
      </aside>
      <aside class="md:w-1/2 mb-12 px-4">
        <div class="flex flex-col justify-between">
          <figure class="rounded-lg px-5">
            <video class="w-full" poster="/videos/458341133?key=2e73e78627" controlsList="nodownload" playsinline controls preload="none">
              <source src="/videos/458341133.m3u8" type="application/x-mpegURL">
              <source src="/videos/458341133.mp4?q=540p" type="video/mp4" size="540">
              <source src="/videos/4583411334.mp4" type="video/mp4" size="720">
              <source src="/videos/458341133.mp4?q=360p" type="video/mp4" size="360">
              <source src="/videos/458341133.mp4?q=240p" type="video/mp4" size="240">
            </video>
            <figcaption class="text-grey-400 text-center text-sm italic mt-2">
              Video courtesy of Asia NewsChannel
            </figcaption>
          </figure>
          <div class="mt-12">
            <h3 role="heading" aria-level="3" class="font-title text-2xl font-medium text-lime-500 mb-3">ASEAN's Next Generation Leaders (ANGeLs)</h3>
            <p class="">In the Philippines, where farmers toil for meager sums, Cherrie Atilano is an invigorating ray of hope. Spending her childhood among farmers, the harsh reality of their plight led to her life's calling. Today, she's sowing the seeds of change to allow farmers to cultivate dreams of their own.</p>
          </div>
        </div>
      </aside>
    </div>
  </div>
  </ktml:images>
</section>

<section class="text-gray-700">
  <ktml:images max-width="33%" lazyload="progressive">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="flex flex-col sm:flex-row mt-10">
      <div class="sm:w-1/3 sm:pr-8 sm:py-8">
        <div class="flex flex-col justify-center">
          <h2 role="heading" aria-level="2" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg leading-tight">Fresh picks from the AGREA Farm</h2>
          <div class="w-12 h-1 bg-brand rounded mt-2 mb-10"></div>
        </div>
        <?
            $freshPicks = collection('ext:joomla.model.articles', [
            'published' => 1,
            'category' => ['12'], // fresh picks
            'sort' => 'date',
            'order' => 'desc',
            'limit' => 3,
        ]); ?>
        <? foreach($freshPicks as $freshPick) :?>
        <aside class="flex flex-col justify-start mb-10">
          <a class="h-48" href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>">
            <img class="object-cover object-center h-full w-full" src="<?= $freshPick->image->url ?>" alt="<?= $freshPick->title; ?>">
          </a>
          <p class=" text-gray-600 mt-2">
            <a class="text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300" href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>"><?= $freshPick->title; ?></a>
          </p>
          <p class="leading-relaxed text-gray-500 text-xs flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> <?= date($freshPick->published_date, 'd M, Y'); ?>
          </p>
        </aside>
        <? endforeach ?>
      </div>

      <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
        <div class="flex flex-wrap w-full mb-10">
          <div class="w-full mb-6 lg:mb-0">
            <h2 role="heading" aria-level="2" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none">Agrea in the news</h2>
            <div class="h-1 w-20 bg-brand rounded"></div>
          </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 mb-8">
        <? foreach (data('weblinks')->shuffle()->slice(0, 4) as $weblink) : ?>
          <a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 dark:text-gray-100 hover:text-dark-green-500 p-6 rounded-lg" href="<?= $weblink->url; ?>">
            <aside>
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="<?= $weblink->title ?>" class="object-cover object-center h-full w-full" src="images://agrea-in-the-news/<?= $weblink->image_name ?>" />
              </div>
              <p class="leading-relaxed text-xs font-bold mt-2 mb-1"><?= $weblink->publication ?></p>
              <p class="leading-relaxed text-xs font-medium mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg> <span><?= date($weblink->date, 'd M, Y'); ?></span>
              </p>
              <h3 role="heading" aria-level="3" class="text-lg font-medium font-title mb-4 leading-tight"><?= $weblink->title ?></h3>
            </aside>
          </a>
        <? endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  </ktml:images>
</section>
