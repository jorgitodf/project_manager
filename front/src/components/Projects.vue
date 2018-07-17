<template>
    <div>
        <h1 class="red">{{ mensagem }}</h1>
        <p>Projeto Prático da SON</p>
    </div>
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





