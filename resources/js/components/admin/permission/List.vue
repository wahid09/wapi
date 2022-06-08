<template>
  <div id="module-list">
      <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>
                            <i class="fas fa-sitemap"></i>&nbsp;&nbsp;Permission
                            management
                        </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <router-link
                                    to="/add_permission"
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

                            <div class="card-body">
                                <table
                                    id="example2"
                                    class="table table-bordered table-hover"
                                >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Module Name</th>
                                            <th>Url</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for = "(permissionList, index) in getAllPermission" :key="permissionList.id">
                                            <td>{{index+1}}</td>
                                            <td>{{permissionList.name}}</td>
                                            <td>{{permissionList.module_name}}</td>
                                            <td>{{permissionList.url}}</td>
                                            <td v-if="permissionList.status == 1">
                                            <span class="badge badge-primary">Active</span>
                                            </td>
                                            <td v-else>
                                            <span class="badge badge-warning">Inactive</span>
                                            </td>
                                            <td>
                                                <router-link :to="`/edit_permission/${permissionList.id}`" class=""><i
                                                        class="fas fa-edit blue"
                                                    ></i
                                                ></router-link>
                                                |
                                                <a @click.prevent="permissionDelete(permissionList.id)"
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
                                            <th>Name</th>
                                            <th>Module Name</th>
                                            <th>Url</th>
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
            permission:{},
        }
    },
    mounted(){
		this.$store.dispatch("getPermissionList")
	},
    computed:{
        getAllPermission(){
            return this.$store.getters.permissionList
        }
    },
    methods:{
        permissionDelete(id){

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
                            axios.delete('api/v1/permission/'+id).then((response)=>{
                            this.$store.dispatch("getPermissionList")
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
}
</script>

<style>

</style>
