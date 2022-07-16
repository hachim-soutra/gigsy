<template>
  <div class="container">
    <section class="row" data-aos="fade-up">
      <nav class="col-12">
        <ol class="breadcrumb bg-white">
          <li class="breadcrumb-item">
            <a href="/"> Accueil </a>
          </li>

          <li class="breadcrumb-item active">
            <router-link :to="{ name: 'messages' }">Messages</router-link>
          </li>
        </ol>
      </nav>
      <div class="col-9">
        <div class="overflow-message">
          <UserMessageData
            v-for="item in 10"
            :key="item.$key"
            user="hachim soutra"
            date="12/12/2022"
            description="lodeeee dhdhdjd <br/> ssbsbbsbshshshss"
            img="1000"
          />
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <form accept-charset="UTF-8" action="" method="POST">
                  <textarea
                    class="form-control counted"
                    name="message"
                    placeholder="Type in your message"
                    rows="5"
                    style="margin-bottom: 10px"
                  ></textarea>
                  <h6 class="pull-right" id="counter">
                    320 characters remaining
                  </h6>
                  <button class="btn btn-info pull-left m-0" type="submit">
                    Post New Message
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
import ApiService from "../../services/api.service";
import UserMessageData from "./components/UserMessageData.vue";
export default {
  data() {
    return { messages: [] };
  },
  created() {
    this.fetchMessages();
  },
  methods: {
    fetchMessages() {
      ApiService.get("/messages").then((response) => {
        this.messages = response.data;
      });
    },
    addMessage(message) {
      this.messages.push(message);
      ApiService.post("/messages", message).then((response) => {
        console.log(response.data);
      });
    },
  },
  components: { UserMessageData },
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
</style>
