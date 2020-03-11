<template id="entrepreneur-profile-template">

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

        <form class="w-full max-w-lg mx-auto mx-auto p-6 flex flex-wrap overflow-hidden md:px-12" method="post"style="background-color: rgb(231, 232, 233);" action="">
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input v-model="internal_user.first_name" class="__inputBase" name="user_firstname" id="user_firstname" type="text" placeholder="Nombre">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input v-model="internal_user.last_name" class="__inputBase" name="user_lastname" id="user_lastname" type="text" placeholder="Apellido(s)">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div v-if="mode === 'profile'">
                <div class="w-full px-3">
                    <input v-model="internal_user.age" class="__inputBase" name="age" id="age" type="text" placeholder="Edad">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div v-if="mode === 'profile'">
                <div class="w-full px-3">
                    <div class="relative">
                        <select v-model="internal_user.gender" name="user_gender" id="user_gender" placeholder="Sexo" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Sexo</option>
                            <option value="female">Femenino</option>
                            <option value="male">Masculino</option>
                            <option value="other">No especificar</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 py-4 px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div :class="signup_mode?'w-full mb-4':'w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6'">
                <div class="w-full px-3">
                    <input v-show="mode!== 'profile'" v-model="internal_user.user_email" class="__inputBase" name="user_email" id="user_email" type="text" placeholder="Correo electrónico *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div :class="signup_mode?'w-full mb-4':'w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6'">
                <div class="w-full px-3">
                    <input v-show="mode!== 'profile'" class="__inputBase" name="user_pass" id="user_pass" type="password" placeholder="Contraseña *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div v-if="mode === 'profile'" class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <div class="relative">
                        <select v-model="internal_user.line_of_business" name="line_of_business" id="line_of_business" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Línea de negocio</option>
                            <option v-for="line in lines" :value="line.term_id">{{line.name}}</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 py-4 px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div v-if="mode === 'profile'" class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea v-model="internal_user.bio" name="experience" id="experience" class="__inputBase" placeholder="Explica tu experiencia en el giro que elegiste" cols="30" rows="6"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <input type="hidden" name="ID" id="ID" :value="internal_user.ID">
            <input type="hidden" name="role" id="role" value="entrepreneur">
            <input type="hidden" name="signup_submit" id="signup_submit" value="true">

            <div class="w-full mb-3 md:mb-6 ml-4">
                {{ shortcode }}
            </div>

            <div class="w-full px-3 mb-3 mt-3 md:mb-0 flex md:justify-start justify-center">
                <input :type="mode === 'profile' ? 'button' : 'submit'" @click="submitForm" :value="mode !== 'profile' ? '¡Crea tu cuenta!' : 'Actualizar datos'" :class="signup_mode?'block m-auto min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline':'block md:ml-0 md:mr-auto m-auto min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline'">
            </div>

        </form>

    </div>

</template>

<script>
    // ES6 Modules or TypeScript
    import Swal from 'sweetalert2';

    export default {

        template: "#entrepreneur-profile-template",

        props: {
            blueprint: {
                type: Object,
                required: false
            },
            lines: {
                type: Array,
                required: false
            },
            shortcode: {
                type: String,
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
                internal_mode: false,
                internal_user: {
                    first_name: null,
                    last_name: null,
                    email: null,
                    age: null,
                    gender: null,
                    has_degree: null,
                    line_of_business: null,
                    role: null
                }
            }
        },

        created: function(){

            // Subscribe to events
            _Event.$on( 'save-user-response', this.ajaxResponseReceived );
            _Event.$on( 'loading-content', function(){
                this.loading = true
            } );
            this.internal_mode = undefined != this.mode ? this.mode : 'signup';
        },

        mounted: function(){
            /* Fet initial values from the urlVars */
            var vm = this;
            // var explodedLatLng = urlVars.latlng ?  (urlVars.latlng).split("%2C") : '';
            vm.internal_user = undefined != vm.blueprint ? vm.blueprint : vm.internal_user;
        },

        methods: {
            submitForm: function(){
                if( this.mode === 'signup' )
                    return;
                this.loading = true;
                var passData = {user: this.internal_user, action: 'update_user'};
                console.log(passData);
                this.$root.ajaxRequest('post', ajax_url, passData, null, null, null, this.showError,'save-user-response');
            },
            ajaxResponseReceived: function (responseData) {
                console.log("Response received");
                var vm = this;
                vm.loading = false;
                if( responseData.success ){
                     return window.location.assign('my-feed');

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
			profile_mode: function(){
				return this.mode === "profile";
			},
			signup_mode: function(){
				return this.mode !== "profile";
			}
        }

    }

</script>
