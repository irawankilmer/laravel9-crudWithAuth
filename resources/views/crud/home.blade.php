@extends('layouts.app')

@push('style')
<link href="{{asset('style/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('style/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('style/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('style/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('style/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endpush

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Users <small>Some examples to get you started</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Button Example <small>Users</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
              </p>
              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nisn</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telepon</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>


                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $student->nisn }}</td>
                            <td>{{ $student->fullName }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="{{ url('/'.$student->id) }}" class="btn btn-sm btn-success">Show</a>
                                <a href="{{ url('/'.$student->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url('/'.$student->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $no++
                        @endphp
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection

@push('scripts')
    <!-- Datatables -->
    <script src="{{asset('style/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('style/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('style/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('style/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('style/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('style/pdfmake/build/vfs_fonts.js')}}"></script>
@endpush