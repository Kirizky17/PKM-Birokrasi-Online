<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 ------------------------
 |						|
 |		Admin Route 	|
 | 						|
 ------------------------
 */
	Route::group(['middleware' => 'adminMiddleware'], function () {
		Route::get('/admin/dashboard', ['as' => 'admin.main','uses' =>'AdminController@main']);
		Route::get('/admin', ['as' => 'admin.main','uses' =>'AdminController@main']);
		Route::get('/admin/usulan', ['as' => 'admin.usulan','uses' =>'AdminController@usulan']);
		Route::get('/admin/usulan/add', ['as' => 'admin.add.usulan','uses' =>'AdminController@addUsulan']);
		Route::post('/admin/usulan/add', ['as' => 'admin.add.usulan','uses' =>'AdminController@doAddUsulan']);
		Route::get('/admin/usulan/detail/{id_usulan}', ['as' => 'admin.detail.usulan','uses' =>'AdminController@detailUsulan']);
		Route::get('/admin/data/mahasiswa', ['as' => 'admin.data.mahasiswa','uses' =>'AdminController@dataMahasiswa']);
		// Route::post('/admin/data/mahasiswa/view', ['as' => 'admin.data.mahasiswa','uses' =>'AdminController@detailMahasiswa']);
		// Route::get('/admin/data/mahasiswa/edit/{nim}', ['as' => 'admin.data.mahasiswa','uses' =>'AdminController@editMahasiswa']);
		// Route::post('/admin/data/mahasiswa/edit/{nim}', ['as' => 'admin.data.mahasiswa','uses' =>'AdminController@doEditMahasiswa']);
		Route::get('/admin/data/dosen', ['as' => 'admin.data.dosen','uses' =>'AdminController@dataDosen']);
		Route::get('/admin/pengaturan', ['as' => 'admin.pengaturan','uses' =>'AdminController@pengaturan']);
		Route::get('/admin/pengaturan/add', ['as' => 'admin.add.pengaturan','uses' =>'AdminController@addPengaturan']);
		Route::post('/admin/pengaturan/add', ['as' => 'admin.add.pengaturan','uses' =>'AdminController@doAddPengaturan']);
		Route::get('/admin/pengaturan/edit', ['as' => 'admin.edit.pengaturan','uses' =>'AdminController@editPengaturan']);
		Route::post('/admin/pengaturan/edit', ['as' => 'admin.edit.pengaturan','uses' =>'AdminController@doEditPengaturan']);
		Route::get('/admin/pengaturan/finish', ['as' => 'admin.finish.pengaturan','uses' =>'AdminController@finishPengaturan']);
	});

	Route::get('/admin/login', ['as' => 'admin.login','uses' =>'AdminController@login']);
	Route::post('/admin/login', ['as' => 'admin.login','uses' =>'AdminController@doLogin']);
	Route::get('/admin/logout', ['as' => 'admin.logout','uses' =>'AdminController@dologout']);


	/*
	 ------------------------
	 |						|
	 |		User Route 		|
	 | 						|
	 ------------------------
	 */

	Route::get('/', ['uses' =>'UserController@main']);
	Route::get('/main', ['as' => 'user.main','uses' =>'UserController@main']);
	Route::get('/login', ['as' => 'user.login','uses' =>'UserController@login']);
	Route::post('/login/pengusul', ['as' => 'pengusul.login','uses' =>'UserController@doLoginPengusul']);
	Route::post('/login/reviewer', ['as' => 'reviewer.login','uses' =>'UserController@doLoginReviewer']);
	Route::get('/logout', ['as' => 'user.logout','uses' =>'UserController@dologout']);


	/*
	 ----------------------------
	 |							|
	 |		Pengusul Route 		|
	 | 							|
	 ----------------------------
	 */

	Route::group(['middleware' => 'pengusulMiddleware'], function () {
		Route::get('pengusul/dashboard', ['as' => 'pengusul.main','uses' =>'PengusulController@main']);
		Route::get('pengusul/usulan', ['as' => 'pengusul.usulan','uses' =>'PengusulController@usulan']);
		Route::get('pengusul/usulan/edit/{id_usulan}', ['as' => 'pengusul.usulan.edit','uses' =>'PengusulController@editUsulan']);
		Route::post('pengusul/usulan/edit/{id_usulan}', ['as' => 'pengusul.usulan.edit','uses' =>'PengusulController@doEditUsulan']);
		Route::get('pengusul/laporan/logbook', ['as' => 'pengusul.laporan.logbook','uses' =>'PengusulController@laporanLogbook']);
		Route::get('pengusul/laporan/kemajuan', ['as' => 'pengusul.laporan.kemajuan','uses' =>'PengusulController@laporanKemajuan']);
		Route::get('pengusul/laporan/akhir', ['as' => 'pengusul.laporan.akhir','uses' =>'PengusulController@laporanAkhir']);

		Route::get('pengusul/proposal/upload/{id_usulan}', ['as' => 'pengusul.proposal.upload','uses' =>'PengusulController@uploadProposal']);
		Route::post('pengusul/proposal/upload/{id_usulan}', ['as' => 'pengusul.proposal.upload','uses' =>'PengusulController@doUploadProposal']);
		Route::get('pengusul/usulan/view/{id_usulan}', ['as' => 'pengusul.usulan.view','uses' =>'PengusulController@viewUsulan']);
	});

	/*
	 ----------------------------
	 |							|
	 |		Reviewer Route 		|
	 | 							|
	 ----------------------------
	 */
	Route::group(['middleware' => 'reviewerMiddleware'], function () {
		Route::get('reviewer/dashboard', ['as' => 'reviewer.main','uses' =>'ReviewerController@main']);
	});
?>