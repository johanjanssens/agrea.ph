---
layout: 
    path: default
    footer: 
        image: theme://images/background/footer-bg.jpg
name: Farm School
title: AGREA Farm School
summary: AGREA, the first TESDA-accredited farm school in Marinduque and certified by the Department of Agriculture - Agricultural Training Institute as an Organic Agriculture Learning Site.
collection:
    model: ext:joomla.model.articles
    state:
        limit: 6
        published: 1
        category: [13]
        sort: date
        order: desc
---

<div class="flex flex-col sm:flex-row sm:pb-4">
	<div class="sm:w-3/4 sm:pr-8 sm:pt-4">
		<ktml:images max-width="33%">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
          <?= import('/partials/slider', ['folder' => 'images://slider/farm-school', 'max_width' => '50%']); ?>
			</div>
		</div>
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): ?>
			<a class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 hover:text-dark-green-500 p-6 rounded-lg" href="<?= route('farm-school/article', ['slug' => $article->slug]) ?>">
				<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
				<p class="leading-relaxed text-xs font-medium mb-2 flex items-center">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg> <?= date($article->published_date, 'd M, Y'); ?>
				</p>
				<h2 class="text-lg font-medium font-title mb-4 leading-tight"><?= $article->title; ?></h2>
				<div class="text-sm"><?= $article->excerpt; ?></div>
				<p class="text-xs mt-2">
					Written by: <?= $article->getAuthor()->getName(); ?>
				</p>
			</a>
			<? endforeach; ?>
		</div>
		<?= helper('paginator.pagination') ?>
		<div class="flex flex-col sm:flex-row mt-8">
			<div class="sm:w-1/4 sm:pr-8 sm:pb-8 sm:pt-0 sm:border-r border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
				<h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Scholarship Programs Offered at the AGREA Farm School</h3>
				<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
				<ul>
					<li class="mb-2"><a href="/farm-school/agrea-now-offers-short-term-scholarships-in-organic-farming" target="_blank">Short-term Scholarships</a></li>
					<li class="mb-2"><a href="/farm-school/take-the-organic-agriculture-ncii-course-at-the-agrea-farm-school" target="_blank">Training for Work Scholarship Program (TWSP)</a></li>
					<li class="mb-2"><a href="/farm-school/agrea-farm-school-tesda-marinduque-expands-assistance-to-deserving-organic-farming-scholars" target="_blank">Private Education Student Financial Assistance (PESFA)</a></li>
					<li class="text-gray-600"><a href="/farm-school/free-farming-education-plus-benefits-await-less-fortunate-youth-through-uaqtea" target="_blank">Universal Access to Quality Tertiary Education Act Scholarship (UAQTEA)</a></li>
				</ul>
			</div>
			<div class="sm:w-3/4 sm:pl-8 sm:pt-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
				<h3 class="font-medium font-title text-gray-900 text-lg">Why tesda scholarship?</h3>
				<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
				<p><img src="images://farm-school/tesda-scholarships-at-the-agrea-farm-school.jpg" class="rounded w-full" data-max-width="70%"></p>
				<p>In the interest of service and in line with the TESDA Reform and Development Agenda, the AGREA Farm School is registered and certified to provide scholarships to target beneficiaries. For the complete guidelines and list of catered beneficiaries, please click <a href="http://www.tesda.gov.ph/About/TESDA/1277" target="_blank">here</a>.</p>
				<p><span style="font-size: medium;"><strong class="">Scholarship Benefits</strong></span>
					<br>TESDA scholars enrolled at the AGREA Farm School are entitled to free training and assessment. Other additional benefits vary depending on the scholarship availed.
				</p>
				<p><strong>Visit TESDA</strong>
					<br>You may visit the TESDA Provincial Office in Marinduque: 3/F Francisco Pura Building, Barangay San Miguel, Boac, Marinduque.<br>Tel. No. (042) 332-0231, 0995-784-7296<br>Email address <a href="mailto:region4b.marinduque@tesda.gov.ph">region4b.marinduque@tesda.gov.ph</a>.
				</p>
			</div>
		</div>
		</ktml:images>
	</div>
	<div class="sm:w-1/4 sm:pl-8 sm:pt-0 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<div class="flex flex-col">
			<h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Be an agri scholar now</h3>
			<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
			<p class="mt-4 mb-8">AGREA, the <a href="/news/agrea-first-tesda-accredited-farm-school-in-marinduque" target="_blank">first TESDA-accredited farm school in Marinduque</a> and certified by the Department of Agriculture - Agricultural Training Institute as an <a href="/news/agrea-is-now-a-certified-organic-agri-learning-site" target="_blank">Organic Agriculture Learning Site</a>, offers scholarships in agriculture-related technical and vocational courses and are packaged from the competency map of the Philippine agri-fishery sector.</p>
			<ktml:images max-width="33%">
			<?= import('/partials/articles/image-title-excerpt',[
				'id' => 142,
				'category' => 'farm-school',
			]); ?>
			<?= import('/partials/articles/image-title-excerpt',[
				'id' => 129,
				'category' => 'farm-school',
			]); ?>
			<?= import('/partials/articles/image-title-excerpt',[
				'id' => 130,
				'category' => 'farm-school',
			]); ?>
			</ktml:images>
			<h3 class="font-medium font-title text-gray-900 text-lg">Testimonials</h3>
			<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
			<? foreach (data('testimonials') as $testimonial) : ?>
			<!-- testimonial card -->
			<div class="flex flex-row py-6">
				<? if($testimonial->avatar === true) :?>
					<img class="w-10 h-10 mb-8 object-cover object-center rounded-full inline-block mr-4 shadow" src="images://testimonials/<?= strtolower(str_replace([". "," "], "-", $testimonial->name)); ?>.jpg" alt="<?= $testimonial->name; ?>">
				<? endif;?>
				<div class="testimonial-body">
					<h4 class="text-md font-semibold text-gray-900 -mt-1"><?= $testimonial->name; ?></h4>
					<p class="text-gray-500 text-xs font-semibold"><?= $testimonial->course; ?></p>
					<p class="text-gray-500 text-xs"><?= $testimonial->college; ?></p>
					<p class="mt-3 text-sm font-agrea normal-case">
					<?= $testimonial->quote; ?>
					</p>
				</div>
			</div>
			<? endforeach; ?>
		</div>
	</div>
</div>
