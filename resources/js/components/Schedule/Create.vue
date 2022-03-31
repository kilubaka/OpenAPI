<template>
    <div>
        <h3 class="text-center">Create Schedule</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addSchedule">
                    <div class="form-group">
                        <label>Programs</label>
                        <select class="form-select" v-model="schedule.program_id" required>
                            <option v-for="(program) in programs" v-bind:value="program.id">
                                {{ program.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Leaders</label>
                        <select class="form-select" v-model="schedule.leader_id" required>
                            <option v-for="(leader) in leaders" v-bind:value="leader.id">
                                {{ leader.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>From</label>
                        <input type="datetime-local" step="1" class="form-control" v-model="schedule.from" required>
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="datetime-local" step="1" class="form-control" v-model="schedule.to" required>
                    </div>
                    <button type="submit" class="btn btn-info">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            schedule: {},
            programs: [],
            leaders: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/leaders/')
            .then(response => {
                this.leaders = response.data;
            });

        this.axios
            .get('http://localhost:8000/api/programs/')
            .then(response => {
                this.programs = response.data;
            });
    },
    methods: {
        addSchedule() {
            this.axios
                .post('http://localhost:8000/api/schedules', this.schedule)
                .then(response => (
                    this.$router.push({ name: 'scheduleIndex' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
