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
                                            <td v-if="categoryList.isActive == 1">
                                            <span class="badge badge-primary">Active</span>
                                            </td>
                                            <td v-else>
                                            <span class="badge badge-warning">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="" href="#"
                                                    ><i
                                                        class="fas fa-edit blue"
                                                    ></i
                                                ></a>
                                                |
                                                <a href="#"
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
    metods:{}

};
</script>

<style></style>
