<template>
    <div id="category">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-sitemap"></i>&nbsp;&nbsp;Add New Category</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link to="/category" class="btn btn-warning"><i class="fas fa-arrow-left"></i>&nbsp;Back</router-link>
                </li>
            </ol>
          </div>
        </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <!-- /.card-header -->
                                <form @submit.prevent="createCategory" @keydown="form.onKeydown($event)">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name(English)</label>
                                        <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Role name in english" name="name">
                                        <small v-if="form.errors.has('name')" v-html="form.errors.get('name')" class="red"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_bn">Name(Bangla)</label>
                                        <input v-model="form.name_bn" type="text" class="form-control" id="name_bn" placeholder="Role name in bangla">
                                        <small v-if="form.errors.has('name_bn')" v-html="form.errors.get('name_bn')" class="red"></small>
                                    </div>
                                    <div class="form-group custom-switch">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input v-model="form.isActive" type="checkbox" class="custom-control-input" id="customSwitch1" name="isActive">
                                        <label class="custom-control-label" for="customSwitch1">Status</label>
                                        </div>
                                        <small v-if="form.errors.has('isActive')" v-html="form.errors.get('isActive')" class="red"></small>
                                    </div>

                                    <div class="text-center">
                                        <strong>Manage Permission For Role</strong>
                                        <p class="p-2">
                                        <small v-if="form.errors.has('permissions')" v-html="form.errors.get('permissions')" class="red"></small>
                                        </p>
                                    </div>
                                    <div class="form-group left">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="select-all">
                                            <label class="custom-control-label" for="select-all">Select All</label>
                                        </div>
                                    </div>

                                    <div class="form-row" v-for="items in chunkedItems" :key="items.id">
                                        <div class="col" v-for="item in items" :key="item.id">
                                            <h5 class="cyan">Module:{{item.name}}</h5>
                                            <div class="mb-3 ml-4" v-for="permission in item.permissions" :key="permission.id">
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" v-bind:id="'permission_'+permission.id" name="permissions[]" v-model="form.permissions" v-bind:value="permission.name">
                                                    <label v-bind:for="'permission_'+permission.id" class="custom-control-label">{{permission.name}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <!-- <div class="card-footer"> -->
                                    <div class="form-group">
                                    <label></label>
                                    <button type="submit" class="btn btn-primary" :disabled="form.busy">Submit</button>
                                    </div>
                                    <!-- </div> -->
                                </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
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

<style></style>
