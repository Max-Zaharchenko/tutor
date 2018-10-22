<template>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-outline-secondary" v-for="word in words">{{ word.original }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['words'],
    }
</script>
