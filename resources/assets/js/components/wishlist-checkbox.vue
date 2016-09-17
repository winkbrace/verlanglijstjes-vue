<template>
    <div>
        <span @click="toggle" v-show="showCheckbox">
            <img src="/img/checkmark.png" class="check" alt="&check;" v-show="claimedByUser" />
            <img src="/img/crossmark.svg" class="cross" alt="X" v-show="claimedByOther" />
        </span>
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

        img.check {
            height: 40px;
            margin-top: -17px;
            margin-left: -5px;
        }

        img.cross {
            height: 36px;
            margin-top: -8px;
            margin-left: -6px;
        }
    }
</style>

<script>
    export default {
        props: ['currentUserId', 'wish'],

        computed: {
            showCheckbox() {
                return this.currentUserId && this.isNotOwnList;
            },
            claimedByUser() {
                return this.claimed && this.wish.claimed_by == this.currentUserId;
            },
            claimedByOther() {
                return this.claimed && this.wish.claimed_by != this.currentUserId;
            },
            claimed() {
                return this.wish.claimed_by && this.isNotOwnList;
            },
            isNotOwnList() {
                return this.currentUserId != this.wish.user_id;
            }
        },

        methods: {
            toggle() {
                this.$http.get('/toggle-claim/' + this.wish.id ).then((response) => {
                    this.wish = JSON.parse(response.body);
                }, (response) => {
                    console.log('Error toggling gift claim: ' + response.body);
                });
            }
        }
    }
</script>
