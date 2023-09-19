<?php

namespace App\Http\Controllers\Admin;

use App\Models\CEO;
use App\Models\COE;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Setting;
use App\Models\WithDraw;
use App\Models\IntialCEO;
use App\Models\IntialCOE;
use App\Models\SendMoney;
use App\Models\EzzyLeader;
use App\Models\EzzyMember;
use App\Models\EzzyReward;
use App\Models\EzzyManager;
use Illuminate\Http\Request;
use App\Models\EzzyDirectory;
use App\Models\EzzyExecutive;
use App\Models\LevelOneToFifteen;
use App\Models\InitialStepForRank;
use App\Models\IntialEzzyDirectory;
use App\Models\SendMoneyForFriends;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\InitialStepForEzzyLeader;
use App\Models\InitialStepForEzzyManger;
use App\Models\InitailStepForEzzyExecutive;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('is_users', 1)->where('nid_verified', 1)
            ->latest()
            ->get();
        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getAjaxUser(Request $request)
    {
        $user_name = $request->key1;
        $user = User::where('username', $user_name)->first();

        if ($user) {
            $firstName = $user->first_name;
            $lastName = $user->last_name;
            $name = $firstName . ' ' . $lastName;
            return response()->json($name);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        $user= Auth::user();
        $users= User::where('sponsor',$user->username)->get();
        return view('users.affilate.sponsor',compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function affilateIndex()
    {
        // $users= User::with('InitialStepForRank','InitialStepForEzzyLeader','InitialStepForEzzyManger','InitailStepForEzzyExecutive','InitailStepForEzzyExecutive','IntialEzzyDirectory', 'IntialCOE', 'IntialCEO' ,'COE','CEO' ,'EzzyDirectory','EzzyExecutive','EzzyManager','EzzyManager','EzzyLeader','EzzyMember')->latest()->get();
        
        $users= User::get();
        return view('users.affilate.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        if($user){
            if ($request->isMethod('post')){
                $request->validate([
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'username' => 'required',
                    'email' => 'required',
                    'phone_no' => 'required',
                    't_pin' => 'required',
                    'sponsor' => 'required',
                    'rank' => 'required',
                    'country' => 'required',
                    'address' => 'required',
                    'image' => 'required',
                    'nid1' => 'required',
                    'nid2' => 'required',
                    'bank' => 'required',
                ]);
                $user->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'phone_no' => $request->phone_no,
                    't_pin' => $request->t_pin,
                    'sponsor' => $request->sponsor,
                    'rank' => $request->rank,
                    'country' => $request->country,
                    'address' => $request->address,
                    'image' => $request->image,
                    'nid1' => $request->nid1,
                    'nid2' => $request->nid2,
                    'bank' => $request->bank,
                    'nid_verified' => 1,
                ]);            
            }else{
                return view('admin.users.edit');
            }
        }else{
            return redirect()->back()->with('success', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function registration($username)
    {
        $user = User::where('username', $username)->first();
        return view('auth.referLinkRegister',compact('user'));
    

    }

    // unverified_users
    public function unverified_users(){
        $data = User::where('nid_verified', 0)
            ->latest()
            ->get();
        return view('admin.users.unverified-users', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userDashboard()
    {
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        $level1= LevelOneToFifteen::where('level_1', '!=', null)->get(['id','level_1'])->count();
        $level2= LevelOneToFifteen::where('level_2', '!=', null)->get(['id','level_2'])->count();
        $level3= LevelOneToFifteen::where('level_3', '!=', null)->get(['id','level_3'])->count();
        $level4= LevelOneToFifteen::where('level_4', '!=', null)->get(['id','level_4'])->count();
        $level5= LevelOneToFifteen::where('level_5', '!=', null)->get(['id','level_5'])->count();
        $level6= LevelOneToFifteen::where('level_6', '!=', null)->get(['id','level_6'])->count();
        $level7= LevelOneToFifteen::where('level_7', '!=', null)->get(['id','level_7'])->count();
        $level8= LevelOneToFifteen::where('level_8', '!=', null)->get(['id','level_8'])->count();
        $level9= LevelOneToFifteen::where('level_9', '!=', null)->get(['id','level_9'])->count();
        $level10= LevelOneToFifteen::where('level_10', '!=', null)->get(['id','level_10'])->count();
        $level11= LevelOneToFifteen::where('level_11', '!=', null)->get(['id','level_11'])->count();
        $level12= LevelOneToFifteen::where('level_12', '!=', null)->get(['id','level_12'])->count();
        $level13= LevelOneToFifteen::where('level_13', '!=', null)->get(['id','level_13'])->count();
        $level14= LevelOneToFifteen::where('level_14', '!=', null)->get(['id','level_14'])->count();
        $level15= LevelOneToFifteen::where('level_15', '!=', null)->get(['id','level_15'])->count();

        $totalSend= SendMoneyForFriends::where('master_id',Auth::user()->id)->select('send_amount')->sum('send_amount');
        $totalReceive= SendMoneyForFriends::where('user_id',Auth::user()->id)->select('send_amount')->sum('send_amount');
        $addFund= SendMoney::where('user_id',Auth::user()->id)->select('send_amount')->sum('send_amount');
        $addFund= SendMoney::where('user_id',Auth::user()->id)->select('send_amount')->sum('send_amount');
        $pendingWithDraw= WithDraw::where('user_id',Auth::user()->id)->where('status', 0)->select('amount')->sum('amount');
        $accpectWithDraw= WithDraw::where('user_id',Auth::user()->id)->where('status', 1)->select('amount')->sum('amount');
        $user = User::where('id',Auth::user()->id)->where('is_approved',1)->first();
        //dd($user);
        $referLink= config('app.url') . 'registration/'. Auth::user()->username;
        return view('users.dashboard', compact('wallet','level1','level2','level3','level4','level5','level6','level7','level8','level9','level10','level11','level12','level13','level14','level15','totalSend','totalReceive','addFund','pendingWithDraw','accpectWithDraw','user','referLink'));
    }

    public function activate()
    {
        $settings= Setting::first();
        $sendMoney = SendMoney::where('user_id', Auth::user()->id)->first();
        if ($sendMoney) {
            $user = User::where('id', Auth::user()->id)->first();
            $wallet = Wallet::where('user_id', $user->id)->first();
            $wallet->user_id = $user->id;
            if($wallet->booking_wallet >= $settings->registration) 
            {
                $wallet->booking_wallet = $wallet->booking_wallet - $settings->registration;
                $wallet->is_approved = 1;
                $wallet->save();
            }else{
                return back();
            }
           
            if ($wallet) {
                $master_user_id = User::where('username', $user->sponsor)->first();
                if (isset($master_user_id)) {
                    $wallet = Wallet::where('user_id', $master_user_id->id)->first();
                    if(isset($wallet))
                    {
                    $wallet->affiliate_income = 50 + $wallet->affiliate_income;
                    $wallet->save();
                    }else{
                        $wallet= Wallet::where('user_id',2)->first();
                        $wallet->my_wallet= 50 + $wallet->affiliate_income;
                        $wallet->save();
                    }
                  
                }
            }

            if ($wallet) {
                if ($user->sponsor) {
                    $master = User::where('username', $user->sponsor)->first();
                    $ezzyMmeber = EzzyMember::where('user_id', $master->id)->first();
                    if (isset($ezzyMmeber)) {
                        if (isset($master)) {
                            $levelOneToFifteen = new LevelOneToFifteen();
                            $levelOneToFifteen->level_1 = $ezzyMmeber->user_id;
                            $levelOneToFifteen->user_id = Auth::user()->id;
                            $levelOneToFifteen->save();
                        }
                        $master = User::where('id', $levelOneToFifteen->level_1)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();

                                $levelOneToFifteen->level_2 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_2)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_3 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_3)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_4 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_4)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_5 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_5)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_6 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_5)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_6 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_6)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_7 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_7)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_8 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_8)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_9 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_9)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_10 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_10)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_11 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_11)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_12 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_12)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_13 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                        $master = User::where('id', $levelOneToFifteen->level_14)->first();
                        if (isset($master->sponsor)) {
                            $master = User::where('username', $master->sponsor)->first();
                            if ($levelOneToFifteen) {
                                $levelOneToFifteen = LevelOneToFifteen::where('level_1', $levelOneToFifteen->level_1)->first();
                                $levelOneToFifteen->level_15 = $master->id;
                                $levelOneToFifteen->save();
                            }
                        }
                    }
                }
            }

            if ($wallet) {
                $sponsor_level_1 = null;
                if (Auth::user()->sponsor) {
                    $sponsor_level_1 = User::where('username', $user->sponsor)->first();
                    //dd($sponsor_level_1);
                    if ($sponsor_level_1) {
                        $walletOne = Wallet::where('user_id', $sponsor_level_1->id)->first();
                        if ($walletOne) {
                            $walletOne->level_bonus = 10 + $walletOne->level_bonus;
                            $walletOne->save();
                        }
                    }
                }
                $sponsor_level_2 = null;
                if ($sponsor_level_1) {
                    $sponsor_level_2 = User::where('username', $sponsor_level_1->sponsor)->first();
                    //dd($sponsor_level_2);
                    if ($sponsor_level_2) {
                        $walletTwo = Wallet::where('user_id', $sponsor_level_2->id)->first();
                        if ($walletTwo) {
                            $walletTwo->level_bonus = 10 + $walletTwo->level_bonus;
                            $walletTwo->save();
                        }
                    }
                }
                $sponsor_level_3 = null;
                if ($sponsor_level_2) {
                    $sponsor_level_3 = User::where('username', $sponsor_level_2->sponsor)->first();
                    if ($sponsor_level_3) {
                        $walletThree = Wallet::where('user_id', $sponsor_level_3->id)->first();
                        if ($walletThree) {
                            $walletThree->level_bonus = 10 + $walletThree->level_bonus;
                            $walletThree->save();
                        }
                    }
                }
                $sponsor_level_4 = null;
                if ($sponsor_level_3) {
                    $sponsor_level_4 = User::where('username', $sponsor_level_3->sponsor)->first();
                    if ($sponsor_level_4) {
                        $walletFour = Wallet::where('user_id', $sponsor_level_4->id)->first();
                        if ($walletFour) {
                            $walletFour->level_bonus = 10 + $walletFour->level_bonus;
                            $walletFour->save();
                        }
                    }
                }
                $sponsor_level_5 = null;
                if ($sponsor_level_4) {
                    $sponsor_level_5 = User::where('username', $sponsor_level_4->sponsor)->first();
                    if ($sponsor_level_5) {
                        $walletFive = Wallet::where('user_id', $sponsor_level_5->id)->first();
                        if ($walletFive) {
                            $walletFive->level_bonus = 10 + $walletFive->level_bonus;
                            $walletFive->save();
                        }
                    }
                }
                $sponsor_level_6 = null;
                if ($sponsor_level_5) {
                    $sponsor_level_6 = User::where('username', $sponsor_level_5->sponsor)->first();
                    if ($sponsor_level_6) {
                        $walletSix = Wallet::where('user_id', $sponsor_level_6->id)->first();
                        if ($walletSix) {
                            $walletSix->level_bonus = 10 + $walletSix->level_bonus;
                            $walletSix->save();
                        }
                    }
                }
                $sponsor_level_7 = null;
                if ($sponsor_level_6) {
                    $sponsor_level_7 = User::where('username', $sponsor_level_6->sponsor)->first();
                    if ($sponsor_level_7) {
                        $walletSeven = Wallet::where('user_id', $sponsor_level_7->id)->first();
                        if ($walletSeven) {
                            $walletSeven->level_bonus = 10 + $walletSeven->level_bonus;
                            $walletSeven->save();
                        }
                    }
                }
                $sponsor_level_8 = null;
                if ($sponsor_level_7) {
                    $sponsor_level_8 = User::where('username', $sponsor_level_7->sponsor)->first();
                    if ($sponsor_level_8 !== null) {
                        $walletEight = Wallet::where('user_id', $sponsor_level_8->id)->first();
                        if ($walletEight) {
                            $walletEight->level_bonus =10 + $walletEight->level_bonus;
                            $walletEight->save();
                        }
                    }
                }
                $sponsor_level_9 = null;
                if ($sponsor_level_8) {
                    $sponsor_level_9 = User::where('username', $sponsor_level_8->sponsor)->first();
                    if ($sponsor_level_9) {
                        $walletNine = Wallet::where('user_id', $sponsor_level_9->id)->first();
                        if ($walletNine) {
                            $walletNine->level_bonus =10 + $walletNine->level_bonus;
                            $walletNine->save();
                        }
                    }
                }
                $sponsor_level_10 = null;
                if ($sponsor_level_9) {
                    $sponsor_level_10 = User::where('username', $sponsor_level_9->sponsor)->first();
                    if ($sponsor_level_10) {
                        $walletTen = Wallet::where('user_id', $sponsor_level_10->id)->first();
                        if ($walletTen) {
                            $walletTen->level_bonus = 10 + $walletTen->level_bonus;
                            $walletTen->save();
                        }
                    }
                }
                $sponsor_level_11 = null;
                if ($sponsor_level_10) {
                    $sponsor_level_11 = User::where('username', $sponsor_level_10->sponsor)->first();
                    if ($sponsor_level_11 !== null) {
                        $walletEleven = Wallet::where('user_id', $sponsor_level_11->id)->first();
                        if ($walletEleven) {
                            $walletEleven->level_bonus =10 + $walletEleven->level_bonus;
                            $walletEleven->save();
                        }
                    }
                }
                $sponsor_level_12 = null;
                if ($sponsor_level_11) {
                    $sponsor_level_12 = User::where('username', $sponsor_level_11->sponsor)->first();
                    if ($sponsor_level_12) {
                        $walletTwelve = Wallet::where('user_id', $sponsor_level_12->id)->first();
                        if ($walletTwelve) {
                            $walletTwelve->level_bonus =10 + $walletTwelve->level_bonus;
                            $walletTwelve->save();
                        }
                    }
                }
                $sponsor_level_13 = null;
                if ($sponsor_level_12) {
                    $sponsor_level_13 = User::where('username', $sponsor_level_12->sponsor)->first();
                    if ($sponsor_level_13) {
                        $walletThirteen = Wallet::where('user_id', $sponsor_level_2->id)->first();
                        $walletThirteen->level_bonus = 10+ $wallet->level_bonus;
                        $walletThirteen->save();
                    }
                }
                $sponsor_level_14 = null;
                if ($sponsor_level_13) {
                    $sponsor_level_14 = User::where('username', $sponsor_level_13->sponsor)->first();
                    if ($sponsor_level_14) {
                        $walletFourteen = Wallet::where('user_id', $sponsor_level_14->id)->first();
                        if ($walletFourteen) {
                            $walletFourteen->level_bonus = 10 + $walletFourteen->level_bonus;
                            $walletFourteen->save();
                        }
                    }
                }
                $sponsor_level_15 = null;
                if ($sponsor_level_14) {
                    $sponsor_level_15 = User::where('username', $sponsor_level_14->sponsor)->first();
                    if ($sponsor_level_15) {
                        $walletFifteen = Wallet::where('user_id', $sponsor_level_15->id)->first();
                        if ($walletFifteen) {
                            $walletFifteen->level_bonus = 10 + $walletFifteen->level_bonus;
                            $walletFifteen->save();
                        }
                    }
                }
            }

            if ($wallet) {
                if ($user->sponsor) {
                    $master_sponsor = User::where('username', $user->sponsor)->first();
                    $sponsorStepOne = InitialStepForRank::where('master_id', $master_sponsor->id)->first();
                    if (!$sponsorStepOne) {
                        $sponsorStepOne = new InitialStepForRank();
                        $sponsorStepOne->master_id = $master_sponsor->id;
                        $sponsorStepOne->status = $sponsorStepOne->status + 1;
                        $sponsorStepOne->save();
                    } else {
                        $sponsorStepOne->master_id = $master_sponsor->id;
                        $sponsorStepOne->status = 1 + $sponsorStepOne->status;
                        $sponsorStepOne->save();
                    }
                    $pendingEzzyMember = InitialStepForRank::where('master_id', $master_sponsor->id)->first();

                    // foreach ($pendingEzzyMember as $item) {
                    if ($pendingEzzyMember->status >= 10) {
                        $ezzyMember = new EzzyMember();
                        $ezzyMember->user_id = $pendingEzzyMember->master_id;
                        $ezzyMember->save();

                        $ezzyReward = new EzzyReward();
                        $ezzyReward->user_id = $ezzyMember->user_id;
                        $ezzyReward->ezzyMember = $settings->ezzy_member;
                        $ezzyReward->save();

                        $userrank= User::where('id',$ezzyMember->user_id)->first();
                        $userrank->rank= "MFS Member";
                        $userrank->save();

                        if ($ezzyReward) {
                            $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                            $wallet->ezzy_reward =  $settings->ezzy_member + $wallet->ezzy_reward;
                            $wallet->save();
                        }

                        // == $ezzyMemberId = User::where('id', $item->master_id)->first();
                        // if ($ezzyMemberId) {
                        //     $masterEzzyMember = User::where('username', $ezzyMemberId->sponsor)->first();
                        //     if ($masterEzzyMember) {==

                        $sponsorStepTwo = InitialStepForEzzyLeader::where('user_id', $pendingEzzyMember->master_id)->first();
                        if (!$sponsorStepTwo) {
                            $sponsorStepTwo = new InitialStepForEzzyLeader();
                            $sponsorStepTwo->user_id = $pendingEzzyMember->master_id;
                            $sponsorStepTwo->status = $sponsorStepTwo->status + 1;
                            $sponsorStepTwo->save();
                        } else {
                            $sponsorStepTwo->user_id = $pendingEzzyMember->master_id;
                            $sponsorStepTwo->status = 1 + $sponsorStepTwo->status;
                            $sponsorStepTwo->save();
                        }

                        $pendingEzzyLeader = InitialStepForEzzyLeader::where('user_id', $sponsorStepTwo->user_id)->first();
                        // foreach ($pendingEzzyLeader as $item) {
                        if ($pendingEzzyLeader->status >= 4) {
                            $ezzLeader = new EzzyLeader();
                            $ezzLeader->user_id = $pendingEzzyLeader->user_id;
                            $ezzLeader->save();

                            $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                            $ezzyReward->user_id = $ezzyMember->user_id;
                            $ezzyReward->ezzLeader = $settings->ezzy_leader + $ezzyReward->ezzLeader;
                            $ezzyReward->save();

                            $userrank= User::where('id',$ezzLeader->user_id)->first();
                            $userrank->rank= "MFS Leader";
                            $userrank->save();

                            if ($ezzyReward) {
                                $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                $wallet->ezzy_reward =$settings->ezzy_leader + $wallet->ezzy_reward;
                                $wallet->group_bonus = 10 + $wallet->group_bonus;
                                $wallet->save();
                            }
                        }

                        $ezzyLeaderId = User::where('id', $pendingEzzyLeader->user_id)->first();
                        if ($ezzyLeaderId) {
                            //== $masterEzzyLeader = User::where('username', $ezzyLeaderId->sponsor)->first();
                            // if (!$masterEzzyLeader) {==

                            $sponsorStepThree = InitialStepForEzzyManger::where('user_id', $ezzyLeaderId->id)->first();
                            if (!$sponsorStepThree) {
                                $sponsorStepThree = new InitialStepForEzzyManger();
                                $sponsorStepThree->user_id = $ezzyLeaderId->id;
                                $sponsorStepThree->status = $sponsorStepThree->status + 1;
                                $sponsorStepThree->save();
                            } else {
                                // dd(2);
                                $sponsorStepThree->user_id = $ezzyLeaderId->id;
                                $sponsorStepThree->status = 1 + $sponsorStepThree->status;
                                $sponsorStepThree->save();
                            }
                            // dd(3);
                            $pendingEzzyManger = InitialStepForEzzyManger::where('user_id', $sponsorStepThree->user_id)->first();
                            //dd($pendingEzzyManger);
                            // foreach ($pendingEzzyManger as $item) {
                            if ($pendingEzzyManger->status >= 7) {
                                $ezzyManger = new EzzyManager();
                                $ezzyManger->user_id = $pendingEzzyManger->user_id;
                                $ezzyManger->save();

                                $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                                $ezzyReward->user_id = $ezzyMember->user_id;
                                $ezzyReward->ezzyManger = $settings->manager + $ezzyReward->ezzyManger;

                                $userrank= User::where('id',$ezzyManger->user_id)->first();
                                $userrank->rank= "MFS Manager";
                                $userrank->save();
                               
                                $ezzyReward->save();

                                if ($ezzyReward) {
                                    $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                    $wallet->ezzy_reward = $settings->manager + $wallet->ezzy_reward;
                                    $wallet->group_bonus = 9+ $wallet->group_bonus;
                                    $wallet->save();
                                }
                            }
                            // else {
                            //     return redirect()->route('users.dashboard');
                            // }

                            $ezzyExc = User::where('id', $pendingEzzyManger->user_id)->first();
                            // dd($ezzyExc);
                            if ($ezzyExc) {
                                $sponsorStepFour = InitailStepForEzzyExecutive::where('user_id', $ezzyExc->id)->first();
                                // dd($sponsorStepFour);
                                if (!$sponsorStepFour) {
                                    //dd(1);
                                    $sponsorStepFour = new InitailStepForEzzyExecutive();
                                    $sponsorStepFour->user_id = $ezzyExc->id;
                                    $sponsorStepFour->status = $sponsorStepFour->status + 1;
                                    $sponsorStepFour->save();
                                } else {
                                    // dd(2);
                                    $sponsorStepFour->user_id = $ezzyExc->id;
                                    $sponsorStepFour->status = 1 + $sponsorStepThree->status;
                                    $sponsorStepFour->save();
                                }
                                //dd(3);
                                $pendingEzzyManger = InitailStepForEzzyExecutive::where('user_id', $sponsorStepFour->user_id)->first();
                                //dd($pendingEzzyManger);
                                // foreach ($pendingEzzyManger as $item) {
                                if ($pendingEzzyManger->status >= 5) {
                                    $ezzyManger = new EzzyExecutive();
                                    $ezzyManger->user_id = $pendingEzzyManger->user_id;
                                    $ezzyManger->save();

                                    $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                                    $ezzyReward->user_id = $ezzyMember->user_id;
                                    $ezzyReward->ezzyexc = $settings->executive + $ezzyReward->ezzyexc;
                                  
                                    $ezzyReward->save();

                                    $userrank= User::where('id',$ezzyManger->user_id)->first();
                                    $userrank->rank= "MFS Executive";
                                    $userrank->save();

                                    if ($ezzyReward) {
                                        $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                        $wallet->ezzy_reward = $settings->executive + $wallet->ezzy_reward;
                                        $wallet->group_bonus = 8 + $wallet->group_bonus;
                                        $wallet->save();
                                    }
                                }
                            }

                            $ezzyDrec = User::where('id', $pendingEzzyManger->user_id)->first();
                            // dd($ezzyExc);
                            if ($ezzyDrec) {
                                $sponsorStepFive = IntialEzzyDirectory::where('user_id', $ezzyDrec->id)->first();
                                // dd($sponsorStepFour);
                                if (!$sponsorStepFive) {
                                    //dd(1);
                                    $sponsorStepFive = new IntialEzzyDirectory();
                                    $sponsorStepFive->user_id = $ezzyDrec->id;
                                    $sponsorStepFive->status = $sponsorStepFive->status + 1;
                                    $sponsorStepFive->save();
                                } else {
                                    // dd(2);
                                    $sponsorStepFive->user_id = $ezzyDrec->id;
                                    $sponsorStepFive->status = 1 + $sponsorStepFive->status;
                                    $sponsorStepFive->save();
                                }
                                //dd(3);
                                $pendingEzzyDrec = InitailStepForEzzyExecutive::where('user_id', $sponsorStepFive->user_id)->first();
                                //dd($pendingEzzyManger);
                                // foreach ($pendingEzzyManger as $item) {
                                if ($pendingEzzyDrec->status >= 3) {
                                    $ezzyDrec = new EzzyDirectory();
                                    $ezzyDrec->user_id = $pendingEzzyDrec->user_id;
                                    $ezzyDrec->save();

                                    $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                                    $ezzyReward->user_id = $ezzyMember->user_id;
                                    $ezzyReward->ezzyDrec =  $settings->director + $ezzyReward->ezzyDrec;

                                    $userrank= User::where('id',$ezzyDrec->user_id)->first();
                                    $userrank->rank= "MFS Director";
                                    $userrank->save();
                                   
                                    $ezzyReward->save();

                                    if ($ezzyReward) {
                                        $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                        $wallet->ezzy_reward =  $settings->director + $wallet->ezzy_reward;
                                        $wallet->group_bonus = 7 + $wallet->group_bonus;
                                        $wallet->save();
                                    }
                                }
                            }

                            $ezzyCoe = User::where('id', $ezzyDrec->user_id)->first();
                            // dd($ezzyExc);
                            if (isset($ezzyCoe)) {
                                $sponsorStepSix = IntialCOE::where('user_id', $ezzyCoe->id)->first();
                                // dd($sponsorStepFour);
                                if (!$sponsorStepSix) {
                                    //dd(1);
                                    $sponsorStepSix = new IntialCOE();
                                    $sponsorStepSix->user_id = $ezzyCoe->id;
                                    $sponsorStepSix->status = $sponsorStepSix->status + 1;
                                    $sponsorStepSix->save();
                                } else {
                                    // dd(2);
                                    $sponsorStepSix->user_id = $ezzyCoe->id;
                                    $sponsorStepSix->status = 1 + $sponsorStepSix->status;
                                    $sponsorStepSix->save();
                                }
                                //dd(3);
                                $pendingEzzyCoe = IntialCOE::where('user_id', $sponsorStepSix->user_id)->first();
                                //dd($pendingEzzyManger);
                                // foreach ($pendingEzzyManger as $item) {
                                if ($pendingEzzyCoe->status >= 3) {
                                    $ezzyCoe = new COE();
                                    $ezzyCoe->user_id = $pendingEzzyCoe->user_id;
                                    $ezzyCoe->save();

                                    $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                                    $ezzyReward->user_id = $ezzyMember->user_id;
                                    $ezzyReward->coe = $settings->COE + $ezzyReward->coe;
                                    $ezzyReward->save();

                                    $userrank= User::where('id',$ezzyCoe->user_id)->first();
                                    $userrank->rank= "MFS COE";
                                    $userrank->save();

                                    if ($ezzyReward) {
                                        $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                        $wallet->ezzy_reward = $settings->COE + $wallet->ezzy_reward;
                                        $wallet->group_bonus = 6+ $wallet->group_bonus;
                                        $wallet->save();
                                    }
                                }
                            }

                            $ezzyCeo = User::where('id', $ezzyCoe->user_id)->first();
                            // dd($ezzyExc);
                            if (isset($ezzyCeo)) {
                                $sponsorStepSeven = IntialCEO::where('user_id', $ezzyCeo->id)->first();
                                // dd($sponsorStepFour);
                                if (!$sponsorStepSeven) {
                                    //dd(1);
                                    $sponsorStepSeven = new IntialCEO();
                                    $sponsorStepSeven->user_id = $ezzyCeo->id;
                                    $sponsorStepSeven->status = $sponsorStepSeven->status + 1;
                                    $sponsorStepSeven->save();
                                } else {
                                    // dd(2);
                                    $sponsorStepSeven->user_id = $ezzyCeo->id;
                                    $sponsorStepSeven->status = 1 + $sponsorStepSeven->status;
                                    $sponsorStepSeven->save();
                                }
                                //dd(3);
                                $pendingEzzyCoe = IntialCEO::where('user_id', $sponsorStepSeven->user_id)->first();
                                //dd($pendingEzzyManger);
                                // foreach ($pendingEzzyManger as $item) {
                                if ( $pendingEzzyCoe !== null && $pendingEzzyCoe->status >= 3) {
                                    $ezzyCeo = new CEO();
                                    $ezzyCeo->user_id = $pendingEzzyCoe->user_id;
                                    $ezzyCeo->save();

                                    $ezzyReward = EzzyReward::where('user_id', $ezzyMember->user_id)->first();
                                    $ezzyReward->user_id = $ezzyMember->user_id;
                                    $ezzyReward->ceo =$settings->CEO + $ezzyReward->ceo;
                                  
                                    $ezzyReward->save();

                                    $userrank= User::where('id',$ezzyCeo->user_id)->first();
                                    $userrank->rank= "MFS CEO";
                                    $userrank->save();

                                    if ($ezzyReward) {
                                        $wallet = Wallet::where('user_id', $ezzyMember->user_id)->first();
                                        $wallet->ezzy_reward = $settings->CEO + $wallet->ezzy_reward;
                                        $wallet->group_bonus = 5+ $wallet->group_bonus;
                                        $wallet->save();
                                    }
                                }
                            }

                        }
                    }
                    
                }
            }
        } else {
            return redirect()->route('users.dashboard');
        }
        return redirect()->route('users.dashboard');
    }
}
