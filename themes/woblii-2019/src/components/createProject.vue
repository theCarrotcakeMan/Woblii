import Swal from "sweetalert2";
<template id="create-project-template">

    <div id="registerEntrepreneur" class="block w-full">

        <div v-show="loading" class="loaderContainer">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>

        <form class="w-full max-w-3xl mx-auto mx-auto flex flex-wrap overflow-hidden md:px-12" method="post" action="">
            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input v-model="internal_project.name" class="__inputBase" name="project_name" id="project_name" type="text" placeholder="Nombra tu proyecto">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea v-model="internal_project.description" name="description" id="description" class="__inputBase resize-none" placeholder="¿De qué se trata?" cols="30" rows="4"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6 flex">
                <div class="w-1/2 ml-3">
                    <i class="dropzone material-icons text-purple-dark p-12 border border-purple-dark border-dashed">add</i>
                </div>
                <div class="w-1/2 mr-3">
                    <textarea v-model="internal_project.image_description" name="description" id="description" class="__inputBase" placeholder="Explica tu imágen" cols="30" rows="3"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
					<textarea v-model="internal_project.participation_percentage" name="participation_percentage" id="participation_percentage" class="__inputBase resize-none" placeholder="¿Ofreces equity o algún tipo de retorno de inversión?" cols="30" rows="4"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea v-model="internal_project.five_year_projection" name="five_year_projection" id="five_year_projection" class="__inputBase resize-none" placeholder="¿Cómo ves a tu negocio en 5 años?" cols="30" rows="4"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full px-3 mb-3 mt-3 md:mb-0 flex md:justify-start justify-center">
                <input type="button" @click="submitForm" :value="mode !== 'edit' ? 'Compartir' : 'Actualizar datos'" class="block md:ml-0 md:mr-auto m-auto min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>

        </form>

    </div>


</template>

<script>

    // ES6 Modules or TypeScript
    import Swal from 'sweetalert2';

    export default {

        template: "#create-project-template",

        props: {
            project: {
                type: Object,
                required: false
            },
            mode: {
                type: String,
                required: false
            }
        },

        data: function(){
            return {
                preloading: false,
                loading: false,
                internal_project: {
                    name: null,
                    description: null,
                    image: null,
                    image_description: null,
                    seed_money: null,
                    participation_percentage: null,
                    five_year_projection: null
                }
            }
        },

        created: function(){

            // Url global function and global paths
            // this.url	        = this.$parent.url;
            // this.getUrlVars	    = this.$parent.getUrlVars;
            // var urlVars        = this.getUrlVars();

        },

        mounted: function(){
            /* Fet initial values from the urlVars */
            var vm = this;
            _Event.$on( 'save-project-response', this.ajaxResponseReceived );
            _Event.$on( 'loading-content', function(){
                vm.loading = true
            } );
            // var Dropzone = window.Dropzone;
            // console.log(Dropzone);
            // vm.internal_project = undefined != vm.project ? vm.project : vm.internal_project;
            // var myDropzone = new Dropzone(".dropzone", {
            //     paramName: "file",
            //     maxFilesize: 2
            // });

        },

        methods: {

            submitForm: function(){
                // if( this.mode === 'create' )
                //     return;
                this.loading = true;
                var passData = {project: this.internal_project, action: 'create_project'};
                console.log(passData);
                this.$root.ajaxRequest('post', ajax_url, passData, null, null, null, this.showError,'save-project-response');
            },
            ajaxResponseReceived: function (responseData) {
                console.log("Response received");
                var vm = this;
                vm.loading = false;
                if( responseData.success ){
                    return window.location.assign('manage-projects/?message=Tu+proyecto+se+creó+correctamente');
                }
                console.log("Something happened :(");
            },
            showError: function(){
                Swal.fire(
                    'Algo sucedió',
                    'Intenta de nuevo, si el error persiste contacta a Soporte.',
                    'question'
                );
            }

        },

        computed: {

        }

    }

</script>
