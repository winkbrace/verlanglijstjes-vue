<template>
    <div>
        <span :class="['checkbox', { 'animated rubberBand' : loading }]" @click="toggle" v-show="showCheckbox">
            <img src="/img/checkmark.png" class="check" alt="&check;" v-show="claimedByUser" />
            <img src="/img/crossmark.svg" class="cross" alt="&cross;" v-show="claimedByOther" />
        </span>
        <span class="edit">
            <a href="/wish/edit/{{ wish.id }}"><img src="/img/edit.png" alt="Edit" v-show="ownsList" /></a>
            <img src="/img/crossmark.svg" :class="{ 'animated rubberBand' : loading }" alt="Del" v-show="ownsList" @click="deleteWish" />
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

        span.checkbox {
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

        span.edit {
            margin-top: 16px;
            display: block;

            img {
                height: 32px;
            }
            img:hover {
                cursor: pointer;
            }
        }
    }
</style>

<script>
    export default {
        props: ['currentUserId', 'wish'],

        data() {
            return {
                'loading': false
            }
        },

        computed: {
            ownsList() {
                return this.currentUserId && ! this.isNotOwnList;
            },
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
                this.loading = true;
                this.$http.get('/toggle-claim/' + this.wish.id ).then((response) => {
                    this.loading = false;
                    this.wish = JSON.parse(response.body);
                }, (response) => {
                    this.loading = false;
                    console.log('Error toggling gift claim: ' + response.body);
                });
            },
            deleteWish() {
                this.loading = true;
                this.$http.get('/delete-wish/' + this.wish.id ).then((response) => {
                    this.loading = false;
                    this.$dispatch('wish-was-deleted', this.wish);
                }, (response) => {
                    this.loading = false;
                    if (response.status == 403) {
                        // TODO implement pretty alert (bootstrap-sweetalert?)
                        //this.$alert('You are no longer logged in.');
                        alert('You are no longer logged in.');
                    }
                    console.log('Error deleting wish: ' + response.body);
                });
            }
        }
    }
</script>
