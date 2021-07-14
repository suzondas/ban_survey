@extends('components.adminTemplate')
@section('content')
    <style>
        .nav-link {
            color: black !important;
        }

        .tab-pane.active {
            border: 1px solid green !important;
            background: white !important;
        }

        .nav-link.active {
            background: dodgerblue !important;
        }

        .tab-pane {
            color: black;
        }

        .tab-content .row {
            margin: 5px;
            padding: 5px;
            border: 1px dashed grey;
        }
    </style>
    <div class="container">
        <div class="shadow mb-5 bg-white rounded p-2 table-responsive mt-2">
            <a href="/logout" class="float-right logOutButton btn" style="">Logout</a>
            <h5 class="m-1 text-center font-weight-bold">BANBEIS Panel
            </h5>
            <hr>
            <div class="table-bordered">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#summery" role="tab"
                           aria-controls="summery">Summery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Settings</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3">
                                <canvas id="submitted" style="width:100%;"></canvas>
                                <script>
                                    var xValues = ["Total", "Submitted"];
                                    var yValues = [24, 15];
                                    var barColors = [
                                        "purple",
                                        "dodgerblue"
                                    ];

                                    new Chart("submitted", {
                                        type: "pie",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                            }]
                                        },
                                        options: {
                                            title: {
                                                display: true,
                                                text: "Submitted Graph"
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Total Institues</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Submitted</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Not Submitted</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3">
                                <canvas id="verified" style="width:100%;"></canvas>
                                <script>
                                    var xValues = ["Total", "Verified"];
                                    var yValues = [55, 49];
                                    var barColors = [
                                        "#b91d47",
                                        "#00aba9"
                                    ];

                                    new Chart("verified", {
                                        type: "pie",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                            }]
                                        },
                                        options: {
                                            title: {
                                                display: true,
                                                text: "Verified by USEO Graph"
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Total Institues</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Verified by USEO</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Not Verified by USEO</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <canvas id="divisions" style="width:100%;"></canvas>
                                <script>
                                    new Chart(document.getElementById("divisions"), {
                                        type: 'bar',
                                        data: {
                                            labels: ["Dhaka", "Chattogram", "Sylhet", "Rangpur","Rajshahi","Barisal","Khulna","Mymensingh"],
                                            datasets: [
                                                {
                                                    label: "Total",
                                                    backgroundColor: "#3e95cd",
                                                    data: [133,221,783,2478,122,321,112,423,]
                                                }, {
                                                    label: "Submitted",
                                                    backgroundColor: "#8e5ea2",
                                                    data: [408,547,675,734,121,4232,232,1211]
                                                }
                                            ]
                                        },
                                        options: {
                                            title: {
                                                display: true,
                                                text: 'Population growth (millions)'
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>Submitted</td>
                                    </tr>
                                    <tr>
                                        <td>Dhaka</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Chattogram</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Sylhet</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rangpur</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rajshahi</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Barisal</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Khulna</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Mymensingh</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" style="padding:5px;" id="summery" role="tabpanel">
                        <h4 align="center" style="color:black;">Institutes Summery</h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr class="custom-table-header">
                                <td align="center">&nbsp;</td>
                                <td align="center">Total Institute</td>
                                <td align="center">School</td>
                                <td align="center">Madrasha</td>
                                <td align="center">College</td>
                                <td align="center">School&amp; College</td>
                                <td align="center">Technical Institution</td>
                                <td align="center">Teacher Training Inst.</td>
                                <td align="center">Professional Inst.</td>
                                <td align="center">Public University</td>
                                <td align="center">Private University</td>
                                <td align="center">English Medium</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Submitted</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Not Submitted</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Verfied by USEO</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Verified by DEO</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Verified by BANBEIS</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel"></div>
                    <div class="tab-pane" id="settings" role="tabpanel"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/chart.min.js') }}" type="text/javascript"></script>

@endsection
