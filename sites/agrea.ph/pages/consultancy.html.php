---
layout: default
name: Consultancy
title: Consultancy
summary: The easy to use page generator for Joomla
slug: consultancy
---

<div class="flex flex-col sm:flex-row">
	<article class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img class="md:h-36 rounded w-full object-cover object-center" src="/images/consultancy/consultancy-1.jpg">
			</div>
		</div>
		<h3 class="text-base text-gray-900 font-medium font-title my-4">Your Guide to Agricultural Abundance</h3>
		<p>AGREA recognizes the crucial need to capacitate the current and future generations of farmers. Safeguarding the well-being of farmers and the knowledge they possess is essential to a prosperous agricultural sector, and to the country’s capacity to feed its people.</p>
		<p>Through agriculture, farmers can be a starting point for change.</p>
		<ul>
			<li>Capacity-Building &amp; Sustainable Agriculture Training for Farmers</li>
			<li>Food Security &amp; Sufficiency Masterplan</li>
			<li>Roundtable Discussions and Advocacy Events</li>
			<li>Farm Tourism Development</li>
			<li>Sustainability Services</li>
		</ul>

		<p><img alt="AGREA Consultancy Our Services 4" class="rounded w-full" src="/images/consultancy/our-services.jpg" /></p>

		<h3 class="text-base text-gray-900 font-medium font-title my-4">Capacity-building &amp; sustainable agriculture training for farmers</h3>

		<p>Are you looking to build sustainable partnerships with farmers? AGREA’s team of agriculturists, social workers, strategic community organizers, and multi-stakeholders partnerships will help you optimize your agricultural production while equipping your farmer-partners with the right skills to build sustainable livelihoods:</p>

		<ul>
			<li>Profiling &amp; Needs Assessment of Farmer-Partners</li>
			<li>Financial Literacy Training</li>
			<li>Leadership &amp; Values Formation Training</li>
			<li>Technical Training on Sustainable Agriculture:
			<ul class="mt-2">
				<li>Integrated farming</li>
				<li>System of Rice Intensification</li>
				<li>Organic agriculture production: vegetables; chicken; hog raising; organic fertilizer and concoctions production</li>
				</li>
			</ul>
			</li>
		</ul>

		<div class="my-8">
			<a href="<?= route(page('news/article'), ['slug' => article(43)->slug]) ?>"><img alt="<?= article(43)->title ?>" class="h-100 rounded w-full object-cover object-center mb-6" src="<?= article(43)->image->url ?>"></a>
			<div class="mb-8">
				<h3 class="text-base text-gray-900 font-medium font-title my-4"><a class="text-gray-900 hover:text-gray-600" href="<?= route(page('news/article'), ['slug' => article(43)->slug]) ?>">Food Security & Sufficiency Masterplan</a></h3>
				<p>AGREA offers full-scale planning for local governments, public institutions, schools, and private enterprises to take effective action for food security and nutrition:</p>
				<ul>
					<li>Community Evaluation. Evaluate communities in need and set actionable targets for food security and nutrition.</li>
					<li>Market Assessment. On-the-ground interviews with market sellers to assess situation of agricultural imports and exports.</li>
					<li><a href="/programs/the-garden-classroom" target="_blank">The Garden Classroom</a>. Educational programs for elementary school students to learn food cultivation, healthy eating, and environmental stewardship.</li>
					<li>Sustainable Infrastructure. Advising for land development in rural areas to preserve ecological balance, optimize land available for agriculture, and connect food producers to markets.</li>
					<li>Farm Tourism. Consulting for sustainable farm tourism development.</li>
					<li><a href="/farm-school" target="_blank">AGREA Farm School</a>. DA ATI- and TESDA-accredited short (2-day) to long (42-day) certification programs for farmers and farming enthusiasts:
						<ul>
							<li>Organic Agriculture Production NCII</li>
							<li>Agricultural Crops NCII</li>
							<li>Pest Management (Vegetables) NCII</li>
							<li>Agribusiness / Agriculture Entrepreneurship</li>
							<li>Agriculture Short Courses</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="grid md:grid-cols-2 gap-8 mb-8">
				<div class="bg-gray-100 p-6 rounded-lg">
					<?= import('/partials/articles/image-title-excerpt',[
						'id' => 107, 
						'category' => 'news',
					]); ?>
				</div>
				<div class="bg-gray-100 p-6 rounded-lg">
					<?= import('/partials/articles/image-title-excerpt',[
						'id' => 88,
						'category' => 'news',
					]); ?>
				</div>
			</div>
			<div class="mb-8">
				<h3 class="text-base text-gray-900 font-medium font-title my-4">Farm Tourism Development</h3>
				<p>Do you own an unproductive or barren land? Are you looking to develop a farm or to beautify an existing area? Consult our experts with over 20 years of experience in land development, sustainable landscaping, construction, project budgeting, feasibility studies and business plan development.</p>
				<img class="rounded w-full" src="/images/consultancy/model-farm.jpg" />
				<h3 class="text-base text-gray-900 font-medium font-title my-4">Sustainability Services</h3>
				<p>Are you looking to build systems for renewable energy and waste? AGREA can help you reach sustainable solutions for your next project?</p>
				<ul>
					<li>Hydropower</li>
					<li>Solar power</li>
					<li>Waste-to-energy (agriculture, solid waste)</li>
					<li>Wastewater management</li>
					<li>Sustainable luxury travels</li>
				</ul>
				<div class="my-4">
					<a href="<?= route(page('news/article'), ['slug' => article(101)->slug]) ?>"><img alt="<?= article(101)->title ?>" class="rounded w-full object-cover object-center mb-6" src="<?= article(101)->image->url ?>"></a>
				</div>
			</div>

			<h3 class="text-base text-gray-900 font-medium font-title my-4">Completed / Ongoing Projects</h3>

			<p><strong>Farmer Capacity-Building &amp; Sustainable Agriculture Training</strong></p>

			<ul>
				<li><a href="/programs/self-palayance" target="_blank">Self-Palayance</a></li>
				<li>AGREA Spices</li>
				<li>Bagtik Moserbisyo Food Sufficiency Program</li>
			</ul>

			<p><strong>Food Security &amp; Sufficiency Masterplan</strong></p>

			<ul>
				<li>Bagtik Moserbisyo Food Sufficiency Program for Siargao</li>
				<li>Palafox</li>
				<li><a href="/farm-school" target="_blank">AGREA Farm School - Marinduque and Siargao</a></li>
				<li><a href="/programs/the-garden-classroom" target="_blank">The Garden Classroom - Marinduque and Siargao</a></li>
				<li>Building outreach across 186 elementary schools in Marinduque, Philippines</li>
				<li>Building outreach across 120 elementary schools in Siargao, Philippines</li>
				<li>Municipal Agriculture Office of Lobo, Batangas, Philippines</li>
				<li>Farm Tourism Association in Island Marinduque</li>
			</ul>

			<p><strong>Round Table Discussions and Advocacy Events</strong></p>

			<ul>
				<li><a href="/events/leaf" target="_blank">Leaders and Entrepreneurs in Agriculture Forum</a></li>
				<li><a href="https://asean.usmission.gov/yseali/yseali-professional-fellows/" target="_blank">YSEALI Professional Fellows Program</a></li>
				<li><a href="https://web.facebook.com/agreaph/photos/a.1580538318877949/2390153167916456/?type=3&amp;theater" target="_blank">Magna Carta of Women in Agriculture</a></li>
				<li><a href="/events/yseali-grow" target="_blank">YSEALI GROW</a></li>
				<li><a href="/events/yseali-generationgr3en" target="_blank">YSEALI Generation Gr3EN</a></li>
				<li><a href="https://queenstownlife.com/2016/02/asia-new-zealand-foundation-tour-to-philippines/" target="_blank">Tasty Business of the Young Business Leaders Initiative of New Zealand</a></li>
			</ul>

			<p><strong>Farm Tourism Development</strong></p>

			<ul>
				<li>Farm Tourism Association of Island Marinduque - FTAIM (Marinduque)</li>
				<li>Cancohoy Farm (Siargao)</li>
				<li>Win-Win Pig Farm (Siargao)</li>
				<li>AGREA Abukay (Siargao)</li>
			</ul>

			<p><strong>Sustainability Services</strong></p>

			<ul>
				<li><a href="/news/agrea-enables-climate-smart-farmers-through-solar-water-pump-tech" target="_blank">Solar irrigation project in Torrijos, Marinduque</a></li>
				<li>Hongkong Shanghai Group of Hotels for Sustainable Agriculture and Food Systems</li>
			</ul>

			<h2 class="title">Frequency Asked Questions</h2>

			<p><strong>Do you have established pricing for your services?</strong><br />
			Yes, please send an e-mail to consultancy@agrea.ph with a description of your desired project. &nbsp;You may also call our Metro Manila office at +63 2 240 5210 to schedule an initial online or in-person appointment.</p>

			<p><strong>I have a project outside of the Philippines. Can I still consult AGREA for my project?</strong><br />
			Yes, depending on the project AGREA is able to consult in countries outside of the Philippines. For local expertise we also have an international network of experts that we can connect to your project.</p>

			<p><strong>I want to convert some unused land into farm land, but I am not the official owner. Can I still consult AGREA for my project?</strong><br />
			AGREA can provide general advice for a fee, but we cannot visit and advise on land of which you are not the official owner.</p>

			<p><strong>Does AGREA have training manuals for sustainable agriculture and farmer training?<br />
			Y</strong>es, we have manuals for sale. Please inquire at consultancy@agrea.ph.</p>

			<p><strong>Can I contract AGREA to construct my agricultural site?</strong><br />
			No, AGREA does not offer construction services.</p>
		</div>
	</article>
	<div class="sm:w-1/4 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4 ">
		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">AGREA Consultancy</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

		<p><img class="rounded w-full" src="/images/consultancy/atilano.jpg" /></p>

		<p>Founded by multi-awarded Filipina entrepreneur Cherrie Atilano, AGREA is a Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.</p>

		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Consult with AGREA</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

		<p><a href="mailto:consultancy@agrea.ph?subject=AGREA%20Consultancy"><img class="rounded w-full" src="/images/consultancy/email.jpg" /></a></p>

		<p><img class="rounded w-full" src="/images/consultancy/phone.jpg" /></p>

		<p><img class="rounded w-full" src="/images/consultancy/address.jpg" /></p>
	</div>
</div>
