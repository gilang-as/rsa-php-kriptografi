<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="row mt-sm-5 mt-3 mb-3">
			<?php foreach($data as $profile){?>
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name font-weight-bold text-uppercase"><?php echo $profile['nama'];?></p>
                            <img src="<?php echo $hostname;?>assets/image/<?php echo $profile['gambar'];?>" style="height: 100px;" alt="" class="rounded-circle img-thumbnail">
                            <ul class="card-pricing-features">
                                <li><?php echo $profile['nim'];?></li>
                            </ul>
                            <div class="button-list">
                                <a alt="Telegram" href="<?php echo $profile['telegram'];?>" class="btn btn-icon btn-info"> <i class="mdi mdi-telegram"></i> </a>
                                <a alt="Medium" href="<?php echo $profile['medium'];?>" class="btn btn-icon btn-primary"> <i class="mdi mdi-medium"></i> </a>
                                <a alt="Website" href="<?php echo $profile['web'];?>" class="btn btn-icon btn-warning"> <i class="mdi mdi-web"></i> </a>
                                <a alt="Github" href="<?php echo $profile['github'];?>" class="btn btn-icon btn-dark"> <i class="mdi mdi-github-circle"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?>
            </div>
        </div>
    </div>
</div>