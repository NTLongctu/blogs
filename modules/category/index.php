<?php
    $category = $db->fetchAll("category");
?>
<?php require_once("../../layouts/header.php"); ?>
                     <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                           <div class="col-md-12">
                           <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                           </div>
                        </div>
                        
                     </div>
<?php require_once("../../layouts/footer.php"); ?>