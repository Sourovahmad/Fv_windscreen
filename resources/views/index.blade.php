@extends('includes.app')

@section('content')
<form action="{{ route('order-save') }}" method="post">
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
                <h3 class="mb-0">Preview, Customize, and Order Your Windscreen</h3>
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
                            <div class=""><input type="number" name="width_feet" id="widthFeet" class="form-control" placeholder="ft"  required/></div>
                            <div class=""><input type="number" name="width_inch" id="widthInch" class="form-control" placeholder="in" /></div>
                            <div class=""><input type="number" name="height_feet" id="heightFeet" class="form-control" placeholder="ft" required/></div>
                            <div class=""><input type="number" name="height_inch" id="heightInch" class="form-control" placeholder="in"/></div>
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
                        <select class="form-select" aria-label="Default select example" name="material" required>
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
                    <div class="title">color <span class="text-danger">*</span></div>
                    <hr class="cs-hr" />
                    <div class="colors-pattale">
                        <div class="content pb-5">
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e458d4" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#edd894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                        <div data-color="#e45894" class="color-box"></div>
                    </div>
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
                                <input type="file" class="form-control" id="inputGroupFile01" />
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
                                <h2>0</h2>
                            </div>
                            <div class="col-md-7 col-12 border border-3 p-4  order-md-4 order-4">
                                <p>Total Estimated Cost</p>
                            </div>

                        </div>
                        </div>
                        <div class="">
                            <div class="mb-3">
                            <h5>Email <span class="text-danger">*</span></h5>
                            <hr class="cs-hr" />
                            <input type="text" class="form-control" name="email"  required/>
                            </div>

                        </div>

                    </div>
                </div>
                 <button class="btn btn-info"  type="submit">Submit</button>
            </div>
        </div>
    </section>
</main>


<script>

</script>

</form>
@endsection