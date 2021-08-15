<template>
    <div id="category">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>
                            <i class="fas fa-sitemap"></i>&nbsp;&nbsp;Category
                            management
                        </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <router-link
                                    to="/add_category"
                                    class="btn btn-primary"
                                    ><i class="fas fa-plus-circle"></i
                                    >&nbsp;Create New</router-link
                                >
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
                            <!-- <div class="card-header">
                                <h3 class="card-title">Category List</h3>

                                <div class="card-tools">
                                    <a class="btn btn-primary" href="#"
                                        ><i class="fas fa-plus-circle"></i
                                        >&nbsp;Create New</a
                                    >
                                </div>
                            </div> -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table
                                    id="example2"
                                    class="table table-bordered table-hover"
                                >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name(English)</th>
                                            <th>Name(Bangla)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for = "(categoryList, index) in getAllCategory" :key="categoryList.id">
                                            <td>{{index+1}}</td>
                                            <td>{{categoryList.name}}</td>
                                            <td>{{categoryList.name_bn}}</td>
                                            <td v-if="categoryList.status == 1">
                                            <span class="badge badge-primary">Active</span>
                                            </td>
                                            <td v-else>
                                            <span class="badge badge-warning">Inactive</span>
                                            </td>
                                            <td>
                                                <router-link :to="`/edit_category/${categoryList.id}`" class=""><i
                                                        class="fas fa-edit blue"
                                                    ></i
                                                ></router-link>
                                                |
                                                <a @click.prevent="categoryDelete(categoryList.id)"
                                                    ><i
                                                        class="fas fa-trash red"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name(English)</th>
                                            <th>Name(Bangla)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
            category:{},
        }
    },
    mounted(){
		this.$store.dispatch("getCategoryList")
	},
    computed:{
        getAllCategory(){
            return this.$store.getters.categoryList
        }
    },
    methods:{
        categoryDelete(id){

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        //send request to the server
                            axios.delete('category/'+id).then((response)=>{
                            this.$store.dispatch("getCategoryList")
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                            
                            }).catch(()=>{
                                Swal("Failed", "There was something wrong.", "warning");
                            });
                        }
                        
                    })

                
        }
    }

};
</script>

<style></style>
