---
layout: home
name: Home
title: Agrea - Ecology of Dignity
---

<?= import('/partials/hero-alt',[
      'class' => 'text-gray-700 bg-lime-500',
    ]);
?>

<ktml:images max-width="33%" preload="true">
<section class="text-gray-700">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="w-full mb-6 lg:mb-0">
        <h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none">Top stories</h1>
        <div class="h-1 w-20 bg-green-500 rounded"></div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-4">
      <?
          $articles = collection('ext:joomla.model.articles', [
          'published' => 1,
          'category' => ['11','13'], // new sprouts & farm school
          'sort' => 'date',
          'order' => 'desc',
          'limit' => 3,
      ]); ?>

      <? foreach($articles as $article) :
        $category_slug = (strpos($article->category->slug, 'prouts') == true) ? 'news' : $article->category->slug;
      ?>
      <div class="h-full border-2 border-dark-green-300 rounded-lg overflow-hidden">
        <a href="<?= route(page($category_slug.'/article'), ['slug' => $article->slug]) ?>">
          <img src="<?= $article->image->url ?>" alt="<?= $article->title ?>" class="lg:h-48 md:h-36 w-full object-cover object-center">
        </a>
        <div class="p-6">
          <p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-2">
            <a class="text-gray-900 hover:text-gray-600" href="<?= route(page($category_slug.'/article'), ['slug' => $article->slug]) ?>"><?= $article->category->name; ?></a>
            <br>
            <span class="text-gray-600 text-sm flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg> <?= date($article->published_date, 'd M, Y'); ?>
            </span>
          </p>
          <h1 class="font-title text-lg font-medium text-gray-900 mb-3">
            <a href="<?= route(page($category_slug.'/article'), ['slug' => $article->slug]) ?>" class="text-gray-900 hover:text-gray-600"><?= $article->title ?></a>
          </h1>
          <p class="mb-3"><?= $article->excerpt ?></p>
          <a href="<?= route(page($category_slug.'/article'), ['slug' => $article->slug]) ?>" class="text-green-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <? endforeach ?>
    </div>
  </div>
</section>
</ktml:images>

<ktml:images max-width="25%">
<section class="text-gray-700 mb-24">
  <div class="container px-5 pt-12 pb-24 mx-auto bg-dark-green-200 rounded">
    <div class="flex flex-wrap w-full mb-20">
      <div class="w-full mb-6 lg:mb-0">
        <h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none uppercase">New sprouts</h1>
        <div class="h-1 w-20 bg-green-500 rounded"></div>
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
      <div class="bg-gray-100 hover:bg-green-100 p-6 rounded-lg">
        <a class="text-gray-900 hover:text-gray-600" href="<?= route(page('news/article'), ['slug' => $newSprout->slug]) ?>">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $newSprout->image->url ?>" alt="<?= $newSprout->title; ?>">
          <p class="text-xs text-gray-600 flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> <?= date($newSprout->published_date, 'd M, Y'); ?>
          </p>
          <h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><?= $newSprout->title; ?></h2>
        </a>
      </div>
      <? endforeach ?>
    </div>
  </div>
</section>
</ktml:images>

<ktml:images max-width="33%">
<section class="text-gray-700">
  <div class="container px-5 pb-24 mx-auto">
  <div class="flex flex-wrap w-full mb-20">
    <div class="w-full mb-6 lg:mb-0">
      <h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none">Classrooms, fora and reports</h1>
      <div class="h-1 w-20 bg-green-500 rounded"></div>
    </div>
  </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <a href="/farm-school"><img alt="content" class="object-cover object-center h-full w-full" src="images://farm-school/agrea-farm-school-scholarship-program-50pax.jpg" alt="AGREA Farm School Scholarship Program header"></a>
        </div>
        <h2 class="text-xl font-medium font-title text-gray-900 mt-5">Learn organic farming the AGREA way</h2>
        <p class=" mt-2">AGREA Farm School is <a href="/farm-school/enroll-now-organic-agriculture-production-ncii">now accepting applications</a> for admission in Organic Agriculture Production (OAP NC II). This 232-hour program includes hands-on training on producing organic concoctions, extracts and fertilizers, as well as producing organic vegetables, and raising organic chickens and hogs.</p>
        <a href="/farm-school" class="text-green-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <a href="/events/leaf"><img class="object-cover object-center h-full w-full" src="images://events/leaf/leaf-2018-get-your-free-copy-now.jpg" alt="Leaders and Entrepreneurs in Agriculture Forum"></a>
        </div>
        <h2 class="text-xl font-medium font-title text-gray-900 mt-5">Leaders and Entrepreneurs in Agriculture Forum</h2>
        <p class=" mt-2">LEAF is a global community of champions uniting as advocates across different sectors for better agriculture. Through mentorship and inclusive dialogue, delegates help to develop new generations of agricultural practitioners and allies.</p>
        <a href="/events/leaf" class="text-green-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full"  src="images://events/leaf/leaf-report.png" alt="LEAF 2018 Terminal Report">
        </div>
        <h2 class="text-xl font-medium font-title text-gray-900 mt-5">LEAF 2018 Terminal Report</h2>
        <p class=" mt-2">Agriculture is changing, in step with a changing world. AGREA organized its inaugural LEAF Forum in 2018 as a venue to discuss the various challenges and opportunities for agricultural practitioners, with a focus on three specific areas: agripreneurship, agritechnology, and agritourism.</p>
        Download the report <a href="https://drive.google.com/file/d/1NDrii6VzmPu-8e5GvHQHOjtpQp6dN7rF/view?usp=sharing" class="text-green-500 inline-flex items-center mt-3">here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
