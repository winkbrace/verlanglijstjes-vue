<template>
    <div class="list-container">
        <ul class="list-group gifts">
            <li class="list-group-item gift" v-for="wish in wishList">
                {{ wish.description }}
                <a class="link" href="{{ wish.link }}" target="_blank" v-show="wish.link"><i class="fa fa-link" aria-hidden="true"></i></a>

            </li>
        </ul>
    </div>
</template>

<style type="text/css" lang="less" scoped>
    div.list-container {
        position: absolute;
        top: 150px;
        bottom: 100px;
        overflow-y: auto;

        ul.gifts {
            color: #057aa6;
            font-weight: bold;
            font-size: 16px;

            li {
                padding: 28px 80px;
                min-height: 80px;

                a {
                    position: absolute;
                    left: 10px;
                    top: 28px;
                    /* padding-top from .gift */
                    color: #ffc533;
                }
            }
        }
    }

    .fa {
        font-size: 2em;
    }
</style>

<script>
    export default {
        props: ['name'],

        data() {
            return {
                wishList: []
            }
        },

        created() {
            this.fetchWishList();
        },

        methods: {
            fetchWishList() {
                this.$http.get('/api/list/' + this.name).then((response) => {
                    this.wishList = JSON.parse(response.body);
                }, (response) => {
                    console.log('Error fetching wishes: ' + response.body);
                });
            }
        }
    }
</script>
