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
  <div class="bg-gray-800 h-20">
    <div class="container mx-auto flex flex-row items-center justify-between px-5 md:pt-6 pt-3 border-box">
      <a class="hidden md:flex font-title font-medium items-center md:justify-start justify-center text-gray-500" title="AGREA homepage">
        <svg fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 171.92 172.39">
          <path d="M110.73,85.44c-12.1,10.44-30.23,7.84-32.87,7.39c-0.75,2.16-1.17,4.07-1.44,5.38
          c8.35,1.48,24.26,2.32,36.45-8.02L110.73,85.44z M92.62,92.15c0.88-0.09,1.47-0.21,2.81-0.46c0.85-0.2,2.18-0.46,2.82-0.68
          c-4.46-11.16-12.52-19.33-12.52-19.33c0,0-0.01,0.01-0.01,0.01c-0.02,0.02,0,0,0,0c-4.17-4.27-9.66-6.73-14.35-8.04l-2.23,4.98
          c4.15,0.8,8.8,3.18,12.86,7.29c0,0,0,0,0,0c-0.03-0.03-0.06-0.06-0.09-0.09c0,0,0,0,0.01-0.01L82,75.91c0,0-0.01,0-0.01,0.01
          c0.3,0.3,0.59,0.59,0.83,0.86c1.31,1.38,3.32,3.99,3.32,3.99C87.46,82.6,90.39,86.98,92.62,92.15 M81.19,76.67
          c-26.9,32.58,4.34,59.5,4.34,59.5c13.93-13.37,16.75-27.07,14.78-38.2c-1.57,0.52-3.75,1.07-5.42,1.3
          c1.86,9.11,0.39,19.84-9.45,29.28c0,0-22.4-25.06-0.76-47.89c-0.22-0.34-0.85-1.22-1.59-2.07C82.24,77.63,81.3,76.79,81.19,76.67
          M52.71,84.02l-20.59,45.53l-2.73,5.82h13.32c0,0-0.98,0-2.4-1.63c-0.66-0.75-0.52-2.12-0.19-3.41l18.2-40.26
          C56.14,88.23,54.25,86.21,52.71,84.02 M59.04,67.4l2.42-5.31c-9.44-0.42-16.73,2-16.73,2c4.31,18.78,15.3,28.35,25.48,32.43
          c0.12-0.68,0.27-1.51,0.46-2.16c0.33-1.15,0.71-2.29,1.07-3.14c-8.24-3.1-17.4-10.1-20.43-23.3C51.32,67.92,54.46,67.34,59.04,67.4
          M90.36,19.55l-0.02-0.05l0-0.01c-0.3-0.74-0.46-1.54-0.46-2.39c0-1.35,0.42-2.61,1.14-3.64l0.01-0.1l-9.44,4.13l0.29,1.77
          l-7.65,16.94c0.01,0,0.01,0,0.02,0l-0.4,0.87c0,0-0.01,0-0.01,0l-0.82,1.83c0,0,0,0,0,0l-1.24,2.72l0.01,0L55.74,77.31
          c1.61,2.38,3.38,4.56,5.37,6.64l20.76-45.77c0,0-0.01,0-0.01,0l0.37-0.81c0,0,0.01,0,0.01,0L83,35.7c-0.01,0-0.01,0-0.02,0
          l0.37-0.81c0.01,0,0.01,0,0.02,0l2.79-6.15l15.52,34.43c2.64-0.51,5.31-0.81,8-0.91L90.45,19.75
          C90.42,19.69,90.39,19.62,90.36,19.55 M119.84,82.31c2.99-4.44,5.52-9.98,7.34-16.89c0,0-22.6-8.23-40.67,5.65
          c0.58,0.5,2.65,2.83,3.28,3.61c13.28-9.04,30.68-5.64,30.68-5.64c-0.79,3-1.83,5.64-3.07,7.96L119.84,82.31z M129.5,135.37h13.32
          l-2.76-5.83l-4.68-10.33l-2.19-4.83c0,0,0,0,0,0.01c0,0-1.8-4.04-1.79-4.05l-18.66-41.28c-2.72-0.02-5.4,0.24-8.1,0.65l21.5,47.75
          l2.03,4.56c0,0,0,0,0,0.01l0.41,0.9l0.54,1.22l0.01-0.01l3.13,6.92c0.19,1.05,0.18,2.07-0.36,2.68
          C130.48,135.37,129.5,135.37,129.5,135.37 M168.34,86.28c0,45.67-36.89,82.69-82.39,82.69S3.56,131.95,3.56,86.28
          S40.45,3.58,85.95,3.58S168.34,40.61,168.34,86.28 M170.99,86.28c0-47.14-38.07-85.35-85.04-85.35S0.91,39.14,0.91,86.28
          s38.07,85.35,85.04,85.35S170.99,133.42,170.99,86.28"/>
        </svg>
        <span class="ml-3 text-xl font-agrea"><?= config()->site->name ?></span>
      </a>
      <p class="text-gray-500 text-xs ml-3 sm:mt-0 mt-4">&copy; <?= date('now', 'Y'); ?> <?= config()->site->name ?><span class="hidden md:inline"> | All rights reserved</span></p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <span class="text-gray-500 text-xs sm:ml-4 sm:mt-0 hidden md:inline">Follow our social feeds</span>
        <span itemscope itemtype="http://schema.org/Organization" class="inline-flex mx-2 -mt-2">
          <link itemprop="url" href="https://www.agrea.ph">
          <a itemprop="sameAs" href="https://www.facebook.com/agreaph" title="Follow us on facebook" class="bg-green-500 rounded border-green-900 border p-1 text-blue-800 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a itemprop="sameAs" href="https://www.instagram.com/agreaphl/" title="Follow our instagram" class="bg-green-500 rounded border-green-900 border p-1 ml-1 text-gray-900 dark:text-gray-100 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a itemprop="sameAs" href="https://www.twitter.com/agreaphl" title="Follow us on twitter" class="bg-green-500 rounded border-green-900 border p-1 ml-1 text-blue-400 hover:bg-green-200 transition duration-500 ease-in-out">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
        </span>
        <span class="text-gray-500 text-xs sm:ml-2 sm:mt-0">Built by</span>
        <a href="https://www.joomlatools.com" title="By Joomlatools" class="ml-1 mr-4">
            <svg class="w-5 h-5" viewBox="0 0 32 30.3303"><defs><style>.cls-1{fill:none;}.cls-2{fill:var(--lime-500);}.cls-3{fill:var(--green-500);}.cls-4{fill:url(#jtp-5);}.cls-5{fill:url(#jtp-2);}</style><pattern id="jtp-5" width="204.843" height="204.842" patternTransform="translate(-2.5053 -2.4604) scale(0.1067)" patternUnits="userSpaceOnUse" viewBox="0 0 204.843 204.842"><rect class="cls-1" width="204.843" height="204.842"/><rect class="cls-3" width="204.843" height="204.842"/></pattern><pattern id="jtp-2" width="204.843" height="204.842" patternTransform="translate(-2.5058 -2.4604) scale(0.1067)" patternUnits="userSpaceOnUse" viewBox="0 0 204.843 204.842"><rect class="cls-1" width="204.843" height="204.842"/><rect class="cls-2" width="204.843" height="204.842"/></pattern></defs><g><path class="cls-4" d="M30.3747,14.26A12.1484,12.1484,0,0,0,13.7805,9.8135,2.3155,2.3155,0,1,0,16.096,13.824a7.5168,7.5168,0,0,1,7.5165,13.02,2.3158,2.3158,0,0,0,2.3158,4.0111A12.154,12.154,0,0,0,30.3747,14.26Z" transform="translate(0 -0.8348)"/><path class="cls-4" d="M24.2974,18.7688a2.3157,2.3157,0,0,0-4.631.0366v.0374a7.5181,7.5181,0,1,1-15.0347.047l0-.03A2.3155,2.3155,0,0,0,.0012,18.832a12.1491,12.1491,0,1,0,24.2974.1332C24.2983,18.8994,24.298,18.8343,24.2974,18.7688Z" transform="translate(0 -0.8348)"/></g><path id="accent" class="cls-5" d="M24.5575,4.5516a2.3153,2.3153,0,0,0-1.1263-1.9888A12.1492,12.1492,0,1,0,11.2275,23.5715a2.3153,2.3153,0,0,0,2.2658-4.0385A7.518,7.518,0,1,1,21.0512,6.5362a2.3165,2.3165,0,0,0,3.5063-1.9846Z" transform="translate(0 -0.8348)"/></svg>
        </a>
        <a href="#top" title="Back to the top of the page" class="text-gray-500 hover:text-gray-300 text-center transition duration-300 ease-in-out w-5 h-5">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
