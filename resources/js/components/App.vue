<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/category" class="nav-item nav-link btn-outline-success">Category</router-link>
                    <router-link to="/leader" class="nav-item nav-link btn-outline-info">Leader</router-link>
                    <router-link to="/program" class="nav-item nav-link btn-outline-warning">Program</router-link>
                    <router-link to="/schedule" class="nav-item nav-link btn-outline-danger">Schedules</router-link>
                </div>
            </div>
        </nav>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>
