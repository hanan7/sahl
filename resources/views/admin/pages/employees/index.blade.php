
@extends('admin.master')

@section('title')
Employees
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">عرض الموظفين</h3>

            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="margin-bottom inline-block">
                <div class="addNew col-xs-2">
                    <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target="#modal-employess"> 
                        <i class="fa fa-plus"></i>
                        جديد
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8 pull-left">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="بحث عن ...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm btn-flat" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>الكود</th>
                            <th>الأسم</th>
                            <th>التليفون</th>
                            <th>العنوان</th>
                            <th>الإيميل</th>
                            <th>نوع الموظف</th>
                            <th>االراتب</th>
                            <th>تاريخ البدء</th>
                            <th>تاريخ الإنتهاء</th>
                            <th>كود الحساب</th>
                            <th>صورة</th>
                            <th>ملاحظات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>الكود</th>
                            <th>الأسم</th>
                            <th>التليفون</th>
                            <th>العنوان</th>
                            <th>الإيميل</th>
                            <th>نوع الموظف</th>
                            <th>االراتب</th>
                            <th>تاريخ البدء</th>
                            <th>تاريخ الإنتهاء</th>
                            <th>كود الحساب</th>
                            <th>صورة</th>
                            <th>ملاحظات</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <nav aria-label="Page navigation" class=" pull-left">
                <ul class="pagination">
                    <li  class="disabled">
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li  class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">أنواع الموظفين</h3>

            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="margin-bottom inline-block">
                <div class="addNew col-xs-2">
                    <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target="#modal-employess-type"> 
                        <i class="fa fa-plus"></i>
                        جديد
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8 pull-left">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="بحث عن ...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm btn-flat" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>الأسم</th>
                            <th>النوع</th>
                            <th>ملاحظات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet</td>
                            <td>Win 95+</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>الأسم</th>
                            <th>النوع</th>
                            <th>ملاحظات</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <nav aria-label="Page navigation" class=" pull-left">
                <ul class="pagination">
                    <li  class="disabled">
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li  class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
@section('modals')
@include('admin.pages.employees.modals.add-employee')
@include('admin.pages.employees.modals.add-employee-type')
@endsection

@section('scripts')
<!-- page script -->
<script>    
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>
@endsection
@endsection
