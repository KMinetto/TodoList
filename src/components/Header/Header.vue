<template>
  <div class="header-container">
    <p>{{ title }}</p>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      title: 'La Todo-List'
    }
  }
}
</script>

<style scoped>
  .header-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    background: #333333;
    color: #f1f1f1;
  }

  p {
    font-size: 30px;
  }
</style>