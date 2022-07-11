<template>
  <div class="c-card">
    <div class="c-card__head">
      <h3>{{ title }}</h3>
    </div>
    <div class="c-card__body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["title"],
  data: () => ({
    toggleProfil: 1,
  }),
};
</script>

<style scoped>
.c-card {
  margin: 2rem;
  background-color: white;
}
.c-card__head {
  border-bottom: 1px solid #f1f1f1;
}
.c-card__head,
.c-card__footer {
  padding: 14px 20px;
  background: #fff;
  line-height: 1.84;
}
.c-card__body {
  padding: 20px;
  background: #fff;
}
</style>
