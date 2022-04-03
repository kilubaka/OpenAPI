<template>
    <div>
        <h2 class="text-center">Programs Table</h2>

        <table class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Age Restriction</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="program in programs" :key="program.id" class="btn-outline-secondary">
                    <td>{{ program.id }}</td>
                    <td>{{ program.name }}</td>
                    <td style="width: 40%">{{ program.description }}</td>
                    <td>{{ categories[program.category_id] }}</td>
                    <td>{{ program.age_restriction }}</td>
                    <td>{{ program.cost }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'programEdit', params: { id: program.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteProgram(program.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <router-link :to="{name: 'programCreate'}" class="btn btn-info text-white">Create</router-link>
    </div>
</template>

<script>
export default {
    data() {
        return {
            programs: [],
            categories: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/categories/')
            .then(response => {
                let categories = []
                response.data.forEach(category => {
                    categories[category.id] = category.name
                })

                this.categories = categories;
            });

        this.axios
            .get('http://localhost:8000/api/programs/')
            .then(response => {
                this.programs = response.data;
            });
    },
    methods: {
        deleteProgram(id) {
            this.axios
                .delete(`http://localhost:8000/api/programs/${id}`)
                .then(response => {
                    let i = this.programs.map(data => data.id).indexOf(id);
                    this.programs.splice(i, 1)
                });
        }
    }
}
</script>
