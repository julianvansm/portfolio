<script setup>
import HelloWorld from './components/Welcome.vue'

</script>

<template>
    <span class="z-50 fixed top-0 right-0 m-2 border-black border-2 rounded overflow-hidden hover:animate-[pulse_0.4s_ease-in-out_reverse]">
        <a class="lan" href="{{$lanfile}}">
                <img src="../public/images/nl.png" alt="images/nl2.png"
                     height="40"
                     width="40">
        </a>
    </span>
  <HelloWorld />
</template>

<style scoped>
</style>

