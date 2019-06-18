<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="row mt-sm-5 mt-3 mb-3">
                <div class="col-md-12">
                    <div class="card card-pricing">
                        <form method="POST" action="<?php echo $hostname?>dekripsi">
							<div class="card-body text-center">
							   <label for="chipertext">Chipertext</label>
							   <textarea class="form-control" id="chipertext" name="chipertext" rows="5"><?php echo $chipertext;?></textarea>
							   <label for="plaintext">Plaintext</label>
							   <textarea class="form-control" id="plaintext" name="plaintext" rows="5" readonly><?php echo $plaintext;?></textarea>
								<div class="row">
									<div class="col-md-6">
										<label for="plaintext">Plaintext</label>
										<textarea class="form-control" id="chipertext_array" name="chipertext_array" rows="5" readonly><?php print_r($chipertext_array);?></textarea>
									</div>
									<div class="col-md-6">
										<label for="plaintext">Plaintext</label>
										<textarea class="form-control" id="plaintext_array" name="plaintext_array" rows="5" readonly><?php print_r($plaintext_array);?></textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-block btn-primary"><i class="mdi mdi-lock-open"></i> PROSES</button>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>