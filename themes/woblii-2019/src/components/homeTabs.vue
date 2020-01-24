<template id="home-tabs-template">

    <div id="whatIsWoblii" class="w-full max-w-5xl mx-auto" style="height: 100vh">
        <div style="background-color: rgb(184, 160, 184);" class="flex-1 w-full max-w-mdilkl mx-auto shadow-md rounded">

            <h3 class="font-light py-8 px-8 text-2xl">Elige el perfil que se apegue a tus necesidades</h3>

            <section class="w-full flex">
                <div @click="selectTab(0)" :class="{'flex-none w-1/3 p-6 text-center text-white font-bold cursor-pointer': true, 'bg-purple-dark': selectedTab !== 0, active: selectedTab === 0, 'text-purple-dark bg-white': selectedTab === 0}">Emprendedor</div>
                <div @click="selectTab(1)" :class="{'flex-none w-1/3 p-6 text-center text-white font-bold cursor-pointer': true, 'bg-purple-dark': selectedTab !== 1, active: selectedTab === 1, 'text-purple-dark bg-white': selectedTab === 1}">Empresa</div>
                <div @click="selectTab(2)" :class="{'flex-none w-1/3 p-6 text-center text-white font-bold cursor-pointer': true, 'bg-purple-dark': selectedTab !== 2, active: selectedTab === 2, 'text-purple-dark bg-white': selectedTab === 2}">Inversionista</div>
            </section>

            <div v-show="selectedTab === 0" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <div class="flex w-full">
                    <section class="w-full md:w-1/2">
                        <h3 class="font-light py-8 px-8 text-2xl">Emprendedor</h3>
                        <p class="px-8 leading-relaxed">A través de esta red podrás obtener conocimientos, tips y recomendaciones exclusivas, formando parte
                            de la única comunidad de emprendedores</p>
                    </section>
                    <section class="w-full md:w-1/2">
                        <figure class="working-icon entrepreneur" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                    </section>
                </div>
                <div class="block mx-auto w-full items-center justify-center">
                    <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        ¡Regístrate ahora!
                    </button>
                </div>
            </div>
            <div v-show="selectedTab === 1" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <div class="flex w-full">
                    <section class="w-full md:w-1/2">
                        <h3 class="font-light py-8 px-8 text-2xl">Emprendedor (Empresa)</h3>
                        <p class="px-8 leading-relaxed">Ya eres una empresa o negocio consolidado pero deseas dar inicio a una nueva travesía para
                            lograr fondear tu nueva idea.</p>
                    </section>
                    <section class="w-full md:w-1/2">
                        <figure class="working-icon company" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                    </section>
                </div>
                <div class="block mx-auto w-full items-center justify-center">
                    <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        ¡Regístrate ahora!
                    </button>
                </div>
            </div>
            <div v-show="selectedTab === 2" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <h3 class="font-light py-8 px-8 text-2xl">Inversionista</h3>
                <p>Eres un empresario con el capital necesario para fondear una buena idea y llevar a la realidad tu visión del
                    proyecto desarrollado.</p>
                <figure class="working-icon investor" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                <div class="flex items-center justify-center">
                    <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        ¡Regístrate ahora!
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    module.exports = {

        template: "#home-tabs-template",

        data: function(){
            return {
                preloading: false,
                loading: false,
                selectedTab: 0
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
            // var explodedLatLng = urlVars.latlng ?  (urlVars.latlng).split("%2C") : '';

        },

        methods: {
            selectTab: function(index){
                this.selectedTab = parseInt(index);
            }
        },

        computed: {

        }

    }

</script>
