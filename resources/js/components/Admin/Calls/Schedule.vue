<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="form-group">
                        <label for="day">День двзонка</label>
                        <datepicker :bootstrap-styling="true" :id="'day'"></datepicker>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';

    export default {
        components: {
            Datepicker
        }
    }
</script>
