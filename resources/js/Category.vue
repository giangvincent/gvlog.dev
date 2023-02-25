<template>
    <div>
      <!-- Top Bar Nav -->
      <top-nav></top-nav>

      <!-- Text Header -->
      <Header />

      <!-- Topic Nav -->
      <topic-nav></topic-nav>
      <div class="container flex flex-wrap py-6 mx-auto">
        <!-- Posts Section -->
        <list-posts :posts="posts" :category="$route.params.category"></list-posts>
        <!-- Sidebar Section -->
        <sidebar></sidebar>
      </div>

      <Footer />
    </div>
  </template>

  <script>
  import TopNav from "./components/TopNav.vue";
  import Header from "./components/Header.vue";
  import TopicNav from "./components/TopicNav.vue";
  import ListPosts from "./components/ListPosts.vue";
  import Sidebar from "./components/Sidebar.vue";
  import Footer from "./components/Footer.vue";

  export default {
    components: { ListPosts, Sidebar, TopicNav, TopNav, Header, Footer },
    name: "Category",
    data() {
      return {
        posts: {}
      }
    },
    mounted() {
      this.posts = window.posts
    }
  };
  </script>