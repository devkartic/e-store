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
                <label for="forName" class="block text-sm font-semibold mb-2 text-gray-600">Name</label>
                <input type="text" id="forName"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                    aria-describedby="hs-input-helper-text">
            </div>
            <!-- Email -->
            <div class="mb-4">
                <label for="forEmail" class="block text-sm font-semibold mb-2 text-gray-600">Email Address</label>
                <input type="email" id="forEmail"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                    aria-describedby="hs-input-helper-text">
            </div>
            <!-- password -->
            <div class="mb-4">
                <label for="forPassword" class="block text-sm font-semibold mb-2 text-gray-600">Password</label>
                <input type="password" id="forPassword"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                    aria-describedby="hs-input-helper-text">
            </div>

            <!-- button -->
            <div class="grid my-6">
                <a href="../" class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign Up</a>
            </div>

            <div class="flex justify-center gap-2 items-center">
                <p class="text-base font-medium text-gray-500">Already have an Account?</p>
                <Link :href="route('sign.in')" class="text-sm font-medium text-blue-600 hover:text-blue-700">Sign
                In</Link>
            </div>
        </form>
    </AccessLayout>
</template>
