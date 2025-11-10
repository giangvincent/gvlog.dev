<template>
    <section class="flex flex-col items-center w-full px-3 md:w-2/3">
        <article
            v-bind:key="post.id"
            v-for="post in posts.data"
            class="flex flex-col my-4 shadow"
        >
            <!-- Article Image -->
            <router-link :to="{ name: 'post_detail', params: { postId: post.id }}">
                <div class="hover:opacity-75">
                    <img :src="'/uploads/' + post.feature_image" :alt="post.slug"/>
                </div>
                <div class="flex flex-col justify-start p-6 bg-white">
                    <router-link
                        v-bind:key="category.slug"
                        v-for="(category, index) in post.categories" href="#"
                        class="pb-4 text-sm font-bold text-blue-700 uppercase" to="#">{{
                            category.name
                        }}
                    </router-link>
                    <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">{{
                            post.title
                        }}</a>
                    <p class="pb-3 text-sm">
                        Published on January 12th, 2020
                    </p>
                    <a href="#" class="pb-6">{{ post.description }}</a>
                    <a href="#" class="text-gray-800 uppercase hover:text-black"
                    >Continue Reading <i class="fas fa-arrow-right"></i
                    ></a>
                </div>
            </router-link>
        </article>

        <!-- Pagination -->
        <div class="flex items-center py-8">
            <a
                v-for="(item, index) in posts.links"
                :key="index"
                :href="item.url"
                v-html="item.label"
                :class="
          index !== 0 && index !== posts.links.length - 1
            ? item.active
              ? 'text-white bg-blue-800 hover:bg-blue-600 w-10'
              : 'text-gray-800 hover:bg-blue-600 hover:text-white w-10'
            : 'text-gray-800 hover:text-gray-500 ml-3 mr-3'
        "
                class="flex items-center justify-center h-10 text-sm font-semibold"
            ></a>
        </div>
    </section>
</template>

<script>
export default {
    name: "ListPosts",
    props: {
        category: String
    },
    mounted() {
        // watch the params of the route to fetch the data again
        this.$watch(
            () => this.$route.params.category,
            () => {
                this.getPosts(this.$route.params.category);
            },
            // fetch the data when the view is created and the data is
            // already being observed
            {immediate: true}
        )
    },
    data() {
        return {
            posts: {}
        };
    },
    methods: {
        async getPosts(category = null, page = 1) {
            if (category !== '' && category !== null) {
                return this.getPostsByCat(category, page);
            }
            const response = await fetch(`/api/posts?page=${page}`);
            this.posts = await response.json();
        },
        async getPostsByCat(category = null, page = 1) {
            const response = await fetch(`/api/posts-by-cat/${category}?page=${page}`);
            this.posts = await response.json();
        },
    }
};
</script>
