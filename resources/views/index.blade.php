@extends('includes.app')

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

<form action="{{ route('order-save') }}" id="form" method="post" enctype="multipart/form-data">
    @csrf

<main id="main-container-page" class="container mt-5 p-0">
    <div>
        <div id="breadcamp-part" class="border-bottom py-4 col-lg-10 mx-auto col-10">
            <p class="m-0">
                {{-- <span class="px-2">Home/</span> <span class="px-2"> Windscreen Design Center /</span>
                <span class="px-2">Order Windscreen</span> --}}
            </p>
        </div>
        {{-- <hr /> --}}
    </div>

    <div class="">
        <div class="col-lg-10 mx-auto col-10">
            <div class="row align-items-center mb-5">
                <div class="col-md-2 text-start text-md-center">
                    <img style="width: 144px" src="https://cdn.shopify.com/s/files/1/1565/4441/t/2/assets/icon-hartru-windscreen-design-center.png?v=16261679283228407331" alt="" class="" />
                </div>
                <div class="col-md-9">
                    <h3 class="text-success">HAR-TRU</h3>
                    <h2 class="fw-bolder text-dark">WINDSCREEN DESIGN CENTER</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- customiaz section start from here -->
    <section>
        <div class="col-lg-10 mx-auto col-10 d-none d-md-block">
            <div class="title">
                <h3 class="mb-0">Customize, and Order Your Windscreen</h3>
                <hr class="cs-hr" />
            </div>
            <div class="img-preview text-center">
                <img src="https://cdn.shopify.com/s/files/1/1565/4441/t/2/assets/default-gray-space-holder-windscreen-designer.png.png?v=11040843856678931694" alt="" class="img-fluid" />
            </div>
        </div>
    </section>

    <section id="form-part" class="mb-4 pb-4">
        <div class="col-lg-10 mx-auto col-10">
            <div class="grid">
                <!-- grid content box 1 -->
                <div class="p-3">
                    <div class="title">
                        <div class="row">
                            <div class="col-6">
                                <h4>Width <span class="text-danger">*</span></h4>
                            </div>
                            <div class="col-6">
                                <h4>Height <span class="text-danger">*</span></h4>
                            </div>
                        </div>
                    </div>
                    <hr class="cs-hr" />
                    <div class="content">
                        <div class="height-width-inputs row row-cols-md-4">
                            <div class="inputHeightOrWidth"><input type="number" name="width_feet" id="widthFeet" class="form-control" placeholder="ft"  required/></div>
                            <div class="inputHeightOrWidth"><input type="number" name="width_inch" id="widthInch" class="form-control" placeholder="in" /></div>
                            <div class="inputHeightOrWidth"><input type="number" name="height_feet" id="heightFeet" class="form-control" placeholder="ft" required/></div>
                            <div class="inputHeightOrWidth"><input type="number" name="height_inch" id="heightInch" class="form-control" placeholder="in"/></div>
                        </div>
                    </div>
                </div>

                <!-- grid content box 2 -->
                <div class="p-3">
                    <div class="title">
                        <h3>Material <span class="text-danger">*</span></h3>
                    </div>
                    <hr class="cs-hr" />
                    <div class="content">
                        <select class="form-select" aria-label="Default select example" name="material" required id="SelectBox">
                            <option selected disabled value>Select A Material</option>
                            <option value="COURTMASTER Pro Open Mesh 84% Opacity">COURTMASTER Pro Open Mesh 84% Opacity</option>
                            <option value="COURTMASTER Classic Closed Mesh 96% Opacity">COURTMASTER Classic Closed Mesh 96% Opacity</option>
                            <option value="COURTMASTER Elite Open Mesh 75% Opacity">COURTMASTER Elite Open Mesh 75% Opacity</option>
                            <option value="COURTMASTER Royale Open Mesh 80% Opacity">COURTMASTER Royale Open Mesh 80% Opacity</option>
                            <option value="COURTMASTER Classic Open Mesh 85% Opacity">COURTMASTER Classic Open Mesh 85% Opacity</option>
                        </select>
                    </div>
                    <div class="p-3"></div>
                </div>

                <!-- grid content box 3 -->

                <div class="p-3">
                    <div id="colorTitle" class="title">color <span class="text-danger">*</span></div>
                    <hr class="cs-hr" />
                    <div class="colors-pattale">
                        <div class="content pb-5 colorBlock" id="categoryOne">
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='green' style="background-color: green;"></div>
                            <div class="color-box colorPciker"  dataColor='royalblue' style="background-color: royalblue;"></div>
                            <div class="color-box colorPciker"  dataColor='navy' style="background-color: navy;"></div>
                            <div class="color-box colorPciker"  dataColor='carolineblue' style="background-color: carolineblue;"></div>
                            <div class="color-box colorPciker"  dataColor='darkgreen' style="background-color: darkgreen;"></div>
                            <div class="color-box colorPciker"  dataColor='green' style="background-color: green;"></div>
                            <div class="color-box colorPciker"  dataColor='lightgray' style="background-color: lightgray;"></div>
                            <div class="color-box colorPciker"  dataColor='orange' style="background-color: orange;"></div>
                            <div class="color-box colorPciker"  dataColor='maroon' style="background-color: maroon;"></div>
                            <div class="color-box colorPciker"  dataColor='white' style="background-color: white; border:1px solid #ccc; "></div>
                            <div class="color-box colorPciker"  dataColor='yellow' style="background-color: yellow;"></div>
                            
                    </div>


                    <div class="content pb-5 colorBlock " id="categoryTwo" style="display: none;"> 
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='green' style="background-color: green;"></div>
                            <div class="color-box colorPciker"  dataColor='royalblue' style="background-color: royalblue;"></div>
                            <div class="color-box colorPciker"  dataColor='tan' style="background-color: tan;"></div>
                            <div class="color-box colorPciker"  dataColor='purple' style="background-color: purple;"></div>
                            <div class="color-box colorPciker"  dataColor='navy' style="background-color: navy;"></div>
                            <div class="color-box colorPciker"  dataColor='maroon' style="background-color: maroon;"></div>
                            <div class="color-box colorPciker"  dataColor='red' style="background-color: lightgray;"></div>
                           
                    </div>


                    <div class="content pb-5 colorBlock" id="categoryThree" style="display: none;">
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='darkgreen' style="background-color:darkgreen;"></div>
              
                           
                    </div>




                    <div class="content pb-5 colorBlock" id="categoryFour" style="display: none;">
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='green' style="background-color: green;"></div>
                            <div class="color-box colorPciker"  dataColor='royalblue' style="background-color: royalblue;"></div>
                            <div class="color-box colorPciker"  dataColor='navy' style="background-color: navy;"></div>
                            <div class="color-box colorPciker"  dataColor='carolineblue' style="background-color: carolineblue;"></div>
                            <div class="color-box colorPciker"  dataColor='darkgreen' style="background-color: darkgreen;"></div>
                            <div class="color-box colorPciker"  dataColor='green' style="background-color: green;"></div>
                            <div class="color-box colorPciker"  dataColor='lightgray' style="background-color: lightgray;"></div>
                            <div class="color-box colorPciker"  dataColor='orange' style="background-color: orange;"></div>
                            <div class="color-box colorPciker"  dataColor='maroon' style="background-color: maroon;"></div>
                            <div class="color-box colorPciker"  dataColor='white' style="background-color: white; border:1px solid #ccc; "></div>
                            <div class="color-box colorPciker"  dataColor='yellow' style="background-color: yellow;"></div>
                           
                    </div>






                    <div class="content pb-5 colorBlock" id="categoryFive" style="display: none;">
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='darkgreen' style="background-color:darkgreen;"></div>
                            <div class="color-box colorPciker" dataColor='royalblue' style="background-color:royalblue;"></div>
                           
                    </div>




                    <div class="content pb-5 colorBlock" id="categorySix" style="display: none;">
                            <div class="color-box colorPciker" dataColor='black' style="background-color:black;"></div>
                            <div class="color-box colorPciker" dataColor='darkgreen' style="background-color:darkgreen;"></div>
              
                           
                          
                    </div>


                    <div id="colorError" style="display: none;" class="color-errors custom-error"><small class="alert alert-danger d-block">You must select a color.</small></div>
                    
                    
                    </div>
                   

                    <!-- grid content box 4 -->
                    <!-- color echanbcement part here -->
                    <div class="screen-enhancements">
                        <div class="title">
                            <h3>Windscreen Enhancements</h3>
                        </div>
                        <hr class="cs-hr" />
                        <div class="content">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault1" value="None"  checked/>
                                <label class="form-check-label" for="flexRadioDefault1"> None </label>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault2" value="Hot Cut Half Moon Vent" />
                                <label class="form-check-label" for="flexRadioDefault2"> Hot Cut Half Moon Vent </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault3" value="Bound Half Moon Vent" />
                                <label class="form-check-label" for="flexRadioDefault3"> Bound Half Moon Vent </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault4" value='Bound Window (6" x 12")' />
                                <label class="form-check-label" for="flexRadioDefault4"> Bound Window (6" x 12") </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault5" value='Bound Window (12" x 12")' />
                                <label class="form-check-label" for="flexRadioDefault5"> Bound Window (12" x 12")</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="enhancement" id="flexRadioDefault6" value='Heat Sealed Window (12" x 12") (6" x 12")' />
                                <label class="form-check-label" for="flexRadioDefault6">Heat Sealed Window (12" x 12") (6" x 12")</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  grid content box 4
                 file upload part here -->
                <div class="p-3">
                    <div class="title">
                        <h3>Logo or Graphic Upload</h3>
                    </div>
                    <hr class="cs-hr" />
                    <div class="content">
                        <!-- file upload part -->
                        <div class="file-upload-part">
                            <div class="input-group mb-1">
                                <input type="file" class="form-control"  name="image"id="inputGroupFile01" accept="image/*" />
                            </div>
                            <p class="small">Valid file extensions are jpg, png, jpeg</p>
                        </div>

                        <!-- make sure position part -->
                        <div class="position pt-5">
                            <div class="w-100 border row row-cols-1 row-cols-md-4 p-2">
                                <div class="radio-groups">
                                    <h5>Positions</h5>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="position" id="Left-position" value="Left" />
                                        <label class="form-check-label" for="Left-position"> Left </label>
                                    </div>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="position" id="Center-position" value="Center" />
                                        <label class="form-check-label" for="Center-position"> Center </label>
                                    </div>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="position" id="Right-position" value="Right" />
                                        <label class="form-check-label" for="Right-position"> Right </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position pt-3">
                            <div class="w-100 border row row-cols-1 row-cols-md-4 p-2">
                                <div class="radio-groups">
                                    <h5>Size</h5>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="size" id="Small-size" value="Small" />
                                        <label class="form-check-label" for="Small-size"> Small </label>
                                    </div>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="size" id="Medium-size"  value="Medium"/>
                                        <label class="form-check-label" for="Medium-size"> Medium </label>
                                    </div>
                                </div>
                                <div class="radio-groups">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="size" id="Big-size"  value="Big"/>
                                        <label class="form-check-label" for="Big-size"> Big </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- grid content 5 -->
                <div class="p-3">
                    <div class="content">
                        <div class="mb-3">
                            <h4>Segment Name <span class="text-danger">*</span></h4>
                            <hr class="cs-hr" />
                            <input type="text" class="form-control" name="segment_name"  required/>
                        </div>
                        <div class="">
                            <h4>Segment Note</h3>
                            <hr class="cs-hr" />
                            <textarea name="" id="" cols="30" rows="5" class="form-control" name="segment_note"  ></textarea>
                        </div>
                    </div>
                </div>

                <!-- grid content 5 -->
                <div class="p-3">
                    <div class="content">
                        <div class="p-3 text-center">
                            <div class="row total-cost-table">
                            <div class="col-md-5 col-12  border border-3 p-4  order-md-1 order-1">
                                <h4>Total Metarial</h4>
                            </div>
                            <div class="col-md-7 col-12 border border-3 p-4   order-md-2 order-3">
                                <h4>Total Estimated Cost</h4>
                            </div>
                            <div class="col-md-5 col-12 border border-3 p-4  order-md-3 order-2">
                                <h4 id="totalMaterial">0</h4><h4>sq ft</h4>
                            </div>
                            <div class="col-md-7 col-12 border border-3 p-4  order-md-4 order-4">
                                <h5 id="totalCost">Enter height, width and material for pricing</h5>
                            </div>

                        </div>
                        </div>
                        <div class="">
                            <div class="mb-3">
                            <h5>Email <span class="text-danger">*</span></h5>
                            <hr class="cs-hr" />
                            <input type="text" class="form-control" name="email"  required/>
                            <input type="text" class="form-control" name="total_area" id="totalArea" hidden/>
                            <input type="text" class="form-control" name="total_price" id="total_price" hidden/>
                            <input type="text" id="colorInput" name="color" hidden value="hello">
                            
                            </div>

                        </div>

                    </div>
                </div>
                 <button class="btn btn-info" id="SubmitBtn"  type="submit">Submit</button>
            </div>
        </div>
    </section>
