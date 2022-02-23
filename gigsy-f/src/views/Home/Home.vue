<template>
  <div class="landing-slider container">
    <div class="row m-0">
      <div class="col">
        <span class="landing-text">
          A wonderful serenity has taken possession of my entire soul, like
          these sweet mornings of spring which I enjoy with m
        </span>
        <input
          class="form-control input-landing"
          type="search"
          placeholder="Enter your email"
          aria-label="Search"
        />
        <div class="tags-handler">
          <span class="tags">tags 1</span>
          <span class="tags">tags 2</span>
          <span class="tags">tags 2</span>
        </div>
      </div>
      <div class="col-4 d-flex align-items-center">
        <img
          id="landing-img"
          :src="require('@/assets/home/landing.svg')"
          alt="landing img"
          width="100%"
          height="auto"
        />
      </div>
    </div>
    <img
      id="participant-img"
      :src="require('@/assets/home/participant.svg')"
      alt="participant img"
    />
  </div>
</template>

<script>
export default {};
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
}
.input-landing {
  color: var(--text-color);
  background-color: transparent;
  border: 1px solid var(--text-color);
  width: 50%;
}
</style>
