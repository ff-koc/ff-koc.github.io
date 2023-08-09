<?php 

@session_start();
?>
<!doctype html>
<html lang="tr" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Reeder">
		<meta name="author" content="REEDER">
		<meta name="keywords" content="">
		
		<link rel="icon" href="logo.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />

		<!-- Title -->
		<title>Reeder</title>
		<link rel="stylesheet" href="../../assets/fonts/fonts/font-awesome.min.css">

		<!-- Bootstrap Css -->
		<link href="../../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="../../assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />


		<!-- Dashboard Css -->
		<link href="../../assets/css/dashboard.css" rel="stylesheet" />
		<link href="../../assets/css/admin-custom.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="../../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- forn-wizard css-->
		<link href="../../assets/plugins/forn-wizard/css/material-bootstrap-wizard.css" rel="stylesheet" />
		<link href="../../assets/plugins/forn-wizard/css/demo.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="../../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="../../assets/css/icons.css" rel="stylesheet"/>

	</head>
		<body class="app sidebar-mini">
		<!--Loader-->
		
		<div class="page">
			<div class="page-main">
				<!-- Sidebar menu-->
				


                    <div class="row row-deck" style="align-items: center;
                    display: flex;
                    justify-content: center;">
                        <div class="col-lg-8">
                            <div style="margin-top: 28px;" class="card">                              
                            <img class="img-fluid rounded" src="https://i.hizliresim.com/oeg0e0y.png" alt=""><br>
                            <div style="text-align: center; margin: 10px 20px 0px 20px;" class="yazi">
                            <h2>Kim bekler servisten telefonu</h2>
                                <p>Formu doldurarak cihazınızı servisimize göndermek zorunda kalmadan, size en yakın ReeDükkan’a giderek cihazınızın değişimini gerçekleştirebilirsiniz. Cihaz bilgilerinizi doldurdup tarafınıza gönderilen kod ile ReeDükkanlarımızda değişim işleminizi gerçekleştirebilirsiniz.</p>
                            </div>
                              <div class="card-header">
                                    <div class="card-title"></div>

                                </div>
                                <div class="card-body">
                                    <form name='form' action="" method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri İsim Soyisim (*Zorunlu Alan)</div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ad_soyad" placeholder="İsim Soyisim Giriniz " >
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label">Müşteri İli (*Zorunlu Alan)</div>

                                            <select class="form-control select2-flag-search" name='il' id="Iller">
                                                <option value="0">Lütfen Bir İl Seçiniz (*Zorunlu Alan)</option>
                                            </select>

											
										</div>
                                        <div class="form-group">
                                            <div class="form-label">Müşteri İlçesi (*Zorunlu Alan)</div>

                                            <select class="form-control select2-flag-search" id="Ilceler" name='ilce' disabled="disabled">
                                                <option value="0">Lütfen Önce bir İl seçiniz (*Zorunlu Alan)</option>
                                            </select>
											
										</div>

                    
       
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Adresi (*Zorunlu Alan)</div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="adres" placeholder="Adresiniz Giriniz">
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Telefon (*Zorunlu Alan)</div>

                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="tel" placeholder="Telefon Numarası Giriniz (5*********)">
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-label">Cihaz Modeli (*Zorunlu Alan)</div>

                                            <select class="form-control select2-flag-search" name='model' id="Modeller" >
                                                <option value="0">Lütfen Bir Model Seçiniz (*Zorunlu Alan)</option>
                                            </select>

											
										</div>
                                        <div class="form-group">
                                            <div class="form-label">Cihaz Model Rengi (*Zorunlu Alan)</div>

                                            <select class="form-control select2-flag-search" id="Renkler" name='renk' disabled="disabled">
                                                <option value="0">Lütfen Önce bir Model seçiniz (*Zorunlu Alan)</option>
                                            </select>
											
										</div>

                                <!--
                                        <div class="form-group">
                                            <div class="form-label">Cihaz Modeli (*Zorunlu Alan)</div>

											<select class="form-control select2-flag-search" name='model' data-placeholder="Cihaz Modeli Seçiniz">
                                                <option value="-">Cihaz Modeli Seçiniz</option>
                                                <option value="P13 BLUE" <?php if($_POST['model'] == 'P13 BLUE'){ ?> selected <?php } ?> >P13 BLUE</option>
												<option value="P13 BLUE 2021" <?php if($_POST['model'] == 'P13 BLUE 2021'){ ?> selected <?php } ?>>P13 BLUE 2021</option>
												<option value="P13 BLUE 2022" <?php if($_POST['model'] == 'P13 BLUE 2022'){ ?> selected <?php } ?>>P13 BLUE 2022</option>
												<option value="P13 BLUE MAX" <?php if($_POST['model'] == 'P13 BLUE MAX'){ ?> selected <?php } ?>>P13 BLUE MAX</option>
												<option value="P13 MAX BLUE" <?php if($_POST['model'] == 'P13 MAX BLUE'){ ?> selected <?php } ?>>P13 MAX BLUE</option>
												<option value="P13 BLUE MAX 128 GB" <?php if($_POST['model'] == 'P13 BLUE MAX 128 GB'){ ?> selected <?php } ?>>P13 BLUE MAX 128 GB</option>
												<option value="P13 BLUE MAX 128 GB 2022" <?php if($_POST['model'] == 'P13 BLUE MAX 128 GB 2022'){ ?> selected <?php } ?>>P13 BLUE MAX 128 GB 2022</option>
												<option value="P13 BLUE MAX 2020" <?php if($_POST['model'] == 'P13 BLUE MAX 2020'){ ?> selected <?php } ?>>P13 BLUE MAX 2020</option>
												<option value="P13 BLUE MAX 2022" <?php if($_POST['model'] == 'P13 BLUE MAX 2022'){ ?> selected <?php } ?>>P13 BLUE MAX 2022</option>
												<option value="P13 BLUE MAX LİTE" <?php if($_POST['model'] == 'P13 BLUE MAX LİTE'){ ?> selected <?php } ?>>P13 BLUE MAX LİTE</option>
												<option value="P13 BLUE MAX LİTE 16 GB" <?php if($_POST['model'] == 'P13 BLUE MAX LİTE 16 GB'){ ?> selected <?php } ?>>P13 BLUE MAX LİTE 16 GB</option>
												<option value="P13 BLUE MAX LİTE 32 GB" <?php if($_POST['model'] == 'P13 BLUE MAX LİTE 32 GB'){ ?> selected <?php } ?>>P13 BLUE MAX LİTE 32 GB</option>
												<option value="P13 BLUE MAX LİTE 2022" <?php if($_POST['model'] == 'P13 BLUE MAX LİTE 2022'){ ?> selected <?php } ?>>P13 BLUE MAX LİTE 2022</option>
												<option value="P13 BLUE MAX PRO" <?php if($_POST['model'] == 'P13 BLUE MAX PRO'){ ?> selected <?php } ?>>P13 BLUE MAX PRO</option>
												<option value="P13 BLUE MAX PRO 2021" <?php if($_POST['model'] == 'P13 BLUE MAX PRO 2021'){ ?> selected <?php } ?>>P13 BLUE MAX PRO 2021</option>
												<option value="P13 BLUE MAX PRO 256 GB" <?php if($_POST['model'] == 'P13 BLUE MAX PRO 256 GB'){ ?> selected <?php } ?>>P13 BLUE MAX PRO 256 GB</option>
												<option value="P13 BLUE MAX PRO LİTE" <?php if($_POST['model'] == 'P13 BLUE MAX PRO LİTE'){ ?> selected <?php } ?>>P13 BLUE MAX PRO LİTE</option>
												<option value="P13 BLUE MAX PRO LİTE 2022" <?php if($_POST['model'] == 'P13 BLUE MAX PRO LİTE 2022'){ ?> selected <?php } ?>>P13 BLUE MAX PRO LİTE 2022</option>
												<option value="P13 BLUE MAXL 2021" <?php if($_POST['model'] == 'P13 BLUE MAXL 2021'){ ?> selected <?php } ?>>P13 BLUE MAXL 2021</option>
												<option value="P13 BLUE MAXL 2022" <?php if($_POST['model'] == 'P13 BLUE MAXL 2022'){ ?> selected <?php } ?>>P13 BLUE MAXL 2022</option>
												<option value="P13 BLUE PLUS" <?php if($_POST['model'] == 'P13 BLUE PLUS'){ ?> selected <?php } ?>>P13 BLUE PLUS</option>
												<option value="P13 BLUE PLUS 2022" <?php if($_POST['model'] == 'P13 BLUE PLUS 2022'){ ?> selected <?php } ?>>P13 BLUE PLUS 2022</option>
												<option value="S19 MAX" <?php if($_POST['model'] == 'S19 MAX'){ ?> selected <?php } ?>>S19 MAX</option>
												<option value="S19 MAX PRO" <?php if($_POST['model'] == 'S19 MAX PRO'){ ?> selected <?php } ?>>S19 MAX PRO</option>
												<option value="M10 BLUE MAX" <?php if($_POST['model'] == 'M10 BLUE MAX'){ ?> selected <?php } ?>>M10 BLUE MAX</option>
												<option value="M7S 6.0" <?php if($_POST['model'] == 'M7S 6.0'){ ?> selected <?php } ?>>M7S 6.0</option>
												<option value="M7 GO 2019 8.1" <?php if($_POST['model'] == 'M7 GO 2019 8.1'){ ?> selected <?php } ?>>M7 GO 2019 8.1</option>
												<option value="M7S 9.0" <?php if($_POST['model'] == 'M7S 9.0'){ ?> selected <?php } ?>>M7S 9.0</option>
												<option value="M7 GO 2019 6.0" <?php if($_POST['model'] == 'M7 GO 2019 6.0'){ ?> selected <?php } ?>>M7 GO 2019 6.0</option>
												<option value="M7 GO LTE" <?php if($_POST['model'] == 'M7 GO LTE'){ ?> selected <?php } ?>>M7 GO LTE</option>
												<option value="M8 GO ANDROİD 9.0" <?php if($_POST['model'] == 'M8 GO ANDROİD 9.0'){ ?> selected <?php } ?>>M8 GO ANDROİD 9.0</option>
												<option value="M10S PLUS">M10S PLUS</option>
												<option value="M10S" <?php if($_POST['model'] == 'M10S'){ ?> selected <?php } ?>>M10S</option>
												<option value="M10 PLUS" <?php if($_POST['model'] == 'M10 PLUS'){ ?> selected <?php } ?>>M10 PLUS</option>
												<option value="M10 GO" <?php if($_POST['model'] == 'M10 GO'){ ?> selected <?php } ?>>M10 GO</option>
												<option value="M10 PRO LTE" <?php if($_POST['model'] == 'M10 PRO LTE'){ ?> selected <?php } ?>>M10 PRO LTE</option>
												<option value="M8" <?php if($_POST['model'] == 'M8'){ ?> selected <?php } ?>>M8</option>
                        <option value="KİDDO AKILLI ÇOCUK SAATİ" <?php if($_POST['model'] == 'KİDDO AKILLI ÇOCUK SAATİ'){ ?> selected <?php } ?>>KİDDO AKILLI ÇOCUK SAATİ</option>
                        <option value="KİDSWATCH AKILLI ÇOCUK SAATİ" <?php if($_POST['model'] == 'KİDSWATCH AKILLI ÇOCUK SAATİ'){ ?> selected <?php } ?>>KİDSWATCH AKILLI ÇOCUK SAATİ</option>


												
											</select>
										</div>
