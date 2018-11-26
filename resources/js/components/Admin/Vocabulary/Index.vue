<template>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4" v-for="word in words">
                    <div class="card">
                        <div class="card-body">
                            {{ word.original }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                words: []
            };
        },
        mounted() {
            axios.get('/api/admin/vocabulary')
                .then((r) => {
                    this.words = r.data.data;
                })
                .catch((e) => {
                    alert('some error');
                });
        }
    }
</script>
