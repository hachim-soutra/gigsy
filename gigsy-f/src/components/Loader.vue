<template>
  <div v-if="active">
    <div class="card is-loading p-2">
      <div class="image mb-2"></div>
      <div class="content">
        <p></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Loader",
  props: {
    active: Boolean,
    text: String,
  },
};
</script>

<style scoped>
.card.is-loading {
  height: 300px;
}
.card.is-loading .image,
.card.is-loading h2,
.card.is-loading p {
  background: #eee;
  background: linear-gradient(110deg, #ececec 8%, #f5f5f5 18%, #ececec 33%);
  border-radius: 5px;
  background-size: 200% 100%;
  animation: 1s shine linear infinite;
}
.card.is-loading .content {
  margin-top: 5px;
  flex: 1;
  display: flex;
  /* align-items: center; */
  flex-direction: column;
  justify-content: center;
}
.image {
  flex: 3;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

h2 {
  flex: 1;
}

p {
  flex: 2;
}

@keyframes shine {
  to {
    background-position-x: -200%;
  }
}
</style>