-->
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Cihaz SeriNo (*Zorunlu Alan)</div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="serino" placeholder="SeriNo Giriniz" id='serino' value='<?php echo $_POST['serino']; ?>'>
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Cihaz IMEI1 </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="imei1" placeholder="IMEI1 Giriniz">
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Cihaz IMEI2 </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="imei2" placeholder="IMEI2 Giriniz">
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-label">Cihaz Sorun Bilgisi (*Zorunlu Alan)</div><br/>

                                          <div class="custom-switches-stacked">
                                              <div class="form-label">Cihaz açılıyor mu?</div>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru1" value="Evet" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Evet</span>
                                              </label>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru1" value="Hayır" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Hayır</span>
                                              </label>
                                              
                                            </div>
                                            <div class="custom-switches-stacked">
                                              <div class="form-label">Ekran kırık mı?</div>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru2" value="Evet" class="custom-switch-input" >
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Evet</span>
                                              </label>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru2" value="Hayır" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Hayır</span>
                                              </label>
                                              
                                            </div>
                                            <div class="custom-switches-stacked">
                                              <div class="form-label">Şarj oluyor mu?</div>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru3" value="Evet" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Evet</span>
                                              </label>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru3" value="Hayır" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Hayır</span>
                                              </label>
                                              
                                            </div>

                                            <div class="custom-switches-stacked">
                                              <div class="form-label">Dokunmatik çalışıyor mu?</div>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru4" value="Evet" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Evet</span>
                                              </label>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_soru4" value="Hayır" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Hayır</span>
                                              </label>
                                              
                                            </div>

                                            <div class="custom-switches-stacked">
                                              <div class="form-label">Şuan Reedükkanda mı bulunuyorsunuz?</div>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_reedukkandami" value="Evet" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Evet</span>
                                              </label>
                                              <label class="custom-switch">
                                                <input type="radio" name="form_reedukkandami" value="Hayır" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Hayır</span>
                                              </label>
                                              
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-label">ReeDükkan</div>

                                            <select class="form-control select2-flag-search" id="ReeDukkans" name='reedukkan' disabled="disabled">
                                                <option value="0">Lütfen Önce bir İl seçiniz (*Zorunlu Alan)</option>
                                            </select>
											
										                  </div>
                                        <div class="form-group">
                                            <div class="custom-switches-stacked">
                                                <div class="form-label">Müşteri Cihaz Fatura Tarihi (*Zorunlu Alan)</div>

                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="fatura_tarih" placeholder="Fatura Tarihi Giriniz" ><br/>
                                                    <center>
                                                    <label class="custom-switch">
                                                      <input type="checkbox" name="fatura_tarih" value='yok' class="custom-switch-input">
                                                      <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">													<button type="button" class="dropdown-item" data-toggle="modal" data-target="#c123"> Faturam Yok (Bilgilendirme) </button>
