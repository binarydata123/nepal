<?php $__env->startSection('css'); ?>
<style>
    /*.dropdown-submenu {
      position: relative;
    }
    
    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
    }
   

    .fa-minus:before {
    content: "\f106";
    color: #fc7c55 !important;
    font-size: 21px !important;
}

.fa-plus:before {
    content: "\f107";
    color: #fc7c55 !important;
    font-size: 21px !important;
}*/
/*.product-meta span {
    white-space: unset !important;
    height: 100%;
    min-height: 100px;
}*/
    </style>
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- popup css -->
<!-- <style type="text/css">
    body {
            background-color: #f4f4f4;
        }

        #modalOverlay {
            position: fixed;
            top: 5%;
            left: 21%;
            z-index: 99999;
            height: 100%;
            width: 100%;
        }

        .facebook {
            background-color: #4267b2;
            border: 1px solid #4267b2;
            padding: 0px 0px;
            color: #fff;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .Google {
            background-color: #4285f4;
            border: 1px solid #4285f4;
            padding: 0px 0px;
            color: #fff;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .container.container-1 {
            max-width: 800px;
            background-color: #fff;           
            padding: 0px 0px 50px 0px;
/*            background: rgba(255, 255, 255, 0.8);
*/            margin: 0 auto;
            width: 100%;
            position: relative;
            height: 600px !important;
        }
        .icon {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .width-btn {
            width: 100%;
            background: #4267b2;
            border: 0;
            font-size: 1em;
            color: #fff !important;
            padding: 15px;
            cursor: pointer;
            -webkit-transition: background .2s ease-in;
            transition: background .2s ease-in
        }

        .form-control.inputbox {
            display: block;
            width: 100%;
            padding: 13px 0px 13px 10px;
            font-size: 14px;
            line-height: 20px;
            border: 2px solid #d6d6d6;
            border-radius: 4px;
            background-color: #fff;
            color: #353535;
            box-sizing: border-box;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            resize: none;
        }

        ::placeholder {
            display: block;
            width: 100%;

            font-size: 14px;
            color: #9c9c9c !important;

        }

        .line {
            position: relative;
            margin-top: 42px;
        }

        .line::before {
            content: '';
            position: absolute;
            top: -45px;
            left: 50%;
            background-color: #dadbbc;
            width: 2px;
            height: 45px;
        }

        .line::after {
            content: '';
            position: absolute;
            top: 30px;
            left: 50%;
            background-color: #dadbbc;
            width: 2px;
            height: 50px;
        }

        #place p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .col-md-12.justify-content-center {
            max-width: 700px;
        }

        .facetext span {
            font-size: 14px;

        }

        #place a {
            color: #3baa33;
        }

        .pcolor {
            color: #3baa33;
        }

        .width-btn:hover {
            background: #4267b2 !important;
            cursor: pointer;
        }

        p.mb-3.test  {
            font-size: 13px;
        }

        a.test {form-group cheackbox
            font-size: 12px;
        }

        p.mt-3.test {
            font-size: 12px;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }
        span.size {
    font-size: 13px;
}

 .at-checkbox{
        display: flex;
    }
    a.test {
    font-size: 12px;
}
a.test {
    display: none;
}
span.help-block.ktm {
    font-size: 12px;
}
@media  only screen and (max-width: 767px) {
#modalOverlay {
    left: 0px;
    padding: 0px 20px;
    height: 100vh !important;
    overflow-y: scroll;
    top: 0px;
}
    .container.container-1 {
        padding:  0px;

    }
    .at-checkbox{
        display: flex;
    }
    .form-group.cheackbox label{
        line-height: 15px;
        font-size: 12px;
    }
}
</style> -->

