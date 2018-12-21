<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 text-center" v-for="hour in hours">
                                <b>{{ hour.hour }}</b>
                                <div class="form-group" v-for="session in hour.sessions">
                                    <button class="btn btn-sm btn-success mt-2">{{ session.start }} - {{ session.end }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <admin-add-call-session :call-id="5"></admin-add-call-session>
    </div>
</template>

<script>
    export default {
        props: ['callId'],
        data: function () {
            return {
                hours: [
                    {
                        hour: '13:**',
                        sessions: [
                            {start: '13:30', end: '13:35', status: 'btn-success'}
                        ]
                    }
                ],
            };
        },
    }
</script>
