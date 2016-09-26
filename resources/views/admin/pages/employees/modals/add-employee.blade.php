
<!-- Modal Add Employees -->
<div class="modal fade " id="modal-employess" tabindex="-1" role="dialog" aria-labelledby="modal-employess">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">إضافة موظف جديد</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>الكود</label>
                            <input type="text" class="form-control required" placeholder="مثال:12345" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>الأسم</label>
                            <input type="text" class="form-control required" placeholder="مثال: أحمد" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>التليفون</label>
                            <input type="tel" class="form-control required" placeholder="مثال: 010123456789" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>العنوان</label>
                            <input type="text" class="form-control" placeholder="مثال: القاهرة-15 ش المعز" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>البريد الإليكترونى</label>
                            <input type="email" class="form-control" placeholder="مثال: Ahmed@ymail.com" >
                        </div>
                        <div class="form-group col-sm-4">
                            <label>نوع الموظف</label>
                            <select name="type" class="form-control required"><option>أختر نوع الموظف</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>الراتب</label>
                            <input type="text" class="form-control required" placeholder="مثال: 2000 ج م" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>تاريخ البدء</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-sm-4">
                            <label>تاريخ الإنتهاء</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>أسم الحساب</label>
                            <select name="type" class="form-control required" required><option>أختر نوع الحساب</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>                    </div>
                        <div class="form-group col-sm-4">
                            <label>صورة</label>
                            <input type="file" id="">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>ملاحظات</label>
                            <textarea id="" maxlength="250" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">غلق</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat">
                        حفظ <span class="glyphicon glyphicon-save"> </span>
                    </button>
                </div> 
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