<!-- endpopupcss -->


    <section class="banner-part" <?php if($cms): ?> 
    style="background: url(../../media/cms-image/<?php echo e($cms->image); ?>);background-repeat: no-repeat;"
    <?php else: ?> 
    style="background: url(../../website/images/bannerhome.jpg);"  <?php endif; ?>>
        <div class="container-fluid">
            <div class="banner-content xsbg mb40">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="yl"><span class="bghead"><?php if($cms): ?>
                            <?php echo e(ucwords($cms->title)); ?>

                            <?php else: ?> You Buy & You Sell <?php endif; ?></span></h1>
                    </div>
                </div>

                <div class="row newsletter">
                    
                    <div class="col-lg-2 col-md-12 hidden-x">
                        <div class="form-group">

                            <select class="form-control newfm slug bgwt" name="slug" >
                                
                                <?php if($headerCategories): ?>
                                    <?php $__currentLoopData = $headerCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headerCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($headerCategory->slug); ?>">
                                            <?php if(request('change_language') == 'ne'): ?> 
                                            <?php echo e(ucwords($headerCategory->ne_name)); ?>

                                            <?php else: ?> <?php echo e(ucwords($headerCategory->name)); ?> <?php endif; ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 mlm30 col-xs-8 padr0">
                        <div class="form-group form-control bordr0 bdxs82">
                        <i class="fa fa-search hidden-x"></i>
                            <input class="frmtxt search" type="text" id="search-sections1"
                                placeholder="Search Cars, Mobile Phones, Property and many more... " >
                               <!--   <input class="frmtxt search" type="text" id="search-sections1"
                                placeholder="<?php echo e(trans('global.search')); ?>  name="search[]"> -->
                            
 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-xs-4 padl0">
                        <div class="form-group">
                        
                        <!-- btn btn-inline22 bbtn search-button h50 -->
                            <button class="btn btn-inline22 bbtnmotor search-button bdxs8" id="myBtn">
                                <span class="hidden-x"><?php echo e(trans('global.search')); ?></span>
                                <span class="visible-xs"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <!------------------------------>
    <section class="recomend-part xs35 p30 visible-xs">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-6">
                            <div class="catlistxs">
                                <a href="<?php echo e(url('motor')); ?>"><i class="fa fa-motorcycle mr10"></i><?php echo e(trans('global.motor')); ?></a>
                        </div>
                         </div>

                    <div class="col-xs-6">
                    <div class="catlistxsp">
                    <a href="<?php echo e(url('property')); ?>"><i class="fa fa-building-o mr10"></i> <?php echo e(trans('global.property')); ?></a>
                        </div>
                    </div>

                    <div class="col-xs-6">
                            <div class="catlistxsy">
                            <a href="<?php echo e(url('marketplace')); ?>"><i class="fa fa-shopping-cart mr10"></i> <?php echo e(trans('global.marketplace')); ?></a>
                        </div>
                         </div>

                    <div class="col-xs-6">
                    <div class="catlistxsg">
                    <a href="<?php echo e(url('jobs')); ?>"><i class="fa fa-search mr10"></i> <?php echo e(trans('global.jobs')); ?></a>
                        </div>
                    </div>


                    <div class="col-xs-6">
                            <div class="catlistxsr">
                            <a href="<?php echo e(url('services')); ?>"><i class="fa fa-cogs mr10"></i> <?php echo e(trans('global.services')); ?></a>
                        </div>
                         </div>

                    <div class="col-xs-6">
                    <div class="catlistxso">
                    <a href="<?php echo e(url('stores')); ?>"><i class="fa fa-university mr10"></i> <?php echo e(trans('global.store')); ?></a>
                        </div>
                    </div>

                    <div class="col-xs-6">
                    <div class="catlistxsm">
                    <a href="<?php echo e(url('auction')); ?>"><i class="fa fa-gavel mr10"></i> <?php echo e(trans('global.auction')); ?></a>
                        </div>
                    </div>


                    <div class="col-xs-6">
                    <div class="catlistxsv">
                    <a href="<?php echo e(url('nodata')); ?>"><i class="fa fa-tags mr10"></i> Business</a>
                        </div>
                    </div>




