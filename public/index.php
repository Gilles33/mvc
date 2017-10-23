<?php
require_once '../src/model/Pdo.php';
require_once '../src/model/Quest.php';
require_once '../src/model/QuestManager.php';
require_once '../src/view/header.html';
require_once '../src/view/footer.html';

$object = new QuestManager();

$datas = $object->hydrateQuest();
?>
<h1>Les quêtes</h1>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Course</th>
        <th>Score</th>
    </tr>

    <?php
    foreach ($datas as $data){
        echo '<tr><td>' . $data->_id .'</td>';
        echo '<td>' . $data->_name . '</td>';
        echo '<td>' . $data->_course . '</td>';
        echo '<td>' . $data->_score . '</td></tr>';
    }
    ?>

</table>
