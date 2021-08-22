@extends('master')

@section('content')
    <div class="container">
        <div class="container">
            <h3 align="center">Import Excel File</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    Upload Validation Error<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form method="post" enctype="multipart/form-data" action="{{ url('/import_category_excel') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <table class="table">
                        <tr>
                            <td width="40%" align="right"><label>Select File for Upload</label></td>
                            <td width="30">
                                <input type="file" name="select_file" />
                            </td>
                            <td width="30%" align="left">
                                <input type="submit" name="upload" class="btn btn-primary upload" value="Upload">
                            </td>
                        </tr>

                    </table>
                </div>
            </form>
            <br />
        </div>
    </div>
@endsection
