<template>
  <header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
      <router-link
        class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl"
        to="/"
      >
          <img src="/assets/logo.png" alt="logo">
      </router-link>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>
