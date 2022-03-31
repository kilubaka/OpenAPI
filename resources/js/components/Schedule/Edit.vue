<template>
    <div>
        <h3 class="text-center">Edit Schedule</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateSchedule">
                    <div class="form-group">
                        <label>Schedules</label>
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
                        <input type="datetime-local" class="form-control" step="1" v-model="schedule.from" required>
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="datetime-local" class="form-control" step="1" v-model="schedule.to" required>
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
            schedule: {},
            programs: [],
            leaders: []
        }
    },
    created() {
        this.axios
            .get(`http://localhost:8000/api/schedules/${this.$route.params.id}`)
            .then(response => {
                this.schedule = response.data;
                this.schedule.from = this.schedule.from.replace(' ', 'T');
                this.schedule.to = this.schedule.to.replace(' ', 'T');
            });

        this.axios
            .get('http://localhost:8000/api/programs/')
            .then(response => {
                this.programs = response.data;
            });

        this.axios
            .get('http://localhost:8000/api/leaders/')
            .then(response => {
                this.leaders = response.data;
            });
    },
    methods: {
        updateSchedule() {
            this.axios
                .patch(`http://localhost:8000/api/schedules/${this.$route.params.id}`, this.schedule)
                .then(response => {
                    this.$router.push({ name: 'scheduleIndex' });
                });
        }
    }
}
</script>
