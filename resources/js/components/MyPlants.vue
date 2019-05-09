<template>
  <div v-if="dataReady">
    <br>
    <div class="container" v-for="plant in plants" :key="plant.id">
      <div class="row">
        <div class="flex-column align-items-center" id="nickName">{{plant.name}}</div>

        <!-- DELETE FORM AND BUTTON -->

        <div class="col text-right">
          <button
            type="submit"
            value="DELETE"
            id="trash"
            class="btn btn-info"
            @click="deletePlant(plant.id)"
          >
            <svg
              id="i-trash"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 32 32"
              width="32"
              height="32"
              fill="none"
              stroke="currentcolor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            >
              <path
                d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6"
              ></path>
            </svg>
          </button>
        </div>

        <!-- TIME AND COUNTDOWN FORM/BUTTON -->

        <div class="col">
          <form
            action="/api/myplants/"
            method="POST"
            name="addYourPlant"
            id="addYourPlant"
            accept-charset="UTF-8"
          >
            <div>
              <input
                type="hidden"
                v-model="lastWater"
                name="lastWater"
                placeholder="name your plant"
                class="form-control"
              >
            </div>

            <div>
              <a href="/home">
                <button
                  type="button"
                  value="ADD PLANT"
                  class="btn btn-info"
                  @click="yourPlant(plant)"
                >
                  <ion-icon ios="ios-water" name="ios-water"></ion-icon>
                </button>
              </a>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col">
            <div class="flex-column align-items-center">{{plant.daysLeft}} days until more water!</div>
          </div>
        </div>
        <!-- 
      <div class='container' v-for="item in species">
        {{item.common}}

        </div>-->

        <br>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      plants: [],
      species: [],
      update: [],
      lastWater: "",
      daysUntil: null,
      dataReady: false
      //for each plant, save the days left
    };
  },

  async created() {
    console.log("component mounted");
    try {
      await axios
        .get("/api/myplants")
        .then(response => (this.plants = response.data))
        .then(() => {
          for (var i in this.plants) {
            console.log("created loop: ", this.plants[i]);
            this.compareTime(this.plants[i]);
            this.countdown(this.plants[i]);
          }
        });
    } catch (err) {
      console.log(err);
    }
    try {
      await axios
        .get("/api/species")
        .then(response => (this.species = response.data));
    } catch (err) {
      console.log(err);
    }
    try {
      await axios
        .get("/api/myplants/{id}")
        .then(response => (this.update = response.data));
    } catch (err) {
      console.log(err);
    } finally {
      this.dataReady = true;

      //for loop for each plant
      //    run the compare time function on each plant id
    }
  },

  mounted() {
    var i = 0;
    // while (!this.dataReady) {
    //   i++;
    //   if (i == 5000) {
    //     break;
    //   }
    //   console.log("waiting");
    // }
    // console.log('about to hit loop', this.plants);
    // // loop thru my plant list
    // for (var i in this.plants) {
    //   console.log("line 120", this.plants[i].id);
    //   this.compareTime(this.plants[i]);
    //   this.countdown(this.plants[i]);
    // }
  },

  methods: {
    pad(n) {
      console.log(n);
      if (n < 10) {
        return "0" + n;
      }
      return n;
    },

    deletePlant(id) {
      axios
        .delete("/api/myplants/" + id)
        .then(response => (this.plants = response.data));
    },

    setLastWatered() {
      var d = new Date();
      console.log("the date is", d);
      this.lastWater += d.getFullYear() + "-";
      this.lastWater += this.pad(d.getMonth() + 1) + "-";
      this.lastWater += this.pad(d.getDate()) + " ";
      this.lastWater += this.pad(d.getHours()) + ":";
      this.lastWater += this.pad(d.getMinutes()) + ":";
      this.lastWater += this.pad(d.getSeconds());
      console.log("last watere date", this.lastWater);
    },

    yourPlant(obj) {
      console.log("selected plant: ", obj);
      this.setLastWatered();
      this.compareTime(obj);
      const form = document.getElementById("addYourPlant");

      const formData = new FormData(form);
      formData.append("title", "The frustration with post request");
      console.log(formData);
      console.log(formData);
      axios
        .patch("/api/myplants/" + obj.id, { lastWater: this.lastWater })
        .then(response => response.data);
      console.log("works");
      this.countdown(obj);
    },

    compareTime(obj) {
      console.log("line 164 plant Type", obj.id);
      var d = new Date();
      var date_water = "";
      var tmp_date = new Date();
      if (obj.date_water != null) {
        date_water = parseInt(obj.date_water.split("-")[2].split(" ")[0]);
      } else {
        date_water = parseInt(obj.created_at.split("-")[2].split(" ")[0]);
      }
      var days_left = obj.species.days;
      var days = parseInt(date_water + parseInt(days_left));

      obj.daysLeft = days - d.getDate();

      if (days <= d.getDate()) {
        console.log("Yes");
        console.log("Date", d.getDate());
        //time to water plant
      } else {
        console.log("No");
      }
    },

    countdown(obj) {
      var self = this;
      var waterNow = setInterval(() => {
        self.compareTime(obj);
        console.log("final countdownnnn");
      }, 1000 * 60);
    }
  }
};
</script>

<style lang="scss" scoped>
</style>