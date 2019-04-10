<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit company</div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            axios.get('/api/v1/knowledges/' + id)
                .then(function (resp) {
                    console.log(resp);
                })
                .catch(function () {
                    alert("Could not load your knowledge")
                });
        },
        data: function () {
            return {

            }
        },
        methods: {

        }
    }
</script>