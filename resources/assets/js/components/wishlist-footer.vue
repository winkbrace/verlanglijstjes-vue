<template>
    <footer>
        <div class="btn-home" v-show="! this.atHomePage"> <span>Home</span>
            <a class="btn btn-main green" href="/"><i class="fa fa-home"></i></a>
        </div>

        <div class="btn-add" v-show="this.isCurrentUserWishList"><span>Cadeau</span>
            <a class="btn btn-main pink"><i class="fa fa-plus"></i></a>
        </div>

        <logout-bar v-show="loggedIn"></logout-bar>
    </footer>
</template>

<script>
    import LogoutBar from './logout-bar.vue';

    export default{
        props: ['atHomePage', 'username'],
        computed: {
            loggedIn() {
                return this.username.length > 0;
            }
        },
        components: {
            'logout-bar': LogoutBar
        }
    }
</script>
