@extends('admin.admin-home')

@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 mb-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bd-example-modal-lg">Add New</button>

            </div>
        </div>
        {{-- add new student model --}}
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    {{-- add new student form started --}}
                    <div class="container applicationContainer">
                        <div class="row mt-4">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" id="submitHeader">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="p-2">
                                        <h4>Student Application Form</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <form action="addNew_submit" method="get" accept-charset="utf-8" class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2 p-2">
                                    Student Name:
                                </div>
                                <div class="col-md-8 p-2">
                                    <input type="text" name="name" placeholder="Enter Student Name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2 p-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1"> Male </label>
                                    </div>
                                </div>
                                <div class="col-md-2 p-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1"> Female </label>
                                    </div>
                                </div>
                                <div class="col-md-2 p-2">Date of Birth:</div>
                                <div class="col-md-3">
                                    <input type="date" name="dateOfBirth" placeholder="Enter Date of Birth"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2 p-3">Place of Birth:</div>
                                <div class="col-md-3 p-2">
                                    <input type="text" name="placeOfBirth" placeholder="Place of Birth"
                                        class="form-control">
                                </div>
                                <div class="col-md-3 p-3">Primary Language spoken at home:</div>
                                <div class="col-md-2 p-2">
                                    <input type="text" name="placeOfBirth" placeholder="Language" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-sm-5  p-3"><ins>House Address:</ins></div>
                                <div class="col-md-5 p-3"><ins>Telephone Number:</ins></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 p-3"></div>
                                <div class="col-md-5">
                                    <div class="d-flex flex-column">
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control" placeholder="Street">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control" placeholder="City">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control"
                                                placeholder="Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex flex-column">
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control"
                                                placeholder="Home Phone">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control"
                                                placeholder="Mom's Cell Phone">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="street" class="form-control"
                                                placeholder="Dad's Cell Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 p-3"></div>
                                <div class="col-md-2 p-3">Email Address:</div>
                                <div class="col-md-8 p-2">
                                    <input type="email" name="email" placeholder="Enter Email Address"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 p-3"></div>
                                <div class="col-md-2 p-3">Permanent Address:</div>
                                <div class="col-md-8 p-2">
                                    <input type="email" name="email" placeholder="Permanent Address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 p-3"></div>
                                <div class="col-md-7">
                                    <ins>Guardian's details</ins>
                                    <div class="d-flex flex-column">
                                        <div class="p-2">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="workPlace" class="form-control"
                                                placeholder="Work place">
                                        </div>
                                        <div class="p-2">
                                            <input type="text" name="occupation" class="form-control"
                                                placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 p-3"></div>
                                <div class="col-md-2 p-3">Class:</div>
                                <div class="col-md-3 p-2">
                                    <input type="email" name="class" placeholder="Select Class" class="form-control">
                                </div>
                                <div class="col-md-2 p-3">Admission date:</div>
                                <div class="col-md-3 p-2">
                                    <input type="date" name="admissionDate" placeholder="Admission Date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 p-3"></div>
                                <div class="col-md-4 p-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 p-3"></div>
                                <div class="col-md-6 m-3">
                                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- add new form end --}}
                </div>
            </div>
        </div>
        {{-- model end --}}
        {{-- students --}}
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th style="width:5%;" scope="col">ID</th>
                    <th style="width:12%;" scope="col">Name</th>
                    <th style="width:12%;" scope="col">Father Name</th>
                    <th style="width:10%;" scope="col">Class</th>
                    <th style="width:10%;" scope="col">Image</th>
                    <th style="width:11%;" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->childName }}</td>
                        <td>{{ $student->FatherName }}</td>
                        <td>{{ $student->className }}</td>
                        <td><img src="{{ asset('images/first.jpg') }}"
                                style="width:60px; height:60px; border-radius:50%;"></td>
                        <td>
                            <div class="d-flex flex-row">
                                <div class="p-2"><button class="btn btn-primary btn-sm">Update</button>
                                </div>
                                <div class="p-2"><button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                                <div class="p-2"><button class="btn btn-primary btn-sm">view</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- end students --}}
    </div>


@endsection
