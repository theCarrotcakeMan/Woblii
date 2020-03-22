<template id="home-tabs-template">

    <div id="whatIsWoblii" data-section-name="Registrate" class="snapable-window relative w-full max-w-5xl mx-auto mt-16 mb-12 md:mb-0 p-4 md:p-1">

		<section class="md:mt-8">

            <h3 class="font-light p-4 md:p-8 text-lg md:text-2xl">Elige el perfil que se apegue a tus necesidades</h3>

            <section class="w-full flex">
                <div @click="selectTab(0)" :class="{'flex-none w-1/2 p-6 px-2 md:px-6 text-center font-normal font-bold cursor-pointer text-white text-sm md:text-lg': true, 'bg-purple-dark': selectedTab !== 0, active: selectedTab === 0, 'text-purple-dark bg-white': selectedTab === 0}">Emprendedor</div>
                <!-- <div @click="selectTab(2)" :class="{'flex-none w-1/3 p-6 px-2 md:px-6 text-center font-normal font-bold cursor-pointer text-white text-sm md:text-lg': true, 'bg-purple-dark': selectedTab !== 2, active: selectedTab === 2, 'text-purple-dark bg-white': selectedTab === 2}">Inversionista</div> -->
                <div @click="selectTab(1)" :class="{'flex-none w-1/2 p-6 px-2 md:px-6 text-center font-normal font-bold cursor-pointer text-white text-sm md:text-lg': true, 'bg-purple-dark': selectedTab !== 1, active: selectedTab === 1, 'text-purple-dark bg-white': selectedTab === 1}">Empresa</div>
            </section>

            <div v-show="selectedTab === 0" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <div class="flex flex-col-reverse md:flex-row w-full">
                    <section class="w-full md:w-1/2">
                        <h3 class="text-base text-center md:text-left font-light py-8 pt-2 md:pt-8 text-lg md:text-2xl text-black">Emprendedor</h3>
                        <p class="md:px-8 text-purple-text font-hairline text-xl leading-loose">A través de esta red podrás obtener conocimientos, tips y recomendaciones exclusivas, formando parte
                            de la única comunidad de emprendedores</p>
                    </section>
                    <section class="w-full md:w-1/2 flex justify-center items-center mt-6">
                        <figure class="working-icon entrepreneur" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                    </section>
                </div>
                <div class="block mx-auto w-full flex items-center justify-center">
                    <a class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline" :href="base_url + '/signup'">
                        ¡Regístrate ahora!
                    </a>
                </div>
            </div>
            <div v-show="selectedTab === 1" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <div class="flex flex-col-reverse md:flex-row w-full">
                    <section class="w-full md:w-1/2">
                        <h3 class="text-base text-center md:text-left font-light py-8 pt-2 md:pt-8 text-lg md:text-2xl text-black">Emprendedor (Empresa)</h3>
                        <p class="md:px-8 text-purple-text font-hairline text-xl leading-loose">Ya eres una empresa o negocio consolidado pero deseas dar inicio a una nueva travesía para
                            lograr fondear tu nueva idea.</p>
                    </section>
                    <section class="w-full md:w-1/2 flex justify-center items-center mt-6">
                        <figure class="working-icon company" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                    </section>
                </div>
<!--                <div class="block mx-auto w-full flex items-center justify-center">-->
<!--                    <a class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline" :href="base_url + '/signup'">-->
<!--                        ¡Regístrate ahora!-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <!-- <div v-show="selectedTab === 2" style="background-color: rgb(231, 232, 233);" class="w-full mx-auto rounded p-6">
                <div class="flex flex-col-reverse md:flex-row w-full">
                    <section class="w-full md:w-1/2">
                        <h3 class="text-base text-center md:text-left font-light py-8 pt-2 md:pt-8 text-lg md:text-2xl text-black">Inversionista</h3>
                        <p class="md:px-8 text-purple-text font-hairline text-xl leading-loose">Eres un empresario con el capital necesario para fondear una buena idea y llevar a la realidad tu visión del
                            proyecto desarrollado.</p>
                    </section>
                    <section class="w-full md:w-1/2 flex justify-center items-center mt-6">
                        <figure class="working-icon investor" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
                    </section>
                </div>
                <div class="block mx-auto w-full flex items-center justify-center">
                    <a class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline" :href="base_url + '/signup-investor'">
                        ¡Regístrate ahora!
                    </a>
                </div>
            </div> -->
            <div class="clearfix"></div>
		</section>
    </div>

</template>

<script>

    module.exports = {

        template: "#home-tabs-template",

        props: ['siteUrl'],

        data: function(){
            return {
                preloading: false,
                loading: false,
                base_url: false,
                selectedTab: 0
            }
        },

        created: function(){

            this.base_url = this.siteUrl ? this.siteUrl : '';

        },

        mounted: function(){
            /* Fet initial values from the urlVars */
            var vm = this;

        },

        methods: {
            selectTab: function(index){
                this.selectedTab = parseInt(index);
            }
        }

    }

</script>
