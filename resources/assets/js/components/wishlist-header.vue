<template>
    <header class="{{ headerColor | lowercase }}">
        <h1>
            {{ title }}
            <a class="awesome" href="/"><i class="fa fa-gift"></i></a>
        </h1>

        <div class="white-border"></div>
        <ul class="head-nav">
            <li class="btn btn-login" v-show="loggedIn">
                <a class="btn-main color-{{ username | lowercase }}" href="/list/{{ username }}">{{ username }}</a>
            </li>
            <li class="btn btn-login" v-else>
                <span>Inloggen</span>
                <a class="btn-main green" href="/login"><i class="fa fa-user"></i></a>
            </li>
        </ul>
    </header>
</template>

<style type="text/css" lang="sass" scoped>
    @import '../../sass/variables.scss';

    h1 {
        margin: 0;
        padding: 5px;
        font-weight: bold;

        a {
            position: absolute;
            right: 5px;
            font-size: 4em;
            color: $white;

            i {
                color: $body-bg;
            }
        }
    }

    header {
        height: 110px;
        margin-bottom: 50px;
        position: relative;
        color: $white;
    }
    div.white-border {
        width: 124px;
        height: 124px;
        position: absolute;
        top: 43px;
        left: 0;
        right: 0;
        margin: 0 auto;
        background-color: $body-bg;
        border-radius: 50%;
    }
    ul li {
        width: 124px;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
</style>

<script>
    export default{
        props: ['username', 'listOwner'],
        computed: {
            loggedIn() {
                return this.username.length > 0;
            },
            title() {
                return this.listOwner ? this.listOwner : 'Verlanglijstjes';
            },
            headerColor() {
                return this.listOwner ? 'color-' + this.listOwner : 'dblue';
            }
        }
    }
</script>
