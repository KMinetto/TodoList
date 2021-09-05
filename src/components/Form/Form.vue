<template>
  <div>
    <form>
      <div class="form-group">
        <label for="action">Action</label>
        <input v-model="formData.task" id="action" type="text" class="form-control" placeholder="Rentrez une action à réaliser">
      </div>
      <button @click.prevent="addTask" class="btn btn-primary mt-4">Créer une tâche</button>
    </form>
    <ul class="list-group mt-4">
      <li v-for="(task, i) in tasks" :key="i" class="mt-4">
        <Item :id="i" :task="task" :deleteTask="deleteTask" />
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
  },
  methods: {
    addTask: function() {
      const task = this.formData.task
      if (task === '') {
        return
      }
      this.tasks.push(task)
      this.formData.task = ''
    },
    deleteTask: function(e) {
      const id = e.target.parentNode.id
      this.tasks.splice(id, 1)
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