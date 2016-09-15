<template>
    <ul class="list-group">
        <li class="list-group-item btn" v-for="(i, member) in members">
            <a class="btn-main {{ color(i) }}" href="/list/{{ member.name }}">{{ member.name }}</a>
        </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                members: [],
                colors: ['blue', 'green', 'orange', 'red']
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
            },
            color(i) {
                return this.colors[Math.floor(i / 3)];
            }
        }
    }
</script>
