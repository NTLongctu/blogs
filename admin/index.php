<?php
    require_once ("autoload/autoload.php");

    $category = $db->fetchAll("category");
    var_dump($category);
?>

<?php
    require_once("layouts/header.php");
?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
                </div>
<?php
    require_once("layouts/footer.php");
?>