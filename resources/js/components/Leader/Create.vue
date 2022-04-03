<template>
    <div>
        <h3 class="text-center">Create Leader</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLeader">
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
                    <button type="submit" class="btn btn-info text-white">Create</button>
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
    methods: {
        addLeader() {
            this.axios
                .post('http://localhost:8000/api/leaders', this.leader)
                .then(response => (
                    this.$router.push({ name: 'leaderIndex' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
