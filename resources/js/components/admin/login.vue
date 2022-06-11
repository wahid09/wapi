<template>
    <div id="category">
        <div class="global-container">
            <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in to Codepen</h3>
                <div class="card-text">
                    <!--
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                    <form>
                        <!-- to error: add class "has-danger" -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        
                        <div class="sign-up">
                            Don't have an account? <a href="#">Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>
</template>

<script>
export default {
    data(){
        return{
            module:[],
            form: new Form({
                name: '',
                name_bn: '',
                description: '',
                description_bn: '',
                isActive: '',
                permissions:'',
            })
        }
    },
    mounted(){
        axios.get('api/v1/module_with_permission').then((response)=>{
            this.module = response.data.data
        })
    },
    computed: {
        chunkedItems(){
            return _.chunk(this.module,8)
        }
    },
    methods:{
        createCategory(){
            this.$Progress.start()
            this.form.post('api/v1/category')
            .then((response)=>{
                console.log(response);
                this.form.reset();
                this.$router.push('/category');
                Toast.fire({
                    icon: 'success',
                    title: 'Category added successfully'
                })
                this.$Progress.finish()
            }).catch((e)=> {
                this.$Progress.fail()
                console.log(e);
            });
            
        }
    }
};
</script>

<style>
html,body { 
	height: 100%; 
}

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
</style>
