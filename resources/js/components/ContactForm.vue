<template>

        <form method="post" class="form-horizontal custom-form">
            <div class="form-group">
                <input class="form-control" type="text" v-model="nombre" name="nombre" id="nombre" value="" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" v-model="email" name="email" id="email" value="" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" v-model="telefono" name="telefono" id="telefono" value="" placeholder="Phone">
            </div>
            <div class="form-group">
                <textarea class="form-control" v-model="mensaje" name="mensaje" id="mensaje" value="" placeholder="Your Messege"></textarea>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-custom" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND
                </button>
            </div>
        </form>
</template>

<script>
    export default {

        data(){
            return {
                nombre:"",
                email:"",
                telefono:"",
                mensaje:"",
                arrayInfo:[],
            }
        },
        methods: {
            saveContacto(){
                let me =this;
                let url = '/contact';
                axios.post(url,{
                    'nombre':this.nombre,
                    'email':this.email,
                    'telefono':this.telefono,
                    'mensaje':this.mensaje,
                }).then(function (response) {
                    me.clearFields();
                })
                .catch(function (error) {
                    console.log(error);
                });

            },
            clearFields(){
                this.nombre = "";
                this.email = "";
                this.telefono = "";
                this.mensaje = "";
            }
        }
    }
</script>
