<template>
  <div class="col-3 row m-0 col-gap">
    <h2 class="col-12 sortB text-left p-0">
      <i class="fa-thin fa-arrow-down-short-wide"></i> Trier par
    </h2>
    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Évaluation des services</option>
      <option value="1">1 <span class="fa fa-star checked"></span></option>
      <option value="2">2-3 <span class="fa fa-star checked"></span></option>
      <option value="3">3+ <span class="fa fa-star checked"></span></option>
    </select>

    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Niveau vendeur</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Heure de livraison</option>
      <option value="1">24h</option>
      <option value="2">jusqu'à 3 jours</option>
      <option value="2">jusqu'à 7 jours</option>
      <option value="3">à toute heure</option>
    </select>

    <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="flexCheckDefault"
      />
      <label class="form-check-label" for="flexCheckDefault">
        online users
      </label>
    </div>
    <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="flexCheckChecked"
        checked
      />
      <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
      </label>
    </div>
  </div>

  <!-- cd-main-content -->
</template>

<script>
export default {
  name: "Loader",
  props: {
    services: Array,
  },
};
</script>

<style scoped>
select.col-12.form-select {
  height: max-content;
  padding: 9px;
}

.col-gap {
  align-content: start;
  gap: 13px;
}
</style>
