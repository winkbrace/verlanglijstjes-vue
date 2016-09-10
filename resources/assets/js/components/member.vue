<template>
    <ul class="list-group">
        <li class="list-group-item btn">
            <a class="btn-main color-{{ strtolower($member->name) }}" href="{{ url('/list/' . $member->name) }}">{{ $member->name }}</a>
        </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                members: []
            }
        },

        created() {
            this.fetchMembers();
        },

        methods: {
            fetchMembers() {
                resource.get('api/members').then((response) => {
                    this.list = response.body;
                }, (response) => {
                    console.log('Error fetching members: ' + response.body);
                });
            }
        }
    }
</script>
