<template>
  <div>
    <div class="layout page view-center">
      <form class="ui form segments raised w60">
        <div class="ui segment title">
          <div class="one fields">
            <div class="sixteen wide field center">Materiales</div>
          </div>
        </div>

        <div class="ui segment">
          <div class="sixteen fields">
            <div class="four wide field">
              <label class="right">Material:</label>
            </div>
            <div class="seven wide field">
              <input type="text" class="ui input focus" v-model="filtrarPor" />
            </div>
            <div class="one wide field">
              <button type="button" class="tiny ui button blue" @click="filtrar()">
                <i class="search icon"></i>
              </button>
            </div>
          </div>
        </div>
      </form>

      <div class="ui basic segment w50" v-if="resultados.length">
        <grid-materiales :materiales="resultados" :totales="materiales"></grid-materiales>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["materiales"],
  data() {
    return {
      filtrarPor: "",
      resultados: []
    };
  },
  mounted() {
    console.log("Materiales: ", this.materiales);
  },
  methods: {
    async filtrar() {
      const response = await axios.post("http://127.0.0.1:8000/material", {
        filtrado: this.filtrarPor
      });

      this.resultados = response.data;

      console.log("Resultados: ", this.resultados);
    }
  }
};
</script>