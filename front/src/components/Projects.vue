<template>
    <v-layout row wrap>
      <v-flex xs12>
        <h2 class="display-1 mb-4">Projetos</h2>
      </v-flex>
      <v-container grid-list-md>
        <router-view></router-view>
      </v-container>
    </v-layout>
</template>

<style>
  .red {
    background-color: red;
    color: white;
  }
</style>

<script>
  export default {
    data() {
      return {
        mensagem: 'Olá Mundo'
      }
    },
    mounted() {
      console.log('Estamos Prontos para Trabalhar');
      //document.querySelector('h1.red').innerHTML = 'Olá Mundo';
    }
  }
</script>





