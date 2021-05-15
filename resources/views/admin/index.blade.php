@extends('admin.includes.app')

@section('content')



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            @if (is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
        </div>
    @endif




    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-techbot-dark">
            <nav class="navbar  ">

                <div class="navbar-brand"><span id="componentDetailsTitle">Orders</span> </div>
                <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton"
                        data-toggle="collapse" data-target="#createNewForm" aria-expanded="false"
                        aria-controls="collapseExample"><i class="fas fa-plus" id="PlusButton"></i></button></div>


            </nav>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-techbot-dark">

                        <tr>

                            <th> #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Material</th>
                            <th>Position</th>
                            <th>Price (total) </th>
                            <th>Logo</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tfoot class="bg-techbot-dark">
                        <tr>

                            <th> #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Material</th>
                            <th>Position</th>
                            <th>Price (total) </th>
                            <th>Logo</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>
                        <?php $itr = 0; ?>
                        {{-- @foreach ($super_admins as $admin) --}}

                        @php
                            $itr = $itr + 1;
                        @endphp
                        <tr class="data-row">





                            <td>{{ $itr }}</td>
                            <td class="word-break name">name</td>
                            <td class="word-break email">example@gamil.com</td>
                            <td>

                                <table class="table">

                                    <tr>

                                        <thead>
                                            <th scope="col">Height</th>
                                            <th scope="col">Width</th>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="word-break height">Mark</td>
                                                <td class="word-break width">Otto</td>
                                            </tr>
                                        </tbody>
                                    </tr>
                                </table>



                            </td>
                            <td class="word-break color">Color</td>
                            <td class="word-break material">Material 2</td>
                            <td class="word-break position"> Position</td>
                            <td class="word-break price">200 $</td>
                            <td>
                                <div class="text-center">
                                    <img src="{{ asset('images/work.png') }}" alt="" style="max-width: 80%"> <br>

                                    <a href="{{ route('download_image', 2) }}">
                                        <span class="text-success"><i class="fas fa-download mt-2 "></i></span>
                                    </a>


                                </div>

                            </td>



                            <td class="align-middle">
                                <button title="Edit" type="button" class="dataEditItemClass btn btn-success btn-sm"
                                    id="data-edit-button" data-item-id=1> <i class="fa fa-eye" aria-hidden="false">
                                    </i></button>


                                <form method="POST" action="{{ route('orders.destroy', 1) }}" id="delete-form-1"
                                    style="display:none; ">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>




                                <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                    document.getElementById('delete-form-1').submit();
                   }
                   else{
                    event.preventDefault();
                   }
                   " class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>





                        </tr>


                        {{-- @endforeach --}}

                    </tbody>


                </table>
            </div>
        </div>
    </div>




    <!-- Attachment Modal -->
    <div class="modal fade" id="data-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-techbot-dark">
                    <h5 class="modal-title " id="edit-modal-label ">
                        Edit Admin</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="data-edit-form" class="form-horizontal" method="POST" action="">
                        @csrf
                        @method('put')

                        <div class="container">

                            <div class="form-group">
                                <label class="col-form-label" for="modal-update-hidden-id">Id</label>
                                <input type="text" name="id" class="form-control" id="modal-update-hidden-id" required
                                    readonly>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="modal-update-name">Name <span
                                                style="color: red">*</span></label>
                                        <input type="text" name="name" class="form-control" id="modal-update-name" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">

                                    <div class="form-group">
                                        <label class="col-form-label" for="modal-update-email">Email </label>
                                        <input type="email" name="email" class="form-control" id="modal-update-email" readonly>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-form-label" for="modal-update-size">Size :</label>

                                <table class="table">

                                    <tr>

                                        <thead class="text-center">
                                            <th scope="col">Height</th>
                                            <th scope="col">Width</th>
                                        </thead>

                                        <tbody>
                                            <tr class="text-center">
                                                <td class="modal-output-height" id="modal-output-height">Mark</td>
                                                <td class="modal-output-width" id="modal-output-width">Otto</td>
                                            </tr>
                                        </tbody>
                                    </tr>
                                </table>

                            </div>


                            <div class="row">
                                <div class="col-sm-12 col-md-6">

                                    <div class="form-group">
                                        <label class="col-form-label" for="modal-update-color">Color </label>
                                        <input type="text" name="color" class="form-control" id="modal-update-color" readonly>
                                    </div>



                                </div>
                                <div class="col-sm-12 col-md-6">

                                    <div class="form-group">
                                        <label class="col-form-material" for="modal-update-material">Material </label>
                                        <input type="text" name="material" class="form-control" id="modal-update-material" readonly>
                                    </div>


                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-12 col-md-6">

                                    <div class="form-group">
                                        <label class="col-form-label" for="modal-update-position">Position </label>
                                        <input type="text" name="position" class="form-control" id="modal-update-position" readonly>
                                    </div>



                                </div>
                                <div class="col-sm-12 col-md-6">

                                    <div class="form-group">
                                        <label class="col-form-label" for="modal-update-price">Total  </label>
                                        <input type="text" name="price" class="form-control" id="modal-update-price" readonly>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Attachment Modal -->


    <script>
        $(document).ready(function() {


            $('#dataTable').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });





            $(document).on('click', "#data-edit-button", function() {

                $(this).addClass(
                    'edit-item-trigger-clicked');
                var options = {
                    'backdrop': 'static'
                };
                $('#data-edit-modal').modal(options)
            });


            // on modal show
            $('#data-edit-modal').on('show.bs.modal', function() {

                var el = $(".edit-item-trigger-clicked");
                var row = el.closest(".data-row");

                // get the data
                var itemId = el.data('item-id');
                var name = row.children(".name").text();
                var email = row.children(".email").text();
                var height = row.children(".height").text();
                var width = row.children(".width").text();
                var color = row.children(".color").text();
                var material = row.children(".material").text();
                var position = row.children(".position").text();
                var price = row.children(".price").text();


                $("#modal-update-hidden-id").val(itemId);
                $("#modal-update-name").val(name);
                $("#modal-update-email").val(email);
                $("#modal-update-height").val(height);
                $("#modal-update-width").val(width);
                $("#modal-update-color").val(color);
                $("#modal-update-material").val(material);
                $("#modal-update-position").val(position);
                $("#modal-update-price").val(price);


            });



            // on modal hide
            $('#data-edit-modal').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            });




        });

    </script>



@endsection
