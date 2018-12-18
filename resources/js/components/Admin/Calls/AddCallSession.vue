<template>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Добавить Сессию</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row d-flex justify-content-center mt-2" v-for="(session, index) in sessions">
                        <div class="col-md-3">
                            <input type="text" v-model="session.start" class="form-control" placeholder="XX:XX">
                        </div>
                        <div class="col-md-3">
                            <input type="text" v-model="session.end" class="form-control" placeholder="XX:XX">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-outline-danger" v-on:click="deleteSession(index)"><i class="far fa-times-circle"></i></button>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm mt-2" v-on:click="addSession">Добавить</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary" v-on:click="submitSessions">Добавить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'callId',
        ],
        data: function () {
            return {
                sessions: [
                    {
                        start: '',
                        end: '',
                    }
                ],
            };
        },
        methods: {
            addSession: function () {
                this.sessions.push({
                    start: '',
                    end: '',
                });
            },
            submitSessions: function () {
                axios.post(`/api/admin/calls/${this.callId}/sessions`, {sessions: this.sessions})
                    .then(r => {
                        console.log(r);
                    })
                    .catch(e => {
                        alert('error adding sessions');
                    });
            },
        }
    };
</script>
