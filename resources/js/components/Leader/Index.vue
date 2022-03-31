<template>
    <div>
        <h2 class="text-center">Leaders Table</h2>

        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>e-mail</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="leader in leaders" :key="leader.id" class="btn-outline-secondary">
                    <td>{{ leader.id }}</td>
                    <td style="width: 30%">{{ leader.name }}</td>
                    <td style="width: 20%">{{ leader.date_of_birth }}</td>
                    <td style="width: 40%">{{ leader.email }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'leaderEdit', params: { id: leader.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteLeader(leader.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <router-link :to="{name: 'leaderCreate'}" class="btn btn-info">Create</router-link>
    </div>
</template>

<script>
export default {
    data() {
        return {
            leaders: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/leaders/')
            .then(response => {
                this.leaders = response.data;
            });
    },
    methods: {
        deleteLeader(id) {
            this.axios
                .delete(`http://localhost:8000/api/leaders/${id}`)
                .then(response => {
                    let i = this.leaders.map(data => data.id).indexOf(id);
                    this.leaders.splice(i, 1)
                });
        }
    }
}
</script>
