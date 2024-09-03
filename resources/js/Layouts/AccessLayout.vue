<script setup>

</script>

<template>
    <main>
        <!-- Main Content -->
        <div
            class="flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
            <div class="justify-center items-center w-full card lg:flex max-w-md ">
                <div class=" w-full card-body">
                    <a href="../" class="py-4 block"><img src="assets/admin/assets/images/logos/dark-logo.svg" alt=""
                            class="mx-auto" /></a>
                    <p class="mb-4 text-gray-500 text-sm text-center">Your Social Campaigns</p>
                    <slot></slot>
                </div>
            </div>
        </div>
    </main>
</template>
