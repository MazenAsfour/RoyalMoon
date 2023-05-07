@extends('dashboard.layouts.app')
@section('title')
    Appointments
@endsection
@push('custom-style')
    <style>
        .pointer {
            cursor: pointer;
        }

        .fa-times {
            color: rgb(214, 0, 0)
        }

        .ds-none {
            display: none
        }

        .p-20 {
            padding: 0 0 20px
        }

        th,
        td {
            vertical-align: middle !important
        }
        .bold-row td{
            font-weight: 500 !important
        }
       
        .fa {
            cursor: pointer;
        }

        #choosedAppointents {
            margin: 20px 0;
        }

        #choosedAppointents span {
            font-weight: 600
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 0.5px !important;
            height: .5px !important;

        }

        #exTab1 {}
    </style>
@endpush
@section('content')
    <!-- right content -->
    <div id="content">

        <!-- dashboard inner -->
        <div class="midde_cont">
            <div class="container-fluid">
                <div class="row column_title">
                    <div class="col-md-12">
                        <div class="page_title">
                            <h2 style="display: inline-block">Appointments</h2>

                            <span style="display: inline-block;float:right">
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            </span>
                        </div>

                    </div>
                </div>
                <div class="container">

                    <div id="exTab1" class="container">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1a" data-toggle="tab">All Appointments</a>
                            </li>
                            <li><a href="#2a" data-toggle="tab">Approved Appointments</a>
                            </li>
                            <li><a href="#3a" data-toggle="tab">Pending Appointments</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">

                                <div class="well">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Product Name</th>
                                                <th>Total Price</th>
                                                <th>Check In Date</th>
                                                <th>Check Out Date</th>
                                                {{-- <th>User Appointment Status</th> --}}
                                                <th>Admin Approved</th>
                                                <th style="width: 15px;"></th>
                                                <th style="width: 15px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)
                                                @if ($appointment->is_read == 0)
                                                @php $bold="bold-row" @endphp
                                                @else
                                                    @php $bold="" @endphp
                                                @endif
                                                <tr class="{{$bold}}" id="{{ $appointment->id }}">
                                                    <td>{{ $appointment->id }}</td>
                                                    <td class="name ">{{ $appointment->name }}</td>
                                                    <td class="email d-none">{{ $appointment->email }}</td>
                                                    <td class="product">{{ $appointment->product_name }}</td>
                                                    <td class="price">{{ $appointment->product_total_price }}</td>
                                                    <td class="in">{{ $appointment->product_checkin_date }}</td>
                                                    <td class="out"> {{ $appointment->product_checkout_date }}</td>
                                                    {{-- @if ($appointment->is_verifiyed == 1 && $appointment->is_approved == 0)
                                                        <td>Pending</td>
                                                    @elseif($appointment->is_verifiyed == 1 && $appointment->is_approved == 1)
                                                        <td>Approved</td>
                                                    @else
                                                        <td>Waiting To Verifiy</td>
                                                    @endif --}}
                                                    @if ($appointment->is_approved == 1)
                                                        <td>Approved</td>
                                                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    @elseif($appointment->is_approved == 0)
                                                        <td>Waiting To Approve</td>
                                                        <td><i class="fa fa-spinner"onclick="lanuchModalAppeove({{ $appointment->id }})"
                                                                aria-hidden="true"></i></td>
                                                    @else
                                                        {{-- <td>Waiting User</td>
                                                        <td><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </td> --}}
                                                    @endif
                                                    <td><i class="fa fa-times pointer"
                                                            onclick="lanuchModalDelete({{ $appointment->id }})"
                                                            aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="2a">
                                <div class="well">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Total Price</th>
                                                <th>Check In Date</th>
                                                <th>Check Out Date</th>
                                                <th>User Appointment Status</th>
                                                <th>Admin Approve</th>
                                                <th style="width: 15px;"></th>
                                                <th style="width: 15px;"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Approveds as $Approved)
                                                @if ($Approved->is_read == 0)
                                                @php $bold="bold-row" @endphp
                                                @else
                                                    @php $bold="" @endphp
                                                @endif
                                                <tr class="{{$bold}}" id="{{ $Approved->id }}">
                                                    <td>{{ $Approved->id }}</td>
                                                    <td class="name">{{ $Approved->name }}</td>
                                                    <td class="email d-none">{{ $Approved->email }}</td>
                                                    <td class="product">{{ $Approved->product_name }}</td>
                                                    <td class="price">{{ $Approved->product_total_price }}</td>
                                                    <td class="in">{{ $Approved->product_checkin_date }}</td>
                                                    <td class="out"> {{ $Approved->product_checkout_date }}</td>
                                                    @if ($Approved->is_verifiyed == 0 && $Approved->is_approved == 0)
                                                        <td>Pending</td>
                                                    @elseif($Approved->is_approved == 1)
                                                        <td>Approved</td>
                                                    @else
                                                        <td>Waiting To Verifiy</td>
                                                    @endif
                                                    @if ($Approved->is_approved == 1)
                                                        <td>Approved</td>
                                                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    @elseif($Approved->is_approved == 0)
                                                        <td>Waiting To Approve</td>
                                                        <td><i class="fa fa-spinner"onclick="lanuchModalAppeove({{ $Approved->id }})"
                                                                aria-hidden="true"></i></td>
                                                    @else
                                                        {{-- <td>Waiting User</td>
                                                        <td><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </td> --}}
                                                    @endif
                                                    <td><i class="fa fa-times pointer"
                                                            onclick="lanuchModalDelete({{ $Approved->id }})"
                                                            aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="3a">
                                <div class="well">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Total Price</th>
                                                <th>Check In Date</th>
                                                <th>Check Out Date</th>
                                                <th>User Appointment Status</th>
                                                <th>Admin Approve</th>
                                                <th style="width: 15px;"></th>
                                                <th style="width: 15px;"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendings as $pending)
                                                @if ($pending->is_read == 0)
                                                @php $bold="bold-row" @endphp
                                                @else
                                                    @php $bold="" @endphp
                                                @endif
                                                <tr class="{{$bold}}" id="{{ $pending->id }}">
                                                    <td>{{ $pending->id }}</td>
                                                    <td class="name">{{ $pending->name }}</td>
                                                    <td class="email d-none">{{ $pending->email }}</td>
                                                    <td class="product">{{ $pending->product_name }}</td>
                                                    <td class="price">{{ $pending->product_total_price }}</td>
                                                    <td class="in">{{ $pending->product_checkin_date }}</td>
                                                    <td class="out"> {{ $pending->product_checkout_date }}</td>
                                                    @if ($pending->is_approved == 1)
                                                        <td>Approved</td>
                                                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    @elseif($pending->is_approved == 0)
                                                        <td>Waiting To Approve</td>
                                                        <td><i class="fa fa-spinner"onclick="lanuchModalAppeove({{ $pending->id }})"
                                                                aria-hidden="true"></i></td>
                                                    @else
                                                        {{-- <td>Waiting User</td>
                                                        <td><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </td> --}}
                                                    @endif
                                                    <td><i class="fa fa-times pointer"
                                                            onclick="lanuchModalDelete({{ $pending->id }})"
                                                            aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog d-flex justify-content-center">
                <div class="modal-content w-100">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Appointments Want To Delete it</h5>
                        <button type="button" class="btn-close" onclick="hideModal()" data-mdb-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        Do You Want To delete This Appointment?
                    </div>
                    <input type="hidden" id="idSelected">
                    <div class="alert alert-success alert-success-delete ds-none"
                        style="padding:8px 12px;font-size:14px;margin:0 10px 10px " role="alert">
                        Deleted Appointment Seccuessfully
                    </div>
                    <div class="modal-footer text-right">
                        <button class="btn btn-light" onclick="hideModal()">Cancel</button>
                        <button class="btn btn-primary" onclick="deleteAppointment()">Confirm And Delete</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-approve" id="modal-approve" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog d-flex justify-content-center">
                <div class="modal-content w-100">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Approve Appointments</h5>
                        <button type="button" class="btn-close" onclick="hideModal()" data-mdb-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div style="font-size: 17px">Do You Want To Approve This Appointment?</div>

                        <div id="choosedAppointents">
                            <div>Name : <span class="name"></span></div>
                            <div>Email : <span class="email"></span></div>
                            <div>Apartment Name : <span class="product"></span></div>
                            <div>Price : <span class="price"></span></div>
                            <div>Date : <span class="date"></span></div>
                        </div>
                        <div>
                            <p>Make sure when you approving this appointment. our site will send notifications to <span
                                    class="nameSelected"></span> and let him know on appointments details.</p>
                        </div>
                    </div>
                    <form id="form-approve" method="post">
                        @csrf
                        <input type="hidden" name="id" id="idAppointments">
                        <input type="hidden" name="name" class="name">
                        <input type="hidden" name="date" class="date">
                        <input type="hidden" name="price" class="price">
                        <input type="hidden" name="email" class="email">
                        <input type="hidden" name="product" class="product">

                        <div class="alert alert-success alert-success-approve ds-none"
                            style="padding:8px 12px;font-size:14px;margin:0 10px 10px " role="alert">
                            Approved Appointment Seccuessfully
                        </div>
                        <div class="modal-footer text-right">
                            <input type="button" class="btn btn-light" onclick="hideModal()" value="Cancel">
                            <input type="submit" class="btn btn-primary" value="Confirm And Approve">
                            <div class="spinner-border spinner-border-sm" style="display:none" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function lanuchModalDelete(id) {
                $('#modal-delete').modal("show");
                $("#idSelected").val(id)

            }

            function hideModal() {
                $(".modal").each(function() {
                    $(this).modal("hide")
                })
            }

            function deleteAppointment() {
                $.ajax({
                    type: 'POST',
                    url: "/delete-appointment",
                    data: {
                        "_token": $('#token').attr('content'),
                        "id": $("#idSelected").val(),
                    },

                    success: (data) => {
                        $(".alert-success-delete").show();
                        setTimeout(() => {
                            location.reload();
                        }, 3000);

                    },
                    error: function(data) {}
                });
            }

            function lanuchModalAppeove(id) {
                $('#modal-approve').modal("show");
                $("#idAppointments").val(id);
                // console.log(id)
                indate = $("#" + id + " .in").text();
                outdate = $("#" + id + " .out").text();
                $(".nameSelected").text($("#" + id + " .name").text())

                $("#choosedAppointents .name").text($("#" + id + " .name").text())
                $("#choosedAppointents .email").text($("#" + id + " .email").text())
                $("#choosedAppointents .product").text($("#" + id + " .product").text())
                $("#choosedAppointents .price").text($("#" + id + " .price").text())


                $("#form-approve .name").val($("#" + id + " .name").text())
                $("#form-approve .email").val($("#" + id + " .email").text())
                $("#form-approve .product").val($("#" + id + " .product").text())
                $("#form-approve .price").val($("#" + id + " .price").text())


                $("#choosedAppointents .date").text("From " + indate + " to " + outdate)
                $("#form-approve .date").val("From " + indate + " to " + outdate)
            }

            $(document).ready(function() {
                $.ajax({
                    type: 'POST',
                    url: "/read-appointment",
                    data: {
                        "_token": $('#token').attr('content'),
                    },

                    success: (data) => {
                    },
                    error: function(data) {}
                });
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").not(':first').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                $(".nav-pills li").each(function() {
                    $(this).click(function() {
                        $(this).removeClass("active")
                    })
                })
                $(".nav-pills li a").each(function() {
                    $(this).click(function() {
                        $(".nav-pills li").each(function() {
                            $(this).removeClass("active");
                        })
                    })
                })
                $('#form-approve').submit(function(e) {
                    e.preventDefault();
                    $(".spinner-border").show();

                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST',
                        url: "/approve-appointments",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            $(".alert-success-approve").show();
                            $(".spinner-border").hide();
                            setTimeout(() => {
                                location.reload();
                            }, 3000);

                        },
                        error: function(data) {}
                    });

                });
            })
        </script>
    @endsection
