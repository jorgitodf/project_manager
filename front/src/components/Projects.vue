<template>
    <v-layout row wrap>
      <v-flex xs12>
        <h2 class="display-1 mb-4">Projetos</h2>
      </v-flex>
      <v-flex xs3 v-for="n in 4">
        <v-card color="blue-grey darken-2" class="white--text">
          <v-card-title primary-title>
            <div class="headline">App Mobile SON</div>
          </v-card-title>
          <v-card-text>Lorem Ipsum</v-card-text>
          <v-card-actions>
            <v-btn flat dark> Ver + </v-btn>
          </v-card-actions>
        </v-card>
      </v-flex>
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





