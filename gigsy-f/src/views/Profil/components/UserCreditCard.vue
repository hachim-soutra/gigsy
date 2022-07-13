<template>
  <div
    class="d-flex align-items-center justify-content-between flex-column credit-card"
  >
    <h3>{{ title }}</h3>
    <span class="credit"> {{ sold }} DHS </span>
    <p>{{ description }}</p>
  </div>
</template>

<script>
export default {
  props: ["title", "description", "sold"],
  data: () => ({
    toggleProfil: 1,
  }),
};
</script>

<style scoped>
.credit-card {
  height: 200px;
}
h3 {
  font-size: 1.3rem;
  font-weight: 700;
}
.credit {
  font-size: 2rem;
  color: green;
}
p {
  font-size: 1rem;
  font-weight: 300;
}
</style>
