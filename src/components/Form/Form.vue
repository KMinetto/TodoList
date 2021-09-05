<template>
  <div>
    <form>
      <div class="form-group">
        <label for="action">Action</label>
        <input id="action" type="text" class="form-control" placeholder="Rentrez une action à réaliser">
      </div>
      <button class="btn btn-primary mt-4">Créer une tâche</button>
    </form>
    <ul class="list-group mt-4">
      <li v-for="(task, i) in tasks" :key="i" class="mt-4">
        <Item :task="task" />
      </li>
    </ul>
  </div>
</template>

<script>

import Item from "@/components/Item/Item";

export default {
  name: "Form",
  components: {
    Item
  },
  data() {
    return {
      formData: {
        task: ''
      },
      tasks: ['Javascript', 'Vue', 'Python', 'React']
    }
  }
}
</script>

<style scoped>
  label {
    font-size: 25px;
  }

  ul li {
    list-style: none;
  }
</style>