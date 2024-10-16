
<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <!-- Sweet Alert-->
        <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- gridjs css -->
        <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">

        <?= $this->include('partials/head-css') ?>

    </head>

    <?= $this->include('partials/body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $page_title ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Contact List</h5>
                                            <div class="ms-auto">
                                                <button type="button" onclick="openModal()" class="btn btn-success btn-sm waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</button>
                                                <button type="button" onClick="deleteAll()" class="btn btn-primary btn-sm waves-effect waves-light"><i class="mdi mdi-trash-can me-2"></i>Delete All</button>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div id="table-contact-list"></div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="contact-form" method="post" enctype="multipart/form-data">
                                <input type="text" name="hdn_id" id="hdn_id" style="display: none;">
                                <input type="text" name="old_file" id="old_file" style="display: none;">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="position" class="col-form-label">Position:</label>
                                        <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input type="file" class="form-control" name="image" id="image-file">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/right-sidebar') ?>

        <?= $this->include('partials/vendor-scripts') ?>

        <!-- Sweet Alerts js -->
        <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- gridjs js -->
        <script src="/assets/libs/gridjs/gridjs.umd.js"></script>

        <script type="text/javascript">
            function openModal(){
                document.querySelector('.modal-title').innerHTML = 'Contact Add';
                document.querySelector('#btn-submit').innerHTML = 'Submit';
                showModal();
            }
            function showModal(){
                var formModal = new bootstrap.Modal(document.getElementById('formModal'));
                formModal.show();
            }
            function hideModal(){
                let formModal = document.getElementById('formModal');
                let modal = bootstrap.Modal.getInstance(formModal);
                modal.hide();
            }

            const { Grid, html } = gridjs;
            const grid = new gridjs.Grid({
                sort: {
                    multiColumn: false,
                    server: {
                        url: (prev, columns) => {
                            if (!columns.length) return prev;
                            const col = columns[0];
                            const dir = col.direction === 1 ? 'ASC' : 'DESC';
                            let colName = ['', '', 'name', 'position', 'email'][col.index];
                            //window.location.hash = `?order=${colName}&dir=${dir}`;
                            window.history.pushState({path:prev},'',`?order=${colName}&dir=${dir}`);
                            return `${prev}?order=${colName}&dir=${dir}`;
                        }
                    }
                },
                columns: [
                    {
                        id: 'checkall',
                        name: html('<input type="checkbox" class="form-check-input" onClick="checkAll(this)" id="check_all"> <label class="form-check-label" for="contacusercheck"></label>'),
                        sort: false
                    },
                    {
                        id: 'image',
                        name: 'Image',
                        sort: false
                    },
                    {
                        id: 'name',
                        name: 'Name'
                    },
                    {
                        id: 'position',
                        name: 'Position'
                    },
                    {
                        id: 'email',
                        name: 'Email'
                    },
                    {
                        id: 'status',
                        name: 'Status',
                        sort: false
                    },
                    {
                        id: 'action',
                        name: 'Action',
                        sort: false
                    }
                ],
                search: true,
                server: {
                    url: '<?= base_url('contact-fetch') ?>',
                    data: (opts) => {
                    return new Promise((resolve, reject) => {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                        if (this.readyState === 4) {
                            if (this.status === 200) {
                                const resp = JSON.parse(this.response);
                                resolve({
                                    data: resp.data?.map(contact => [html('<input type="checkbox" class="form-check-input" name="chk_child" value="'+contact.id+'"><label class="form-check-label" for="contacusercheck"></label>'), html('<img src="/uploads/'+contact.image+'" alt="" class="avatar-sm rounded-circle me-2">'), contact.name, contact.position, contact.email, html('<input type="checkbox" id="switch'+contact.id+'" data-cid="'+contact.id+'" switch="bool" onClick="statusChange(this)" '+contact.checked+'><label for="switch'+contact.id+'" data-on-label="ON" data-off-label="OFF">'), html('<ul class="list-inline mb-0"><li class="list-inline-item"><a href="javascript:void(0);" data-cid="'+contact.id+'" onClick="editRecord(this)"class="px-2 text-primary "><i class="bx bx-pencil font-size-18"></i></a></li><li class="list-inline-item"><a href="javascript:void(0);" data-cid="'+contact.id+'" onClick="deleteRecord(this)" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a></li></ul>')]),
                                    total: resp.total_records,
                                });
                            } else {
                                reject();
                            }
                        }
                    };
                    xhttp.open("GET", opts.url, true);
                    xhttp.send();
                  });
                }
              },
              pagination: {
                limit: 5
              }
            });
            grid.render(document.getElementById("table-contact-list"));

            //Ajax Call For Add Record
            document.getElementById('btn-submit').addEventListener('click', addRecord);
            function addRecord(e){
                e.preventDefault();
                let name = document.getElementById('name').value;
                let position = document.getElementById('position').value;
                let email = document.getElementById('email').value;
                let image = document.getElementById('image-file').files;

                var atposition = email.indexOf("@");
                var dotposition = email.lastIndexOf(".");
                if(name == ''){
                    alert('Enter Valid Name.');
                    return false;
                }else if(position == ''){
                    alert('Enter Valid Position.');
                    return false;
                }else if(atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length){
                    alert('Enter Valid Email Address.');
                    return false;
                }else{
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '<?= base_url('contact-add') ?>', true);
                    xhr.onload = () => {
                        if(xhr.status === 200){
                            hideModal();
                            Swal.fire('Success !', 'Contact has been saved!', 'success');
                            document.getElementById('contact-form').reset();
                            grid.forceRender(document.getElementById("table-contact-list"));
                        }else{
                            console.log('problem occured');
                        }
                    };
                    var formData = new FormData(document.getElementById('contact-form'));
                    xhr.send(formData);
                }
            }

            //Ajax Call For Delete Record
            function deleteRecord(ele){
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
                        cid = ele.getAttribute('data-cid');
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '<?= base_url('contact-delete') ?>', true);
                        xhr.setRequestHeader("Content-Type", "application/json");
                        xhr.onload = () => {
                            if(xhr.status === 200){
                                Swal.fire('Deleted!', 'Contact has been deleted.', 'success');
                                grid.forceRender(document.getElementById("table-contact-list"));
                            }else{
                                console.log('problem occured');
                            }
                        };
                        const inputData = {cid: cid};
                        const data = JSON.stringify(inputData);
                        xhr.send(data);
                    }
                });
            }

            //Ajax Call For Edit Record
            function editRecord(ele){
                let hdn_id = document.getElementById('hdn_id');
                let name = document.getElementById('name');
                let position = document.getElementById('position');
                let email = document.getElementById('email');
                let old_file = document.getElementById('old_file');

                cid = ele.getAttribute('data-cid');
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '<?= base_url('contact-edit') ?>', true);
                xhr.responseType = 'json';
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onload = () => {
                    if(xhr.status === 200){
                        hdn_id.value = xhr.response.id;
                        name.value = xhr.response.name;
                        position.value = xhr.response.position;
                        email.value = xhr.response.email;
                        old_file.value = xhr.response.image;
                        document.querySelector('.modal-title').innerHTML = 'Contact Edit';
                        document.querySelector('#btn-submit').innerHTML = 'Edit';
                        showModal();
                    }else{
                        console.log('problem occured');
                    }
                };
                const inputData = {cid: cid};
                const data = JSON.stringify(inputData);
                xhr.send(data);
            }

            //Checked All Checkbox
            function checkAll(ele){
                var items = document.getElementsByName('chk_child');
                if(ele.checked){
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].type == 'checkbox')
                            items[i].checked = true;
                    }
                }else{
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].type == 'checkbox')
                            items[i].checked = false;
                    }
                }
            }

            // Delete All Records
            function deleteAll(){
                ids_array = [];
                var items = document.getElementsByName('chk_child');
                for (var i = 0; i < items.length; i++) {
                    if (items[i].checked == true){
                        ids_array.push(items[i].value);
                    }
                }
                if(typeof ids_array !== 'undefined' && ids_array.length > 0){
                    if(confirm('Are you sure you want to delete this?')){
                        window.location.href = "<?= base_url('contact-delete-all') ?>/"+ids_array;
                    }else{
                        return false;
                    }
                }else{
                    alert("Please Select atleast one checkbox");
                }
            }

            //Status Change
            function statusChange(ele){
                var cid = ele.getAttribute('data-cid');
                if(ele.checked){
                    var new_status = 1;
                }else{
                    var new_status = 0;
                }
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '<?= base_url('contact-status-change') ?>', true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onload = () => {
                    if(xhr.status === 200){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Status Has Been Updated',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }else{
                        console.log('problem occured');
                    }
                };
                const inputData = {cid: cid, status: new_status};
                const data = JSON.stringify(inputData);
                xhr.send(data);
            }
        </script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>
