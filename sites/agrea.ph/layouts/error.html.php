---
layout: index
---
<style>
  .notfound {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    width: 100%;
    text-align: center;
  }
  .notfound .notfound-404 {
    height: 142px;
    position: relative;
    z-index: -1;
  }
  .notfound .notfound-404 h1 {
    background-image: url(<?= helper('image.url', 'images://background/login-bg.jpg?auto=compress&q=10&w=650') ?>);
    font-size: 112px;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 2px var(--green-500);
  }
  @media only screen and (min-width: 768px) {
    .notfound .notfound-404 {
      height: 280px;
    }
    .notfound .notfound-404 h1 {
      font-size: 230px;
    }
  }
</style>
<div class="relative h-screen bg-gray-50 dark:bg-gray-900">
	<div class="notfound max-w-3xl">
		<div class="notfound-404 mb-12">
			<h1 class="bg-no-repeat bg-cover bg-center font-title font-black text-gray-700 dark:text-gray-200">Oops!</h1>
		</div>
		<h2>Sorry we couldn't find this page</h2>
		<p class="my-6">The page you are looking for might have been removed, had its name changed or it might be temporarily unavailable.</p>
		<p>Don't worry, you can find plenty of other things on <a href="/">our homepage</a>.</p>
	</div>
</div>
