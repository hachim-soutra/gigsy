<template>
  <div class="container">
    <section class="row">
      <div class="col-12 row m-0 bg-gray p-3" data-aos="fade-up">
        <div class="col">
          <UserCreditCard
            title="solde total"
            description="Le solde total de votre compte comprend désormais les bénéfices et le solde en attente."
            sold="1000"
          />
        </div>
        <div class="col">
          <UserCreditCard
            title="solde en attente"
            description="Vos gains sont suspendus pendant 14 jours avant que vous ne puissiez les utiliser."
            sold="1000"
          />
        </div>
        <div class="col">
          <UserCreditCard
            title="Bénéfices pouvant être retirés"
            description="Le montant que vous avez gagné en vendant les services peut être retiré sur votre compte PayPal."
            sold="1000"
          />
        </div>
      </div>
      <br />
      <br />
      <div class="col-12 bg-gray" data-aos="fade-up">
        <UserProfilCard title="Que voulez-vous faire de vos gains ?">
          <small
            class="col-12 text-left text-success d-flex justify-content-start mb-5 p-0"
            >Les sommes dues au titre de la vente de services sont envoyées
            quotidiennement sur votre e-mail via PayPal lorsqu'elles dépassent
            10 $</small
          >
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Votre compte PayPal :</label>
                <input
                  class="form-control"
                  type="text"
                  placeholder="user@example.com"
                />
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>le prix demandé :</label>
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button class="btn btn-primary" type="submit">valider</button>
            </div>
          </div>
        </UserProfilCard>
      </div>
    </section>
  </div>
</template>

<script>
import Form from "vform";
import { fetchMyServices } from "./api/profil";
import UserCreditCard from "./components/UserCreditCard.vue";
import UserProfilCard from "./components/UserProfilCard.vue";
export default {
  data: () => ({
    services: [],
    form: new Form({
      first_name: "",
      email: "",
      password: "",
      password_confirmation: "",
    }),
    date: "12/12/22",
    fullname: "Hachim Soutra",
    telephone: "06 00 00 00 00",
    emailp: "hachim.soutra@gigsy.com",
  }),
  mounted() {
    this.fetchData();
  },
  methods: {
    register() {
      this.form
        .post(this.$app_url + "/api/v1/user/register")
        .then((response) => {
          this.form.reset();
          this.$toasted.success(response.data.message);
        });
    },
    fetchData() {
      this.loading = true;
      fetchMyServices()
        .then((res) => {
          this.services = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .finally(() => (this.loading = false));
    },
  },
  components: { UserCreditCard, UserProfilCard },
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
