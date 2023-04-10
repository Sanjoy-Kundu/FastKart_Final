<?php
/*
Online payment er jonno amder sslcommarz er kace jete hobe
1. sobkicu complete kore jodkhon online payment raido select korbe tokhon take online payment pay er option e niy jabe

seita alrady web.php sslcommaz e newa ace
Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
aita jekhetu form er moddy ace  post er poriborte get kore dibo

tahole amder pay option e diye jabe and seikhane amder sob dynamic korte hobe. seita korar jonno amder jete hobe web.php er pay method er index a

 1.$post_data['total_amount'] = session('s_total');  from FrontendController

 bkahs diye success page na pele env te giye app url e ==http://127.0.0.1:8000 aita dibo tahole successfull dekhabe


 akhon success howar por amy logout kore dey aita thik kora jonno amder jete hobe
sslcommarz.php
success er moddey jokhn dhukteci tokhnei logout kore ditece
'success_url' => '/success', (success er name change korbo successdone)
payment kora kor amy niye jabe successdone e
'success_url' => '/onlinePaymentDone', (success er name change korbo successdone)
aita korar por deklam je amy logout korce na




*/



?>
