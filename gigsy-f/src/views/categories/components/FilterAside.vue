<template>
  <div class="col-3 row m-0 col-gap">
    <h2 class="col-12 sortB text-left p-0">
      <i class="fa-thin fa-arrow-down-short-wide"></i> Trier par
    </h2>
    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <select class="col-12 form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="flexCheckDefault"
      />
      <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
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
