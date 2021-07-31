@extends('admin.app')
@section('title') User Profile @endsection
@section('content')
    <div class="row">
        <div class="col-md-8 profile-edit" style="display: none;">
            <div class="card">
                <div class="card-header card-header-userprofile" data-color="purple">
                    <h4 class="card-title">Edit Profile</h4>
                    <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company (disabled)</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-floating">Username</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fist Name</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Adress</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">City</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Country</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Postal Code</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Something about you:</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Propeller File Input Inverse -->
                            <div class="card pmd-card bg-dark text-white">
                                <div class="card-body"> 
                                    <div class="custom-file pmd-custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right btn_style">Update Profile</button>
                                <input type="button" class="btn btn-default user-cancel-btn pull-right" value="Cancel" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 profile-show">
            <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                <img class="img" src="{{ asset('backend/img/faces/marc.jpg') }}" />
                </a>
            </div>
            <div class="card-body">
                <h6 class="card-category">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <button class="btn btn-primary btn-round btn_style-round user-edit-btn">Edit</button>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Display alert message after toggling paragraphs
        // $('a#a_tbnotesverbergen').text('new text');
        $(document).on('click', '.user-edit-btn', function(){
            $('.profile-show').removeClass('col-md-12');
            $('.profile-show').addClass('col-md-4');
            $('.user-edit-btn').css('display', 'none');
            $('.profile-edit').slideToggle(500);
        });

        $(document).on('click', '.user-cancel-btn', function(){
            $('.profile-show').removeClass('col-md-4');
            $('.profile-show').addClass('col-md-12');
            $('.user-edit-btn').css('display', 'inline-block');
            $('.profile-edit').slideToggle(500);
        });
</script>
@endpush