---
layout: default
name: Team
title: AGREA Team
summary: AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.
---
<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
	<div class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
		</div>
    <ktml:images max-width="33%">
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach (data('team') as $member) : ?>
			<? if ($member->slug !== ""): ?>
			<a class="text-gray-900 hover:text-gray-600" href="/team/<?= $member->slug; ?>">
			<? endif; ?>
				<div class="h-full bg-gray-100 hover:bg-green-100 p-6 rounded-lg">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="images://team/<?= $member->avatar ?>" alt="<?= $member->name; ?>">
					<h2 class="text-lg text-gray-900 font-medium font-title leading-tight">
						<span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
							<span itemprop="name"><?= $member->name; ?></span>
						</span>
					</h2>
					<div class="text-sm"><?= $member->position; ?></div>
				</div>
			<? if ($member->slug !== ""): ?>
			</a>
			<? endif; ?>
			<? endforeach; ?>
		</div>
    </ktml:images>
	</div>
  <ktml:images max-width="25%">
	<aside class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<img class="rounded w-full mb-6 object-contain" src="images://team/2020-agrea-profile-team.jpg" alt="<?= $title; ?>" title="<?= $title; ?>">
		<h3 class="text-gray-900 font-medium font-title my-4">Contact Details:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<dl itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<dt>Marinduque Office:</dt>
			<dd itemprop="streetAddress">AGREA Farm Estate, Barangay Cawit, Boac,</dd>
			<dd itemprop="postalCode">4900,</dd>
			<dd itemprop="addressLocality">Marinduque, Philippines</dd>
		</dl>
		<dl>
			<dt>Tel:</dt>
			<dd itemprop="telephone"><a href="tel:+630423320025">+63 (042) 332-0025</a></dd>
			<dd itemprop="telephone"><a href="tel:+639178886505">+63 917 888 6505</a></dd>
			<dd itemprop="telephone"><a href="tel:+639338246020">+63 933 824 6020</a></dd>
		</dl>
		<dl itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<dt>Makati Office:</dt>
			<dd itemprop="streetAddress">3/F LRI Design Plaza, 210 Nicanor Garcia, Makati City,</dd>
			<dd itemprop="postalCode">1209,</dd>
			<dd itemprop="addressLocality">Metro Manila, Philippines</dd>
		</dl>
		<dl>
			<dt>Tel:</dt>
			<dd itemprop="telephone"><a href="tel:+63028869800">+63 (02) 886-9800</a></dd>
		</dl>
		<h3 class="text-gray-900 font-medium font-title my-4">Email Addresses:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<dl>
			<dt>General Inquiries:</dt>
			<dd itemprop="email"><a href="mailto:hello@agrea.ph">hello@agrea.ph</a></dd>
			<dt>Careers, Internships, Recruitment, & Human Resource:</dt>
			<dd itemprop="email"><a href="mailto:hr@agrea.ph">hr@agrea.ph</a></dd>
			<dt>AGREA Farm School:</dt>
			<dd itemprop="email"><a href="mailto:farmschool@agrea.ph">farmschool@agrea.ph</a></dd>
			<dt>AGREA 1000 Strong:</dt>
			<dd itemprop="email"><a href="mailto:1000strong@agrea.ph">1000strong@agrea.ph</a></dd>
		</dl>
		<h3 class="text-gray-900 font-medium font-title my-4">Social Media Accounts:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<ul class="mb-2">
			<li>
	          <a href="https://www.facebook.com/agreaph" title="Follow us on facebook" class="inline-flex transition duration-500 ease-in-out">
	            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
	              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
	            </svg>
	            <span class="ml-2 text-green-500 hover:text-green-700">facebook.com/agreaph</span>
	          </a>
	      	</li>
			<li>
	          <a href="https://www.instagram.com/agreaphl/" title="Follow our instagram" class="inline-flex transition duration-500 ease-in-out">
	            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
	              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
	              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
	            </svg>
	            <span class="ml-2 text-green-500 hover:text-green-700">@agreaphl</span>
	          </a>
	      	</li>
			<li>
	          <a href="https://www.twitter.com/agreaphl" title="Follow us on twitter" class="inline-flex transition duration-500 ease-in-out">
	            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
	              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
	            </svg>
	            <span class="ml-2 text-green-500 hover:text-green-700">@agreaphl</span>
	          </a>
	      	</li>
	    </ul>
		<h3 class="text-gray-900 font-medium font-title my-4">Syndicated News:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<ul class="mb-2">
			<li>
	          <a href="/news.rss" title="Follow us on twitter" class="inline-flex transition duration-500 ease-in-out">
	            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-5 h-5" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z" />
				</svg>
	            <span class="ml-2 text-green-500 hover:text-green-700">RSS News Feed</span>
	          </a>
	      	</li>
	    </ul>
	</aside>
  </ktml:images>
</div>
