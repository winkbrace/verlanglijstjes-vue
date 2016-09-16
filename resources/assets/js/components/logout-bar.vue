<template>
    <div>
        <a href="/logout" v-show="loggedIn">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Uitloggen
        </a>
    </div>
</template>

<style type="text/css" lang="sass" scoped>
    @import '../../sass/variables.scss';

    div {
        background-color: $darkblue;
        position: absolute;
        bottom: 0;
        height: 50px;
        width: 100%;
        padding: 10px;

        a { color: $white; font-size: 1.5em; }
        i { }
    }
</style>

<script>
    export default {
        props: ['logged-in']
    }
</script>
