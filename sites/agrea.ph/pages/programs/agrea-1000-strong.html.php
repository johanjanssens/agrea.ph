---
layout: default
name: Agrea 1000 Strong
title: Agrea 1000 Strong
summary: AGREA 1000 Strong is an innovative and inclusive community of volunteers with a big heart: male and female youth leaders, teachers and educators, mothers, senior citizens, Overseas Filipino Workers, members of the LGBT+ community, and farming and fisherfolk leaders.
slug: agrea-1000-strong
---

<div class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<article itemscope itemtype="http://schema.org/Article" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img alt="<?= $title ?>" class="rounded object-cover object-center" src="images://programs/1000strong/elizabeth-andrew-quote.jpg" data-max-width="50%" data-preload="true">
			</div>
		</div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%">
		
			<?= article(4)->excerpt ?>
			<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/1000strong', 'max_width' => '80%']); ?>
			<?= article(4)->text ?>

			<img alt="Be a 1000Strong Volunteer" class="rounded w-full my-6" src="images://programs/1000strong/1000strong-5.jpg" />
			<h3 class="text-gray-900 font-medium font-title my-4 leading-tight">Be an AGREA 1000 Strong Volunteer</h3>
			<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
			<p class="text-gray-900 my-4">Fill-out and submit the form below to receive updates and other opportunities available for AGREA 1000 Strong volunteers.</p>
			<form class="text-gray-900 mb-8">
				<fieldset class="mb-4">
					<div class="question">
						<label class="block">Name<sup>*</sup></label>
						<div class="grid grid-cols-2">
							<input class="sm:mr-2 bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="First Name" type="text" name="first-name">
							<input class="bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Last Name" type="text" name="last-name">
						</div>
					</div>
					<div class="question">
						<label for="email" class="block">Email Address<sup>*</sup></label>
						<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Email Address" type="text" name="email">
					</div>
				</fieldset>
				<div class="grid sm:grid-cols-2">
					<fieldset class="mb-4">
						<h4 class="text-sm text-gray-900 font-medium font-title my-4 leading-tight">Choose as many volunteer sectors that apply to you<sup>*</sup></h4>
						<div class="question">
							<div>
								<input class="switch" type="checkbox" id="male" name="male" value="Male Youth (13 to 35 years old)">
								<label class="text-sm" for="male"> Male Youth (13 to 35 years old)</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="female" name="female" value="Female Youth (13 to 35 years old)">
								<label class="text-sm" for="female"> Female Youth (13 to 35 years old)</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="mother" name="mother" value="Mother">
								<label class="text-sm" for="mother"> Mother</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="farmer-leader" name="farmer-leader" value="Farmer Leader">
								<label class="text-sm" for="farmer-leader"> Farmer Leader</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="fisherfolk-leader" name="fisherfolk-leader" value="Fisherfolk Leader">
								<label class="text-sm" for="fisherfolk-leader"> Fisherfolk Leader</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="lgbt" name="lgbt" value="LGBT+">
								<label class="text-sm" for="lgbt"> LGBT+</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="teacher" name="teacher" value="Teacher/Educator">
								<label class="text-sm" for="teacher"> Teacher/Educator</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="disability" name="disability" value="Person with Disability">
								<label class="text-sm" for="disability"> Person with Disability</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="senior" name="senior" value="Senior Citizen">
								<label class="text-sm" for="senior"> Senior Citizen</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="overseas" name="overseas" value="Overseas Filipino Worker">
								<label class="text-sm" for="overseas"> Overseas Filipino Worker</label><br>
							</div>
						</div>
					</fieldset>
					<fieldset class="mb-4">
						<h4 class="text-sm text-gray-900 font-medium font-title my-4 leading-tight">Interests<sup>*</sup></h4>
						<div class="question">
							<div>
								<input class="switch" type="checkbox" id="environmental" name="environmental" value="Environmental protection">
								<label class="text-sm" for="environmental"> Environmental protection</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="farm-development" name="farm-development" value="Organic farm development">
								<label class="text-sm" for="farm-development"> Organic farm development</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="volunteer" name="volunteer" value="AGREA Farm School volunteer">
								<label class="text-sm" for="volunteer"> AGREA Farm School volunteer</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="garden-development" name="garden-development" value="Elementary school garden development">
								<label class="text-sm" for="garden-development"> School garden development</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="extension" name="extension" value="Agricultural extension program">
								<label class="text-sm" for="extension"> Agricultural extension program</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="leadership" name="leadership" value="Youth leadership events">
								<label class="text-sm" for="leadership"> Youth leadership events</label><br>
							</div>
							<div>
								<input class="switch" type="checkbox" id="program-development" name="program-development" value="Program development">
								<label class="text-sm" for="program-development"> Program development</label><br>
							</div>
						</div>
					</fieldset>
				</div>
				<fieldset class="">
					<h4 class="text-sm text-gray-900 font-medium font-title my-4 leading-tight">Describe your volunteering and leadership experience (if any)</h4>
					<div class="question">
						<textarea name="experience" rows="5" cols="15" class="sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4"></textarea>
					</div>
				</fieldset>
				<div class="submit">
					<button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded" type="submit">Submit</button>
				</div>
			</form>
		</ktml:images>
		</div>
	</article>
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
	<ktml:images max-width="25%">
		<h3 class="font-medium font-title mt-4 text-gray-900 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<h3 class="text-gray-900 font-medium font-title my-4 leading-tight">Join AGREA Events as a Volunteer</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">Click the photo below to see details on how to join.</p>
		<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/arborday', 'max_width' => '25%']); ?>
		<h3 class="text-gray-900 font-medium font-title my-4 leading-tight">Appreciating our volunteers</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">We always take the time to recognize our volunteers for their hard work and dedication whenever we can. The bigger, and humbling, picture is:</p>
		<blockquote class="text-gray-900 my-4">"Our volunteers do not necessarily have the time, they just have the heart"</blockquote>
		<p><a href="https://www.facebook.com/agreaph/photos/a.1580538318877949.1073741827.1573291842935930/2070931923171917/?type=3&theater" target="_blank"><img class="md:min-h-36 rounded w-full object-cover object-center" src="images://programs/1000strong/arborday-3.jpg"></a></p>
	</ktml:images>
	</aside>
</div>
