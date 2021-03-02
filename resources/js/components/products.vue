<template>
    <div class="container">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">

                                                    </div>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul  class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li  class="nav-item">
                                            <a  class="nav-link active" data-toggle="tab" href="#personal" role="tab">View Product</a>
                                            <div class="slide"></div>
                                        </li>

                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header" >

                                                <a style="margin:5px;"  @click="new_modal" data-target="#addNew"  class="btn btn-sm btn-primary waves-effect waves-light f-left">
                                                    Add Product
                                                </a>
                                            </div>

                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">

                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div>
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Id</th>
                                                                                    <th scope="row">Title</th>
                                                                                    <th scope="row">Description</th>
                                                                                    <th scope="row">Price</th>
                                                                                    <th scope="row">Image</th>
                                                                                    <th scope="row">Edit</th>
                                                                                    <th scope="row">Delete</th>
                                                                                </tr>

                                                                                <tr v-for="product in products" >

                                                                                    <td>{{product.id}}</td>
                                                                                    <td>{{product.Title}}</td>
                                                                                    <td>{{product.Description}}</td>
                                                                                    <td>{{product.Price}}</td>
                                                                                    <img height="120px" width="100px"  class="img" :src="get_image(product.Image)" alt="user-img">
                                                                                    <td>
                                                                                        <a style="margin-auto:0px;"   id="edit-btn" @click="edit_modal(product)"  class="btn btn-sm btn-primary waves-effect waves-light f-left">
                                                                                            Edit Product
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a id="delete-btn" @click="delete_product(product.id)"   class="btn btn-sm btn-primary btn-danger waves-effect waves-light f-left">
                                                                                            Delete Product
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>

                                                <!-- end of edit-info -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>

                                        <!-- personal card end-->
                                    </div>

                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main body end -->
            <div id="styleSelector">

                <div class="selector-toggle"><a href="javascript:void(0)"></a></div><ul><li><p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p><span class="text-muted">Live customizer with tons of options</span></li><li><p class="selector-title">Main layouts</p></li><li><div class="theme-color"><a href="#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a><a href="#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a></div></li></ul><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);"><div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);"><ul class="nav nav-tabs  tabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-layout" role="tab">Layouts</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-sidebar-setting" role="tab">Sidebar Settings</a></li></ul><div class="tab-content tabs"><div class="tab-pane active" id="sel-layout" role="tabpanel"><ul><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span></label></div></li><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="header-position" name="header-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span></label></div></li></ul></div><div class="tab-pane" id="sel-sidebar-setting" role="tabpanel"><ul><li class="theme-option"><p class="sub-title drp-title">Menu Type</p><div class="form-radio" id="menu-effect"><div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon"><label><input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true"><i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span></label></div><div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon"><label><input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)"><i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span></label></div></div></li><li class="theme-option"><p class="sub-title drp-title">SideBar Effect</p><select id="vertical-menu-effect" class="form-control minimal"><option name="vertical-menu-effect" value="shrink">shrink</option><option name="vertical-menu-effect" value="overlay">overlay</option><option name="vertical-menu-effect" value="push">Push</option></select></li><li class="theme-option"><p class="sub-title drp-title">Hide/Show Border</p><select id="vertical-border-style" class="form-control minimal"><option name="vertical-border-style" value="solid">Style 1</option><option name="vertical-border-style" value="dotted">Style 2</option><option name="vertical-border-style" value="dashed">Style 3</option><option name="vertical-border-style" value="none">No Border</option></select></li><li class="theme-option"><p class="sub-title drp-title">Drop-Down Icon</p><select id="vertical-dropdown-icon" class="form-control minimal"><option name="vertical-dropdown-icon" value="style1">Style 1</option><option name="vertical-dropdown-icon" value="style2">style 2</option><option name="vertical-dropdown-icon" value="style3">style 3</option></select></li><li class="theme-option"><p class="sub-title drp-title">Sub Menu Drop-down Icon</p><select id="vertical-subitem-icon" class="form-control minimal"><option name="vertical-subitem-icon" value="style1">Style 1</option><option name="vertical-subitem-icon" value="style2">style 2</option><option name="vertical-subitem-icon" value="style3">style 3</option><option name="vertical-subitem-icon" value="style4">style 4</option><option name="vertical-subitem-icon" value="style5">style 5</option><option name="vertical-subitem-icon" value="style6">style 6</option></select></li></ul></div><ul><li><p class="selector-title">Header Brand color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Header color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Active link color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a></div></li><li><p class="selector-title">Menu Caption Color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a></div></li></ul></div></div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 215.577px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div><ul><li><a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a></li><li class="text-center"><span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span><a href="#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a><a href="#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a></li></ul></div>
        </div>



        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
