<template>
  <div class="container">
    <section class="row" data-aos="fade-up">
      <div class="col-9 overflow-message">
        <UserMessage
          v-for="item in 10"
          :key="item.$key"
          title="solde total"
          description="12/12/2022"
          img="1000"
          gigs="1000"
          seller="1000"
        />
      </div>
      <div class="col">
        <ul class="list-group">
          <li
            class="list-group-item d-flex justify-content-between align-items-center"
          >
            Messages entrants
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-center"
          >
            messages sortants
            <span class="badge badge-primary badge-pill">2</span>
          </li>
        </ul>
      </div>
    </section>
  </div>
</template>

<script>
import UserMessage from "./components/UserMessage.vue";
export default {
  data: () => ({}),
  mounted() {},
  methods: {},
  components: { UserMessage },
};
</script>

<style scoped>
.c-card {
  background-color: #f1f1f1 !important;
}
.bg-gray {
  background: transparent;
}
label {
  float: left;
}
.ctf1 {
  margin-top: 9rem !important;
}
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}
.profil-pic {
  border-radius: 50%;
  max-width: 150px;
}

li {
  text-align: left;
  line-height: 2rem;
}
.overflow-message {
  overflow-x: auto;
}
</style>