</ktml:images>

<ktml:images max-width="50%">
<section class="text-gray-200 bg-dark-green-500" style="background: #3e462e url(theme://images/background/hero-bg.jpg) left top/cover; background-blend-mode: multiply;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-dark-green-500 rounded overflow-hidden">
        <div class="w-24 h-full bg-lime-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:text-5xl sm:mb-0 text-4xl font-medium font-title mb-2 text-gray-200 leading-tight uppercase">In focus</h1>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="md:w-1/2 mb-10 px-4">
        <div class="rounded-lg md:mb-16">
          <img alt="content" class="rounded-lg object-cover object-center h-auto w-full" src="images://programs/1000strong/volunteer_programs.jpg" alt="Volunteer programs">
        </div>
        <h2 class="font-title text-2xl font-medium text-lime-500 mt-6 mb-3">Be a #AGREA1000Strong Volunteer</h2>
        <p class="mx-auto">AGREA 1000 Strong is an innovative and inclusive community of volunteers with a big heart: male and female youth leaders, teachers and educators, mothers, senior citizens, Overseas Filipino Workers, members of the LGBT+ community, and farming and fisherfolk leaders</p>
        <a href="/programs/agrea-1000-strong" class="inline-block mt-6 text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">Learn more</a>
      </div>
      <div class="md:w-1/2 mb-10 px-4">
        <div class="embed-responsive aspect-ratio-16/9 rounded-lg">
          <iframe class="rounded-lg" allowfullscreen="" src="https://video.toggle.sg/en/embed/469498" style="width: 640px; height: 360px;" frameborder="0" class="rounded-lg"></iframe>
        </div>
        <p class="text-grey-400 text-sm items-center">Video courtesy of Asia NewsChannel</p>
        <h2 class="font-title text-2xl font-medium text-lime-500 mt-6 mb-3">ASEAN's Next Generation Leaders (ANGeLs)</h2>
        <p class="">In the Philippines, where farmers toil for meager sums, Cherrie Atilano is an invigorating ray of hope. Spending her childhood among farmers, the harsh reality of their plight led to her life's calling. Today, she's sowing the seeds of change to allow farmers to cultivate dreams of their own.</p>
      </div>
    </div>
  </div>
</section>
</ktml:images>

<ktml:images max-width="33%">
<section class="text-gray-700">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="flex flex-col sm:flex-row mt-10">
      <div class="sm:w-1/3 sm:pr-8 sm:py-8">
        <div class="flex flex-col justify-center">
          <h2 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Fresh picks from the AGREA Farm</h2>
          <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-10"></div>
        </div>
        <?
            $freshPicks = collection('ext:joomla.model.articles', [
            'published' => 1,
            'category' => ['12'], // fresh picks
            'sort' => 'date',
            'order' => 'desc',
            'limit' => 2,
        ]); ?>
        <? foreach($freshPicks as $freshPick) :?>
        <div class="flex flex-col justify-start mb-10">
          <a href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>">
            <img class="md:h-36 rounded w-full object-cover object-center" src="<?= $freshPick->image->url ?>" alt="<?= $freshPick->title; ?>">
          </a>
          <p class=" text-gray-600 mt-2">
            <a class="text-gray-900 hover:text-gray-600" href="<?= route(page('news/article'), ['slug' => $freshPick->slug]) ?>"><?= $freshPick->title; ?></a>
          </p>
          <p class="leading-relaxed text-gray-500 text-xs flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> <?= date($freshPick->published_date, 'd M, Y'); ?>
          </p>
        </div>
        <? endforeach ?>
        <div class="flex flex-col justify-center">
          <h2 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Championing a new narrative for agriculture</h2>
          <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-5"></div>
        </div>
        <div class="flex flex-col justify-start mb-10">
          <div class="flex flex-col justify-start mb-10">
              <?= import('/partials/slider', ['folder' => 'images://slider/farming-is']); ?>
          </div>
          <p class=" text-gray-600 mt-2">AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.</p>
        </div>
      </div>

      <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
        <div class="flex flex-wrap w-full mb-20">
          <div class="w-full mb-6 lg:mb-0">
            <h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none">Agrea in the news</h1>
            <div class="h-1 w-20 bg-green-500 rounded"></div>
          </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 mb-8">
        <? foreach (data('weblinks')->shuffle()->slice(0, 4) as $weblink) : ?>
          <div class="bg-gray-100 hover:bg-green-100 p-6 rounded-lg">
            <a href="<?= $weblink->url; ?>">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="<?= $weblink->title ?>" class="object-cover object-center h-full w-full" src="images://agrea-in-the-news/<?= $weblink->image_name ?>" />
              </div>
              <p class="leading-relaxed text-orange-500 text-xs font-bold mt-2 mb-1"><?= $weblink->publication ?></p>
              <p class="leading-relaxed text-dark-green-500 text-xs font-medium mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg> <span><?= $weblink->date ?></span>
              </p>
              <h3 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight"><a class="text-gray-900 hover:text-gray-600"><?= $weblink->title ?></h3>
            </a>
          </div>
        <? endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
</ktml:images>