<!--                        <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update Your Profile</h5>-->
                        <h5 v-show="edit_mode"  class="modal-title" id="addNewLabel">Add Product</h5>
                        <h5 v-show="!edit_mode" class="modal-title" id="updateLabel">Update Product</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
<!--                    <form @submit.prevent="updateUser()" >-->
                    <form @submit.prevent="edit_mode? create_product():update_product()" >


                        <div class="modal-body">
                            <!--Required to put the form here -->
                            <div class="form-group">
                                <input v-model="form.Title" type="text" name="Title"
                                       placeholder="Enter product title"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('Title') }">
                                <has-error :form="form" field="Title"></has-error>
                            </div>

                            <div class="form-group">
                            <textarea v-model="form.Description" type="text" name="Description"
                                      placeholder="Enter product description" rows="5" cols="40"
                                      class="form-control" :class="{'is-invalid': form.errors.has('Description') }"></textarea>
                                <has-error :form="form" field="Description"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.Price" type="number" name="Price"
                                       placeholder="Enter product price"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('Price') }">
                                <has-error :form="form" field="Price"></has-error>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Upload Image</label>
                                    <br>
                                    <input  type="file" @change="upload_image" name="photo" value="photo"   class="form-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="edit_mode" type="submit" class="btn btn-primary">Add New</button>
                            <button v-show="!edit_mode" type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    data()
    {
        return{

            edit_mode:false,
            //Here the product object is created
            products:{},
            form: new Form({
                Title:'',
                Description:'',
                Price:'',
                id:'',
            })
        }
    },
    methods:{

        new_modal()
        {
            this.edit_mode = true;
            this.form.reset();
            $('#addNew').modal('show')
        },
        edit_modal(product)
        {
            this.edit_mode = false;
            this.form.reset();
            $('#addNew').modal('show')
            this.form.fill(product);
        },
        create_product()
        {
            //made post request
            this.form.post('api/product').then(response=>{

                //hide the modal window
                $('#addNew').modal('hide')
                if(response.status===200){

                    swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'You have to choose a file',
                    })
                }
                else{

                    toast.fire({
                        icon: 'success',
                        title: 'Products are added successfully'
                    })
                    //the event is initialized after creating the user
                    Fire.$emit('afterCreate');
                }


            }).catch(()=>{
            })
        },
        update_product()
        {
           this.form.put('api/product/'+this.form.id).then(response=>{

               $('#addNew').modal('hide')
               if(response.status===200){
                   swal.fire({
                       type: 'error',
                       title: 'Oops...',
                       text: 'You have to choose a file',
                   })
               }
               else{
                   toast.fire({
                       icon: 'success',
                       title: 'Products are updated successfully'
                   })
                   //the event is initialized after creating the user
                   Fire.$emit('afterCreate');
               }

           }).catch(()=>{

           })
        },
        upload_image(e)
        {
            //grab the files
            let file = e.target.files[0];
            //base 64 string making process
            if(file['size']<2111775)
            {
                let reader = new FileReader();
                reader.onloadend = (file)=> {
                    this.form.image = reader.result;
                }
                reader.readAsDataURL(file);
            }
            else{
                //hide the modal window
                $('#addNew').modal('hide')
                swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'You are uploading a large file',
                })

            }

            console.log(e);
        },
        get_image(image)
        {
            return "images/"+image;
        },

        delete_product(id)
        {
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed){
                    this.form.delete('api/product/'+id).then(()=>{

                            swal.fire(
                                'Deleted!',
                                'Products are deleted.',
                                'success'
                            )
                            //Here the event is created
                            Fire.$emit('afterCreate');


                    }).catch(()=>{
                        swal("Failed","There was something mistakes")
                    });
                }
            })
        },
        loadUser(){
            //made a get request with data
            axios.get('api/product').
            then(({ data }) => (this.products = data));
        },

    },
    created(){
        //When the component is created this is called
        this.loadUser();
        //After load the user here we fire on(updated)
        Fire.$on('afterCreate',()=>{
            this.loadUser();
        });

    }

}
</script>
