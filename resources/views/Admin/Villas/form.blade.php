<div class="modal fade bd-example-modal-lg" id="formModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formSubmit">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="titleOfModel"><i class="ti-marker-alt m-r-10"></i> Add new </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">villa number</label>
                                <input type="text" id="villa_number" name="villa_number"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">number of rooms</label>
                                <input type="text" id="number_of_rooms" name="number_of_rooms"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">number of bathrooms</label>
                                <input type="text" id="number_of_bathrooms" name="number_of_bathrooms"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>compound</label>
                                <select class="custom-select col-12" id="cat_id" onchange="getCat()" name="cat_id" >
                                    <option value="">choose </option>
                                    @foreach($compound as $row)
                                        <option value="{{$row->id}}"> {{$row->compound_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-email">other details</label>
                                <textarea type="text" id="other_details" name="other_details"  class="form-control" ></textarea>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="err"></div>
                <input type="hidden" name="id" id="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">close</button>
                    <button type="submit" id="save" class="btn btn-success"><i class="ti-save"></i> save</button>
                </div>
            </form>
        </div>
    </div>
</div>
