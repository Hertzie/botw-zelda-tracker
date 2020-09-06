<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        Activar/Desactivar Secciones
                    </div>
                    <div class="card-body">
                        <div class="row row-space">
                            <div
                                class="form-check form-check-inline col-md-3"
                                style="margin-left:77px;"
                                v-for="seccion in secciones"
                                v-bind:key="seccion.id_seccion"
                            >
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    :id="`inlineCheckbox{{seccion.id_seccion}}`"
                                    :checked="seccion.opc_activa == 1"
                                    @change="onChangeSeccion(seccion, $event)"
                                />
                                <label
                                    class="form-check-label"
                                    :for="
                                        `inlineCheckbox{{seccion.id_seccion}}`
                                    "
                                    >{{ seccion.nombre_seccion }}</label
                                >
                            </div>
                        </div>
                        <br /><br />
                        <div class="row justify-content-center">
                            <button
                                type="button"
                                class="btn btn-primary"
                                :disabled="!cambiosFlag"
                                @click="guardarCambios()"
                            >
                                Guardar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["secciones"],
    data() {
        return {
            cambiosFlag: false,
            seleccionadas: []
        };
    },
    methods: {
        onChangeSeccion(seccion, event) {
            let seleccionada = this.secciones.find(
                s => s.id_seccion == seccion.id_seccion
            );
            if (
                !this.seleccionadas.find(
                    s => seccion.id_seccion == s.id_seccion
                )
            ) {
                seleccionada.opc_activa = event.target.checked ? 1 : 0;
                this.seleccionadas.push(seleccionada);
            } else {
                this.seleccionadas.find(
                    s => s.id_seccion == seleccionada.id_seccion
                ).opc_activa = event.target.checked ? 1 : 0;
            }

            this.cambiosFlag = true;
        },
        guardarCambios() {
            axios
                .post("http://127.0.0.1:8000/configuracion", this.seleccionadas)
                .then(resp => {
                    if (resp.data) {
                        this.actualizarNavbar(true);
                    }
                })
                .catch(err => this.actualizarNavbar(false));
        },
        actualizarNavbar(tipo) {
            if (tipo)
                this.$toastr.s("Configuraciones realizadas correctamente.");
            else
                this.$toastr.e(
                    "Hubo un problema al guardar las configuraciones"
                );
            setTimeout(() => {
                location.reload();
            }, 1500);
        }
    },
    mounted() {
        console.log(this.secciones);
    }
};
</script>
