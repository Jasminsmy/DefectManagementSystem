<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AuthController;
use App\HTTP\Controllers\usercontroller;

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

Route::get('/', function () { return view('index');});
Route::get('/registersss', function () { return view('registrationsss');});
Route::get('/clickhere', function () { return view('register');});


//client pages
Route::get('/clientindex', function () {return view('client.homepage');});

Route::get('/clientprofile', function () {return view('client.profile');});

Route::get('/editprofile', function () {return view('client.editprofile');});

Route::get('/editpass', function () {return view('client.editpass');});

Route::get('/clientreport', function () {return view('client.report');});

Route::get('/clientprogress', function () {return view('client.progress');});

Route::get('/addreport', function () {return view('client.addreport');});

Route::get('/clientfacs', function () {return view('client.facs');});


//contractor pages
Route::get('/contindex', function () {return view('cont.homepage');});

Route::get('/contprofile', function () {return view('cont.profile');});

Route::get('/editprofilecont', function () {return view('cont.editprofile');});

Route::get('/conteditpass', function () {return view('cont.editpass');});



//new dev pages
Route::get('/newdevreport', [usercontroller::class, 'newreport']);

Route::get('/newdevindex', function () {return view('newdev.hompage');});

Route::get('/newdevprofile', function () {return view('newdev.profile');});
Route::get('/editpassworddev', function () {return view('newdev.editpass');});

//Clients
Route::get('clientreportpage/{id}', [usercontroller::class, 'viewreport']);

//Developer
Route::get('clientpage', [usercontroller::class, 'clientlist'])->name('client.list'); //view client list in new dev page
Route::get('editclient/{id}', [usercontroller::class, 'viewclientdetails'])->name('client.edit');//to edit client details
Route::get('deleteuser/{id}', [usercontroller::class, 'deleteuser']); //delete client

Route::post('updateuser/{id}', [usercontroller::class, 'updateuser'])->name('user.update'); //to update user details

//contractors
Route::get('contlist', [usercontroller::class,'contlist'])->name('cont.list');// to view list of contractor
Route::get('editcont/{id}', [usercontroller::class, 'contractordetails'])->name('cont.edit');
Route::get('deletecont/{id}', [usercontroller::class, 'deletecont']);//delete contractor


//Reporting
Route::get('reports', [usercontroller::class, 'report'])->name('reports'); //to view the report page client
Route::post('postdefect', [usercontroller::class, 'addform'])->name('defect.post'); // to add defect report form to database client
Route::get('defectedit/{id}', [usercontroller::class, 'editform']);// to land on editing form page
Route::post('defectupdate', [usercontroller::class, 'updateform'])->name('defect.update');// to update and save changes made
Route::get('newdevviewreport/{id}', [usercontroller::class, 'viewreport']);//developer view report

Route::get('clientreportpage/{id}', [usercontroller::class, 'viewreport']);//client view report page

Route::post('addclientform', [usercontroller::class, 'addreportclient'])->name('report.post');

Route::get('contdefectedit/{id}', [usercontroller::class, 'editformcont']); //to land on editing form page on contractor side
Route::post('contdefectupdate', [usercontroller::class, 'updateformcont'])->name('defectcont.update'); //to update and save changes on contractor side

//Login and Register
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::post('post-profile', [usercontroller::class, 'modifyprofile'])->name('profile.post');
Route::post('post-password', [AuthController::class, 'modifypassword'])->name('password.post');
