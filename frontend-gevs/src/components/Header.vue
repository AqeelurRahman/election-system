<template>
  <header>
    <b-navbar type="dark" variant="light">
      <b-navbar-nav>
        <b-nav-item :to="{ path: '/' }">
          Home
        </b-nav-item>
        <b-nav-item :to="{ path: '/about' }">
          About
        </b-nav-item>
        <b-nav-item :to="{ path: '/register' }">
          Register
        </b-nav-item>
      </b-navbar-nav>
    </b-navbar>
  </header>
</template>

<script setup lang="ts">

</script>
   <!-- <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" /> -->
