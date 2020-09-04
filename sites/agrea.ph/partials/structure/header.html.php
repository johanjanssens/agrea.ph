<header class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white mb-3" 
     x-data="scrollToReveal()" 
     x-ref="navbar"
     x-on:scroll.window="scroll()"
     x-bind:class="{
                   'sticky top-0 shadow-lg': sticky,
                   'relative': !sticky
                   }">
  <!-- Navbar -->
  <div class="w-full text-gray-700">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row">
      <div class="p-4 flex flex-row items-center justify-between">
        <a class="flex items-center mb-4 md:mb-0 text-gray-900 dark-mode:text-white focus:outline-none focus:shadow-outline" href="/">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 171.92 172.39">
            <title><?= config()->site->name ?></title>
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
          <span class="ml-3 text-xl font-agrea font-medium uppercase text-gray-900"><?= config()->site->name ?></span>
        </a>
        <!-- Button Mobile Nav -->
        <button class="md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <!-- End Button Mobile Nav -->
      </div>
      <!-- Navbar Mobile -->
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden bg-white pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
        <?= import('/partials/navigation/mainmenu',['levels'=>1,]); ?>
      </nav>
    </div>
  </div>
  <!-- End Navbar -->
</header>
<script type="text/javascript">
  function scrollToReveal() {
  return {
    sticky: false,
    lastPos: window.scrollY + 0,
    scroll() {
      this.sticky = window.scrollY > this.$refs.navbar.offsetHeight && this.lastPos > window.scrollY;
      this.lastPos = window.scrollY;
    }
  }
}
</script>