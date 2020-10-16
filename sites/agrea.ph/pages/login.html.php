---
layout: index
title: Login - Agrea - Ecology of Dignity
form:
    name: login
    processors: 'ext:pages.processor.login'
    schema:
        email: [email, required]
        password: [string, required]
    honeypot: email_NN9uTmmt
    redirect: /
visible: false
---

<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            <?= import('/partials/structure/logo',['text_class'=>'dark:text-gray-100',]); ?>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <h1 role="heading" aria-level="1" class="text-center text-3xl font-title">Welcome</h1>
            <form method="post" action="" class="flex flex-col pt-3 md:pt-8">
                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" name="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <?= helper('form.honeypot', page()->form->honeypot); ?>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <input type="submit" value="Log In" class="text-white bg-brand border-0 py-2 px-6 cursor-pointer focus:outline-none hover:bg-green-600 rounded text-lg mt-8">
            </form>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <ktml:images max-width="50%" lazyload="progressive,inline">
            <img class="object-cover w-full h-screen hidden md:block" src="images://background/login-bg.jpg">
        </ktml:images>
    </div>
</div>
