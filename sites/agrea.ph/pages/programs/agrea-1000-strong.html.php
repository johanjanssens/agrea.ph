---
layout: default
name: Agrea 1000 Strong
title: Agrea 1000 Strong
summary: 'AGREA 1000 Strong is an innovative and inclusive community of volunteers with a big heart: male and female youth leaders, teachers and educators, mothers, senior citizens, Overseas Filipino Workers, members of the LGBT+ community, and farming and fisherfolk leaders.'
slug: agrea-1000-strong
---

<div class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<article role="main" itemscope itemtype="http://schema.org/Article" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title uppercase mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
		<div class="h-1 w-20 bg-brand rounded mb-10"></div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%" lazyload="progressive,inline">

			<?= article(148)->excerpt ?>
			<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/1000strong', 'max_width' => '80%']); ?>
			<?= article(148)->text ?>

			<img alt="Be a 1000Strong Volunteer" class="rounded w-full my-6" src="images://programs/1000strong/1000strong-5.jpg" />
			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4 leading-tight">Be an AGREA 1000 Strong Volunteer</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
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
						<h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Choose as many volunteer sectors that apply to you<sup>*</sup></h4>

						<div class="question">
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="male" name="male" value="Male Youth (13 to 35 years old)" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="male" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="male" class="text-sm">Male Youth (13 to 35 years old)</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="female" name="female" value="Female Youth (13 to 35 years old)" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="female" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="female" class="text-sm">Female Youth (13 to 35 years old)</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="mother" name="mother" value="Mother" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="mother" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="mother" class="text-sm">Mother</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="farmer-leader" name="farmer-leader" value="Farmer Leader" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="farmer-leader" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="farmer-leader" class="text-sm">Farmer Leader</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="fisherfolk-leader" name="fisherfolk-leader" value="Fisherfolk Leader" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="fisherfolk-leader" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="fisherfolk-leader" class="text-sm">Fisherfolk Leader</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="lgbt" name="lgbt" value="LGBT+" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="lgbt" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="lgbt" class="text-sm">LGBT+</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="teacher" name="teacher" value="Teacher/Educator" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="teacher" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="teacher" class="text-sm">Teacher/Educator</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="disability" name="disability" value="Person with Disability" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="disability" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="disability" class="text-sm">Person with Disability</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="senior" name="senior" value="Senior Citizen" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="senior" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="senior" class="text-sm">Senior Citizen</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="overseas" name="overseas" value="Overseas Filipino Worker" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="overseas" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="overseas" class="text-sm">Overseas Filipino Worker</label>
							</div>
						</div>
					</fieldset>
					<fieldset class="mb-4">
						<h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Interests<sup>*</sup></h4>
						<div class="question">
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="environmental" name="environmental" value="Environmental protection" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="environmental" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="environmental" class="text-sm">Environmental protection</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="farm-development" name="farm-development" value="Organic farm development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="farm-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="farm-development" class="text-sm">Organic farm development</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="volunteer" name="volunteer" value="AGREA Farm School volunteer" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="volunteer" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="volunteer" class="text-sm">AGREA Farm School volunteer</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="garden-development" name="garden-development" value="School garden development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="garden-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="garden-development" class="text-sm">School garden development</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="extension" name="extension" value="Agricultural extension program" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="extension" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="extension" class="text-sm">Agricultural extension program</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="youth" name="youth" value="Youth leadership events" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="youth" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="youth" class="text-sm">Youth leadership events</label>
							</div>
							<div>
								<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
									<input type="checkbox" id="program-development" name="program-development" value="Program development" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
									<label for="program-development" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
								</div>
								<label for="program-development" class="text-sm">Program development</label>
							</div>
						</div>
					</fieldset>
				</div>
				<fieldset class="">
					<h4 role="heading" aria-level="4" class="text-sm text-gray-900 dark:text-gray-100 font-medium font-title uppercase my-4 leading-tight">Describe your volunteering and leadership experience (if any)</h4>
					<div class="question">
						<textarea name="experience" rows="5" cols="15" class="sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4"></textarea>
					</div>
				</fieldset>
				<div class="submit">
					<button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-brand border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded" type="submit">Submit</button>
				</div>
			</form>
		</ktml:images>
		</div>
	</article>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
	<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<?= import('/partials/slider', ['class' => ['mb-8'], 'folder' => 'images://slider/arborday', 'max_width' => '25%']); ?>
		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4 leading-tight">Appreciating our volunteers</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<p class="text-gray-900 my-4">We always take the time to recognize our volunteers for their hard work and dedication whenever we can. The bigger, and humbling, picture is:</p>
		<blockquote class="text-gray-900 my-4">"Our volunteers do not necessarily have the time, they just have the heart"</blockquote>
		<p><a href="https://www.facebook.com/agreaph/photos/a.1580538318877949.1073741827.1573291842935930/2070931923171917/?type=3&theater" target="_blank"><img class="md:min-h-36 rounded w-full object-cover object-center bg-center" src="images://programs/1000strong/arborday-3.jpg"></a></p>
	</ktml:images>
	</aside>
</div>
