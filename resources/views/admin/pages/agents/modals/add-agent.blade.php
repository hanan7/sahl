<!-- Modal Add Agent -->
<div class="modal fade " id="modal-agents" tabindex="-1" role="dialog" aria-labelledby="modal-agents">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">إضافة وكيل جديد</h4>
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
                        <div class="form-group col-sm-6">
                            <label>العنوان</label>
                            <input type="text" class="form-control" placeholder="مثال: القاهرة-15 ش المعز" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>البريد الإليكترونى</label>
                            <input type="email" class="form-control" placeholder="مثال: Ahmed@ymail.com" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>نوع الوكيل</label>
                            <select name="type" class="form-control required" required><option>أختر نوع الوكيل</option>
                                <option value="">رئيسى</option>
                                <option value="">فرعى</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>النقاط الرئيسية</label>
                            <input type="text" class="form-control required" placeholder="200" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>نقاط البيع</label>
                            <input type="text" class="form-control required" placeholder="300" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>نقاط المرتجع</label>
                            <input type="text" class="form-control required" placeholder="300" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>أسم الحساب</label>
                            <select name="type" class="form-control required" required><option>أختر نوع الحساب</option>
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
                            <label>مدين</label>
                            <input type="number" class="form-control required" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>دائن</label>
                            <input type="number" class="form-control required" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>الموقع</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>ملاحظات</label>
                            <textarea id="" maxlength="250" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>صورة</label>
                            <input type="file" id="">
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
