<div class="panel panel-default">
    <div class="panel-heading">添加菜品</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form">

            <div class="form-group">
                <label for="restaurant_name" class="col-sm-1 control-label">菜名</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="restaurant_name" placeholder="鱼香肉丝">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="restaurant_subname" class="col-sm-1 control-label">价格</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="restaurant_name" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="restaurant_description" class="col-sm-1 control-label">描述</label>
                <div class="col-sm-11">
                    <textarea class="form-control" id="restaurant_description" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                    <button type="submit" class="btn btn-default">保存</button>
                </div>
            </div>
        </form>
    </div>
</div>