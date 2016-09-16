<template>
    <footer>
        <div class="btn-home" v-show="! atHomePage"> <span>Home</span>
            <a class="btn btn-main green" href="/"><i class="fa fa-home"></i></a>
        </div>

        <div class="btn-add" v-show="isCurrentUserWishList"><span>Cadeau</span>
            <a class="btn btn-main pink"><i class="fa fa-plus"></i></a>
        </div>

        <logout-bar logged-in="loggedIn"></logout-bar>
    </footer>
</template>

<script>
    import LogoutBar from './logout-bar.vue';

    export default{
        props: ['at-home-page', 'is-current-user-wish-list', 'username'],
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
