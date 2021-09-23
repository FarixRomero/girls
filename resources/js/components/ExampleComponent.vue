<template>
  <div class="container">soy el ejemplo</div>
</template>

<script>
export default {
  mounted() {
    axios
      .get("https://jsonplaceholder.typicode.com/todos/1")
      .then((r) => console.log("respuesta", r));
    console.log("Component mounted.");
  },
};
</script>
