@extends('admin.layout.base')

@section('title', 'Dispute ')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        
        <div class="box box-block bg-white">
            <h4 class="mb-1">Dispute</h4>
            <a href="#" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Dispute</a>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Date</th>
                        <th>Disputer Name</th>
                        <th>Dispute To</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>12.10.2017</td>
                        <td>Paul Wesley</td>
                        <td>John Doe</td>
                        <td><p class="dispute-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></td>
                        <td>$120</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-warning"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>12.10.2017</td>
                        <td>Paul Wesley</td>
                        <td>John Doe</td>
                        <td><p class="dispute-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                        <td>$120</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-warning"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>12.10.2017</td>
                        <td>Paul Wesley</td>
                        <td>John Doe</td>
                        <td><p class="dispute-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></td>
                        <td>$120</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-warning"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection