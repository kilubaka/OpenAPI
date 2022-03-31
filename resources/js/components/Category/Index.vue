<template>
    <div>
        <h2 class="text-center">Categories Table</h2>

        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories" :key="category.id" class="btn-outline-secondary">
                    <td>{{ category.id }}</td>
                    <td style="width: 90%">{{ category.name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'categoryEdit', params: { id: category.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteCategory(category.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <router-link :to="{name: 'categoryCreate'}" class="btn btn-info">Create</router-link>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/categories/')
            .then(response => {
                this.categories = response.data;
            });
    },
    methods: {
        deleteCategory(id) {
            this.axios
                .delete(`http://localhost:8000/api/categories/${id}`)
                .then(response => {
                    let i = this.categories.map(data => data.id).indexOf(id);
                    this.categories.splice(i, 1)
                });
        }
    }
}
</script>
