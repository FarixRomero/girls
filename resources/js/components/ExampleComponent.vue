<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example component.cualuiwer cosa</div>
        </div>
      </div>
    </div>
  </div>
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
