<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 text-center" v-for="(sessions, hour) in hours">
                                <b>{{ hour }}</b>
                                <div class="form-group" v-for="session in sessions">
                                    <button class="btn btn-sm" v-bind:class="hourStatus(session.status)">{{ session.start_date }} - {{ session.end_date }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <admin-add-call-session :call-id="callId"></admin-add-call-session>
    </div>
</template>

<script>
    export default {
        props: ['callId'],
        data: function () {
            return {
                hours: [],
            };
        },
        mounted() {
            axios.get(`/api/admin/calls/${this.callId}/sessions`)
                .then(r => {
                    this.hours = r.data.data;
                })
                .catch(e => {
                    console.log(e);
                })
        },
        methods: {
            hourStatus: function (status) {
                return {
                    'btn-outline-success': status === 'PLANNED',
                    'btn-outline-primary': status === 'BOOKED',
                    'btn-outline-secondary': status === 'PROCESSING',
                    'btn-outline-info': status === 'FINISHED',
                    'btn-outline-danger': status === 'CANCELLED',
                };
            }
        }
    }
</script>
