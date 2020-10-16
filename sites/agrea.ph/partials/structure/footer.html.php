<footer class="text-gray-700 text-base body-font" style="background-image: url(<?= isset($footer['image']) ? $footer['image'].'?q=25' : 'images://background/rice-farmer.jpg?q=25' ?>);">
  <div class="container px-5 pt-10 pb-40 md:pt-20 md:pb-10 mx-auto">
    <div class="flex md:justify-end justify-around">
      <div class="lg:w-1/3 md:w-1/2 max-w-xs text-gray-900">
        <div class="flex content-between">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mx-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <h2 role="heading" aria-level="2" class="font-title font-medium tracking-widest text-sm mb-3 text-center">Get the <span class="font-agrea">AGREA</span> newsletter</h2>
        </div>
        <?= import('/partials/form/subscribe'); ?>
      </div>
    </div>
  </div>
  <div class="bg-gray-800 dark:bg-grey-100 h-20">
    <div class="container mx-auto grid grid-cols-3 justify-items-center px-5 md:pt-6 pt-3">
      <div class="flex flex-row items-center sm:mt-0 mt-4">
        <?= import('/partials/logos/agrea',[
          'display_class'=>'hidden md:',
          'device_size'=>'5',
          'device_padding'=>'p-px',
          'text_class'=>'text-gray-500 dark:text-gray-900 ml-1 text-base'
        ]); ?>
        <p class="text-gray-500 dark:text-gray-900 text-xs ml-3">&copy; <?= date('now', 'Y'); ?> <?= config()->site->name ?><span class="hidden md:inline"> | All rights reserved</span></p>
      </div>
      <p class="flex justify-center items-center text-gray-500 dark:text-gray-900 text-xs sm:mt-0 mt-4">
        <?= import('/partials/logos/joomlatools'); ?>
      </p>
      <p class="flex inline-flex sm:mt-0 mt-4 justify-end">
        <span itemscope itemtype="http://schema.org/Organization" class="inline-flex mx-2 -mt-2">
          <link itemprop="url" href="https://www.agrea.ph">
          <a itemprop="sameAs" href="https://www.facebook.com/agreaph" title="Follow us on facebook" class="bg-brand rounded border-green-900 border p-1 text-blue-800 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a itemprop="sameAs" href="https://www.instagram.com/agreaphl/" title="Follow our instagram" class="bg-brand rounded border-green-900 border p-1 ml-1 text-gray-900 dark:text-gray-100 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a itemprop="sameAs" href="https://www.twitter.com/agreaphl" title="Follow us on twitter" class="bg-brand rounded border-green-900 border p-1 ml-1 text-blue-400 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
        </span>
        <a href="#top" title="Back to the top of the page" class="text-gray-500 hover:text-gray-300 text-center transition duration-300 ease-in-out w-5 h-5">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
          </svg>
        </a>
      </p>
    </div>
  </div>
  <span class="hidden w-5 h-5 p-px"></span>
</footer>