</div>
</div>
</section>
        <!----------------------------->



    <section class="mt20 recomend-part">
        <div class="container">
            <div class="row">
                <input type="hidden" name="ne_title" value="<?php echo e($webads->ne_title); ?>" id="ne_title">
                <div class="webads-image ">
                    <?php if($webads ): ?> 
                    <?php if($webads->ne_title != ''): ?>
                    <a target="_blank" href="<?php echo e($webads->ne_title); ?>">
                    <img src="<?php echo e(url('public/media/webads-image',$webads->image)); ?>" class="iresponsive" id="webads_image"></a>
                    <?php else: ?>
                     <img src="<?php echo e(url('public/media/webads-image',$webads->image)); ?>" class="iresponsive" id="webads_image">
                     <?php endif; ?>
                <?php else: ?> 
                 <img src="<?php echo e(url('public/website/images/dea/ad.png')); ?>" class="iresponsive">
                <?php endif; ?>
                </div>
            </div>

        </div>
    </section>


 

 <?php if($premiumProducts->count() > 0): ?>
 <section class="recomend-part mt20 mb40">
   <div class="container-fluid">
       <div class="row">
    
           <div class="col-lg-10 col-xs-8">
               <div class="mb20">
          <h3><?php echo e(trans('global.premium_products')); ?> </h3>
         
       </div>
    </div>
  
   
    <div class="col-lg-2 col-xs-4">
                   <div class="section-center-heading">
                       <u>
                           <h5><a href="<?php echo e(url('search/market-place')); ?>"><?php echo e(trans('global.view_all')); ?><i class="fas fa-arrow-right"></i> </a></h5>

                       </u>
                   </div>
               </div>
              
           </div>
           <div class="row">
               <div class="col-lg-12">
                   <div class="recomend-slider slider-arrow">
                       <?php if($premiumProducts): ?>
                       <?php $__currentLoopData = $premiumProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $premiumProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="product-card">
                               <div>
                                   <div class="the-container2">
                                       <div class="box2">
                                           <p class="fs14b">Premium</p>
                                       </div>
                                   </div>
                               </div> 
                               <a>
                                   <div class="product-media resimg">
                                       <a href="<?php echo e(url('product/detail/'.$premiumProduct->slug)); ?>">
                                       <div class="product-img">
                                           <?php if($premiumProduct->image): ?>
                                               <img src="<?php echo e(url('public/media/product-image/' . $premiumProduct->image)); ?>"
                                                   alt="product">
                                           <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                   alt="product">
                                           <?php endif; ?>
                                       </div>
                                       </a>
                                       <div class="product-type">
                                           <div class="product-btn">
                                                <?php if(Auth::check()): ?>
                                                    <?php if($premiumProduct->user_id != Auth::user()->id): ?>
                                                        <?php if($premiumProduct->is_buynow == 1): ?>
                                                            <button type="button" title="Wishlist"
                                                               data-id="<?php echo e($premiumProduct->id); ?>"
                                                               class="<?php if($premiumProduct->wishlist): ?> <?php if($premiumProduct->wishlist->user_id == Auth::user()->id): ?> 
                                                                fa fa-heart wishlist fas    <?php else: ?>  fa fa-heart wishlist <?php endif; ?> <?php endif; ?>">
                                                            </button>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                           </div>
                                       </div>
                                   </div>
                               </a>
                               <div class="product-content">
                                   <ol class="breadcrumb product-category">    
                                       <li>
                                           <p class="product-price tblak"> रू</p>
                                       </li>
                                       <li class="breadcrumb-item"><a
                                               href="<?php echo e(url('product/detail/' . $premiumProduct->slug)); ?>">
                                               <?php if(is_numeric($premiumProduct->price)): ?><?php echo e(number_format($premiumProduct->price)); ?> <?php endif; ?></a></li>
                                   </ol>
                                   <div class="product-meta 1"><span data-toggle="tooltip" data-placement="top" title="<?php echo e($premiumProduct->title); ?>"><?php echo e(ucwords(Str::limit($premiumProduct->title,30))); ?></span><br>
                                       <?php if($premiumProduct->type == 1): ?>
                                       <span class="s-used">Used</span>
                                       <?php else: ?>
                                       <span class="s-success">Brand New</span>
                                       <?php endif; ?>
                                      
                                    <?php if($premiumProduct->productBid): ?><span class="mfs12"><?php echo e($premiumProduct->productBid->count()); ?> Bids</span> <?php endif; ?>
                                   </div>
                                   <div class="product-info">
                                       <span><i class="fas fa-map-marker-alt"></i> <?php if($premiumProduct->districtList): ?><?php echo e($premiumProduct->districtList->district_name); ?> <?php endif; ?>
                                           
                                       </span>
                                       
                                       <div> <span> 
                                            Closes:<?php if($premiumProduct->auction_end_date != null): ?> <?php echo e(Carbon\Carbon::parse($premiumProduct->auction_end_date)->format('d/m/Y')); ?>

                                            <?php else: ?> <?php echo e($premiumProduct->created_at->addDays(30)->format('D d M')); ?> <?php endif; ?> </span></div>
                                   </div>
                               </div>
                           </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>
                   </div>
               </div>
           </div>

       </div>
