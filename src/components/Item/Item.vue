<template>
  <div class="card my2 item-todo">
    <p>{{ task }}</p>
    <div @click.prevent="deleteTask" class="btn-suppr btn btn-danger">X</div>
  </div>
</template>

<script>
export default {
  name: "Item",
  props: ['task', 'deleteTask'],
}
</script>

<style scoped>
  .item-todo {
    position: relative;
    padding: 20px 60px 20px 30px;
    font-size: 20px;
    height: 88px;
  }

  .btn-suppr {
    position: absolute;
    top: 10px;
    right: 10px;
  }

  .item-todo p {
    margin-bottom: 0 !important;
  }
</style>