<template>
    <div class="row">
        <div class="col-md-4 shadow" v-for="call in calls" style="background-color: #e9ecef;">
            {{ call.title }}
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                calls: [],
            };
        },
        mounted() {
            axios.get('/api/admin/calls')
                .then((r) => {
                    this.calls = r.data.data;
                })
                .catch((e) => {
                    alert('something went wrong');
                });
        }
    }
</script>
