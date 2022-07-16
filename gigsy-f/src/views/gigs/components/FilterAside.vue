<template>
  <div class="col-3 row m-0 col-gap">
    <h2 class="col-12 sortB text-left p-0">Trier par:</h2>
    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Évaluation des services</option>
      <option value="1">1 <i class="fa fa-star" aria-hidden="true"></i></option>
      <option value="2">
        2-3 <i class="fa fa-star" aria-hidden="true"></i>
      </option>
      <option value="3">
        3+ <i class="fa fa-star" aria-hidden="true"></i>
      </option>
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
