<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="row mt-sm-5 mt-3 mb-3">
				<div class="col-md-7">
                    <div class="card card-pricing">
                        <form>
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-6">
										<label for="p">p</label>
										<input class="form-control text-center" name="p">
								   </div>
								   <div class="col-md-6">
										<label for="q">q</label>
										<input class="form-control text-center" name="q">
								   </div>
								   <div class="col-md-6">
										<label for="N">N = p x q</label>
										<input class="form-control text-center" name="N" readonly>
								   </div>
								   <div class="col-md-6">
										<label for="phi">Φ (phi) = (p-1) x (q-1)</label>
										<input class="form-control text-center" name="r" readonly>
								   </div>
								   <div class="col-md-12">
										<label for="plaintext">Pilihan</label>
										<textarea class="form-control" id="ed" name="ed" rows="5" readonly></textarea>
									</div>
							   </div>
							</div>
							<button type="button" class="btn btn-block btn-primary" name="pqNr" onclick="Proses1(this.form)"><i class="mdi mdi-lock-open"></i> PROSES</button>
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-6">
										<label for="p">K</label>
										<input class="form-control text-center" name="K" size=15>
								   </div>
									<div class="col-md-6">
										<label for="p">Faktor Dari K</label>
										<input class="form-control text-center" name="factors" readonly>
								   </div>
								</div>
							</div>
							<button type="button" class="btn btn-block btn-primary" name="pqNr" onclick="Proses2(this.form)"><i class="mdi mdi-lock-open"></i> FAKTORKAN</button>					    
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-6">
										<label for="p">e</label>
										<input class="form-control text-center" name="e" size=15>
								   </div>
									<div class="col-md-6">
										<label for="p">d</label>
										<input class="form-control text-center" name="d" size=15>
								   </div>
								</div>
							</div>
							<button type="button" class="btn btn-block btn-primary" name="pqNr" onclick="Proses3(this.form)"><i class="mdi mdi-lock-open"></i> CEK</button>					    
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-12">
										<textarea name="checker" class="form-control text-center" rows=9 cols=60 readonly></textarea>
								   </div>
								</div>
							</div>
						</form>
                    </div>
                </div>
				<div class="col-md-5">
                    <div class="card card-pricing">
                        <form>
							<div class="card-body text-center">
								<label for="bilangan">Masukkan Bilangan</label>
								<input class="form-control text-center" name="number" id="number">
								<p id="result"></p>
								<p id="result2"></p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<button type="reset" value="Reset" class="btn btn-block btn-warning">RESET</button>
								</div>
								<div class="col-md-6">
									<button type="button" value="Check"  onClick="BilPrima(this.form)" class="btn btn-block btn-primary">CEK BILANGAN PRIMA</button>
								 </div>
							</div>
						</form>
                    </div>
					<div class="card card-pricing">
                        <form method="POST">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-4">
										<label for="bilangan">Private Key (e)</label>
										<input class="form-control text-center" name="e" id="e" value="<?php echo $_SESSION['e'];?>">
									</div>
									<div class="col-md-4">
										<label for="bilangan">Public Key (d)</label>
										<input class="form-control text-center" name="d" id="d" value="<?php echo $_SESSION['d'];?>">
									</div>
									<div class="col-md-4">
										<label for="bilangan">N</label>
										<input class="form-control text-center" name="n" id="n" value="<?php echo $_SESSION['n'];?>">
									</div>
								</div>
							</div>
							<button type="submit"  class="btn btn-block btn-primary">TERAPKAN</button>
						</form>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>