</section>
<?php endif; ?>

<section class="recomend-part mt20 mb40">
    <div class="container-fluid">
        <div class="row">
        <?php if($auctionProducts->count() > 0): ?>
            <div class="col-lg-10 col-xs-8">
                <div class="mb20">
           <h3><?php echo e(trans('global.checkout_the_latest_cool_auction')); ?> </h3>
          
        </div>
     </div>
     <?php endif; ?>
     <?php if($auctionProducts->count() >5): ?>
     <div class="col-lg-2 col-xs-4">
                    <div class="section-center-heading">
                        <u>
                            <h5><a href="<?php echo e(url('search/market-place')); ?>"><?php echo e(trans('global.view_all')); ?> <i class="fas fa-arrow-right"></i> </a></h5>

                        </u>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recomend-slider slider-arrow">
                        <?php if($auctionProducts): ?>
                        <?php $__currentLoopData = $auctionProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctionProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-card">
                                <a>
                                    <div class="product-media resimg">
                                        <a href="<?php echo e(url('product/detail/'.$auctionProduct->slug)); ?>">
                                        <div class="product-img">
                                            <?php if($auctionProduct->image): ?>
                                                <img src="<?php echo e(url('public/media/product-image/' . $auctionProduct->image)); ?>"
                                                    alt="product">
                                            <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                    alt="product">
                                            <?php endif; ?>
                                        </div>
                                        </a>
                                        <div class="product-type">
                                            <div class="product-btn">
                                                <?php if(Auth::check()): ?>
                                                    <?php if($auctionProduct->user_id != Auth::user()->id): ?>
                                                        <?php if($auctionProduct->is_buynow == 1): ?>
                                                            <button type="button" title="Wishlist"
                                                                data-id="<?php echo e($auctionProduct->id); ?>"
                                                                class="<?php if($auctionProduct->wishlist): ?> <?php if($auctionProduct->wishlist->user_id == Auth::user()->id): ?> 
                                                                fa fa-heart wishlist fas    <?php else: ?>  fa fa-heart wishlist <?php endif; ?> <?php endif; ?>">
                                                            </button>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">    
                                        <li>
                                            <p class="product-price tblak"> रू</p>
                                        </li>
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo e(url('product/detail/' . $auctionProduct->slug)); ?>">
                                                <?php if(is_numeric($auctionProduct->price)): ?><?php echo e(number_format($auctionProduct->price)); ?> <?php endif; ?></a></li>
                                    </ol>
                                    <div class="product-meta 2"><a href="<?php echo e(url('product/detail/'.$auctionProduct->slug)); ?>">
                                        <span data-toggle="tooltip" data-placement="top" title="<?php echo e($auctionProduct->title); ?>"><?php echo e(ucwords(Str::limit($auctionProduct->title,30))); ?></span></a><br>
                                        <?php if($auctionProduct->type == 1): ?>
                                        <span class="s-used">Used</span>
                                        <?php else: ?>
                                        <span class="s-success">Brand New</span>
                                        <?php endif; ?>
                                       
                                     <?php if($auctionProduct->productBid): ?><span class="mfs12"><?php echo e($auctionProduct->productBid->count()); ?> Bids</span> <?php endif; ?>
                                    </div>
                                    <div class="product-info">
                                        <span><i class="fas fa-map-marker-alt"></i> <?php if($auctionProduct->districtList): ?><?php echo e($auctionProduct->districtList->district_name); ?> <?php endif; ?>
                                            
                                        </span>
                                        
                                        <div> <span> 
                                             Closes: <?php if($auctionProduct->auction_end_date != null): ?> <?php echo e(Carbon\Carbon::parse($auctionProduct->auction_end_date)->format('d/m/Y')); ?>

                                             <?php else: ?> <?php echo e($auctionProduct->created_at->addDays(30)->format('d/m/Y')); ?>  <?php endif; ?> </span></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    </div>
                </div>
            </div>

        </div>
