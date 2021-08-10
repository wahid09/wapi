<template>
  <div id="permission-add">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-sitemap"></i>&nbsp;&nbsp;Add New Permission</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link to="/permission" class="btn btn-warning"><i class="fas fa-arrow-left"></i>&nbsp;Back</router-link>
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
                                <form @submit.prevent="createPermission" @keydown="form.onKeydown($event)">
                                <div class="card-body">
                                    <div class="form-group">
                                    <label>Module Name</label>
                                    <select class="form-control select" style="width: 100%;" v-model="form.module_id" name="module_id">
                                        <option v-for="(moduleList, index) in module" :key="moduleList.id" :value="moduleList.id">{{moduleList.name}}</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Enter email" name="name">
                                        <small v-if="form.errors.has('name')" v-html="form.errors.get('name')" class="red"></small>
                                    </div>
                                    <div class="form-group custom-switch">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input v-model="form.isActive" type="checkbox" class="custom-control-input" id="customSwitch1" name="isActive">
                                        <label class="custom-control-label" for="customSwitch1">Status</label>
                                        </div>
                                        <small v-if="form.errors.has('isActive')" v-html="form.errors.get('isActive')" class="red"></small>
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
            form: new Form({
                module_id:'',
                name: '',
                isActive: '',
            }),

            module:[],
        }
        
    },
    mounted(){
        axios.get('api/v1/module').then((response)=>{
            this.module = response.data.moduleList
        })
    },
    methods:{
        createPermission(){
            this.$Progress.start()
            this.form.post('api/v1/permission')
            .then((response)=>{
                console.log(response);
                this.form.reset();
                this.$router.push('/permission');
                Toast.fire({
                    icon: 'success',
                    title: 'Module added successfully'
                })
                this.$Progress.finish()
            }).catch((e)=> {
                this.$Progress.fail()
                console.log(e);
            });
            
        }
    }
}
</script>

<style>

</style>