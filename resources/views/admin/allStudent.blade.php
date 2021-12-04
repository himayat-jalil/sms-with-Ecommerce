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
                        <add-new></add-new>
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
                    <th style="width:3%;" scope="col">ID</th>
                    <th style="width:12%;" scope="col">Name</th>
                    <th style="width:12%;" scope="col">Father Name</th>
                    <th style="width:6%;" scope="col">Gender</th>
                    <th style="width:6%;" scope="col">Class</th>
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
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->className }}</td>
                        <td><img src="{{ asset('images/first.jpg') }}"
                                style="width:60px; height:60px; border-radius:50%;"></td>
                        <td>
                            <div class="d-flex flex-row">
                                <div class="p-2"><button class="btn btn-primary btn-sm">Update</button>
                                </div>
                                <div class="p-2"><button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                                <div class="p-2"><button class="btn btn-primary btn-sm"><a
                                            href="{{ url('student/' . $student->id) }}">View</a></button>
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
