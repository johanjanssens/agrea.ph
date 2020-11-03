<header class="relative flex flex-wrap items-center justify-between px-2 py-1 lg:py-3 navbar-expand-lg bg-white lg:mb-3" 
     x-data="scrollToReveal()" 
     x-ref="navbar"
     x-on:scroll.window="scroll()"
     x-bind:class="{
                   'sticky z-50 top-0 shadow-lg': sticky,
                   'relative': !sticky
                   }">
  <!-- Navbar -->
  <div class="w-full text-gray-700">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto lg:items-center lg:justify-between lg:flex-row">
      <div class="p-4 flex flex-row items-center justify-between">
        <?= import('/partials/logos/agrea',['text_class'=>'dark:text-gray-100 ml-3 text-xl',]); ?>
        <!-- Button Mobile Nav -->
        <button class="lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <!-- End Button Mobile Nav -->
      </div>
      <!-- Navbar Mobile -->
      <nav role="navigation" aria-label="Main" :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden bg-white pb-4 lg:pb-0 lg:flex lg:justify-end lg:flex-row">
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