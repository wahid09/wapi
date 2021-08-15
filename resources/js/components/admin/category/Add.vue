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
                                        <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Category name in english" name="name">
                                        <small v-if="form.errors.has('name')" v-html="form.errors.get('name')" class="red"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_bn">Name(Bangla)</label>
                                        <input v-model="form.name_bn" type="text" class="form-control" id="name_bn" placeholder="Category Name Bangla">
                                        <small v-if="form.errors.has('name_bn')" v-html="form.errors.get('name_bn')" class="red"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description(English)</label>
                                        <!-- <textarea v-model="form.description" class="form-control"></textarea> -->
                                        <markdown-editor v-model="form.description"></markdown-editor>
                                        <small v-if="form.errors.has('description')" v-html="form.errors.get('description')" class="red"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="description_bn">Description(Bangla)</label>
                                        <!-- <textarea v-model="form.description_bn" class="form-control"></textarea> -->
                                        <markdown-editor v-model="form.description_bn"></markdown-editor>
                                        <small v-if="form.errors.has('description_bn')" v-html="form.errors.get('description_bn')" class="red"></small>
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
                description: '',
                description_bn: '',
                isActive: '',
            })
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
