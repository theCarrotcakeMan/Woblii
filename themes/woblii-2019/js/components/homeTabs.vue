<template id="home-tabs-template">

    <div id="whatIsWoblii" style="height: 100vh">
        <div class="flex">
            <div class="flex-1 w-full max-w-mdilkl mx-auto bg-blue-300 shadow-md rounded">
                <h3>Elige el perfil que se apegue a tus necesidades</h3>
                <figure class="working-icon" title="¿Qué es Woblii?" alt="¿Qué es Woblii?"></figure>
            </div>
        </div>
    </div>

</template>

<script>

    export default {

        template: '#home-tabs-template',

        data: function(){
            return {
                preloading: false,
                loading: false
            };
        },

        created: function(){

            // Url global function and global paths
            this.url	        = this.$parent.url;
            this.getUrlVars	    = this.$parent.getUrlVars;

        },

        mounted: function(){
            /* Fet initial values from the urlVars */
            var vm = this;
            var urlVars        = this.getUrlVars();
            // var explodedLatLng = urlVars.latlng ?  (urlVars.latlng).split("%2C") : '';

        },

        methods: {

        },

        computed: {

        }

    };

</script>
