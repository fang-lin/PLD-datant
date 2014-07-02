<div class="panel panel-default">
    <div class="panel-heading">添加餐厅</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form">

            <div class="form-group">
                <label for="restaurant_name" class="col-sm-1 control-label">餐厅名称</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="restaurant_name" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="is_chain" class="col-sm-1 control-label">是否连锁</label>
                <div class="col-sm-11">
                    <label class="radio-inline">
                        <input type="radio" name="is_chain" id="is_chain_1" value="1"> 是
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="is_chain" id="is_chain_0" value="0"> 否
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="restaurant_subname" class="col-sm-1 control-label">分店名称</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="restaurant_subname" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="restaurant_description" class="col-sm-1 control-label">餐厅描述</label>
                <div class="col-sm-11">
                    <textarea class="form-control" id="restaurant_description" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="district_id" class="col-sm-1 control-label">分类</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="district_id" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="district_id" class="col-sm-1 control-label">城市/区域</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="district_id" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="restaurant_address" class="col-sm-1 control-label">餐厅地址</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="restaurant_address" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="phone_numbers" class="col-sm-1 control-label">电话</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="phone_numbers" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="spend_per_head" class="col-sm-1 control-label">人均消费</label>
                <div class="col-sm-11">
                    <input type="number" class="form-control" id="spend_per_head" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="score" class="col-sm-1 control-label">评分</label>
                <div class="col-sm-11">
                    <input type="number" class="form-control" id="score" placeholder="5">
                </div>
            </div>

            <div class="form-group">
                <label for="dianping_id" class="col-sm-1 control-label">大众点评 ID</label>
                <div class="col-sm-11">
                    <input type="number" class="form-control" id="dianping_id" placeholder="5">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
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

<!--1	id	bigint	20	0	0			1	1	0
0	is_chain	tinyint	1	0	0	0		0	0	0
0	restaurant_name	varchar	255	0	0					0
0	restaurant_subname	varchar	255	0	1					0
0	restaurant_description	text	0	0	1					0
2	district_id	bigint	20	0	0	0		0	1	0
0		varchar	255	0	1					0
0		varchar	255	0	1		000-12345678|000-12345678			0
0		tinyint	6	0	1			0	0	0
0		float	2	1	0	0.0		0	0
0		varchar	16	0	1					0-->