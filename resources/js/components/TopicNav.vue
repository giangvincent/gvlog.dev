<template>
    <nav class="bg-gray-100 shadow-md">
        <div class="max-w-6xl px-4 mx-auto">
            <div class="flex flex-col items-center justify-center">
                <div class="hidden space-x-1 md:flex">
                    <router-link to="/"
                                 class="px-2 py-4 font-semibold text-gray-500"
                                 :class="{
                                    'border-b-4 border-purple-500': $route.href === '/',
                                    'transition duration-300 hover:text-purple-500': $route.href !== '/'
                                }"
                    >
                        Home
                    </router-link>
                    <router-link v-for="m in menuTab" :to="m.url" :key="m.id"
                                 class="px-2 py-4 font-semibold text-gray-500"
                                 :class="{
                                    'border-b-4 border-purple-500': $route.href === m.url,
                                    'transition duration-300 hover:text-purple-500': $route.href !== m.url
                                }"
                    >
                        {{ m.display_name }}
                    </router-link>

                </div>

                <div class="flex items-center py-4 md:hidden">
                    <button class="outline-none menu-button" @click="mobileNav = !mobileNav">
                        <svg class="w-6 h-6 text-gray-500" x-show="! showMenu" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 00 24 24" stroke="currentColor">
                            <path d="m4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="w-full mobile-menu" :class="{'hidden': !mobileNav}">
                    <ul class="flex items-center justify-center">
                        <li class="active">
                            <router-link to="/" class="block px-2 py-4 text-white bg-purple-500">
                                Home
                            </router-link>
                        </li>
                        <li v-for="m in menuTab" :key="m.id">
                            <router-link :to="m.url"
                                         class="block px-2 py-4 transition duration-300 hover:bg-purple-500 hover:text-white">
                                {{ m.display_name }}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "TopicNav",
    data() {
        return {
            mobileNav: false,
            menuTab: {}
        }
    },
    mounted() {
        console.log(this.$route.href);
        this.menuTab = window.menuTab;
    }
};
</script>
