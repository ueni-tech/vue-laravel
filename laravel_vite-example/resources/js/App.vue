<template>
  <v-app>
    <TopHeader></TopHeader>
    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script setup>
import TopHeader from './TopHeader.vue';
</script>