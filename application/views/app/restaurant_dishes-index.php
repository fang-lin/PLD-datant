<div class="panel panel-default">
    <div class="panel-heading">XXX 餐厅菜单列表</div>
    <div class="panel-body">
        <ul class="pagination">
            <li><a href="#">上一页</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">下一页</a></li>
        </ul>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>菜名</th>
                    <th>价格</th>
                    <th>分类</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>鱼香肉丝</td>
                    <td>55.00</td>
                    <td>热菜-炒菜</td>
                    <td>
                        <a href="<?php echo base_url(); ?>app/restaurant_dish/delete">删除</a>
                        |
                        <a href="<?php echo base_url(); ?>app/restaurant/edit">编辑</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>宫保鸡丁</td>
                    <td>66.00</td>
                    <td>热菜-炒菜</td>
                    <td>
                        <a href="<?php echo base_url(); ?>app/restaurant_dish/delete">删除</a>
                        |
                        <a href="">编辑</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>清蒸鱼</td>
                    <td>99.00</td>
                    <td>热菜-炖菜</td>
                    <td>
                        <a href="<?php echo base_url(); ?>app/restaurant_dish/delete">删除</a>
                        |
                        <a href="">编辑</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="<?php echo base_url(); ?>app/restaurant_dish/add"><button type="submit" class="btn btn-default">增加菜品</button></a>
        </div>
        <ul class="pagination">
            <li><a href="#">上一页</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">下一页</a></li>
        </ul>
    </div>
</div>