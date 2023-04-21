@extends('layouts.app')
@section('title')
    My Profile
@endsection
@section('content')
<script>
    

</script>
    <div class="container-xl px-4 mt-18" style="margin-top: 80px;min-height:600px">

        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header" style="">
                        Profile Picture <i class="icon-chevron-down"
                            style="float:right;font-size: 21px;
                        padding-top: 2px;"></i></div>
                    <div class="card-body text-center">
                        <form id="form" method="POST" action="/dashboard-update-user" enctype="multipart/form-data">
                            <!-- Email input -->
                            @csrf
                            <div class="row">
                                <div class="small-12 medium-2 large-2 columns" style="position: relative;">
                                    <div class="circle">
                                        <img class="profile-pic" src="{{ $user[0]->image }}">
                                        <div class="p-image">
                                            <i class="icon-camera upload-button"></i>
                                            <input class="file-upload" name="image" type="file" accept="image/*" />
                                        </div>

                                    </div>
                                    <div class="alert alert-success alert-success-image ds-none"
                                        style="padding:8px 12px;font-size:14px" role="alert">
                                        Updated Your Profile Seccuessfully
                                    </div>
                                    <div class="alert alert-danger alert-danger-image ds-none" style="padding:8px 12px;font-size:14px"
                                        role="alert">
                                        Oops! something went wrong please try again. Supported images jpg,png,jpeg,gif,svg,webp
                                    </div>
                                    <p style="text-transform:capitalize;font-weight:500">Hey , {{ $user[0]->name }}</p>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" disabled class="btn btn-primary btn-block w-100">Upload new
                                profile</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div>
                        <div class="card-header">
                            Account Details <i class="icon-chevron-down"
                                style="float:right;font-size: 21px;
                        padding-top: 2px;"></i></div>
                        <div class="card-body">
                            <form id="update-details">
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <input type="hidden" name="id" value="{{ $user[0]->id }}">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        @php $name=explode(" ",$user[0]->name); @endphp
                                        @csrf
                                        <label class="small mb-1">First name</label>
                                        <input class="form-control" type="text" name="first_name"
                                            placeholder="Enter your first name" required value="{{ $name[0] }}">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    @php
                                    $second_name='';
                                    @endphp
                                    @isset($name[1])
                                        @php
                                        $second_name=$name[1];
                                        @endphp
                                    @endisset
                                    @isset($name[2])
                                        @php
                                        $second_name=$name[1]."".$name[2];
                                        @endphp
                                    @endisset
                                    <div class="col-md-6">
                                        <label class="small mb-1">Last name</label>
                                        <input class="form-control" name="second_name" type="text"
                                            placeholder="Enter your last name" required value="{{ $second_name }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1">Email address</label>
                                    <input class="form-control" value="{{ $user[0]->email }}" name="email" required
                                        type="email" placeholder="Enter your email address">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" required for="inputEmailAddress">About me</label>
                                    <textarea name="about" id="" cols="6" rows="3" value="" class="form-control">{{ $user[0]->about_user }}</textarea>
                                </div>
                                <div class="alert alert-success user-details-success ds-none"
                                    style="padding:8px 12px;font-size:14px" role="alert">
                                    Updated Your Details Seccuessfully
                                </div>
                                <input class="btn btn-primary" type="submit" value="Save changes">
                            </form>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="card-header">
                        Change Password <i class="icon-chevron-down"
                            style="float:right;font-size: 21px;
                    padding-top: 2px;"></i></div>
                    <div class="card-body" style="padding: 18px;margin-bottom:40px">
                        <form id="form1">
                            <!-- current Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label small mb-1" id="">Current Password</label>
                                <input type="password" id="cuurentPassword" placeholder="*********" required
                                    class="form-control" />
                            </div>

                            <!-- new password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label small mb-1" for="password1">New Password</label>
                                <input type="password" id="newPassword" required placeholder="*********"
                                    class="form-control" />
                            </div>
                            <input type="hidden" value="{{ $user[0]->id }}" id="idSelected">
                            <!-- Confirm password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label small mb-1" for="password1">Confirm Password</label>
                                <input type="password" id="confirmPassword"required placeholder="*********"
                                    class="form-control" />
                            </div>
                            <div class="alert alert-success alert-success-pass ds-none"
                                style="padding:8px 12px;font-size:14px" role="alert">
                                Updated Password Seccuessfully
                            </div>
                            <div class="alert alert-danger ds-none" style="padding:8px 12px;font-size:14px"
                                role="alert">
                                Oops! something went wrong please try again
                            </div>
                            <!-- Submit button -->
                            <button type="submit" onclick="updatePassword(event)"
                                class="btn btn-primary btn-block">Update
                                Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(".card-header").each(function() {
            $(this).click(function() {
                $(this).parent().find(".card-body").slideToggle();
            })
        })
        $('#update-details').submit(function(e) {
            e.preventDefault();
            var form = $(this);

            $.ajax({
                type: 'POST',
                url: "/my-profile-update-user",
                data: form.serialize(),
                success: (data) => {
                    $(".user-details-success").show();
                    setTimeout(() => {
                        $(".user-details-success").hide();
                        location.reload();
                    }, 3000);

                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        function updatePassword() {
            if (document.getElementById('form1').checkValidity() == true) {
                event.preventDefault();
                var currentPassword = $("#cuurentPassword").val();
                var newPassword = $("#newPassword").val();
                var confirmPassword = $("#confirmPassword").val();
                var id = $("#idSelected").val();
                if (newPassword !== confirmPassword) {
                    $(".alert-danger").show();
                } else {
                    $.ajax({
                        method: "post",
                        url: "/update-user-password",
                        data: {
                            'id': id,
                            '_token': $('#token').attr('content'),
                            'newPassword': newPassword,
                            'currentPassword': currentPassword,
                        }
                    }).done(function(data) {
                        data1 = JSON.parse(data)
                        if (data1.error) {
                            setTimeout(() => {
                                $(".alert-danger").hide();
                                $(".alert-danger").show();
                            }, 3000);
                        } else {
                            $(".alert-success-pass").show();
                            $(".alert-danger").hide();
                        }
                    });
                }
            }

        }

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/upload-image-user",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    console.log(JSON.parse(data));
                    data1=JSON.parse(data);
                    if(data1.success){
                        console.log("true");
                        $(".alert-danger-image").hide();
                        $(".alert-success-image").show();
                    }else{
                        $(".alert-danger-image").show();
                        $(".alert-success-image").hide();
                    }
                   
                    setInterval(() => {
                       // location.reload();
                    }, 3000);
                },
                error: function(data) {
                    $(".alert-danger-image").show();
                    $(".alert-success-image").hide();
                }
            });
        });
        $(".file-upload").on('change', function() {
            readURL(this);
            $("#form button").removeAttr("disabled")
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    </script>
@endsection
