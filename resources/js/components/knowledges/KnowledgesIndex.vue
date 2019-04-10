<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createKnowledge'}" class="btn btn-success">Create a new Knowledge</router-link>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Knowledge list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Published at</th>
                        <th>User</th>
                        <th>Created at</th>
                        <th>Knowledge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="knowledge, index in knowledges">
                        <td>{{ knowledge.published_at }}</td>
                        <td>{{ knowledge.user_id }}</td>
                        <td>{{ knowledge.created_at }}</td>
                        <td>{{ knowledge.knowledge }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                knowledges: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/knowledges')
                .then(function (resp) {
                    app.knowledges = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load knowledges");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/knowledges/' + id)
                        .then(function (resp) {
                            app.knowledges.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete knowledge");
                        });
                }
            }
        }
    }
</script>