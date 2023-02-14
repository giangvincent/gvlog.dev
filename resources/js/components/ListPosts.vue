<template>
  <section class="flex flex-col items-center w-full px-3 md:w-2/3">
    <article
      v-bind:key="post.id"
      v-for="post in posts.data"
      class="flex flex-col my-4 shadow"
    >
      <!-- Article Image -->
      <a href="#" class="hover:opacity-75">
        <img :src="post.feature_image" />
      </a>
      <div class="flex flex-col justify-start p-6 bg-white">
        <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">{{
          post.title
        }}</a>
        <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">{{
          post.title
        }}</a>
        <p href="#" class="pb-3 text-sm">
          By
          <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>,
          Published on January 12th, 2020
        </p>
        <a href="#" class="pb-6">{{ post.description }}</a>
        <a href="#" class="text-gray-800 uppercase hover:text-black"
          >Continue Reading <i class="fas fa-arrow-right"></i
        ></a>
      </div>
    </article>

    <!-- Pagination -->
    <div class="flex items-center py-8">
      <a
        href="#"
        class="
          flex
          items-center
          justify-center
          w-10
          h-10
          text-sm
          font-semibold
          text-white
          bg-blue-800
          hover:bg-blue-600
        "
        >1</a
      >
      <a
        href="#"
        class="
          flex
          items-center
          justify-center
          w-10
          h-10
          text-sm
          font-semibold
          text-gray-800
          hover:bg-blue-600 hover:text-white
        "
        >2</a
      >
      <a
        href="#"
        class="
          flex
          items-center
          justify-center
          w-10
          h-10
          ml-3
          text-sm
          font-semibold
          text-gray-800
          hover:text-gray-900
        "
        >Next <i class="ml-2 fas fa-arrow-right"></i
      ></a>
    </div>
  </section>
</template>

<script>
export default {
  name: "ListPosts",
  data() {
    return {
      posts: {},
    };
  },
  methods: {
    async getPosts(page = 1) {
      const response = await fetch(`/api/posts?page=${page}`);
      this.posts = await response.json();
    },
  },
  mounted() {
    this.posts = window.posts;
  },
};
</script>