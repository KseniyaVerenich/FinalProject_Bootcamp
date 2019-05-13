<template>
  <div>
    

    <form
      action="/api/myplants"
      method="POST"
      name="addYourPlant"
      id="addYourPlant"
      accept-charset="UTF-8"
    >
      <div>
        <input
          type="text"
          v-model="name"
         
          name="plantName"
          placeholder="NAME YOUR PLANT"
          class="form-control"
        >
      </div>
      <br>
      <div>
        <a href="/home">
          <input
            type="button"
            value="ADD YOUR PLANT"
             id="nameBtn"
            class="btn btn-info btn-block"
            @click="yourPlant()"
          >
        </a>
        <input type="hidden" :value="speciesid" name="speciesid">
        <input type="hidden" :value="userid" name="userid">
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: ""
    };
  },

  props: {
    speciesid: {
      type: Number
    },
    userid: {
      type: Number
    }
  },

  mounted() {
    console.log("component mounted");
  },

  methods: {
    yourPlant() {
      const form = document.getElementById("addYourPlant");

      const formData = new FormData(form);
      formData.append("title", "The frustration with post request");
      console.log(formData);
      axios.post("/api/myplants", formData).then(response => response.data);
    }
  }
};
</script>







<style lang="scss" scoped>
</style>