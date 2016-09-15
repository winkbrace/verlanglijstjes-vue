<template>
    <ul class="list-group">
        <li class="list-group-item btn" v-for="member in members">
            <a class="btn-main color-{{ member.name | lowercase }}" href="/list/{{ member.name }}">{{ member.name }}</a>
        </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                members: [],
            }
        },

        created() {
            this.fetchMembers();
        },

        methods: {
            fetchMembers() {
                this.$http.get('api/members').then((response) => {
                    this.members = JSON.parse(response.body);
                }, (response) => {
                    console.log('Error fetching members: ' + response.body);
                });
            }
        }
    }
</script>
