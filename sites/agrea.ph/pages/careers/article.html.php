---
layout: default
route: careers/[:slug]
collection:
    extend: careers
metadata:
    'og:type': article
visible: false
---
<div itemscope itemtype="http://schema.org/JobPosting" class="flex flex-col sm:flex-row">
	<article class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="w-full mb-6 lg:mb-0">
				<h1 itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= collection()->title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded mb-6"></div>
				<img itemprop="image" class="rounded w-full mb-6" src="<?= collection()->image->url ?>" alt="<?= collection()->title; ?>">
				<p class="mt-2 text-xs font-medium flex flex-row justify-between">
					<span itemprop="author" itemscope itemtype="http://schema.org/Person">
						<span itemprop="name"><?//= collection()->getEditor()->getName() ?></span>
					</span>
					<span class="leading-relaxed text-dark-green-500 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg> <?= date(collection()->published_date, 'd M, Y'); ?>
					</span>
				</p>
				<div class="mt-2" itemprop="articleBody" content="<?= collection()->text ?>"><?= collection()->text ?></div>
			</div>
		</div>
	</article>
	<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
        <h2 class="font-title font-medium text-gray-900 tracking-widest mb-3"><?= (strpos(collection()->title, 'APPLY') !== false) ? 'Apply Now!' : 'Application Closed' ;?></h2>
        <div class="h-1 w-10 bg-green-500 rounded mb-3"></div>
		<? if (strpos(collection()->title, 'APPLY') !== false):?>
        <form>
        	<fieldset>
        		<legend></legend>
        		<div class="question">
					<label for="position-title" class="block">Position Title<sup>*</sup></label>
					<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 text-gray-600 py-2 px-4" value="<?= str_replace("APPLY NOW: ", "", collection()->title); ?>" type="text" name="position-title" disabled="disabled">
				</div>
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
        		<div class="question">
					<label for="phone" class="block">Phone</label>
					<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" placeholder="Phone Number" type="tel" name="phone">
				</div>
        		<div class="question">
					<label for="one-page-resume" class="block">1-Page Resume<sup>*</sup></label>
					<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" type="file" name="one-page-resume">
				</div>
        		<div class="question">
					<label for="cover-letter" class="block">Cover Letter<sup>*</sup></label>
					<input class="w-auto sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4" type="file" name="cover-letter">
				</div>
        		<div class="question">
					<label for="additional-inquiries" class="block">Additional inquiries<sup>*</sup></label>
					<textarea name="additional-inquiries" rows="5" cols="15" class="sm:w-full bg-gray-100 rounded mb-2 border border-gray-400 focus:outline-none focus:border-green-500 py-2 px-4"></textarea>
				</div>
				<div class="submit">
					<button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Submit</button>
				</div>
        	</fieldset>
        </form>
    <? endif; ?>
	</div>
</div>