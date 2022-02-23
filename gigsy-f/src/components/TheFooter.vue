<template>
  <footer >
    <div class="container m-auto p-3">
      <div class="row m-0 align-items-center py-3">
        <div class="col-md-6 col-12">
          <span class="subscribe-txt">Subscribe to our newsletter</span>
        </div>
        <div class="col-md-6 col-12">
          <form class="d-flex">
        <input class="form-control input-newsletter" type="search" placeholder="Enter your email" aria-label="Search">
        <button class="btn btn-newsletter" type="submit">Search</button>
      </form>
        </div>
      </div>
      <div class="row m-0 align-items-center py-3">
        <div class="col-md-3 col-12 text-left">
          <span>2022 Copyright </span>
        </div>
        <div class="col-md-6 col-12 text-center">
        
        </div>
        <div class="col-md-3 col-12 text-right">
          <span>Designed by </span>
        </div>
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
