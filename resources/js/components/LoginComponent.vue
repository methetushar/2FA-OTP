<template>
    <div>
        <div class="card card-body">
            <h2 class="text-center">Login Now</h2>
            <hr>
            <form action="" >
                <div class="form-group">
                    <label for="login_email" class="text-capitalize">Email</label>
                    <input type="email" name="email" id="login_email"  placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="login_password" class="text-capitalize">Password</label>
                    <input type="password" name="password" id="login_password" placeholder="Password" class="form-control" >
                </div>
                <div class="form-group">
                    <button class="btn btn-info px-5">Login</button>
                </div>

                <div class="offset-6 mt-3">
                    <span>Have Not an account 
                        <router-link class="text-info" to="/signup">SignUp</router-link>
                    </span>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>