</span>
                                                    </label>
                                                    <div id="c123" class="modal fade">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Bilgilendirme Metni</h6>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p>Faturası bulunmayan cihazlarda ek ücretlendirme uygulanmaktadır.</p>
                                                            </div><!-- modal-body -->
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tamam</button>
                                                            </div>
                                                        </div>
                                                    </div><!-- modal-dialog -->
                                                </div><!

                                                    </center>
													
                                                </div>                                       
                                                                                             
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <div class="custom-file">
                                            
                                            <input type="file" class="custom-file-input" name="foto" id="image">
                                            <label class="custom-file-label">Fatura Görseli Ekle (*Zorunlu Alan)</label>

                                          </div>
                                          <img id="preview" src=""style="width:80px;height:auto;"/>

                                        </div>
                                        
                                        <p>Formu tamamlayabilmeniz için telefon fotoğrafları eklemeniz gerekmektedir.*</p>
                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto1" id='imagebir'>
                                            <label class="custom-file-label">1-Telefon Görseli Ekle (*Zorunlu Alan)</label>
                                          </div>
                                          <img id="previewbir" src=""  style="width:80px;height:auto;"/>

                                        </div>

                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto2" id="imageiki">
                                            <label class="custom-file-label">2-Telefon Görseli Ekle (*Zorunlu Alan)</label>
                                          </div>
                                          <img id="previewiki" src=""  style="width:80px;height:auto;"/>

                                        </div>
                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto3" id="imageuc">
                                            <label class="custom-file-label">3-Telefon Görseli Ekle </label>
                                          </div>
                                          <img id="previewuc" src=""  style="width:80px;height:auto;"/>

                                        </div>
                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto4" id="imagedort">
                                            <label class="custom-file-label">4-Telefon Görseli Ekle </label>
                                          </div>
                                          <img id="previewdort" src=""  style="width:80px;height:auto;"/>

                                        </div>
                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto5" id="imagebes">
                                            <label class="custom-file-label">5-Telefon Görseli Ekle </label>
                                          </div>
                                          <img id="previewbes" src=""  style="width:80px;height:auto;"/>

                                        </div>
                                        <div class="form-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto6" id="imagealti">
                                            <label class="custom-file-label">6-Telefon Görseli Ekle </label>
                                          </div>
                                          <img id="previewalti" src=""  style="width:80px;height:auto;"/>

                                        </div>
                                        
                                        
                                       
                                        
                                        
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               
			</div>
            <?php
                            if($_POST){
                                $dataTelModel = [
                                    "S2 MAX AKILLI SAAT",
                                    "S1 MAX AKILLI SAAT",
                                    "REEFIT AKILLI BILEKLIK",
                                    "S19 MAX PRO 6/256 GB",
                                    "S19 MAX PRO 4/128 GB",
                                    "S19 MAX 64 GB",
                                    "S19 MAX 4/128 GB",
                                    "S19 MAX 32 GB",
                                    "PREO P3",
                                    "PREO P2",
                                    "P13 LITE",
                                    "P13 BLUE PLUS 4/64 GB",
                                    "P13 BLUE PLUS 2022 4/32 GB",
                                    "P13 BLUE MAXL 2022 4/64 GB",
                                    "P13 BLUE MAXL 2021 4/64 GB",
                                    "P13 BLUE MAX PRO LITE 4/64 GB",
                                    "P13 BLUE MAX PRO LITE 2022 4/64 GB",
                                    "P13 BLUE MAX PRO 8/128 GB",
                                    "P13 BLUE MAX PRO 256 GB 6/256 GB",
                                    "P13 BLUE MAX PRO 2021 6/128 GB",
                                    "P13 BLUE MAX LITE 3/32 GB",
                                    "P13 BLUE MAX LITE 2022 2/32 GB",
                                    "P13 BLUE MAX LITE 2/16 GB",
                                    "P13 BLUE MAX 4/64 GB",
                                    "P13 BLUE MAX 2020 4/64 GB",
                                    "P13 BLUE MAX 128 GB 4/128 GB",
                                    "P13 BLUE MAX 128 GB 2022 4/128 GB",
                                    "P13 BLUE 3/16 GB",
                                    "P13 BLUE 2022 2/32 GB",
                                    "P13 BLUE 2021 2/32 GB",
                                    "P13 BLUE 2021 2/32 GB",
                                    "P13",
                                    "P12S",
                                    "P12",
                                    "P11SE",
                                    "P11S",
                                    "P11",
                                    "P10SE",
                                    "P10S",
                                    "P10C",
                                    "P10",
                                    "KIDSWATCH AKILLI SAAT",
                                    "KIDDO AKILLI COCUK SAATI",
                                    "F1 TOUCHE TELEFON",
                                    "ALFREED ROBOT SÜPÜRGE",                                  
                                    "M8 GO"
                                  
                                   
                                ];

                                

                              $reedukkan = 'yok';

                                $foto = 'yok';
                                $foto3 = 'yok';
                                $foto4 = 'yok';
                                $foto5 = 'yok';
                                $foto6 = 'yok';
                                $sorunu = 'yok';

                              $form_oracle_girdimi = 'yok';
                              $mail_adresi = 'yok';

                              $fatura_tarih = 'yok';


                                $ad_soyad = $_POST['ad_soyad'];
                                $il = strval( $_POST['il']);
                                $ilce = $_POST['ilce'];
                                $adres = $_POST['adres'];
                                $model = $dataTelModel[$_POST['model']-1];
                                $serino = $_POST['serino'];
                                $imei1 = $_POST['imei1'];
                                $imei2 = $_POST['imei2'];
                                $fatura_tarih = $_POST['fatura_tarih'];
                                $tel = $_POST['tel'];
                                $sorunu = $_POST['sorunu'];
                                $mail_adresi = $_POST['mail_adresi'];
                                $reedukkan = $_POST['reedukkan'];

                                $form_soru1 = $_POST['form_soru1'];
                                $form_soru2 = $_POST['form_soru2'];
                                $form_soru3 = $_POST['form_soru3'];
                                $form_soru4 = $_POST['form_soru4'];

                                $form_reedukkandami = $_POST['form_reedukkandami'];

                                $form_model_renk  = $_POST['renk'];

                                if($imei1 == '' || $imei1 == null){
                                  $imei1 = 'yok';

                                }
                                if($imei2 == '' || $imei2 == null){
                                  $imei2 = 'yok';

                                }
                                if($reedukkan == '' || $reedukkan == null){
                                  $reedukkan = 'yok';
                                }
                                if($sorunu == '' || $sorunu == null){
                                  $sorunu = 'yok';
                                }
                                if($mail_adresi == '' || $mail_adresi == null){
                                  $mail_adresi = 'yok';
                                }
                                




                                
                                $sehir = array(
                                    '1' =>'Adana',
                                    '2' =>'Adıyaman',
                                    '3' =>'Afyonkarahisar',
                                    '4' =>'Ağrı',
                                    '5' =>'Amasya',
                                    '6' =>'Ankara',
                                    '7' =>'Antalya',
                                    '8' =>'Artvin',
                                    '9' =>'Aydın',
                                    '10' =>'Balıkesir',
                                    '11' =>'Bilecik',
                                    '12' =>'Bingöl',
                                    '13' =>'Bitlis',
                                    '14' =>'Bolu',
                                    '15' =>'Burdur',
                                    '16' =>'Bursa',
                                    '17' =>'Çanakkale',
                                    '18' =>'Çankırı',
                                    '19' =>'Çorum',
                                    '20' =>'Denizli',
                                    '21' =>'Diyarbakır',
                                    '22' =>'Edirne',
                                    '23' =>'Elazığ',
                                    '24' =>'Erzincan',
                                    '25' =>'Erzurum',
                                    '26' =>'Eskişehir',
                                    '27' =>'Gaziantep',
                                    '28' =>'Giresun',
                                    '29' =>'Gümüşhane',
                                    '30' =>'Hakkari',
                                    '31' =>'Hatay',
                                    '32' =>'Isparta',
                                    '33' =>'Mersin',
                                    '34' =>'İstanbul',
                                    '35' =>'İzmir',
                                    '36' =>'Kars',
                                    '37' =>'Kastamonu',
                                    '38' =>'Kayseri',
                                    '39' =>'Kırklareli',
                                    '40' =>'Kırşehir',
                                    '41' =>'Kocaeli',
                                    '42' =>'Konya',
                                    '43' =>'Kütahya',
                                    '44' =>'Malatya',
                                    '45' =>'Manisa',
                                    '46' =>'Kahramanmaraş',
                                    '47' =>'Mardin',
                                    '48' =>'Muğla',
                                    '49' =>'Muş',
                                    '50' =>'Nevşehir',
                                    '51' =>'Niğde',
                                    '52' =>'Ordu',
                                    '53' =>'Rize',
                                    '54' =>'Sakarya',
                                    '55' =>'Samsun',
                                    '56' =>'Siirt',
                                    '57' =>'Sinop',
                                    '58' =>'Sivas',
                                    '59' =>'Tekirdağ',
                                    '60' =>'Tokat',
                                    '61' =>'Trabzon',
                                    '62' =>'Tunceli',
                                    '63' =>'Şanlıurfa',
                                    '64' =>'Uşak',
                                    '65' =>'Van',
                                    '66' =>'Yozgat',
                                    '67' =>'Zonguldak',
                                    '68' =>'Aksaray',
                                    '69' =>'Bayburt',
                                    '70' =>'Karaman',
                                    '71' =>'Kırıkkale',
                                    '72' =>'Batman',
                                    '73' =>'Şırnak',
                                    '74' =>'Bartın',
                                    '75' =>'Ardahan',
                                    '76' =>'Iğdır',
                                    '77' =>'Yalova',
                                    '78' =>'Karabük',
                                    '79' =>'Kilis',
                                    '80' =>'Osmaniye',
                                    '81' =>'Düzce',
                                    );

                                $il = $sehir[$il];
                                date_default_timezone_set('Europe/Istanbul');
                                $tarih = date('Y-m-d');

                                $_SESSION['ad_soyad'] = $_POST['ad_soyad'];
                                $_SESSION['il'] = $_POST['il'];
                                $_SESSION['ilce'] = $_POST['ilce'];
                                $_SESSION['adres'] = $_POST['adres'];
                                $_SESSION['model'] = $_POST['model'];
                                $_SESSION['serino'] = $_POST['serino'];
                                $_SESSION['imei1'] = $_POST['imei1'];
                                $_SESSION['imei2'] = $_POST['imei2'];
                                $_SESSION['fatura_tarih'] = $_POST['fatura_tarih'];
                                $_SESSION['tel'] = $_POST['tel'];
                                $_SESSION['sorunu'] = $_POST['sorunu'];
                                $_SESSION['mail_adresi'] = $_POST['mail_adresi'];
                                $_SESSION['reedukkan'] = $_POST['reedukkan'];
                                
                                $_SESSION['form_soru1'] = $_POST['form_soru1'];
                                $_SESSION['form_soru2'] = $_POST['form_soru2'];
                                $_SESSION['form_soru3'] = $_POST['form_soru3'];
                                $_SESSION['form_soru4'] = $_POST['form_soru4'];

                                $_SESSION['form_reedukkandami'] = $_POST['form_reedukkandami'];
                                
                                if ($_FILES["foto"]["type"]=="image/jpeg" || $_FILES["foto"]["type"]=="image/jpg" || $_FILES["foto"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }
                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="servis/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto"]["tmp_name"],$yeni_ad)){
                                    $foto =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }
                                if ($_FILES["foto1"]["type"]=="image/jpeg" || $_FILES["foto1"]["type"]=="image/jpg" || $_FILES["foto1"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto1"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto1"]["tmp_name"],$yeni_ad)){
                                    $foto1 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }
                                if ($_FILES["foto2"]["type"]=="image/jpeg" || $_FILES["foto2"]["type"]=="image/jpg" || $_FILES["foto2"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto2"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto2"]["tmp_name"],$yeni_ad)){
                                    $foto2 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }
                                if ($_FILES["foto3"]["type"]=="image/jpeg" || $_FILES["foto3"]["type"]=="image/jpg" || $_FILES["foto3"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto3"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto3"]["tmp_name"],$yeni_ad)){
                                    $foto3 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }
                                if ($_FILES["foto4"]["type"]=="image/jpeg" || $_FILES["foto4"]["type"]=="image/jpg" || $_FILES["foto4"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto4"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto4"]["tmp_name"],$yeni_ad)){
                                    $foto4 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }

                                if ($_FILES["foto5"]["type"]=="image/jpeg" || $_FILES["foto5"]["type"]=="image/jpg" || $_FILES["foto5"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto5"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto5"]["tmp_name"],$yeni_ad)){
                                    $foto5 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }
                                if ($_FILES["foto6"]["type"]=="image/jpeg" || $_FILES["foto6"]["type"]=="image/jpg" || $_FILES["foto6"]["type"]=="image/png"){  
                                  //dosya tipi jpeg olsun
                                  $dosya_adi   =    $_FILES["foto6"]["name"];//Resimi kayıt ederken yeni bir isim oluşturalım
                                  $uret=array("as","rt","ty","yu","fg");
                                  if(strstr($dosya_adi,'.png')){
                                    $uzanti = '.png';
                                  }
                                  if(strstr($dosya_adi,'.jpg')){
                                    $uzanti = '.jpg';
                                  }
                                  if(strstr($dosya_adi,'.jpeg')){
                                    $uzanti = '.jpeg';
                                  }                                  
                                  $sayi_tut=rand(1,10000);
                                  $yeni_ad="telefon_foto/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                                  if (move_uploaded_file($_FILES["foto6"]["tmp_name"],$yeni_ad)){
                                    $foto6 =  "http://195.33.224.54/reepanel/LTR/User_Pages/".$yeni_ad;
                                  }
                
                
                                }

                                if($ad_soyad != '' && $il != '' && $ilce != '' && $adres != '' &&  $model != '' && $form_model_renk != '' && $serino != '' && $fatura_tarih != '' && $foto != '' && $tel != '' && $foto1 != '' && $foto2 != '' && $form_soru1 != '' && $form_soru2 != '' && $form_soru3 != '' && $form_soru4 != '' && $form_reedukkandami != ''){
                                    
                                  $url = 'http://195.33.224.54:5699/select_serino';

                                  // request data that is going to be sent as POST to API
                                  $data = array(
                                      "serino" => $serino
                                      
                                 
                                 
                                      
                                  );
                                 
                                  // encoding the request data as JSON which will be sent in POST
                                  $encodedData = json_encode($data);
                                 
                                  // initiate curl with the url to send request
                                  $curl = curl_init($url);
                                 
                                  // return CURL response
                                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                 
                                  // Send request data using POST method
                                  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                                 
                                  // Data conent-type is sent as JSON
                                  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                                      'Content-Type:application/json'
                                  ));
                                  curl_setopt($curl, CURLOPT_POST, true);
                                 
                                  // Curl POST the JSON data to send the request
                                  curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedData);
                                 
                                  // execute the curl POST request and send data
                                  $result = curl_exec($curl);
                                  curl_close($curl);
                                 
                                  // if required print the curl response
                                  $resultx = json_decode($result);
                                  //echo $resultx->answer;
                                  $serino_sonucu = $resultx->answer;


                                    //$data = $db -> query("SELECT * FROM BayiApp_Formmm WHERE form_serino='".$serino."' ")->fetchAll();
                                    if($serino_sonucu == 0 ){
                                 

                                        
                                        $imei2_durum = 0;
                                        $imei1_durum = 0;
                                        $serino_durum = 0;
                                        $telno_durum = 0;
                                        if($tel != '' && isset($tel)){
                                            if(strlen((string) $tel) == 10){
                                                $telno_durum = 1;

                                            }else{
                                                echo "<script>alert('Telefon Numarası 10 Hane Olması Gerekmektedir.');</script>";
                                                $telno_durum = 0;


                                            }
                                        }

                                        if($serino != '' && isset($serino)){
                                            if(strlen((string) $serino) == 14){
                                                $serino_durum = 1;

                                            }else{
                                                echo "<script>alert('Seri Numarası 14 Hane Olması Gerekmektedir.');</script>";
                                                $serino_durum = 0;


                                            }
                                        }
                                        if($imei2 != 'yok'){
                                            if(strlen( (string)  $imei2) == 15){
                                                $imei2_durum = 1;

                                            }else{
                                                echo "<script>alert('İMEİ2 15 Hane Olması Gerekmektedir.');</script>";
                                                $imei2_durum = 0;


                                            }
                                        }else{
                                            $imei2_durum = 1;
                                        }

                                        if($imei1 != 'yok'){
                                            if(strlen( (string)  $imei1) == 15){
                                                $imei1_durum = 1;

                                            }else{
                                                echo "<script>alert('İMEİ1 15 Hane Olması Gerekmektedir.');</script>";
                                                $imei1_durum = 0;


                                            }
                                        }else{
                                            $imei1_durum = 1;

                                        }
                                          // echo "<script>alert('Serino".$serino_durum."');</script>";
                                          //  echo "<script>alert('imei1".$imei1_durum."');</script>";
                                          //  echo "<script>alert('imei2".$imei2_durum."');</script>";
                                          //  echo "<script>alert('telno durum".$telno_durum."');</script>";

                                        if($telno_durum != 0 && $serino_durum != 0 && $imei1_durum != 0 && $imei2_durum != 0){
                                            

                                          $url = 'http://195.33.224.54:5699/insert_form';

                                          // request data that is going to be sent as POST to API
                                          $data = array(
                                              "form_ad_soyad" => $ad_soyad,
                                              "form_il" => $il,
                                              "form_ilce" => $ilce,
                                              "form_adres" => $adres,
                                              "form_model" => $model,
                                              "form_serino" => $serino,
                                              "form_imei1" => $imei1,
                                              "form_imei2" => $imei2,
                                              "form_fatura_tarih" => $fatura_tarih,
                                              "form_tarih" => $tarih,
                                              "form_foto" => $foto,
                                              "form_tel" => $tel ,
                                              "form_reedukkan" => $reedukkan ,
                                              "form_ariza_bilgisi" => $sorunu ,
                                              "form_email" => $mail_adresi ,
                                              "form_foto_tel1" => $foto1 ,
                                              "form_foto_tel3" => $foto3 ,
                                              "form_foto_tel4" => $foto4 ,
                                              "form_foto_tel5" => $foto5 ,
                                              "form_foto_tel6" => $foto6 ,
                                              "form_foto_tel2" => $foto2 ,
                                              "form_soru1" => $form_soru1 ,
                                              "form_soru2" => $form_soru2 ,
                                              "form_soru3" => $form_soru3 ,
                                              "form_soru4" => $form_soru4 ,
                                              "form_oracle_girdimi" => $form_oracle_girdimi ,
                                              "form_reedukkandami" => $form_reedukkandami ,
                                              "form_model_renk" => $form_model_renk




                                              





                                              
                                         
                                         
                                              
                                          );
                                         
                                          // encoding the request data as JSON which will be sent in POST
                                          $encodedData = json_encode($data);
                                         
                                          // initiate curl with the url to send request
                                          $curl = curl_init($url);
                                         
                                          // return CURL response
                                          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                         
                                          // Send request data using POST method
                                          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                                         
                                          // Data conent-type is sent as JSON
                                          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                                              'Content-Type:application/json'
                                          ));
                                          curl_setopt($curl, CURLOPT_POST, true);
                                         
                                          // Curl POST the JSON data to send the request
                                          curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedData);
                                         
                                          // execute the curl POST request and send data
                                          $result = curl_exec($curl);
                                          curl_close($curl);
                                         
                                          // if required print the curl response
                                          $resultx = json_decode($result);
                                          //echo $resultx->answer;
                                          $insert_sonucu = $resultx->answer;
                                          if($insert_sonucu == 1){
                                            echo'<script>alert("Bilgileriniz başarılı bir şekilde kaydedilmiştir.");</script>';
                                            echo'<script>window.location = "https://reeder.com.tr"</script>';
                                          }else{
                                            echo'<script>alert("Kaydedilme sırasında bir hata oluştu.");</script>';

                                          }
                                            


                                            //$sorgu = $db->prepare("INSERT INTO BayiApp_Formmm(form_ad_soyad,form_il,form_ilce,form_adres,form_model,form_serino,form_imei1,form_imei2,form_fatura_tarih,form_tarih,form_foto,form_tel,form_reedukkan,form_ariza_bilgisi,form_email,form_foto_tel1,form_foto_tel3,form_foto_tel4,form_foto_tel5,form_foto_tel6,form_foto_tel2,form_soru1,form_soru2,form_soru3,form_soru4,form_oracle_girdimi,form_reedukkandami,form_model_renk) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                                        
                                            //$sorgu->bindParam(1, $ad_soyad, PDO::PARAM_STR);
                                            //$sorgu->bindParam(2,$il,PDO::PARAM_STR);
                                            //$sorgu->bindParam(3,$ilce,PDO::PARAM_STR);
                                            //$sorgu->bindParam(4,$adres,PDO::PARAM_STR);
                                            //$sorgu->bindParam(5,$model,PDO::PARAM_STR);
                                            //$sorgu->bindParam(6,$serino,PDO::PARAM_STR);
                                            //$sorgu->bindParam(7,$imei1,PDO::PARAM_STR);
                                            //$sorgu->bindParam(8,$imei2,PDO::PARAM_STR);
                                            //$sorgu->bindParam(9,$fatura_tarih,PDO::PARAM_STR);
                                            //$sorgu->bindParam(10,$tarih,PDO::PARAM_STR);
                                            //$sorgu->bindParam(11,$foto,PDO::PARAM_STR);
                                            //$sorgu->bindParam(12,$tel,PDO::PARAM_STR);
                                            //$sorgu->bindParam(13,$reedukkan,PDO::PARAM_STR);
                                           // $sorgu->bindParam(14,$sorunu,PDO::PARAM_STR);
                                           // $sorgu->bindParam(15,$mail_adresi,PDO::PARAM_STR);
                                            //$sorgu->bindParam(16,$foto1,PDO::PARAM_STR);
                                            //$sorgu->bindParam(17,$foto3,PDO::PARAM_STR);
                                            //$sorgu->bindParam(18,$foto4,PDO::PARAM_STR);
                                            //$sorgu->bindParam(19,$foto5,PDO::PARAM_STR);
                                            //$sorgu->bindParam(20,$foto6,PDO::PARAM_STR);
                                            //$sorgu->bindParam(21,$foto2,PDO::PARAM_STR);
                                            //$sorgu->bindParam(22,$form_soru1,PDO::PARAM_STR);
                                            //$sorgu->bindParam(23,$form_soru2,PDO::PARAM_STR);
                                            //$sorgu->bindParam(24,$form_soru3,PDO::PARAM_STR);
                                            //$sorgu->bindParam(25,$form_soru4,PDO::PARAM_STR);
                                            //$sorgu->bindParam(26,$form_oracle_girdimi,PDO::PARAM_STR);
                                            //$sorgu->bindParam(27,$form_reedukkandami,PDO::PARAM_STR);   
                                            //$sorgu->bindParam(28,$form_model_renk,PDO::PARAM_STR);   
    
    
                                
    
    
    

                                            //$sorgu->execute();
    
                                            

                                        }else{
                                            echo'<script>alert("Bir hata oluştu.");</script>';

                                        }
                                       
        
                                      
                                
                                        

                                    }else{
                                        echo'<script>alert("Girilen Seri Numarasına Ait Bir Kayıt Bulunmaktadır. Lütfen Kayıt Tekrarı Yapmayınız");</script>';

                                    }



                                 

                                }else{
                                  echo "<script>alert('Lütfen boş alan bırakmayınız!');</script>";
                                }
                                    
                                    
                                
                            
                               

                            
                        }
                        
                                               
                        
                        ?>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            Reeder © 2022 All rights reserved.

						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>


		<!-- Dashboard js -->
		<script src="../../assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="../../assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="../../assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="../../assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/vendors/selectize.min.js"></script>
		<script src="../../assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="../../assets/js/vendors/circle-progress.min.js"></script>
		<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Fullside-menu Js-->
		<script src="../../assets/plugins/toggle-sidebar/sidemenu.js"></script>


		<!-- Form wizard js -->
        <script src="../../assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="../../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/wizard.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="../../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Counters -->
		<script src="../../assets/plugins/counters/counterup.min.js"></script>
		<script src="../../assets/plugins/counters/waypoints.min.js"></script>
        <script>

    var form = document.forms["form"];  // form seçimi
    var ad_soyad = form.ad_soyad;
    var il = form.il;
    var ilce = form.ilce;
    var adres = form.adres;
    var tel = form.tel;
    var model = form.model;
    var serino = form.serino;
    var fatura_tarih = form.fatura_tarih;

  form.onsubmit = function() {  // onsubmit olayı
    if(ad_soyad.value == ''){
        alert('Ad Soyad Alanını Boş Bırakmayınız');
    } if(il.value == ''){
        alert('İl Bilgisi Alanını Boş Bırakmayınız');
        
    }
     if(ilce.value == ''){
        alert('İlçe Bilgisi Alanını Boş Bırakmayınız');
    }
     if(adres.value == ''){
        alert('Adres Bilgisi Alanını Boş Bırakmayınız');
    }
     if(tel.value == ''){
        alert('Telefon Numarası Bilgisi Alanını Boş Bırakmayınız');
    }
     if (model.value == ''){
        alert('Model Bilgisi Alanını Boş Bırakmayınız');
    }
     if(serino.value == ''){
        alert('SeriNo Bilgisi Alanını Boş Bırakmayınız');
    }
     if(fatura_tarih == ''){
        alert('Fatura Tarihi Bilgisi Alanını Boş Bırakmayınız');
    }
}


                                            function preview(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#preview');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#image").change(function() {
                                                    preview(this);
                                                    

                                                });

                                                function previewbir(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewbir');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imagebir").change(function() {
                                                    previewbir(this);
                                                    

                                                });

                                                function previewiki(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewiki');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imageiki").change(function() {
                                                    previewiki(this);
                                                    

                                                });

                                                function previewuc(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewuc');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imageuc").change(function() {
                                                    previewuc(this);
                                                    

                                                });

                                                function previewdort(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewdort');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imagedort").change(function() {
                                                    previewdort(this);
                                                    

                                                });

                                                function previewbes(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewbes');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imagebes").change(function() {
                                                    previewbes(this);
                                                    

                                                });

                                                function previewalti(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        var img = $('#previewalti');
                                                        reader.onload = function(e) {
                                                            img.attr('src', e.target.result);
                                                            img.css("display", "block");
                                                        }

                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                $("#imagealti").change(function() {
                                                    previewalti(this);
                                                    

                                                });
                                        </script>

		<!-- Custom Js-->
		<script src="../../assets/js/admin-custom.js"></script>
        <script>

var dataTelModel = [
  {
    "il": "S2 MAX AKILLI SAAT",
    "plaka": "1",
    "ilceleri": [
      "Yok",
      
    ]
  },
  {
    "il": "S1 MAX AKILLI SAAT",
    "plaka": "2",
    "ilceleri": [
      "Yok",
      
    ]
  },
  {
    "il": "REEFIT AKILLI BILEKLIK",
    "plaka": "3",
    "ilceleri": [
      "Siyah",
      "Yeşil",
      "Mavi",
      "Beyaz",
      "Gri"
      
    ]
  },
  {
    "il": "S19 MAX PRO 6/256 GB",
    "plaka": "4",
    "ilceleri": [
      "Mavi",
      "Siyah",
      "Altın"
      
    ]
  },
  {
    "il": "S19 MAX PRO 4/128 GB",
    "plaka": "5",
    "ilceleri": [
      "Mavi",
      "Siyah",
      "Altın"
      
    ]
  },
  {
    "il": "S19 MAX 64 GB",
    "plaka": "6",
    "ilceleri": [
      "Siyah",
      "Beyaz",
      "Yeşil",
      "Koyu Mavi",
      "Parlak Mavi",
      "Bordo"
      
    ]
  },
  {
    "il": "S19 MAX 4/128 GB",
    "plaka": "7",
    "ilceleri": [
      "Siyah",
      "Beyaz",
      "Yeşil",
      "Mavi",
      "Bordo"
      
    ]
  },
  {
    "il": "S19 MAX 32 GB",
    "plaka": "8",
    "ilceleri": [
      "Siyah",
      "Beyaz",
      "Yeşil",
      "Koyu Mavi",
      "Parlak Mavi",
      "Bordo"
      
    ]
  },
  {
    "il": "PREO P3",
    "plaka": "9",
    "ilceleri": [
      "Siyah",
      "Mavi"
      
    ]
  },
  {
    "il": "PREO P2",
    "plaka": "10",
    "ilceleri": [
      "Siyah",
      "Mavi",
      "Beyaz"
      
    ]
  },
  {
    "il": "P13 LITE",
    "plaka": "11",
    "ilceleri": [
      "Yok",
      
      
    ]
  },
  {
    "il": "P13 BLUE PLUS 4/64 GB",
    "plaka": "12",
    "ilceleri": [
      "Yok",
      
      
    ]
  },
  {
    "il": "P13 BLUE PLUS 2022 4/32 GB",
    "plaka": "13",
    "ilceleri": [
      "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
    ]
  },
  {
    "il": "P13 BLUE MAXL 2022 4/64 GB",
    "plaka": "14",
    "ilceleri": [
      "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
    ]
  },
  {
    "il": "P13 BLUE MAXL 2021 4/64 GB",
    "plaka": "15",
    "ilceleri": [
      "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX PRO LITE 4/64 GB",
    "plaka": "16",
    "ilceleri": [
      "Yok",
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX PRO LITE 2022 4/64 GB",
    "plaka": "17",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX PRO 8/128 GB",
    "plaka": "18",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX PRO 256 GB 6/256 GB",
    "plaka": "19",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX PRO 2021 6/128 GB",
    "plaka": "20",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil",
      "Kırmızı"
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX LITE 3/32 GB",
    "plaka": "21",
    "ilceleri": [
        "Yok",
      
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX LITE 2022 2/32 GB",
    "plaka": "22",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
      
      
      
    ]
  },
  {
    "il": "P13 BLUE MAX LITE 2/16 GB",
    "plaka": "23",
    "ilceleri": [
        "Yok",      
      
    ]
  },
  {
    "il": "P13 BLUE MAX 4/64 GB",
    "plaka": "24",
    "ilceleri": [
        "Yok",      
      
    ]
  },
  {
    "il": "P13 BLUE MAX 2020 4/64 GB",
    "plaka": "25",
    "ilceleri": [
        "Yok",      
      
    ]
  },
  {
    "il": "P13 BLUE MAX 128 GB 4/128 GB",
    "plaka": "26",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
            
    ]
  },
  {
    "il": "P13 BLUE MAX 128 GB 2022 4/128 GB",
    "plaka": "27",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"
            
    ]
  },
  {
    "il": "P13 BLUE 3/16 GB",
    "plaka": "28",
    "ilceleri": [
        "Yok",
    
            
    ]
  },
  {
    "il": "P13 BLUE 2022 2/32 GB",
    "plaka": "29",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"    
            
    ]
  },
  {
    "il": "P13 BLUE 2021 2/32 GB",
    "plaka": "30",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"    
            
    ]
  },
  {
    "il": "P13 BLUE 2021 2/32 GB",
    "plaka": "31",
    "ilceleri": [
        "Mavi",
      "Siyah",
      "Beyaz",
      "Yeşil"    
            
    ]
  },
  {
    "il": "P13",
    "plaka": "32",
    "ilceleri": [
        "Yok"  
            
    ]
  },
  {
    "il": "P12S",
    "plaka": "33",
    "ilceleri": [
        "Mavi",
        "Siyah"  
            
    ]
  },
  {
    "il": "P12",
    "plaka": "34",
    "ilceleri": [
        "Mavi",
        "Siyah",
        "Kırmızı",
        "Altın" 
            
    ]
  },
  {
    "il": "P11SE",
    "plaka": "35",
    "ilceleri": [
        "Max",
        "Art",
        "Gri",
        "Altın" 
            
    ]
  },
  {
    "il": "P11S",
    "plaka": "36",
    "ilceleri": [
        "Yok" 
            
    ]
  },
  {
    "il": "P11",
    "plaka": "37",
    "ilceleri": [
        "Gümüş",
        'Siyah' 
            
    ]
  },
  {
    "il": "P10SE",
    "plaka": "38",
    "ilceleri": [
        "Gri",
        'Siyah',
        "Gümüş",
        "Altın",
        "Beyaz"
            
    ]
  },
  {
    "il": "P10S",
    "plaka": "39",
    "ilceleri": [
        "Gümüş",
        "Mavi"
            
    ]
  },
  {
    "il": "P10C",
    "plaka": "40",
    "ilceleri": [
        "Siyah",
        "Beyaz"
            
    ]
  },
  {
    "il": "P10",
    "plaka": "41",
    "ilceleri": [
        "Yok"
            
    ]
  },
  {
    "il": "KIDSWATCH AKILLI SAAT",
    "plaka": "42",
    "ilceleri": [
        "Pembe",
        "Mavi"
            
    ]
  },
  {
    "il": "KIDDO AKILLI COCUK SAATI",
    "plaka": "43",
    "ilceleri": [
        "Pembe",
        "Mavi",
        "Beyaz"
            
    ]
  },
  {
    "il": "F1 TOUCHE TELEFON",
    "plaka": "44",
    "ilceleri": [
        "Yok"
            
    ]
  },
  {
    "il": "ALFREED ROBOT SÜPÜRGE",
    "plaka": "45",
    "ilceleri": [
        "Yok"
            
    ]
  },
  {
    "il": "M8 GO",
    "plaka": "46",
    "ilceleri": [
        "Yok"
            
    ]
  },

 
]

