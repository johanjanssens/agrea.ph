---
layout: admin
---
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

    <!-- Desktop sidebar -->
    <?= import('/partials/admin/desktop-sidebar'); ?>

    <!-- Mobile sidebar -->
    <?= import('/partials/admin/mobile-sidebar'); ?>

    <!-- Main Column -->
    <div class="flex flex-col flex-1 w-full">

        <!-- Header -->
        <?= import('/partials/admin/header'); ?>

        <!-- Main -->
        <ktml:content>

    </div>
</div>
