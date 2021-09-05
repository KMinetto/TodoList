<template>
  <div id="app">
    <Header />
    <main class="p-3">
      <h1 class="mt-4">Rentrez des choses à faire</h1>
      <Form class="mt-4" />
    </main>
  </div>
</template>

<script>

import Header from "@/components/Header/Header";
import Form from "@/components/Form/Form";

export default {
  name: 'App',
  components: {
    Header,
    Form
  }
}
</script>

<style>
</style>
