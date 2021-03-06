<?php $__env->startSection('title', 'Items'); ?>
<?php $__env->startSection('block-header', 'Add New Item'); ?>
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('inpos/css/normalize.css')); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('inpos/css/component.css')); ?>" />
    <style>
        #file-1 {
            display: none;
        }
    </style>
    <link href="<?php echo e(asset('/inpos/plugins/jquery-spinner/css/bootstrap-spinner.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/inpos/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" />
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        // .width(300)
                        // .height(300);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="<?php echo e(asset('inpos/plugins/jquery-spinner/js/jquery.spinner.js')); ?>"></script>
    <script src="<?php echo e(asset('inpos/js/custom-file-input.js')); ?>"></script>
    <script src="<?php echo e(asset('inpos/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="<?php echo e(route('item.store')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <?php echo csrf_field(); ?>
                            <div class="col-sm-6">
                                <label for="name">Name (Required)***</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" placeholder="Enter Item Name" type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="item_code">Item Code (Required)***</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" placeholder="Enter Item Code" type="text" name="item_code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="purchase_price">Purchase Price (Required)***</label>
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input class="form-control text-center" type="text" name="purchase_price"  value="0" data-rule="currency">
                                    </div>
                                    <span class="input-group-addon">
                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="retail_price">Retail Price (Required)***</label>
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input class="form-control text-center" type="text" name="retail_price"  value="0" data-rule="currency">
                                    </div>
                                    <span class="input-group-addon">
                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="discount">Discount</label>
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input class="form-control text-center" type="text" name="discount"  value="0" data-rule="currency">
                                    </div>
                                    <span class="input-group-addon">
                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p>
                                    <b>Select Category</b><a class="m-l-10 btn btn-success" href="<?php echo e(route('category.create')); ?>">Add Category</a>
                                </p>
                                <select class="form-control show-tick" multiple name="category[]">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="quantity">Quantity (Required)***</label>
                                <div class="input-group spinner" data-trigger="spinner">
                                    <div class="form-line">
                                        <input class="form-control text-center" type="text" name="quantity"  value="0" data-rule="currency">
                                    </div>
                                    <span class="input-group-addon">
                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="description">Description</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="8" class="form-control no-resize" placeholder="Enter Item Description" name="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Item Image (Required)***</label>
                                            <div class="box">
                                                <input type="file" name="image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple onchange="readURL(this)"/>
                                                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="image">
                                            <img id="blah" class="img-responsive" src="<?php echo e(asset('images/items/no_image.png')); ?>" width="300" height="300" alt="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pos', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>