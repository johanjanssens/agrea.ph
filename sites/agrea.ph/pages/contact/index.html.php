---
layout:
    path: default
    footer:
        image: images://background/farmer-couple.jpg
name: Contact Us
title: Contact Agrea
summary: Contact page for AGREA, the Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.
slug: contact
form:
    name: contact-form
    processors:
        - 'email':
            recipients: 
                - hello@agrea.ph
                - someonelse@agrea.ph
            title: Contact Form
            subject: New enquiry from the contact form
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        message: [string, required]
    redirect: contact/thank-you
    honeypot: firstName_407d3z05
visible: false
---
<div itemscope itemtype="http://schema.org/Article" class="flex flex-col sm:flex-row">
    <article class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
    <ktml:images max-width="80%">
        <div class="flex flex-wrap w-full mb-10">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
                <div class="h-1 w-20 bg-green-500 rounded"></div>
            </div>
            <div class="lg:w-1/2 w-full">
                <img class="md:h-36 rounded w-full object-cover object-center" src="images://consultancy/consultancy-1.jpg" alt="<?= $title ?>" data-max-width="50%" data-preload="true">
            </div>
        </div>
        <?= import('/partials/form/contact'); ?>
    </ktml:images>
    </article>
    <aside class="sm:w-1/4 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4 ">
    <ktml:images max-width="25%">
        <h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">AGREA Consultancy</h3>
        <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

        <p><img class="rounded w-full" src="images://consultancy/atilano.jpg" /></p>

        <p>Founded by multi-awarded Filipina entrepreneur Cherrie Atilano, AGREA is a Filipino agriculture-focused, for-purpose, inclusive business that empowers farmers and their communities as impactful agents of change.</p>

        <h3 class="font-medium font-title mt-4 text-gray-900 text-lg leading-tight">Consult with AGREA</h3>
        <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

        <p><a href="mailto:consultancy@agrea.ph?subject=AGREA%20Consultancy"><img class="rounded w-full" src="images://consultancy/email.jpg" /></a></p>

        <p><img class="rounded w-full" src="images://consultancy/phone.jpg" /></p>

        <p><img class="rounded w-full" src="images://consultancy/address.jpg" /></p>
    </ktml:images>
    </aside>
</div>
