<template>
  <div>
    <div class="layout page view-center">
      <form class="ui form segments raised w60">
        <div class="ui segment title">
          <div class="one fields">
            <div class="sixteen wide field center">Arcos y Flechas</div>
          </div>
        </div>

        <div class="ui segment">
          <div class="sixteen fields">
            <div class="three wide field">
              <label class="right aligned" style="margin-top:2%;">Tipo:</label>
            </div>
            <div class="nine wide field">
              <select class="ui fluid dropdown" v-model="seleccion">
                <option value="0">Ambos...</option>
                <option value="1">Arcos</option>
                <option value="2">Flechas</option>
              </select>
            </div>
            <div class="four wide field">
              <button type="button" class="tiny ui button blue" @click="filtrarDatos()">Filtrar</button>
            </div>
          </div>
        </div>
      </form>

      <div class="ui basic segment w50" v-if="resultados.length">
        <grid-arco :datos="resultados" :headers="headers"></grid-arco>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      seleccion: 0,
      headers: [
        {
          id_header: 0,
          nombre: "ID",
          width: "10%"
        },
        {
          id_header: 1,
          nombre: "Tipo",
          width: "20%"
        },
        {
          id_header: 2,
          nombre: "Nombre",
          width: "25%"
        },
        {
          id_header: 3,
          nombre: "Estatus",
          width: "25%"
        },
        {
          id_header: 4,
          nombre: "",
          width: "20%"
        }
      ],
      resultados: []
    };
  },
  methods: {
    filtrarDatos() {
      axios
        .post("http://127.0.0.1:8000/arco_flecha", { opcion: this.seleccion })
        .then(resp => {
          this.resultados = resp.data;

          if (this.resultados.length) {
            this.$toastr.s("Datos obtenidos correctamente");
          } else {
            this.$toastr.i("No se encontraron datos");
          }
        })
        .catch(err => console.log(err));
    }
  }
};
</script>