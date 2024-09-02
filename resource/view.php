<?php 

 require_once $_SERVER['DOCUMENT_ROOT'].'/Test-Web/resource/config.php';


class view extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `infotmation_tbl`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3 class='mb-2'>View Feedbacks</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr> 
                <th>Name</th>
                <th>Email</th>
                <th>Feedbacks</th>
                <th></th>
            </tr>
            </thead><tbody>";
        foreach ($result as $data){
            echo "<tr>";
            echo "<td>$data[name]</td>";
            echo "<td>$data[email]</td>";
            echo "<td>$data[feedback]</td>";
            echo "<td> <a class='btn btn-danger btn-sm'href='index.php?delete=$data[id]'> Delete Task</a> </td>";
            echo "</tr>";
        }
        echo "</tbody></table>";     
    }

}

?>