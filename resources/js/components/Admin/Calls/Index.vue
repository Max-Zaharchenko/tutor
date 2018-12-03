<template>
    <div>
        <div class="row mt-2" v-for="chunkedCalls in chunkedCalls">
            <div class="col-md-6" v-for="call in chunkedCalls">
                <div class="card" style="cursor: pointer;">
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-7">{{ call.course.title }}</dt>
                            <dd class="col-sm-5"><b class="text-muted">{{ call.formatted_call_date }}</b></dd>
                            <dt class="col-sm-7"><i class="fas fa-users"></i></dt>
                            <dd class="col-sm-5"><b style="color: green;">13</b> / <b style="color: red;">4</b>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import AdminCallsStore from '../../../store/admin-calls';

    export default {
        AdminCallsStore,
        mounted() {
            axios.get('/api/admin/calls')
                .then((r) => {
                    AdminCallsStore.commit('initCalls', r.data.data);
                })
                .catch((e) => {
                    alert('something went wrong');
                });
        },
        computed: {
            calls: function () {
                return AdminCallsStore.getters.calls;
            },
            chunkedCalls: function () {
                return _.chunk(this.calls, 2);
            }
        },
    }
</script>
