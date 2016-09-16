<template>
    <div>
        <span @click="toggle"><img src="/img/checkmark.png" alt="claimed" v-show="claimed" /></span>
    </div>
</template>

<style type="text/css" lang="sass" scoped>
    @import '../../sass/variables.scss';

    div {
        position: absolute;
        right: 20px;
        height: 40px;
        bottom: 30px;

        span {
            display: block;
            margin-top: 16px;
            width: 28px;
            height: 28px;
            border: 4px solid $yellow;
        }

        img {
            height: 40px;
            margin-top: -17px;
            margin-left: -5px;
        }
    }
</style>

<script>
    export default {
        props: ['claimed', 'claimedByUser'],

        methods: {
            toggle() {
                if (! this.claimedByUser) {
                    return false;
                }

                this.claimed = ! this.claimed;

                //updateClaimed();
            },
            updateClaimed() {
                // TODO http and double check permission on api end
            }
        }
    }
</script>
