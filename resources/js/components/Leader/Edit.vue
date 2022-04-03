<template>
    <div>
        <h3 class="text-center">Edit Leader</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLeader">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="leader.name" required>
                    </div>
                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" class="form-control" v-model="leader.date_of_birth" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="leader.email" required>
                    </div>
                    <button type="submit" class="btn btn-info text-white">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            leader: {}
        }
    },
    created() {
        this.axios
            .get(`http://localhost:8000/api/leaders/${this.$route.params.id}`)
            .then(response => {
                this.leader = response.data;
            });
    },
    methods: {
        updateLeader() {
            this.axios
                .patch(`http://localhost:8000/api/leaders/${this.$route.params.id}`, this.leader)
                .then(response => {
                    this.$router.push({ name: 'leaderIndex' });
                });
        }
    }
}
</script>
