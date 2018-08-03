<template>
  <v-list three-line subheader>
    <v-subheader>Tarefas</v-subheader>
    <v-divider></v-divider>
    <div v-for="n in 3" :key="n">
      <v-list-tile @click="open()">
        <v-list-tile-content>
          <v-list-tile-title>Título</v-list-tile-title>
          <v-list-tile-sub-title>Sub-Título</v-list-tile-sub-title>
        </v-list-tile-content>
      </v-list-tile>
    </div>
  </v-list>
</template>

<script>
export default {
  methods: {
    open(n) {
      console.log(n);
    }
  }
}
</script>
