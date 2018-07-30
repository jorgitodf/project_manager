<template>
  <v-app id="app">
    <e-header></e-header>
    <v-content>
      <v-container grid-list-md>
        <router-view/>
      </v-container>
    </v-content>
    <v-footer app>
      <span>&copy; <a href="#">School of Net - {{year}}</a></span>
    </v-footer>
  </v-app>
</template>

<script>
  import Header from './partials/Header';
  export default {
    name: 'App',
    computed: {
      year() {
        return (new Date()).getFullYear();
      }
    },
    components: {
      'e-header': Header
    }
  }
</script>

<style>

</style>
