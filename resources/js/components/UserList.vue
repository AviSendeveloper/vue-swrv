<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div> -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Register Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v:for="(user, index) in data" :key="index">
                            <!-- <th>{{ index }}</th> -->
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            data: {},
        }
    },
    async mounted() {
        console.log("Component mounted.");
        try {
            const res = await axios.get("api/users");
            this.data = res.data;
            // for (let i in this.data) {
            //     console.log(this.data[i].name);
            // }
            this.data.forEach((key, value) => {
                
            });
        } catch (error) {
            console.log(`Error : ${error}`);
        }
    },
};
</script>