</main>


</form>

<script>
    $(document).ready(function(){


        $('.inputHeightOrWidth').on('input',function(){
            
            if(!$('#widthInch').val()){
                $('#widthInch').val(0);
            }
            if(!$('#heightInch').val()){
                $('#heightInch').val(0);

            }
            if($('#widthFeet').val() &&  $('#heightFeet').val()){
                var width = $('#widthFeet').val();
                var height = $('#heightFeet').val();
                var area = width * height;
                if($('#widthInch').val() &&  $('#heightInch').val()){
                    area += $('#widthInch').val() * $('#heightInch').val() /144;
                }
                var cost = area * 1.5;
                $('#totalMaterial').text(parseFloat(area).toFixed(2));
                $('#totalCost').text('$ ' + parseFloat(cost).toFixed(2));

                $('#totalArea').val(parseFloat(area).toFixed(2));
                $('#total_price').val(parseFloat(cost).toFixed(2));
            }
            



        })



        $("#SubmitBtn").click(function(e){
            if($('#colorInput').val() == "hello" ){
                $('#colorError').show();
                $(window).scrollTop($('#colorTitle').offset().top-20)
                e.preventDefault();
            }
            
        });
        $('.colorPciker').on('click', function(){
            $('#colorError').hide();
            $('.selectedBox').removeClass('selectedBox');
            $(this).addClass('selectedBox');
            $('#colorInput').val($(this).attr('dataColor'));


        });

     var selected_option = $('#SelectBox option:selected');


     $('#SelectBox').change(function(){

         $('.colorBlock').hide()
        var selected_option = $('#SelectBox').val();

        if (selected_option == 'COURTMASTER Pro Open Mesh 84% Opacity'){
            $('#categoryTwo').show();
            // $('#colorInput').val() = "hello" ;
        }
        else if (selected_option== 'COURTMASTER Classic Closed Mesh 96% Opacity'){
            $('#categoryThree').show();
            // $('#colorInput').val() = "hello" ;
        }
        else if (selected_option== 'COURTMASTER Elite Open Mesh 75% Opacity'){
            $('#categoryFour').show();
            // $('#colorInput').val() = "hello" ;
        }
        else if (selected_option== 'COURTMASTER Royale Open Mesh 80% Opacity'){
            $('#categoryFive').show();
            // $('#colorInput').val() = "hello" ;
        }
        else if (selected_option == 'COURTMASTER Classic Open Mesh 85% Opacity'){
            $('#categorySix').show();
            // $('#colorInput').val() = "hello" ;
        }

        
     })
        

    });

</script>

@endsection