</section>
    <section class="recomend-part mt20 mb40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-xs-8">
                    <div class="">
               <h3 class="font-mobile"><?php echo e(trans('global.fresh_recommendations')); ?></h3>
              
            </div>
         </div>

         <?php if($products->count() > 5): ?>
         <div class="col-lg-2 col-xs-4">
                        <div class="section-center-heading">
                            <u>
                                <h5>
                                    <a href="<?php echo e(url('search/market-place')); ?>"><?php echo e(trans('global.view_all')); ?>

                                    <i class="fas fa-arrow-right"></i> </a>
                                </h5>
                            </u>

                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recomend-slider slider-arrow">

                            <?php if($products): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                        $category_data = DB::table('categories')->where('id', $product->category_id)->first();
                                        $header_category_data = DB::table('header_categories')->where('id', $category_data->header_category_id)->first();
                                    ?>
                                <?php if($header_category_data->name != 'Jobs'): ?>
                                    
                                    <div class="product-card">
                                       
                                            <div class="product-media resimg">
                                                <?php if($header_category_data->name == 'Jobs'): ?>
                                                    <a href="<?php echo e(url('jobs-detail/'.$product->slug)); ?>">
                                                        <div class="product-img">
                                                            <?php if($product->image): ?>
                                                                <img src="<?php echo e(url('public/media/product-image/' . $product->image)); ?>"
                                                                    alt="product">
                                                            <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                                    alt="product">
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                <?php elseif($header_category_data->name == 'Services'): ?>
                                                    <a href="<?php echo e(url('services-detail/'.$product->slug)); ?>">
                                                        <div class="product-img">
                                                            <?php if($product->image): ?>
                                                                <img src="<?php echo e(url('public/media/product-image/' . $product->image)); ?>"
                                                                    alt="product">
                                                            <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                                    alt="product">
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(url('product/detail/'.$product->slug)); ?>">
                                                        <div class="product-img">
                                                            <?php if($product->image): ?>
                                                                <img src="<?php echo e(url('public/media/product-image/' . $product->image)); ?>"
                                                                    alt="product">
                                                            <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                                    alt="product">
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                <?php endif; ?>
                                                <div class="product-type">
                                                    <div class="product-btn">
                                                        <?php if(Auth::check()): ?>
                                                            <?php if($product->user_id != Auth::user()->id): ?>
                                                                <?php if($product->is_buynow == 1): ?>
                                                                    <button type="button" title="Wishlist"
                                                                        data-id="<?php echo e($product->id); ?>"
                                                                        class="<?php if($product->wishlist): ?> <?php if($product->wishlist->user_id == Auth::user()->id): ?> 
                                                                        fa fa-heart wishlist fas    <?php else: ?>  fa fa-heart wishlist <?php endif; ?> <?php endif; ?>">   
                                                                    </button>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        <div class="product-content">
                                            <ol class="breadcrumb product-category">
                                                <?php if($header_category_data->name != 'Services'): ?>
                                                <li>
                                                    <p class="product-price tblak"> रू</p>
                                                </li>
                                                <?php else: ?>
                                                <li>
                                                    <p class="product-price tblak">
 <?php
                                                      $produstReviews = App\Models\ServiceFeedback::where('product_id',$product->id);
                                                        $reviews = $produstReviews->get();
                                                        $userCount = $reviews->count();
                                                            $avgRating = $produstReviews->avg('rating');
                                                 ?>

                                                 <h5><span class="pfeedback"><?php if((int)$avgRating >= 3): ?> positive <?php endif; ?></span>  <span>
                                          <a href="<?php echo e(url('services-detail/'.$product->slug)); ?>" class="tblack"> Feedback <?php echo e(number_format($avgRating,1)); ?>

                                          <i class="fa fa-star rating"></i> 
                                           </a>(<?php echo e($reviews->count()); ?>)
                                       </span></h5>


                                                    </p>
                                                </li>
                                                <?php endif; ?>
                                                <?php if($header_category_data->name == 'Jobs'): ?>
                                                    <li class="breadcrumb-item">
                                                        <a href="<?php echo e(url('jobs-detail/' . $product->slug)); ?>">
                                                            <?php if(is_numeric($product->salary_scal)): ?> 
                                                            <?php echo e(number_format($product->salary_scal)); ?> 
                                                                <?php if($product->subcategory): ?> 
                                                                    <?php if($product->subcategory->slug == 'land'): ?>
                                                                <?php
                                                                    $product_data = DB::table('product_datas')->where('product_id', $product->id)->first();
                                                                ?>
                                                                <?php if($product_data): ?>
                                                                    <?php
                                                                        $feature_data = DB::table('feature_dataes')->where('id', $product_data->feature_data_id)->first();
                                                                    ?>
                                                                <?php else: ?>
                                                                    <?php
                                                                        $feature_data = array();
                                                                    ?>
                                                                <?php endif; ?>
                                                                <?php if($feature_data): ?>
                                                                    <?php if($feature_data->data_name == 'for rent'): ?>
                                                                        <small>Per month</small> 
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($product->subcategory->slug == 'for-rent-houses-apartments' ||  $product->subcategory->slug =='for-rent-shop-office-land' || $product->subcategory->slug =='flat-or-room-mates'): ?> 
                                                                            <small>Per month</small>
                                                                        <?php endif; ?> 
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php elseif($header_category_data->name == 'Services'): ?>
                                                    <li class="breadcrumb-item">
                                                        <a href="<?php echo e(url('services-detail/' . $product->slug)); ?>">
                                                            <?php if(is_numeric($product->price)): ?> 
                                                                <?php echo e(number_format($product->price)); ?> 
                                                                <?php if($product->subcategory): ?> 
                                                                    <?php if($product->subcategory->slug == 'land'): ?>
                                                                        <?php
                                                                            $product_data = DB::table('product_datas')->where('product_id', $product->id)->first();
                                                                        ?>
                                                                        <?php if($product_data): ?>
                                                                            <?php
                                                                                $feature_data = DB::table('feature_dataes')->where('id', $product_data->feature_data_id)->first();
                                                                            ?>
                                                                        <?php else: ?>
                                                                            <?php
                                                                                $feature_data = array();
                                                                            ?>
                                                                        <?php endif; ?>
                                                                        <?php if($feature_data): ?>
                                                                            <?php if($feature_data->data_name == 'for rent'): ?>
                                                                                <small>Per month</small> 
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($product->subcategory->slug == 'for-rent-houses-apartments' ||  $product->subcategory->slug =='for-rent-shop-office-land' || $product->subcategory->slug =='flat-or-room-mates'): ?> 
                                                                            <small>Per month</small>
                                                                        <?php endif; ?> 
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="breadcrumb-item">
                                                        <a href="<?php echo e(url('product/detail/' . $product->slug)); ?>">
                                                            <?php if(is_numeric($product->price)): ?> 
                                                                <?php echo e(number_format($product->price)); ?> 
                                                                <?php if($product->subcategory): ?> 
                                                                    <?php if($product->subcategory->slug == 'land'): ?>
                                                                        <?php
                                                                            $product_data = DB::table('product_datas')->where('product_id', $product->id)->first();
                                                                            $feature_data = DB::table('feature_dataes')->where('id', $product_data->feature_data_id)->first();
                                                                        ?>
                                                                        <?php if($feature_data->data_name == 'for rent'): ?>
                                                                            <small>Per month</small> 
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($product->subcategory->slug == 'for-rent-houses-apartments' ||  $product->subcategory->slug =='for-rent-shop-office-land' || $product->subcategory->slug =='flat-or-room-mates'): ?> 
                                                                            <small>Per month</small>
                                                                        <?php endif; ?> 
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ol>
                                            <div class="product-meta 3">
                                                <?php if($header_category_data->name == 'Jobs'): ?>
                                                    <span data-toggle="tooltip" data-placement="top" title="<?php echo e($product->title); ?>"><a href="<?php echo e(url('jobs-detail/'.$product->slug)); ?>" class="product-title-color"><?php echo e(ucwords(Str::limit($product->title,30))); ?></a></span><br>
                                                <?php elseif($header_category_data->name == 'Services'): ?>
                                                   

                                                   
                                        <span data-toggle="tooltip" data-placement="top" title="<?php echo e($product->title); ?>"><a href="<?php echo e(url('services-detail/'.$product->slug)); ?>" class="product-title-color"><?php echo e(ucwords(Str::limit($product->title,30))); ?></a></span><br>

                                                <?php else: ?>
                                                    <span data-toggle="tooltip" data-placement="top" title="<?php echo e($product->title); ?>"><a href="<?php echo e(url('product/detail/'.$product->slug)); ?>" class="product-title-color"><?php echo e(ucwords(Str::limit($product->title,30))); ?></a></span><br>
                                                <?php endif; ?>

                                        <?php if($header_category_data->name != 'Services'  &&  $header_category_data->name != 'Property' &&  $header_category_data->name != 'Jobs' ): ?>        
                                                <?php if($product->type == 1): ?>
                                                <span class="s-used">Used</span>
                                                <?php else: ?>
                                                <span class="s-success">Brand New</span>
                                                <?php endif; ?>
                                        <?php else: ?>

                                                <?php if($product->type == 1): ?>
                                                <span></span>
                                                <?php else: ?>
                                                <span ></span>
                                                <?php endif; ?>
                                        
                                        <?php endif; ?>        
                                            </div>
                                            <div class="product-info">
                                                <span><i class="fas fa-map-marker-alt"></i> <?php if($product->districtList): ?><?php echo e($product->districtList->district_name); ?> <?php endif; ?>
                                                    
                                                </span>
                                                <div> <span> 
                                                    Closes:<?php if($product->auction_end_date != null): ?> <?php echo e(Carbon\Carbon::parse($product->auction_end_date)->format('d/m/Y')); ?> <?php else: ?> <?php echo e($product->created_at->addDays(30)->format('d/m/Y')); ?> <?php endif; ?> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>
    </section>


    <section class="recomend-part mt20 mb40">
        <div class="container-fluid">
            <div class="row">
            <?php if(Auth::check() && $recommendedProducts->count() > 0): ?>
                <div class="col-lg-10  col-xs-8">
                    <div class="">
               <h3><?php echo e(trans('global.recommendad_deal')); ?></h3>
              
            </div>
         </div>
         <?php endif; ?>
         <?php if(Auth::check() && $recommendedProducts->count() >5): ?>
         <div class="col-lg-2  col-xs-4">
                        <div class="section-center-heading">
                            <u>
                                <h5><a href="<?php echo e(url('search/market-place')); ?>"><?php echo e(trans('global.view_all')); ?><i class="fas fa-arrow-right"></i> </a></h5>

                            </u>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recomend-slider slider-arrow">
                            <?php if($recommendedProducts): ?>
                            <?php $__currentLoopData = $recommendedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-card">
                                    <a>
                                        <div class="product-media resimg">
                                            <a href="<?php echo e(url('product/detail/'.$recommendedProduct->slug)); ?>">
                                            <div class="product-img">
                                                <?php if($recommendedProduct->image): ?>
                                                    <img src="<?php echo e(url('public/media/product-image/' . $recommendedProduct->image)); ?>"
                                                        alt="product">
                                                <?php else: ?><img src="<?php echo e(url('public/website/images/no-image.png')); ?>"
                                                        alt="product">
                                                <?php endif; ?>
                                            </div>
                                            </a>
                                            <div class="product-type">
                                                <div class="product-btn">
                                                    <?php if(Auth::check()): ?>
                                                        <?php if($recommendedProduct->user_id != Auth::user()->id): ?>
                                                            <?php if($recommendedProduct->is_buynow == 1): ?>
                                                                <button type="button" title="Wishlist"
                                                                    data-id="<?php echo e($recommendedProduct->id); ?>"
                                                                    class="<?php if($recommendedProduct->wishlist): ?> <?php if($recommendedProduct->wishlist->user_id == Auth::user()->id): ?> 
                                                                    fa fa-heart wishlist fas    <?php else: ?>  fa fa-heart wishlist <?php endif; ?> <?php endif; ?>"> 
                                                                </button>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li>
                                                <p class="product-price tblak"> रू</p>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="<?php echo e(url('product/detail/' . $recommendedProduct->slug)); ?>">
                                                   <?php if(is_numeric($recommendedProduct->price)): ?> <?php echo e(number_format( $recommendedProduct->price)); ?> <?php endif; ?></a></li>
                                        </ol>
                                        <div class="product-meta 4"><span data-toggle="tooltip" data-placement="top" title="<?php echo e($recommendedProduct->title); ?>"><?php echo e(ucwords(Str::limit($recommendedProduct->title,30))); ?></span><br>
                                            <?php if($recommendedProduct->type == 1): ?>
                                                <span class="s-used">Used</span>
                                                <?php else: ?>
                                                <span class="s-success">Brand New</span>
                                                <?php endif; ?>
                                        </div>
                                        <div class="product-info">
                                            <span><i class="fas fa-map-marker-alt"></i> <?php if($recommendedProduct->districtList): ?><?php echo e($recommendedProduct->districtList->district_name); ?> <?php endif; ?>
                                                
                                            </span>
                                            <div> <span> 
                                                Closes:<?php if($recommendedProduct->auction_end_date != null): ?> <?php echo e(Carbon\Carbon::parse($recommendedProduct->auction_end_date)->format('d/m/Y')); ?> <?php else: ?> <?php echo e($recommendedProduct->created_at->addDays(30)->format('d/m/Y')); ?> <?php endif; ?> </span></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>
    </section>
    <?php if(Auth::check()): ?>
        <input type="hidden" id="hd_device_token" name="hd_device_token" value="<?php echo e(Auth::user()->device_token); ?>">
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>





    <script>
        $( document ).ready(function() {
            var loggedIn = <?php echo e(auth()->check() ? 'true' : 'false'); ?>;
            var device_token = $('#hd_device_token').val();
            if(loggedIn == true){
                if(device_token){
                    $('#notificationAlertModalCenter').modal('hide');
                } else {
                    $('#notificationAlertModalCenter').modal('show');
                }
            }
        });
        $('.wishlist').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                type: "post",
                url: base_url + "wishlist",
                data: {
                    id: id
                },
                success: function() {

                },
                error: function() {

                }
            })
        })
        var slug = "market-place";
        var search = "";
        $('.search-button').on('click', function()
        {
            slug = $('.slug').val();
            search = $('.search').val();
            
            window.location.href = "search/"+slug+"?search%5B%5D="+search;

        })
        
//         $(document).ready(function(){
//   $('.dropdown-submenu a.test').on("click", function(e){
   


//     var id = $(this).attr("data-id");
   
//     e.stopPropagation();
//     $('.category'+id).toggle();
//     e.preventDefault();
//     //
//   });
// });

// $(function () {
//     var sf_menu_sub = $('.sf-menu-sub');
//     $('.clickable').on('click', function (e) {
//         e.stopPropagation();
//         sf_menu_sub.toggle();
//     });
//     $('.header-category').on('click',function(e))
// });
</script>
    <script>
var input = document.getElementById("search-sections1");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("myBtn").click();
  }
});

// $(function() {
//     $("#o_order_status").change(function() {
//         // var id = $(this).val();
//         // alert(id);
//           alert( this.value );// here I am getting the onchange value
//     });
// });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/newdeal/newdealmih/resources/views/website/home.blade.php ENDPATH**/ ?>