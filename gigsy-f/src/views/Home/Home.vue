<template>
  <div>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
            <h1>Des milliers de microservices pour tous vos besoins</h1>
            <h2>
              Besoin d'un service ? <br />
              Vous etes au bon endroit
            </h2>
            <a href="#about" class="btn-get-started scrollto">Commencer</a>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img
              src="assets/img/hero-img.svg"
              class="img-fluid animated"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="row justify-content-between">
            <div
              class="col-lg-5 d-flex align-items-center justify-content-center about-img"
            >
              <img
                src="assets/img/about-img.svg"
                class="img-fluid"
                alt=""
                data-aos="zoom-in"
              />
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
              <h3 data-aos="fade-up">
                Tout un monde de talents freelance à votre portée
              </h3>
              <p data-aos="fade-up" data-aos-delay="100">
                Confiez votre demande à nos vendeurs vérifiés
              </p>
              <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Des services de qualité pour tous les budgets</h4>
                  <p>
                    Trouvez des services de haute qualité à tous les prix. Pas
                    de tarifs horaires, mais une tarification en fonction des
                    projets.
                  </p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Des paiements protégés</h4>
                  <p>
                    Sachez toujours ce que vous allez payer d'avance. Votre
                    paiement n'est pas débloqué tant que vous n'avez pas
                    approuvé le travail.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Nos Services</h2>
            <p>Découvrez les excellents services que nous offrons</p>
          </div>

          <div class="row">
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="#">Design & Graphisme</a></h4>
                <p class="description">
                  Création de logo, retouches photos, réalisation de cartes de
                  visite ou de supports de communication : sur le site
                  Gisgsy.com, spécialiste des microservices, dénichez en
                  quelques clics un graphiste freelance qualifié pour vous aider
                  à réaliser votre projet.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="#">Rédaction</a></h4>
                <p class="description">
                  Article, texte optimisé SEO, lettre de motivation, etc.,
                  confiez la rédaction de vos documents professionnels ou
                  personnels à un rédacteur chevronné grâce au site Gigsy.com.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="#">Site & Développement</a></h4>
                <p class="description">
                  Création de site web, de site vitrine ou de site de e-commerce
                  : la solution se trouve sur Gigsy.com. Un grand nombre de
                  freelances chevronnés vous proposent leurs services en
                  développement web.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="#">Réseaux sociaux</a></h4>
                <p class="description">
                  Faites appel à un community manager en freelance qualifié pour
                  gérer votre communication via vos réseaux sociaux, avec le
                  site Gigsy.com, le spécialiste des microservices
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Portefeuille</h2>
            <p>Découvrez notre magnifique portefeuille</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Tout</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div
            class="row portfolio-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-1.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="App 1"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-2.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Web 3"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-3.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="App 2"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-4.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Card 2"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-5.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-5.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Web 2"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-6.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-6.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="App 3"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-7.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-7.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Card 1"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-8.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-8.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Card 3"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-9.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-9.jpg"
                    data-gall="portfolioGallery"
                    class="venobox"
                    title="Web 3"
                    ><i class="icofont-plus-circle"></i
                  ></a>
                  <a href="#" title="Plus de details"
                    ><i class="icofont-link"></i
                  ></a>
                </div>
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Equipe</h2>
            <p>Notre équipe est toujours là pour vous aider</p>
          </div>

          <div class="row">
            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Hachim Soutra</h4>
                    <span>Chef de projet</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amine Aqebli</h4>
                    <span>Developpeur Back-end</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Azzeddine Najdawi</h4>
                    <span>Developpeur Front-end</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Monsif Ouaqasse</h4>
                    <span>Developpeur Front-end</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->
      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Contactez-nous</h2>
            <p>Pour commencer Contactez-nous</p>
          </div>

          <div class="row">
            <div
              class="col-lg-5 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Adresse:</h4>
                  <p>Gueliz Marrakech</p>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Telephone:</h4>
                  <p>+212 00 00 00 00</p>
                </div>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108703.09881241457!2d-8.007853099999998!3d31.634621449999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakech%2C%20Maroc!5e0!3m2!1sfr!2sfr!4v1652822025565!5m2!1sfr!2sfr"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

            <div
              class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <form
                @submit.prevent="contact"
                @keydown="form.onKeydown($event)"
                role="form"
                class="php-email-form"
              >
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Votre Nom</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      data-rule="minlen:4"
                      data-msg="Veuillez entrer au moins 4 caractères"
                      v-model="form.name"
                      :class="{ 'is-invalid': form.errors.has('name') }"
                    />
                    <div
                      class="invalid-feedback text-left validate"
                      v-if="form.errors.has('name')"
                    >
                      {{ form.errors.get("name") }}
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Votre Email</label>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      data-rule="email"
                      data-msg="Veuillez entrer un email valide"
                      v-model="form.email"
                      :class="{ 'is-invalid': form.errors.has('email') }"
                    />
                    <div
                      class="invalid-feedback text-left validate"
                      v-if="form.errors.has('email')"
                    >
                      {{ form.errors.get("email") }}
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Objet</label>
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    data-rule="minlen:4"
                    data-msg="Veuillez entrer au moins 8 caractères"
                    v-model="form.objet"
                    :class="{ 'is-invalid': form.errors.has('objet') }"
                  />
                  <div
                    class="invalid-feedback text-left validate"
                    v-if="form.errors.has('objet')"
                  >
                    {{ form.errors.get("objet") }}
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea
                    class="form-control"
                    name="message"
                    rows="10"
                    data-rule="required"
                    v-model="form.message"
                    :class="{ 'is-invalid': form.errors.has('message') }"
                    data-msg="S'il vous plaît écrivez nous quelque chose"
                  ></textarea>
                  <div
                    class="invalid-feedback text-left validate"
                    v-if="form.errors.has('message')"
                  >
                    {{ form.errors.get("message") }}
                  </div>
                </div>
                <div class="mb-3">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Votre message a été envoyé. Merci!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Envoyez Votre Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Us Section -->
    </main>
    <!-- End #main -->
  </div>
</template>
<script>
import Form from "vform";
export default {
  data: () => ({
    form: new Form({
      name: "",
      email: "",
      objet: "",
      message: "",
    }),
  }),
  methods: {
    contact() {
      this.form
        .post("/api/v1/store-contact")
        .then(async (response) => {
          this.form.reset();
          this.$toasted.success(response.data.message, {
            singleton: true,
            icon: "check",
          });
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
            icon: "warning",
          });
        });
    },
  },
};
</script>

<style scoped>
.landing-slider {
  position: relative;
}
#participant-img {
  position: absolute;
  right: 34px;
  top: 25%;
  height: 50%;
  width: auto;
}
.landing-text {
  color: var(--text-color);
  font-size: 2rem;
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  letter-spacing: 0em;
  width: 70%;
  text-align: left;
  display: flex;
  padding: 2rem 0;
}
.tags-handler {
  width: 100%;
  display: flex;
  padding: 0.5rem 0;
  column-gap: 0.5rem;
}
.tags {
  color: var(--text-color);
  background-color: var(--secondary-color);
  border-radius: 15px;
  padding: 5px 15px;
  cursor: pointer;
}
.input-landing {
  color: var(--text-color);
  background-color: transparent;
  border: 1px solid var(--text-color);
  width: 50%;
}
</style>
