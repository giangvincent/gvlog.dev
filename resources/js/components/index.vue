<template>
  <div>
    <!-- Top Bar Nav -->
    <top-nav></top-nav>

    <!-- Text Header -->
    <Header />

    <!-- Topic Nav -->
    <topic-nav></topic-nav>
    <div class="container mx-auto flex flex-wrap py-6">
      <!-- Posts Section -->
      <list-posts></list-posts>
      <!-- Sidebar Section -->
      <sidebar></sidebar>
    </div>

    <Footer />
  </div>
</template>

<script>
import TopNav from "./TopNav.vue";
import Header from "./Header.vue";
import TopicNav from "./TopicNav.vue";
import ListPosts from "./ListPosts.vue";
import Sidebar from "./Sidebar.vue";
import Footer from "./Footer.vue";

export default {
  components: { ListPosts, Sidebar, TopicNav, TopNav, Header, Footer },
  name: "Index",
};
</script>