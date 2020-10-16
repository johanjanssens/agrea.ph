---
layout:
    path: default
    footer:
        image: images://background/farmer-couple.jpg
name: Send us a message
slug: contact
title: Send us a message
summary: Contact page for AGREA, the Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.
form:
    name: contact
    processors:
        - 'email':
            recipients:
                - hello@agrea.ph
            title: Contact Form
            subject: New enquiry from the contact form
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        message: [string, required]
    redirect: about/contact/thank-you
    honeypot: firstName_407d3z05
---
<div itemscope itemtype="http://schema.org/Organization" class="flex flex-col sm:flex-row">
    <article role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
    <ktml:images max-width="80%">
        <div class="flex flex-wrap w-full mb-10">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title ?></h1>
                <div class="h-1 w-20 bg-brand rounded"></div>
                <p class="mt-4">To know more about AGREA, if you have questions, or you would like to lend a helping hand, send us a message by filling out the form below.</p>
            </div>
            <div class="lg:w-1/2 md:block hidden w-full">
                <img class="md:h-36 rounded w-full object-cover object-center" src="images://contact/contact-agrea.jpg" alt="<?= $title ?>" data-max-width="50%" data-lazyload="progressive,inline">
            </div>
        </div>
        <div role="grid" class="grid md:grid-cols-2 mb-10">
            <div role="gridcell">
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
            </div>
            <div>
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
            </div>
        </div>
        <?= import('/partials/form/contact'); ?>
    </ktml:images>
    </article>
    <aside role="complementary" class="sm:w-1/4 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4 ">
    <ktml:images max-width="25%">
        <h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
        <div  x-data="{ isOpen: false }">
            <?= import('/partials/navigation/submenu');?>
        </div>
        <h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">Email Addresses:</h3>
        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
        <dl>
            <dt>General Inquiries:</dt>
            <dd itemprop="email"><a href="mailto:hello@agrea.ph">hello@agrea.ph</a></dd>
            <dt>Careers, Internships, Recruitment and Human Resources:</dt>
            <dd itemprop="email"><a href="mailto:hr@agrea.ph">hr@agrea.ph</a></dd>
            <dt>AGREA Farm School:</dt>
            <dd itemprop="email"><a href="mailto:farmschool@agrea.ph">farmschool@agrea.ph</a></dd>
            <dt>AGREA 1000 Strong:</dt>
            <dd itemprop="email"><a href="mailto:1000strong@agrea.ph">1000strong@agrea.ph</a></dd>
        </dl>
        <h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">Social Media Accounts:</h3>
        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
        <ul class="mb-2">
            <link itemprop="url" href="https://www.agrea.ph">
            <li>
              <a itemprop="sameAs" href="https://www.facebook.com/agreaph" title="Follow us on facebook" class="inline-flex hover:text-blue-900 transition duration-500 ease-in-out">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-800" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
                <span class="ml-2">facebook.com/agreaph</span>
              </a>
            </li>
            <li>
              <a itemprop="sameAs" href="https://www.instagram.com/agreaphl/" title="Follow our instagram" class="inline-flex hover:text-gray-900 transition duration-500 ease-in-out">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-gray-800" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
                <span class="ml-2">@agreaphl</span>
              </a>
            </li>
            <li>
              <a itemprop="sameAs" href="https://www.twitter.com/agreaphl" title="Follow us on twitter" class="inline-flex hover:text-blue-500 transition duration-500 ease-in-out">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-400" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
                <span class="ml-2">@agreaphl</span>
              </a>
            </li>
        </ul>
        <h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">Syndicated News:</h3>
        <div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
        <ul class="mb-2">
            <li>
              <a href="/news.rss" title="Follow us on twitter" class="inline-flex hover:text-orange-600 transition duration-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
                <span class="ml-2">RSS News Feed</span>
              </a>
            </li>
        </ul>
        </ktml:images>
    </aside>
</div>
