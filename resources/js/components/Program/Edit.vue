<template>
    <div>
        <h3 class="text-center">Edit Program</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateProgram">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="program.name" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="program.description" required>
                    </div>
                    <div class="form-group">
                        <label>Categories</label>
                        <select class="form-select" v-model="program.category_id" required>
                            <option v-for="(category) in categories" v-bind:value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Age restriction</label>
                        <input type="number" min="0" max="100" step="1" class="form-control" v-model="program.age_restriction" required>
                    </div>
                    <div class="form-group">
                        <label>Cost</label>
                        <input type="number" min="1000" max="1000000" step="0.5" class="form-control" v-model="program.cost" required>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            program: {},
            categories: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/categories/')
            .then(response => {
                this.categories = response.data;
            });

        this.axios
            .get(`http://localhost:8000/api/programs/${this.$route.params.id}`)
            .then(response => {
                this.program = response.data;
            });
    },
    methods: {
        updateProgram() {
            this.axios
                .patch(`http://localhost:8000/api/programs/${this.$route.params.id}`, this.program)
                .then(response => {
                    this.$router.push({ name: 'programIndex' });
                });
        }
    }
}
</script>
