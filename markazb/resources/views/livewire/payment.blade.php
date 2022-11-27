<div>
   
    <div class="col-xl-12 col-lg-6">
        <div class="card alert alert-success">
            <div class="d-flex justify-content-between w-10">
                <div class="alert alert-danger ">
                    <input type="text" placeholder="qidirish" class="form-control" wire:model="search">

                </div>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="fname">ism</label>
                                <input type="text" class="form-control" value="" id="fnam">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label"></label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option value="">----</option>
                                        @foreach ($kurss as $kurs)
                                        <option value="{{$kurs->id}}">{{$kurs->k_name}}</option>
                                        @endforeach                                  
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h5 class="mb-3">Security</h5>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label" for="uname">Guruh</label>
                                <h2 class="alert alert-danger"></h2>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="pass">Kun</label>
                                <h2 class="alert alert-danger"></h2>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="rpass">Soat</label>
                                <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Add New User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
