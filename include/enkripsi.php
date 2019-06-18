<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="row mt-sm-5 mt-3 mb-3">
                <div class="col-md-12">
                    <div class="card card-pricing">
                        <form method="POST">
							<div class="card-body text-center">
							   <label for="chipertext">Plaintext</label>
							   <textarea class="form-control" id="chipertext" name="plaintext" rows="5"><?php echo $plaintext;?></textarea>
							   <label for="plaintext">Chipertext</label>
							   <textarea class="form-control" id="plaintext" name="chipertext" rows="5" readonly><?php echo $chipertext;?></textarea>
								<div class="row">
									<div class="col-md-6">
										<label for="plaintext">Chipertext</label>
										<textarea class="form-control" id="plaintext" name="chipertext_array" rows="5" readonly><?php print_r($enk_array_num);?></textarea>
									</div>
									<div class="col-md-6">
										<label for="plaintext">Chipertext</label>
										<textarea class="form-control" id="plaintext" name="plaintext_array" rows="5" readonly><?php print_r($enk_array);?></textarea>
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