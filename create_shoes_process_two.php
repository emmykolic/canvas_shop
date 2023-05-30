<?php 
    include("db/config.php");
    $site->auth();
    $site->check_token();
    if (isset($_GET['pcode'])) {
        $pcode=$_GET['pcode'];
        $props=$site->q("SELECT * FROM products WHERE pcode = '$pcode' ");
        $props=$props->fetch_assoc();
    }else{
        die(header("location: create_shoes_products.php"));
    }
    include("header.php");
?>

        <!-- Begin Uren's Login Register Area -->
        <div class="uren-login-register_area" >
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-12 col-md-4 offset-md-4">
                        <div class="card p-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="" value="<?= $pcode ?>" id="pcode">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="upload_image" id="upload_image">
                                        <label class="custom-file-label" for="customFile"><i class='fa fa-picture-o'></i> Choose Image</label>
                                    </div>
                                    <div id="uploaded_image"></div>
                                    <div class="row">
                                        <div class="col-md-12" id="cropperWrapper">
                                            <center>
                                                <div id="image_demo" class="mt-3"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-12">
                                            <center id="loading" class="d-none"><img src='asset/loading.gif' height='35'></center>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <center>
                                                <button class="btn crop_image btn-primary">Finish cropping</button>
                                                <?php if (file_exists()) : ?>
                                                    <a href="products/mine" class="btn btn-primary">Skip</a>
                                                <?php endif; ?>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php") ?>