function search(nameKey, myArray){
    for (var i=0; i < myArray.length; i++) {
        if (myArray[i].plaka == nameKey) {
            return myArray[i];
        }
    }
}
$( document ).ready(function() {
  $.each(dataTelModel, function( index, value ) {
    $('#Modeller').append($('<option>', {
        value: value.plaka,
        text:  value.il
    }));
  });
  $("#Modeller").change(function(){
    var valueSelected = this.value;
    if($('#Modeller').val() > 0) {
      $('#Renkler').html('');
      $('#Renkler').append($('<option>', {
        value: 0,
        text:  'Lütfen Bir Renk seçiniz'
      }));
      $('#Renkler').prop("disabled", false);
      var resultObject = search($('#Modeller').val(), dataTelModel);
      $.each(resultObject.ilceleri, function( index, value ) {
        $('#Renkler').append($('<option>', {
            value: value,
            text:  value
        }));
      });
      return false;
    }
    $('#Renkler').prop("disabled", true);
  });
});



            var data = [
  {
    "il": "Adana",
    "plaka": "1",
    "ilceleri": [
      "Aladağ",
      "Ceyhan",
      "Çukurova",
      "Feke",
      "İmamoğlu",
      "Karaisalı",
      "Karataş",
      "Kozan",
      "Pozantı",
      "Saimbeyli",
      "Sarıçam",
      "Seyhan",
      "Tufanbeyli",
      "Yumurtalık",
      "Yüreğir"
    ],
    "reedukkanlar":[
      "Adana 01 Burda"
      
      
      
    ]
  },
  {
    "il": "Adıyaman",
    "plaka": "2",
    "ilceleri": [
      "Besni",
      "Çelikhan",
      "Gerger",
      "Gölbaşı",
      "Kahta",
      "Merkez",
      "Samsat",
      "Sincik",
      "Tut"
    ],
    "reedukkanlar":[
      "Adıyaman Park",
      
      
      
    ]
  },
  {
    "il": "Afyonkarahisar",
    "plaka": "3",
    "ilceleri": [
      "Başmakçı",
      "Bayat",
      "Bolvadin",
      "Çay",
      "Çobanlar",
      "Dazkırı",
      "Dinar",
      "Emirdağ",
      "Evciler",
      "Hocalar",
      "İhsaniye",
      "İscehisar",
      "Kızılören",
      "Merkez",
      "Sandıklı",
      "Sinanpaşa",
      "Sultandağı",
      "Şuhut"
    ],
    "reedukkanlar":[
      "Afyon Park"
      
      
      
    ]
  },
  {
    "il": "Ağrı",
    "plaka": "4",
    "ilceleri": [
      "Diyadin",
      "Doğubayazıt",
      "Eleşkirt",
      "Hamur",
      "Merkez",
      "Patnos",
      "Taşlıçay",
      "Tutak"
    ]
  },
  {
    "il": "Amasya",
    "plaka": "5",
    "ilceleri": [
      "Göynücek",
      "Gümüşhacıköy",
      "Hamamözü",
      "Merkez",
      "Merzifon",
      "Suluova",
      "Taşova"
    ]
  },
  {
    "il": "Ankara",
    "plaka": "6",
    "ilceleri": [
      "Altındağ",
      "Ayaş",
      "Bala",
      "Beypazarı",
      "Çamlıdere",
      "Çankaya",
      "Çubuk",
      "Elmadağ",
      "Güdül",
      "Haymana",
      "Kalecik",
      "Kızılcahamam",
      "Nallıhan",
      "Polatlı",
      "Şereflikoçhisar",
      "Yenimahalle",
      "Gölbaşı",
      "Keçiören",
      "Mamak",
      "Sincan",
      "Kazan",
      "Akyurt",
      "Etimesgut",
      "Evren",
      "Pursaklar"
    ],
    "reedukkanlar":[
      "Ankara Optimum",
      "Ankara Forum",
      "Ankara Nata Vega",
      "Taurus Avm ",
      "Antares Avm ",
      "Ankara Atlantis AVM"
      
    ]
  },
  {
    "il": "Antalya",
    "plaka": "7",
    "ilceleri": [
      "Akseki",
      "Alanya",
      "Elmalı",
      "Finike",
      "Gazipaşa",
      "Gündoğmuş",
      "Kaş",
      "Korkuteli",
      "Kumluca",
      "Manavgat",
      "Serik",
      "Demre",
      "İbradı",
      "Kemer",
      "Aksu",
      "Döşemealtı",
      "Kepez",
      "Konyaaltı",
      "Muratpaşa"
    ],
    "reedukkanlar":[
      "Özdilek Park Antalya",
      "Antalya Agora",
      
      
      
    ]
  },
  {
    "il": "Artvin",
    "plaka": "8",
    "ilceleri": [
      "Ardanuç",
      "Arhavi",
      "Merkez",
      "Borçka",
      "Hopa",
      "Şavşat",
      "Yusufeli",
      "Murgul"
    ],
    "reedukkanlar":[
      "Artrium Avm"
      
      
      
    ]
  },
  {
    "il": "Aydın",
    "plaka": "9",
    "ilceleri": [
      "Merkez",
      "Bozdoğan",
      "Efeler",
      "Çine",
      "Germencik",
      "Karacasu",
      "Koçarlı",
      "Kuşadası",
      "Kuyucak",
      "Nazilli",
      "Söke",
      "Sultanhisar",
      "Yenipazar",
      "Buharkent",
      "İncirliova",
      "Karpuzlu",
      "Köşk",
      "Didim"
    ]
  },
  {
    "il": "Balıkesir",
    "plaka": "10",
    "ilceleri": [
      "Altıeylül",
      "Ayvalık",
      "Merkez",
      "Balya",
      "Bandırma",
      "Bigadiç",
      "Burhaniye",
      "Dursunbey",
      "Edremit",
      "Erdek",
      "Gönen",
      "Havran",
      "İvrindi",
      "Karesi",
      "Kepsut",
      "Manyas",
      "Savaştepe",
      "Sındırgı",
      "Gömeç",
      "Susurluk",
      "Marmara"
    ],
    "reedukkanlar":[
      "Balıkesir 10 Burda"
      
      
      
    ]
  },
  {
    "il": "Bilecik",
    "plaka": "11",
    "ilceleri": [
      "Merkez",
      "Bozüyük",
      "Gölpazarı",
      "Osmaneli",
      "Pazaryeri",
      "Söğüt",
      "Yenipazar",
      "İnhisar"
    ]
  },
  {
    "il": "Bingöl",
    "plaka": "12",
    "ilceleri": [
      "Merkez",
      "Genç",
      "Karlıova",
      "Kiğı",
      "Solhan",
      "Adaklı",
      "Yayladere",
      "Yedisu"
    ]
  },
  {
    "il": "Bitlis",
    "plaka": "13",
    "ilceleri": [
      "Adilcevaz",
      "Ahlat",
      "Merkez",
      "Hizan",
      "Mutki",
      "Tatvan",
      "Güroymak"
    ]
  },
  {
    "il": "Bolu",
    "plaka": "14",
    "ilceleri": [
      "Merkez",
      "Gerede",
      "Göynük",
      "Kıbrıscık",
      "Mengen",
      "Mudurnu",
      "Seben",
      "Dörtdivan",
      "Yeniçağa"
    ],
    "reedukkanlar":[
      "Bolu 14 Burda",
      
      
      
    ]
  },
  {
    "il": "Burdur",
    "plaka": "15",
    "ilceleri": [
      "Ağlasun",
      "Bucak",
      "Merkez",
      "Gölhisar",
      "Tefenni",
      "Yeşilova",
      "Karamanlı",
      "Kemer",
      "Altınyayla",
      "Çavdır",
      "Çeltikçi"
    ]
  },
  {
    "il": "Bursa",
    "plaka": "16",
    "ilceleri": [
      "Gemlik",
      "İnegöl",
      "İznik",
      "Karacabey",
      "Keles",
      "Mudanya",
      "Mustafakemalpaşa",
      "Orhaneli",
      "Orhangazi",
      "Yenişehir",
      "Büyükorhan",
      "Harmancık",
      "Nilüfer",
      "Osmangazi",
      "Yıldırım",
      "Gürsu",
      "Kestel"
    ],
    "reedukkanlar":[
      "Bursa Zafer Plaza",
      "Özdilek Park Bursa",
      
      
      
    ]
  },
  {
    "il": "Çanakkale",
    "plaka": "17",
    "ilceleri": [
      "Ayvacık",
      "Bayramiç",
      "Biga",
      "Bozcaada",
      "Çan",
      "Merkez",
      "Eceabat",
      "Ezine",
      "Gelibolu",
      "Gökçeada",
      "Lapseki",
      "Yenice"
    ],
    "reedukkanlar":[
      "Çanakkale Kipa Avm"
      
      
      
    ]
  },
  {
    "il": "Çankırı",
    "plaka": "18",
    "ilceleri": [
      "Merkez",
      "Çerkeş",
      "Eldivan",
      "Ilgaz",
      "Kurşunlu",
      "Orta",
      "Şabanözü",
      "Yapraklı",
      "Atkaracalar",
      "Kızılırmak",
      "Bayramören",
      "Korgun"
    ]
  },
  {
    "il": "Çorum",
    "plaka": "19",
    "ilceleri": [
      "Alaca",
      "Bayat",
      "Merkez",
      "İskilip",
      "Kargı",
      "Mecitözü",
      "Ortaköy",
      "Osmancık",
      "Sungurlu",
      "Boğazkale",
      "Uğurludağ",
      "Dodurga",
      "Laçin",
      "Oğuzlar"
    ],
    "reedukkanlar":[
      "Çorum AHL Park"
      
      
      
    ]
  },
  {
    "il": "Denizli",
    "plaka": "20",
    "ilceleri": [
      "Acıpayam",
      "Buldan",
      "Çal",
      "Çameli",
      "Çardak",
      "Çivril",
      "Merkez",
      "Merkezefendi",
      "Pamukkale",
      "Güney",
      "Kale",
      "Sarayköy",
      "Tavas",
      "Babadağ",
      "Bekilli",
      "Honaz",
      "Serinhisar",
      "Baklan",
      "Beyağaç",
      "Bozkurt"
    ],
    "reedukkanlar":[
      "Denizli Çamlık",
      
      
      
    ]
  },
  {
    "il": "Diyarbakır",
    "plaka": "21",
    "ilceleri": [
      "Kocaköy",
      "Çermik",
      "Çınar",
      "Çüngüş",
      "Dicle",
      "Ergani",
      "Hani",
      "Hazro",
      "Kulp",
      "Lice",
      "Silvan",
      "Eğil",
      "Bağlar",
      "Kayapınar",
      "Sur",
      "Yenişehir",
      "Bismil"
    ],
    "reedukkanlar":[
      "Ceylan Karavil Park Avm",
      
      
      
    ]
  },
  {
    "il": "Edirne",
    "plaka": "22",
    "ilceleri": [
      "Merkez",
      "Enez",
      "Havsa",
      "İpsala",
      "Keşan",
      "Lalapaşa",
      "Meriç",
      "Uzunköprü",
      "Süloğlu"
    ],
    "reedukkanlar":[
      "Edirne Erasta Avm"
      
      
      
    ]
  },
  {
    "il": "Elazığ",
    "plaka": "23",
    "ilceleri": [
      "Ağın",
      "Baskil",
      "Merkez",
      "Karakoçan",
      "Keban",
      "Maden",
      "Palu",
      "Sivrice",
      "Arıcak",
      "Kovancılar",
      "Alacakaya"
    ],
    "reedukkanlar":[
      "Elazığ Park 23 Avm"
      
      
      
    ]
  },
  {
    "il": "Erzincan",
    "plaka": "24",
    "ilceleri": [
      "Çayırlı",
      "Merkez",
      "İliç",
      "Kemah",
      "Kemaliye",
      "Refahiye",
      "Tercan",
      "Üzümlü",
      "Otlukbeli"
    ],
    "reedukkanlar":[
      "Erzincan Park",
      
      
      
    ]
  },
  {
    "il": "Erzurum",
    "plaka": "25",
    "ilceleri": [
      "Aşkale",
      "Çat",
      "Hınıs",
      "Horasan",
      "İspir",
      "Karayazı",
      "Narman",
      "Oltu",
      "Olur",
      "Pasinler",
      "Şenkaya",
      "Tekman",
      "Tortum",
      "Karaçoban",
      "Uzundere",
      "Pazaryolu",
      "Köprüköy",
      "Palandöken",
      "Yakutiye",
      "Aziziye"
    ],
    "reedukkanlar":[
      "Erzurum Forum",
      
      
      
    ]
  },
  {
    "il": "Eskişehir",
    "plaka": "26",
    "ilceleri": [
      "Çifteler",
      "Mahmudiye",
      "Mihalıççık",
      "Sarıcakaya",
      "Seyitgazi",
      "Sivrihisar",
      "Alpu",
      "Beylikova",
      "İnönü",
      "Günyüzü",
      "Han",
      "Mihalgazi",
      "Odunpazarı",
      "Tepebaşı"
    ],
    "reedukkanlar":[
      "Eskişehir Vega Avm",
      "Espark AVM",
      
      
      
    ]
  },
  {
    "il": "Gaziantep",
    "plaka": "27",
    "ilceleri": [
      "Araban",
      "İslahiye",
      "Nizip",
      "Oğuzeli",
      "Yavuzeli",
      "Şahinbey",
      "Şehitkamil",
      "Karkamış",
      "Nurdağı"
    ],
    "reedukkanlar":[
      "Gaziantep Forum",
      
      
      
    ]
  },
  {
    "il": "Giresun",
    "plaka": "28",
    "ilceleri": [
      "Alucra",
      "Bulancak",
      "Dereli",
      "Espiye",
      "Eynesil",
      "Merkez",
      "Görele",
      "Keşap",
      "Şebinkarahisar",
      "Tirebolu",
      "Piraziz",
      "Yağlıdere",
      "Çamoluk",
      "Çanakçı",
      "Doğankent",
      "Güce"
    ],
    "reedukkanlar":[
      "Giresun G-City Avm",
      
      
      
    ]
  },
  {
    "il": "Gümüşhane",
    "plaka": "29",
    "ilceleri": [
      "Merkez",
      "Kelkit",
      "Şiran",
      "Torul",
      "Köse",
      "Kürtün"
    ]
  },
  {
    "il": "Hakkari",
    "plaka": "30",
    "ilceleri": [
      "Çukurca",
      "Merkez",
      "Şemdinli",
      "Yüksekova"
    ]
  },
  {
    "il": "Hatay",
    "plaka": "31",
    "ilceleri": [
      "Altınözü",
      "Arsuz",
      "Defne",
      "Dörtyol",
      "Hassa",
      "Antakya",
      "İskenderun",
      "Kırıkhan",
      "Payas",
      "Reyhanlı",
      "Samandağ",
      "Yayladağı",
      "Erzin",
      "Belen",
      "Kumlu"
    ],
    "reedukkanlar":[
      "Antakya Paladium",
      "İskenderun Primemall",
      
      
      
    ]
  },
  {
    "il": "Isparta",
    "plaka": "32",
    "ilceleri": [
      "Atabey",
      "Eğirdir",
      "Gelendost",
      "Merkez",
      "Keçiborlu",
      "Senirkent",
      "Sütçüler",
      "Şarkikaraağaç",
      "Uluborlu",
      "Yalvaç",
      "Aksu",
      "Gönen",
      "Yenişarbademli"
    ],
    "reedukkanlar":[
      "Isparta İyaş Park",
      
      
      
    ]
  },
  {
    "il": "Mersin",
    "plaka": "33",
    "ilceleri": [
      "Anamur",
      "Erdemli",
      "Gülnar",
      "Mut",
      "Silifke",
      "Tarsus",
      "Aydıncık",
      "Bozyazı",
      "Çamlıyayla",
      "Akdeniz",
      "Mezitli",
      "Toroslar",
      "Yenişehir"
    ],
    "reedukkanlar":[
      "Mersin Tarsu Avm",
      
      
      
    ]
  },
  {
    "il": "İstanbul",
    "plaka": "34",
    "ilceleri": [
      "Adalar",
      "Bakırköy",
      "Beşiktaş",
      "Beykoz",
      "Beyoğlu",
      "Çatalca",
      "Eyüp",
      "Fatih",
      "Gaziosmanpaşa",
      "Kadıköy",
      "Kartal",
      "Sarıyer",
      "Silivri",
      "Şile",
      "Şişli",
      "Üsküdar",
      "Zeytinburnu",
      "Büyükçekmece",
      "Kağıthane",
      "Küçükçekmece",
      "Pendik",
      "Ümraniye",
      "Bayrampaşa",
      "Avcılar",
      "Bağcılar",
      "Bahçelievler",
      "Güngören",
      "Maltepe",
      "Sultanbeyli",
      "Tuzla",
      "Esenler",
      "Arnavutköy",
      "Ataşehir",
      "Başakşehir",
      "Beylikdüzü",
      "Çekmeköy",
      "Esenyurt",
      "Sancaktepe",
      "Sultangazi"
    ],
    "reedukkanlar":[
      "Metrogarden AVM",
      "Maltepe Park",
      "Plato Avm",
      "Neomarin AVM",
      "Axis Bayrampaşa",
      "Axis Kağıthane",
      "Venezia Mega Outlet",
      "Atlaspark Avm ",
      "Rings Avm",
      "Armoni Park",
      "City Center Outlet",
      "212 Outlet",
      "Vialand Avm",
      "Vega Avm İstanbul",
      "Torium Avm ",
      "First Avenue",
      "Kale Center Outlet"
    ]
  },
  {
    "il": "İzmir",
    "plaka": "35",
    "ilceleri": [
      "Aliağa",
      "Bayındır",
      "Bergama",
      "Bornova",
      "Çeşme",
      "Dikili",
      "Foça",
      "Karaburun",
      "Karşıyaka",
      "Kemalpaşa",
      "Kınık",
      "Kiraz",
      "Menemen",
      "Ödemiş",
      "Seferihisar",
      "Selçuk",
      "Tire",
      "Torbalı",
      "Urla",
      "Beydağ",
      "Buca",
      "Konak",
      "Menderes",
      "Balçova",
      "Çiğli",
      "Gaziemir",
      "Narlıdere",
      "Güzelbahçe",
      "Bayraklı",
      "Karabağlar"
    ],
    "reedukkanlar":[
      "İzmir Optimum",
      "İzmir West Park",
      "Mavi Bahçe",
      "Point Bornova",
      "Agora İzmir"
      
      
    ]
  },
  {
    "il": "Kars",
    "plaka": "36",
    "ilceleri": [
      "Arpaçay",
      "Digor",
      "Kağızman",
      "Merkez",
      "Sarıkamış",
      "Selim",
      "Susuz",
      "Akyaka"
    ]
  },
  {
    "il": "Kastamonu",
    "plaka": "37",
    "ilceleri": [
      "Abana",
      "Araç",
      "Azdavay",
      "Bozkurt",
      "Cide",
      "Çatalzeytin",
      "Daday",
      "Devrekani",
      "İnebolu",
      "Merkez",
      "Küre",
      "Taşköprü",
      "Tosya",
      "İhsangazi",
      "Pınarbaşı",
      "Şenpazar",
      "Ağlı",
      "Doğanyurt",
      "Hanönü",
      "Seydiler"
    ],
    "reedukkanlar":[
      "Kastamall AVM",
      
      
      
    ]
  },
  {
    "il": "Kayseri",
    "plaka": "38",
    "ilceleri": [
      "Bünyan",
      "Develi",
      "Felahiye",
      "İncesu",
      "Pınarbaşı",
      "Sarıoğlan",
      "Sarız",
      "Tomarza",
      "Yahyalı",
      "Yeşilhisar",
      "Akkışla",
      "Talas",
      "Kocasinan",
      "Melikgazi",
      "Hacılar",
      "Özvatan"
    ],
    "reedukkanlar":[
      "Kayseri Park",
      
      
      
    ]
  },
  {
    "il": "Kırklareli",
    "plaka": "39",
    "ilceleri": [
      "Babaeski",
      "Demirköy",
      "Merkez",
      "Kofçaz",
      "Lüleburgaz",
      "Pehlivanköy",
      "Pınarhisar",
      "Vize"
    ],
    "reedukkanlar":[
      "Lüleburgaz 39 Burda",
      
      
      
    ]
  },
  {
    "il": "Kırşehir",
    "plaka": "40",
    "ilceleri": [
      "Çiçekdağı",
      "Kaman",
      "Merkez",
      "Mucur",
      "Akpınar",
      "Akçakent",
      "Boztepe"
    ]
  },
  {
    "il": "Kocaeli",
    "plaka": "41",
    "ilceleri": [
      "Gebze",
      "Gölcük",
      "Kandıra",
      "Karamürsel",
      "Körfez",
      "Derince",
      "Başiskele",
      "Çayırova",
      "Darıca",
      "Dilovası",
      "İzmit",
      "Kartepe"
    ],
    "reedukkanlar":[
      "İzmit 41 Burda",
      "Gebze Center",
      
      
      
    ]
  },
  {
    "il": "Konya",
    "plaka": "42",
    "ilceleri": [
      "Akşehir",
      "Beyşehir",
      "Bozkır",
      "Cihanbeyli",
      "Çumra",
      "Doğanhisar",
      "Ereğli",
      "Hadim",
      "Ilgın",
      "Kadınhanı",
      "Karapınar",
      "Kulu",
      "Sarayönü",
      "Seydişehir",
      "Yunak",
      "Akören",
      "Altınekin",
      "Derebucak",
      "Hüyük",
      "Karatay",
      "Meram",
      "Selçuklu",
      "Taşkent",
      "Ahırlı",
      "Çeltik",
      "Derbent",
      "Emirgazi",
      "Güneysınır",
      "Halkapınar",
      "Tuzlukçu",
      "Yalıhüyük"
    ],
    "reedukkanlar":[
      "Konya Novaland"
      
      
      
    ]
  },
  {
    "il": "Kütahya",
    "plaka": "43",
    "ilceleri": [
      "Altıntaş",
      "Domaniç",
      "Emet",
      "Gediz",
      "Merkez",
      "Simav",
      "Tavşanlı",
      "Aslanapa",
      "Dumlupınar",
      "Hisarcık",
      "Şaphane",
      "Çavdarhisar",
      "Pazarlar"
    ],
    "reedukkanlar":[
      "Sera Kütahya Avm",
      
      
      
    ]
  },
  {
    "il": "Malatya",
    "plaka": "44",
    "ilceleri": [
      "Akçadağ",
      "Arapgir",
      "Arguvan",
      "Darende",
      "Doğanşehir",
      "Hekimhan",
      "Merkez",
      "Pütürge",
      "Yeşilyurt",
      "Battalgazi",
      "Doğanyol",
      "Kale",
      "Kuluncak",
      "Yazıhan"
    ],
    "reedukkanlar":[
      "Malatya Park",
      
      
      
    ]
  },
  {
    "il": "Manisa",
    "plaka": "45",
    "ilceleri": [
      "Akhisar",
      "Alaşehir",
      "Demirci",
      "Gördes",
      "Kırkağaç",
      "Kula",
      "Merkez",
      "Salihli",
      "Sarıgöl",
      "Saruhanlı",
      "Selendi",
      "Soma",
      "Şehzadeler",
      "Yunusemre",
      "Turgutlu",
      "Ahmetli",
      "Gölmarmara",
      "Köprübaşı"
    ],
    "reedukkanlar":[
      "Manisa Magnesia",
      
      
      
    ]
  },
  {
    "il": "Kahramanmaraş",
    "plaka": "46",
    "ilceleri": [
      "Afşin",
      "Andırın",
      "Dulkadiroğlu",
      "Onikişubat",
      "Elbistan",
      "Göksun",
      "Merkez",
      "Pazarcık",
      "Türkoğlu",
      "Çağlayancerit",
      "Ekinözü",
      "Nurhak"
    ],
    "reedukkanlar":[
      "Maraş Piazza",
      
      
      
    ]
  },
  {
    "il": "Mardin",
    "plaka": "47",
    "ilceleri": [
      "Derik",
      "Kızıltepe",
      "Artuklu",
      "Merkez",
      "Mazıdağı",
      "Midyat",
      "Nusaybin",
      "Ömerli",
      "Savur",
      "Dargeçit",
      "Yeşilli"
    ],
    "reedukkanlar":[
      "Mova Park Avm"
      
      
      
    ]
  },
  {
    "il": "Muğla",
    "plaka": "48",
    "ilceleri": [
      "Bodrum",
      "Datça",
      "Fethiye",
      "Köyceğiz",
      "Marmaris",
      "Menteşe",
      "Milas",
      "Ula",
      "Yatağan",
      "Dalaman",
      "Seydikemer",
      "Ortaca",
      "Kavaklıdere"
    ],
    "reedukkanlar":[
      "Pomelon Avm"
      
      
      
    ]
  },
  {
    "il": "Muş",
    "plaka": "49",
    "ilceleri": [
      "Bulanık",
      "Malazgirt",
      "Merkez",
      "Varto",
      "Hasköy",
      "Korkut"
    ]
  },
  {
    "il": "Nevşehir",
    "plaka": "50",
    "ilceleri": [
      "Avanos",
      "Derinkuyu",
      "Gülşehir",
      "Hacıbektaş",
      "Kozaklı",
      "Merkez",
      "Ürgüp",
      "Acıgöl"
    ],
    "reedukkanlar":[
      "Forum Kapadokya "
      
      
      
    ]
  },
  {
    "il": "Niğde",
    "plaka": "51",
    "ilceleri": [
      "Bor",
      "Çamardı",
      "Merkez",
      "Ulukışla",
      "Altunhisar",
      "Çiftlik"
    ]
  },
  {
    "il": "Ordu",
    "plaka": "52",
    "ilceleri": [
      "Akkuş",
      "Altınordu",
      "Aybastı",
      "Fatsa",
      "Gölköy",
      "Korgan",
      "Kumru",
      "Mesudiye",
      "Perşembe",
      "Ulubey",
      "Ünye",
      "Gülyalı",
      "Gürgentepe",
      "Çamaş",
      "Çatalpınar",
      "Çaybaşı",
      "İkizce",
      "Kabadüz",
      "Kabataş"
    ],
    "reedukkanlar":[
      "Fatsa City",
      "Ordu Novada"
      
      
      
    ]
  },
  {
    "il": "Rize",
    "plaka": "53",
    "ilceleri": [
      "Ardeşen",
      "Çamlıhemşin",
      "Çayeli",
      "Fındıklı",
      "İkizdere",
      "Kalkandere",
      "Pazar",
      "Merkez",
      "Güneysu",
      "Derepazarı",
      "Hemşin",
      "İyidere"
    ],
    "reedukkanlar":[
      "Rize Şimal Avm"
      
      
      
    ]
  },
  {
    "il": "Sakarya",
    "plaka": "54",
    "ilceleri": [
      "Akyazı",
      "Geyve",
      "Hendek",
      "Karasu",
      "Kaynarca",
      "Sapanca",
      "Kocaali",
      "Pamukova",
      "Taraklı",
      "Ferizli",
      "Karapürçek",
      "Söğütlü",
      "Adapazarı",
      "Arifiye",
      "Erenler",
      "Serdivan"
    ],
    "reedukkanlar":[
      "Agora Adapazarı",
      
      
      
    ]
  },
  {
    "il": "Samsun",
    "plaka": "55",
    "ilceleri": [
      "Alaçam",
      "Bafra",
      "Çarşamba",
      "Havza",
      "Kavak",
      "Ladik",
      "Terme",
      "Vezirköprü",
      "Asarcık",
      "Ondokuzmayıs",
      "Salıpazarı",
      "Tekkeköy",
      "Ayvacık",
      "Yakakent",
      "Atakum",
      "Canik",
      "İlkadım"
    ],
    "reedukkanlar":[
      "Samsun Piazza",
      "Samsun City Mall",
      "Bafra Çelikpark Avm",
      
      
    ]
  },
  {
    "il": "Siirt",
    "plaka": "56",
    "ilceleri": [
      "Baykan",
      "Eruh",
      "Kurtalan",
      "Pervari",
      "Merkez",
      "Şirvan",
      "Tillo"
    ],
    "reedukkanlar":[
      "Siirt Park"
      
      
      
    ]
  },
  {
    "il": "Sinop",
    "plaka": "57",
    "ilceleri": [
      "Ayancık",
      "Boyabat",
      "Durağan",
      "Erfelek",
      "Gerze",
      "Merkez",
      "Türkeli",
      "Dikmen",
      "Saraydüzü"
    ]
  },
  {
    "il": "Sivas",
    "plaka": "58",
    "ilceleri": [
      "Divriği",
      "Gemerek",
      "Gürün",
      "Hafik",
      "İmranlı",
      "Kangal",
      "Koyulhisar",
      "Merkez",
      "Suşehri",
      "Şarkışla",
      "Yıldızeli",
      "Zara",
      "Akıncılar",
      "Altınyayla",
      "Doğanşar",
      "Gölova",
      "Ulaş"
    ],
    "reedukkanlar":[
      "Sivas İva Park",
      
      
      
    ]
  },
  {
    "il": "Tekirdağ",
    "plaka": "59",
    "ilceleri": [
      "Çerkezköy",
      "Çorlu",
      "Ergene",
      "Hayrabolu",
      "Malkara",
      "Muratlı",
      "Saray",
      "Süleymanpaşa",
      "Kapaklı",
      "Şarköy",
      "Marmaraereğlisi"
    ],
    "reedukkanlar":[
      "Tekira AVM"
      
      
      
    ]
  },
  {
    "il": "Tokat",
    "plaka": "60",
    "ilceleri": [
      "Almus",
      "Artova",
      "Erbaa",
      "Niksar",
      "Reşadiye",
      "Merkez",
      "Turhal",
      "Zile",
      "Pazar",
      "Yeşilyurt",
      "Başçiftlik",
      "Sulusaray"
    ],
    "reedukkanlar":[
      "Tokat Novada"
      
      
      
    ]
  },
  {
    "il": "Trabzon",
    "plaka": "61",
    "ilceleri": [
      "Akçaabat",
      "Araklı",
      "Arsin",
      "Çaykara",
      "Maçka",
      "Of",
      "Ortahisar",
      "Sürmene",
      "Tonya",
      "Vakfıkebir",
      "Yomra",
      "Beşikdüzü",
      "Şalpazarı",
      "Çarşıbaşı",
      "Dernekpazarı",
      "Düzköy",
      "Hayrat",
      "Köprübaşı"
    ]
  },
  {
    "il": "Tunceli",
    "plaka": "62",
    "ilceleri": [
      "Çemişgezek",
      "Hozat",
      "Mazgirt",
      "Nazımiye",
      "Ovacık",
      "Pertek",
      "Pülümür",
      "Merkez"
    ]
  },
  {
    "il": "Şanlıurfa",
    "plaka": "63",
    "ilceleri": [
      "Akçakale",
      "Birecik",
      "Bozova",
      "Ceylanpınar",
      "Eyyübiye",
      "Halfeti",
      "Haliliye",
      "Hilvan",
      "Karaköprü",
      "Siverek",
      "Suruç",
      "Viranşehir",
      "Harran"
    ],
    "reedukkanlar":[
      "Şanlıurfa Piazza",
      
      
      
    ]
  },
  {
    "il": "Uşak",
    "plaka": "64",
    "ilceleri": [
      "Banaz",
      "Eşme",
      "Karahallı",
      "Sivaslı",
      "Ulubey",
      "Merkez"
    ]
  },
  {
    "il": "Van",
    "plaka": "65",
    "ilceleri": [
      "Başkale",
      "Çatak",
      "Erciş",
      "Gevaş",
      "Gürpınar",
      "İpekyolu",
      "Muradiye",
      "Özalp",
      "Tuşba",
      "Bahçesaray",
      "Çaldıran",
      "Edremit",
      "Saray"
    ],
    "reedukkanlar":[
      "Van AVM",
      
      
      
    ]
  },
  {
    "il": "Yozgat",
    "plaka": "66",
    "ilceleri": [
      "Akdağmadeni",
      "Boğazlıyan",
      "Çayıralan",
      "Çekerek",
      "Sarıkaya",
      "Sorgun",
      "Şefaatli",
      "Yerköy",
      "Merkez",
      "Aydıncık",
      "Çandır",
      "Kadışehri",
      "Saraykent",
      "Yenifakılı"
    ],
    "reedukkanlar":[
      "Yozgat Novada",
      
      
      
    ]
  },
  {
    "il": "Zonguldak",
    "plaka": "67",
    "ilceleri": [
      "Çaycuma",
      "Devrek",
      "Ereğli",
      "Merkez",
      "Alaplı",
      "Gökçebey"
    ],
    "reedukkanlar":[
      "Zonguldak Westa Life"
      
      
      
    ]
  },
  {
    "il": "Aksaray",
    "plaka": "68",
    "ilceleri": [
      "Ağaçören",
      "Eskil",
      "Gülağaç",
      "Güzelyurt",
      "Merkez",
      "Ortaköy",
      "Sarıyahşi"
    ]
  },
  {
    "il": "Bayburt",
    "plaka": "69",
    "ilceleri": [
      "Merkez",
      "Aydıntepe",
      "Demirözü"
    ]
  },
  {
    "il": "Karaman",
    "plaka": "70",
    "ilceleri": [
      "Ermenek",
      "Merkez",
      "Ayrancı",
      "Kazımkarabekir",
      "Başyayla",
      "Sarıveliler"
    ]
  },
  {
    "il": "Kırıkkale",
    "plaka": "71",
    "ilceleri": [
      "Delice",
      "Keskin",
      "Merkez",
      "Sulakyurt",
      "Bahşili",
      "Balışeyh",
      "Çelebi",
      "Karakeçili",
      "Yahşihan"
    ],
    "reedukkanlar":[
      "Kırıkkale Podium AVM"
      
      
      
    ]
  },
  {
    "il": "Batman",
    "plaka": "72",
    "ilceleri": [
      "Merkez",
      "Beşiri",
      "Gercüş",
      "Kozluk",
      "Sason",
      "Hasankeyf"
    ],
    "reedukkanlar":[
      "Batman Park"
      
      
      
    ]
  },
  {
    "il": "Şırnak",
    "plaka": "73",
    "ilceleri": [
      "Beytüşşebap",
      "Cizre",
      "İdil",
      "Silopi",
      "Merkez",
      "Uludere",
      "Güçlükonak"
    ]
  },
  {
    "il": "Bartın",
    "plaka": "74",
    "ilceleri": [
      "Merkez",
      "Kurucaşile",
      "Ulus",
      "Amasra"
    ]
  },
  {
    "il": "Ardahan",
    "plaka": "75",
    "ilceleri": [
      "Merkez",
      "Çıldır",
      "Göle",
      "Hanak",
      "Posof",
      "Damal"
    ]
  },
  {
    "il": "Iğdır",
    "plaka": "76",
    "ilceleri": [
      "Aralık",
      "Merkez",
      "Tuzluca",
      "Karakoyunlu"
    ]
  },
  {
    "il": "Yalova",
    "plaka": "77",
    "ilceleri": [
      "Merkez",
      "Altınova",
      "Armutlu",
      "Çınarcık",
      "Çiftlikköy",
      "Termal"
    ],
    "reedukkanlar":[
      "Yalova Vega Avm",
      
      
      
    ]
  },
  {
    "il": "Karabük",
    "plaka": "78",
    "ilceleri": [
      "Eflani",
      "Eskipazar",
      "Merkez",
      "Ovacık",
      "Safranbolu",
      "Yenice"
    ],
    "reedukkanlar":[
      "Karabük Kares Avm",
      
      
      
    ]
  },
  {
    "il": "Kilis",
    "plaka": "79",
    "ilceleri": [
      "Merkez",
      "Elbeyli",
      "Musabeyli",
      "Polateli"
    ]
  },
  {
    "il": "Osmaniye",
    "plaka": "80",
    "ilceleri": [
      "Bahçe",
      "Kadirli",
      "Merkez",
      "Düziçi",
      "Hasanbeyli",
      "Sumbas",
      "Toprakkale"
    ],
    "reedukkanlar":[
      "Osmaniye Park 328 Avm"
      
      
      
    ]
  },
  {
    "il": "Düzce",
    "plaka": "81",
    "ilceleri": [
      "Akçakoca",
      "Merkez",
      "Yığılca",
      "Cumayeri",
      "Gölyaka",
      "Çilimli",
      "Gümüşova",
      "Kaynaşlı"
    ]
  }
]
function search(nameKey, myArray){
    for (var i=0; i < myArray.length; i++) {
        if (myArray[i].plaka == nameKey) {
            return myArray[i];
        }
    }
}
$( document ).ready(function() {
  $.each(data, function( index, value ) {
    $('#Iller').append($('<option>', {
        value: value.plaka,
        text:  value.il
    }));
  });
  $("#Iller").change(function(){
    var valueSelected = this.value;
    if($('#Iller').val() > 0) {
      $('#Ilceler').html('');
      $('#Ilceler').append($('<option>', {
        value: 0,
        text:  'Lütfen Bir İlçe seçiniz'
      }));
      $('#Ilceler').prop("disabled", false);
      var resultObject = search($('#Iller').val(), data);
      $.each(resultObject.ilceleri, function( index, value ) {
        $('#Ilceler').append($('<option>', {
            value: value,
            text:  value
        }));
      });



      $('#ReeDukkans').html('');
      $('#ReeDukkans').append($('<option>', {
        value: 0,
        text:  'Lütfen Varsa Bir ReeDukkan Seçiniz'
      }));
      $('#ReeDukkans').prop("disabled", false);
      var resultObject = search($('#Iller').val(), data);
      $.each(resultObject.reedukkanlar, function( index, value ) {
        $('#ReeDukkans').append($('<option>', {
            value: value,
            text:  value
        }));
      });



      return false;
    }
    $('#Ilceler').prop("disabled", true);
    $('#ReeDukkans').prop("disabled", true);

  });
});
        </script>

	</body>
</html>