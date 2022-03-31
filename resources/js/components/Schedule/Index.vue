<template>
    <div>
        <h2 class="text-center">Schedules Table</h2>

        <table class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Program</th>
                    <th>Leader</th>
                    <th>From</th>
                    <th>To</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="schedule in schedules" :key="schedule.id" class="btn-outline-secondary">
                    <td>{{ schedule.id }}</td>
                    <td>{{ programs[schedule.program_id] }}</td>
                    <td>{{ leaders[schedule.leader_id] }}</td>
                    <td>{{ schedule.from }}</td>
                    <td>{{ schedule.to }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'scheduleEdit', params: { id: schedule.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteProgram(schedule.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <router-link :to="{name: 'scheduleCreate'}" class="btn btn-info text-white">Create</router-link>
    </div>
</template>

<script>
export default {
    data() {
        return {
            schedules: [],
            programs: [],
            leaders: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/schedules/')
            .then(response => {
                this.schedules = response.data;
            });

        this.axios
            .get('http://localhost:8000/api/programs/')
            .then(response => {
                let programs = []
                response.data.forEach(program => {
                    programs[program.id] = program.name
                })

                this.programs = programs;
            });

        this.axios
            .get('http://localhost:8000/api/leaders/')
            .then(response => {
                let leaders = []
                response.data.forEach(leader => {
                    leaders[leader.id] = leader.name
                })

                this.leaders = leaders;
            });
    },
    methods: {
        deleteProgram(id) {
            this.axios
                .delete(`http://localhost:8000/api/schedules/${id}`)
                .then(response => {
                    let i = this.schedules.map(data => data.id).indexOf(id);
                    this.schedules.splice(i, 1)
                });
        }
    }
}
</script>
