<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="display-0 mb-2">Nome do Projeto</h2>

      <p>Texto Aqui</p>
    </v-flex>

    <sections></sections>

    <v-flex xs12>
      <v-btn to="/projects">Voltar</v-btn>
    </v-flex>

    <show-task/>

  </v-layout>
</template>

<script>
import sections from '../sections/List'
import showTask from '../tasks/Show'
export default {
  components: {
    sections,
    'show-task': showTask
  }
}
</script>
