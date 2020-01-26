<template>
    <div>
        <div class="card card-body">
            <h2 class="text-center">Register Now</h2>
            <hr />
            <form action="" method="post" @submit="submitAction">
                
                <div class="or text-center ">
                    <a href="#" class="btn btn-outline-dark mx-3 ">Github</a>
                    <a href="#" class="btn btn-outline-danger mx-3">Google</a>
                    <hr />
                </div>

                <div class="form-group">
                    <label for="name" class="text-capitalize">Name</label>
                    <input
                        type="name"
                        name="name"
                        :id="name_id"
                        autocomplete="off"
                        placeholder="Name"
                        class="form-control"
                        v-model="name"
                        required
                    />
                    <small class="text-danger" 
                        v-if="msg['name']">{{
                        msg["name"]}}
                    </small>
                </div>

                <div class="form-group">
                    <label for="email" class="text-capitalize">Email</label>
                    <input
                        type="email"
                        name="email"
                        :id="email_id"
                        autocomplete="off"
                        placeholder="Email"
                        class="form-control"
                        v-model="email"
                        required
                    />
                    <small class="text-danger" 
                        v-if="msg['email']">{{
                        msg["email"]}}
                    </small>
                </div>
                <div class="form-group">
                    <label for="password" class="text-capitalize"
                        >Password</label
                    >
                    <input
                        type="password"
                        name="password"
                        :id="password_id"
                        placeholder="Password"
                        class="form-control"
                        v-model="password"
                    />
                    <small class="text-danger" 
                        v-if="msg['password']">{{
                        msg["password"]}}
                    </small>
                </div>

                <div class="form-group">
                    <label for="confPassword" class="text-capitalize"
                        >Confirm Password</label
                    >
                    <input
                        type="password"
                        name="confPassword"
                        :id="confPassword_id"
                        placeholder="Confirm Password"
                        class="form-control"
                        v-model="confPassword"
                    />
                    <small class="text-danger" 
                        v-if="msg['confPassword']">{{
                        msg["confPassword"]}}
                    </small>
                </div>
                <div class="form-group">
                    <button
                        v-bind:disabled="submitBtnDisable"
                        class="btn btn-info px-5">
                        SignUp
                    </button>
                </div>

                <div class="offset-8 mt-4">
                    <span
                        >Back to Login
                        <router-link class="text-info" to="/"
                            >Login</router-link
                        >
                    </span>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            msg: [],
            name: "",
            email: "",
            password: "",
            confPassword: "",
            submitBtnDisable: true,
            name_id:'',
            email_id:'',
            password_id:'',
            confPassword_id:'',
        };
    },
    watch: {
        name(value) {
            this.name = value;
            this.check_name(value);
        },
        email(email_value){
            this.email = email_value;
            this.check_email(email_value);
        },
        password(pass_value){
            this.password = pass_value;
            this.check_password(pass_value);
        },
        confPassword(value){
            this.confPassword = value;
            this.check_confPassword(value);
        }
        
    },
    methods: {
        check_name(value){
            if(value.length <5){
                this.msg['name'] = 'Name filed is required';
            }else{
                
                this.msg['name'] = '';
                this.name_id = 'name';
            }
        },
        check_email(email_value){
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email_value)) 
            {
                
                this.msg['email'] ='';
                this.email_id = 'email';
            }else{
                this.msg['email'] ='Keep typing we are watching correct email.';
            }
        },
        check_password(pass_value){
            // remainingChars = 6 -pass_value.length;
            if(pass_value.length <6){
                this.msg['password'] = 'Password must be 6 character or more. ' +(6 -pass_value.length)+' to go.';
            }else{
                this.msg['password'] = '';
                this.password_id = 'password';
            }
        },
        check_confPassword(value){
            if(value.length <6){
                this.msg['confPassword'] = 'Password must be 6 character or more. ' +(6 -value.length)+' to go.';
            }else{
                this.msg['confPassword'] = '';
                if (value == this.password) {
                    this.msg['confPassword'] = '';
                    this.confPassword_id = 'confPassword';
                    this.submitBtnDisable = false;
                }else{
                    this.msg['confPassword'] = 'Password are not match please try again';
                }
                
            }
        },

        submitAction(){
            axios.post('/register',{
                name: this.name,
                email: this.email,
                password: this.password,
                confPassword: this.confPassword
            }).then(function (response) {
                console.log(response)
            }).catch(function (error) {
                console.log(error)
            })
        }
    }
};
</script>

<style scope="">
    input#name,input#password,input#confPassword {
    border: 2px solid #118a1673;
    box-shadow: 0px 0px 1px 1px #8de690f7;
    }
    input#email{
        border: 2px solid #118a1673;
    box-shadow: 0px 0px 1px 1px #8de690f7;
    }
</style>
