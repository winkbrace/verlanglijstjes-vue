<template>
    <footer>
        <div class="btn-home" v-show="! atHomePage"> <span>Home</span>
            <a href="/" class="btn btn-main green"><i class="fa fa-home"></i></a>
        </div>

        <div class="btn-add" v-show="username"><span>Cadeau</span>
            <a href="/wish/add" class="btn btn-main pink"><i class="fa fa-plus"></i></a>
        </div>

        <logout-bar :logged-in="loggedIn"></logout-bar>
    </footer>
</template>

<script>
    import LogoutBar from './logout-bar.vue';

    export default{
        props: ['at-home-page', 'username'],
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
