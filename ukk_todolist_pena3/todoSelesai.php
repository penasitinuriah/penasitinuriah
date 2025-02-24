<div class="card border-1 border-success shadow-lg">
    <div class="card-body">
        <h4 class="text-center">TodoList Selesai</h4>
        <ul class="list-group">
            <?php
                $sql="SELECT * FROM todolist WHERE status='selesai'";
                $result=$con->query($sql);
                while($data=$result->fetch_array()) {  ?>
                <li class="list-group-item border-bottom border-success">
                    <?=$data['taskname']?>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>
