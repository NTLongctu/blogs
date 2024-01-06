<?php
    require_once ("../../autoload/autoload.php");

    $category = $db->fetchAll("category");
    //var_dump($category); 

?>

<?php require_once("../../layouts/header.php"); ?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Đây là trang quản trị của admin</h1>
  
</div>


<!-- Content Row -->
<div class="Content Row">
  <div class="card shadow mb-4">
<div class="card-header py-3">

<div class="m-0 font-weight-bold text-primary">
  <a href="add.php" class="btn btn-primary btn-user">Thêm danh mục</a> 
</div>

</div>
<div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <?php if(isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?> 
                        </div>
                     <?php endif; ?>
                     <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                        </div>
                     <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 58px;" aria-sort="descending">STT</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 71px;">Tên danh mục sản phẩm</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">Sửa</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">Xóa</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php $stt = 1; foreach ($category as $item) : ?>
                                <tr role="row" class="odd">
                                    
                                    <td class="sorting_1"><?php echo $stt ?></td>
                                    <td><?php echo $item['name']; ?></td>
                                   
                                    <td>
                                         <a href="edit.php?id= <?php echo $item['id'] ?> " class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                              <i class="fas fa-info-circle"></i>
                                                            </span>
                                            <span class="text">Sửa</span>
                                        </a>
                                    </td>
                                    <td>
                                         <a href="delete.php?id= <?php echo $item['id'] ?> " class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                              <i class="fas fa-trash"></i>
                                                            </span>
                                            <span class="text">Xóa</span>
                                        </a>
                                    </td>
                                    
                                </tr>
                                <?php $stt++;  endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                </li>
                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("../../layouts/footer.php");?>