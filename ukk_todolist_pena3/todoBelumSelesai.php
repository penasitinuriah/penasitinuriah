<div class="card border-1 border-warning shadow-lg">
    <div class="card-body">
        <h4 class="text-center">TodoList Belum Selesai</h4>
        <ul class="list-group">
            <?php
                $sql="SELECT * FROM todolist WHERE status='belum selesai'";
                $result=$con->query($sql);
                while($data=$result->fetch_array()) {  ?>
                <li class="list-group-item border-bottom border-warning">
                    <?=$data['taskname']?>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>
