<template>
    <div id="module-edit">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-sitemap"></i>&nbsp;&nbsp;Edit Module</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link to="/module" class="btn btn-warning"><i class="fas fa-arrow-left"></i>&nbsp;Back</router-link>
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
                                <form @submit.prevent="updateModule" @keydown="form.onKeydown($event)">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name(English)</label>
                                        <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Enter email" name="name">
                                        <small v-if="form.errors.has('name')" v-html="form.errors.get('name')" class="red"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_bn">Name(Bangla)</label>
                                        <input v-model="form.name_bn" type="text" class="form-control" id="name_bn" placeholder="Category Name Bangla">
                                        <small v-if="form.errors.has('name_bn')" v-html="form.errors.get('name_bn')" class="red"></small>
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
                name: '',
                name_bn: '',
                isActive: '',
            })
        }
    },
    mounted(){
        axios.get('api/v1/module/'+this.$route.params.moduleId).then((response)=>{
            this.form.fill(response.data.data)
        })
    },
    methods:{
        updateModule(){
            this.$Progress.start()
            this.form.put('api/v1/module/'+this.$route.params.moduleId)
            .then((response)=>{
                console.log(response);
                this.form.reset();
                this.$router.push('/module');
                Toast.fire({
                    icon: 'success',
                    title: 'Module updated successfully'
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
