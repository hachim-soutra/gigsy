<template>
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Rejoignez notre newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Votre Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3>Gigsy</h3>
            <p>
              Gueliz <br>
              Marrakech<br><br>
              <strong>Telephone:</strong> +212 00 00 00 00<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A-propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'utilisation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design & Graphisme</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Redaction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Site & developpement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Réseaux sociaux</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>Nos réseaux sociaux</h4>
            <p>Rejoignez-nous</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; droits d'auteur <strong><span>Gigsy</span></strong>. Tous les droits sont réservés
      </div>
      <div class="credits">
        Conçu par <a href="">L'équipe Gigsy</a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {};
</script>

<style scoped>
span {
  color: var(--text-color);
}

.subscribe-txt{
  color: var(--text-color);
  font-size: 1.6rem;
  font-weight: 400;
  line-height: 43px;
  letter-spacing: 0em;
  text-align: center;
}
.btn-newsletter {
  color: var(--text-color);
    background-color: var(--secondary-color);

}
.input-newsletter {
  color: var(--text-color);
    background-color: transparent;
    border: 1px solid var(--text-color);

}

</style>
