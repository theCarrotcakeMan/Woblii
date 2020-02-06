<template id="entrepreneur-profile-template">

    <section id="userProfile" class="relative block w-full max-w-3xl mx-auto">
        <a class="absolute top-0 left-0" v-show="editAvatarVisible" @click="editAvatar"><i class="customIcons editable"></i></a>
        <a class="absolute top-0 right-0" v-show="editBioVisible" @click="editBio"><i class="customIcons editable"></i></a>
        <div class="flex-wrap md:flex-no-wrap border border-purple-dark rounded-lg">
            <figure style="max-width: 8rem; max-height: 8rem;" class="inline-block flex-column md:flex-none m-auto md:m-0 align-middle md:align-top w-1/3 h-auto p-4" @mouseover="editAvatarVisible = true" @mouseleave="editAvatarVisible = false">
                <img src="https://via.placeholder.com/90x90" class="w-full h-auto rounded-bl-sm" :alt="user.first_name + user.last_name">
            </figure>
            <div class="inline-block align-top w-full md:w-2/3 p-4">
                <p class="text-base text-purple-dark font-hairline mb-0" v-if="user.bio" @mouseover="editBioVisible = true" v-html="!readMoreActivated ? truncate(user.bio,  180 ) : truncate(user.bio)"></p>
                <p class="text-base text-purple-dark font-hairline mb-0" v-else>Todavía no escribes nada en tu bio, haz click para editar tu información de perfil.</p>
                <span class="font-thin text-base text-purple-light cursor-pointer hover:underline" v-show="!readMoreActivated" @click="readMoreActivated = true">Leer más...</span>
            </div>
        </div>
        <h2 class="text-black text-2xl font-medium mt-2 mb-2">{{ displayName }}</h2>
        <p class="text-purple-dark text-2xl font-light m-0">{{ user.pretty_role }}</p>
        <p class="text-blue-600 text-xl font-light m-0">{{ user.line_of_business_pretty }}</p>
    </section>

</template>

<script>

    module.exports = {

        template: "#entrepreneur-profile-template",

        props: {
            user: {
                type: Object,
                required: true
            }
        },

        data: function(){
            return {
                preloading: false,
                loading: false,
                internal_user: {
                    first_name: null,
                    last_name: null,
                    email: null,
                    age: null,
                    role: null
                },
                readMoreActivated: false,
                editBioVisible: false,
                editAvatarVisible: false
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
            vm.internal_user = undefined != vm.user ? vm.user : vm.internal_user;
        },

        methods: {
            truncate: function(myString, length){
                return myString.substring(0,length);
            },
            editBio: function(myString, length){
                return;
            },
            editAvatar: function(myString, length){
                return;
            }
        },

        computed: {
            displayName: function(){
                return this.user.first_name + ' ' + this.user.last_name;
            }
        }

    }

</script>
