<script setup>
import AccessLayout from '@/Layouts/AccessLayout.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <AccessLayout>
        <!-- form -->
        <form>
            <!-- username -->
            <div class="mb-4">
                <label for="forUsername" class="block text-sm font-semibold mb-2 text-gray-600">Username</label>
                <input type="text" id="forUsername"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                    aria-describedby="hs-input-helper-text">
            </div>
            <!-- password -->
            <div class="mb-6">
                <label for="forPassword" class="block text-sm font-semibold mb-2 text-gray-600">Password</label>
                <input type="password" id="forPassword"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                    aria-describedby="hs-input-helper-text">
            </div>
            <!-- checkbox -->
            <div class="flex justify-between">
                <div class="flex">
                    <input type="checkbox"
                        class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500 "
                        id="hs-default-checkbox" checked>
                    <label for="hs-default-checkbox" class="text-sm text-gray-600 ms-3">Remeber this
                        Device</label>
                </div>
                <a href="../" class="text-sm font-medium text-blue-600 hover:text-blue-700">Forgot Password
                    ?</a>
            </div>
            <!-- button -->
            <div class="grid my-6">
                <a href="../" class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign
                    In</a>
            </div>

            <div class="flex justify-center gap-2 items-center">
                <p class="text-base font-medium text-gray-500">New to Modernize?</p>
                <Link :href="route('sign.up')"
                    class="text-sm font-medium text-blue-600 hover:text-blue-700">Create an account</Link>
            </div>
        </form>
    </AccessLayout>
</template>
